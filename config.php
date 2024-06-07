<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST,GET");
$servername="localhost";
$username="crazesin_feed";
$password="Feed@5959";
$dbname="crazesin_feed";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo 'Failed to connect database '.mysqli_connect_error($conn);
}
// else
// {
//     echo 'Success';
// }
date_default_timezone_set('Asia/Kolkata');
//JWT Token function
function createJWTToken($token_data,$exp)
{
    //Header
    $headerdata=["typ"=>"JWT","alg"=>"HS256"];
    $header_json=json_encode($headerdata);
    $header_encoded=str_replace(['+','/','='],['-','_',''],base64_encode($header_json));
    //Payload
    $payload=["data"=>$token_data,"exp"=>$exp];
    $info_json=json_encode($payload);
    $payload_encoded=str_replace(['+','/','='],['-','_',''],base64_encode($info_json));
    //Signature
    $partial_jwt=$header_encoded.$payload_encoded;
    $signature=hash_hmac('SHA256',$partial_jwt,bin2hex($payload['data']));
    $signature_encoded=str_replace(['+','/','='],['-','_',''],base64_encode($signature));
    //Token
    $token=$header_encoded.'.'.$payload_encoded.'.'.$signature_encoded;
    $expiry_datetime=date('Y-m-d h:i:s',$exp);
    $authTokenArr=["token"=>$token,"exp"=>$expiry_datetime];
    $authToken=$authTokenArr;
    return $authToken;
}
//Verify Token
function verifyToken()
{
    $headers=getallheaders();
    //return $headers;
    if(isset($headers['Authorization']))
    {
        $gettoken=explode(' ',$headers['Authorization']);
        $token=end($gettoken);

        $token_parts=explode('.',$token);

        header('Content-Type:application/json');
        $data=base64_decode(strtr($token_parts[1],'-_','+/'));
        $info=json_decode($data);
        $payload=$info->data;
        $partial=$token_parts[0].$token_parts[1];
        $signature=hash_hmac('SHA256',$partial,bin2hex($payload));

        $received_sign=base64_decode(strtr($token_parts[2],'-_','+/'));

        if(hash_equals($received_sign,$signature) == 1)
        {
            $expiry=$info->exp;
            $now=strtotime("now");
            
            if($now > $expiry)
            {
                return false;
            }
            else
            {
                $token_data=array(
                    "ID"=>$info->data,
                    "exp"=>date('Y-m-d h:i:s',$expiry)
                );
                return $token_data;
            }
        }
        else
        {
            return false;
        }
    }
    else
    {
        return 'Authorization header is required';
    }
}
//Response function
function response($statusCode,$status,$message,$data){
    $response=array(
        "status"=>$status,
        "message"=>$message,
        "data"=>$data
    );
    http_response_code($statusCode);
    header('Content-Type:application/json');
    echo json_encode($response,JSON_NUMERIC_CHECK,JSON_UNESCAPED_SLASHES);
}
?>