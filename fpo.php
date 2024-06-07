<?php
include_once 'config/config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_REQUEST['fporegister']) && $_REQUEST['fporegister'] == true)
    {
        $id=mysqli_real_escape_string($conn,$_POST['ID']);
        $fpoid=mysqli_real_escape_string($conn,$_POST['FPOID']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $hashpassword=password_hash($password,PASSWORD_DEFAULT);
        $personname=mysqli_real_escape_string($conn,$_POST['personName']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $contactno=mysqli_real_escape_string($conn,$_POST['contactNo']);
        $state=mysqli_real_escape_string($conn,$_POST['State']);
        $district=mysqli_real_escape_string($conn,$_POST['District']);
        $address=mysqli_real_escape_string($conn,$_POST['Address']);
        $totalland=mysqli_real_escape_string($conn,$_POST['totalLand']);
        $promotingagency=mysqli_real_escape_string($conn,$_POST['promotingAgency']);
        $yearOfTurnover=mysqli_real_escape_string($conn,$_POST['yearOfTurnover']);
        $scheme=mysqli_real_escape_string($conn,$_POST['Scheme']);
        $regno=mysqli_real_escape_string($conn,$_POST['regNo']);
        $nooffarmers=mysqli_real_escape_string($conn,$_POST['noOfFarmers']);
        $sharecapitalmobilised=mysqli_real_escape_string($conn,$_POST['shareCapitalMobilised']);
        $bactivities=mysqli_real_escape_string($conn,$_POST['businessActivities']);
        $totalturnover=mysqli_real_escape_string($conn,$_POST['totalTurnover']);
        $rabi=mysqli_real_escape_string($conn,$_POST['rabiCrops']);
        $kharif=mysqli_real_escape_string($conn,$_POST['kharifCrops']);
        $zaid=mysqli_real_escape_string($conn,$_POST['zaidCrops']);
        $registeredOn=date('Y-m-d h:i:s');

        if(empty($fpoid))
        {
            response(200,0,"FPO's ID is required",null);
        }
        else if(empty($personname))
        {
            response(200,0,"Contact person's name is required",null);
        }
        else if(empty($email))
        {
            response(200,0,"Email is required",null);
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL))
        {
            response(200,0,"Enter a valid Email Id",null);
        }
        else if(empty($contactno))
        {
            response(200,0,"Contact no. is required",null);
        }
        else if(strlen($contactno) < 10 || strlen($contactno) > 10)
        {
            response(200,0,"Contact No. must contain only 10 digits",null);
        }
        else if(empty($state))
        {
            response(200,0,"State is required",null);
        }
        else if(empty($district))
        {
            response(200,0,"District name is required",null);
        }
        else if(empty($address))
        {
            response(200,0,"Address is required",null);
        }
        else if(empty($totalland))
        {
            response(200,0,"Total land in hectares is required",null);
        }
        else if(empty($promotingagency))
        {
            response(200,0,"Promoting agency is required",null);
        }
        else if(empty($yearOfTurnover))
        {
            response(200,0,"Year of turn over is required",null);
        }
        else if(empty($scheme))
        {
            response(200,0,"Scheme is required",null);
        }
        else if(empty($regno))
        {
            response(200,0,"Registration no. is required",null);
        }
        else if(empty($nooffarmers))
        {
            response(200,0,"No. of farmers are required",null);
        }
        else if(empty($sharecapitalmobilised))
        {
            response(200,0,"Share capital mobilised is required",null);
        }
        else if(empty($bactivities))
        {
            response(200,0,"Business activities are required",null);
        }
        else if(empty($totalturnover))
        {
            response(200,0,"Total turn over is required",null);
        }
        else
        {
            $insert="insert into fpomembers(ID,FPOID,State,personName,email,password,totalLand,promotingAgency,yearOfTurnover,Scheme,Address,District,contactNo,regNo,noOfFarmers,shareCapitalMobilised,businessActivities,totalTurnover,rabiCrops,kharifCrops,zaidCrops,registeredOn)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,$insert);
            mysqli_stmt_bind_param($stmt,"ssssssisssssssidsdsdsss",$id,$fpoid,$state,$personname,$email,$hashpassword,$totalland,$promotingagency,$yearOfTurnover,$scheme,$address,$district,$contactno,$regno,$nooffarmers,$sharecapitalmobilised,$bactivities,$totalturnover,$rabi,$kharif,$zaid,$registeredOn);
            if(mysqli_stmt_execute($stmt))
            {
                response(200,1,"Successfully registered as FPO",null);
            }
            else
            {
                response(200,0,"Failed to register as FPO",null);
            }
        } 
    }
    else if(isset($_REQUEST['sendotp']) && $_REQUEST['sendotp'] == true)
    {
        $mobile_number=mysqli_real_escape_string($conn,$_POST['mobile_number']);
        //API KEY
        $apiKey = urlencode('fBMtPu57BBw-ePfLpxItwrYoFypbGLzmLbIOze6RVP');
        // Message details
        $numbers = array($mobile_number);
        $sender = urlencode('TXTLCL');

        $otp=mt_rand(1111,9999);
        $sendMsg=$otp.' is the OTP to verify your mobile number';
        $message = rawurlencode($sendMsg);
        
        $receipient = implode(',', $numbers);
        
        // Prepare data for POST request
        $data = array("apikey" => $apiKey, "numbers" => $receipient, "sender" => $sender, "message" => $message);
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        if($response->status === "success")
        {
          $chkmobno="select * from otps where mobileNo='".$mobile_number."';";
          $res=mysqli_query($conn,$chkmobno);
          $row=mysqli_fetch_assoc($res);
          $count=mysqli_num_rows($res);
          if($count < 1)
          {
            $stmt=mysqli_stm_init($conn);
            $insert="insert into otps(mobileNo,OTP)values(?,?);";
            mysqli_stmt_prepare($conn,$insert);
            mysqli_stmt_bind_param($stmt,"ss",$mobile_number,$otp);
            if(mysqli_stmt_execute($stmt))
            {
                response(200,1,"OTP sent successfully",null);
            }
            else
            {
                response(200,0,"OTP sent successfully, but failed to insert OTP into database",null);
            }
          }
          else if($count > 0)
          {
            if($row['status'] == 0)
            {
                $updtotp="update otps set otp='".$otp."' where mobileNo='".$mobile_number."';";
                if(mysqli_query($conn,$updtotp))
                {
                    response(200,1,"OTP sent successfully",null);
                }
                else
                {
                    response(200,0,"OTP sent successfully, but failed to insert OTP into database",null);
                }
            }
            else if($row['status'] == 1)
            {
                response(200,1,"OTP sent successfully",null);
            }
          }
        }
        else if($response->status === "failure")
        {
            $errmsg=$response->errors[0]->message;
            response(200,0,$errmsg,null);
        }
    }
    else if(isset($_REQUEST['verifyotp']) && $_REQUEST['verifyotp'] == true)
    {
        $otp=mysqli_real_escape_string($conn,$_POST['otp']);
        $mobile_number=mysqli_real_escape_string($conn,$_POST['mobile_number']);

        $getSentOtp="select * from otps where mobileNo=? and status=0;";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$getSentOtp);
        mysqli_stmt_bind_param($stmt,"s",$mobile_number);
        if(mysqli_stmt_execute($stmt))
        {
            $result=mysqli_stmt_get_result($stmt);
            $count=mysqli_num_rows($result);
            if($count < 1)
            {
                response(200,0,"Unable to find mobile number",null);
            }
            else if($count > 0)
            {
                $row=mysqli_fetch_assoc($result);
                if(strcompare($row['otp'],$otp) === 0)
                {
                    $updateStatus="update otps set status=1 where mobileNo='".$mobile_number."';";
                    if(mysqli_query($updateStatus))
                    {
                        response(200,1,"Mobile number verified successfully",null);
                    }
                    else
                    {
                        response(200,0,"Failed to verify mobile number. Try again.",null);
                    }
                }
                else
                {
                    response(200,0,"Invalid OTP.",null);
                }
            }
        }
        else
        {
            response(200,0,"Unable to fetch mobile number",null);
        }  
    }
    else
    {
        response(200,0,"Valid parameters are required in endpoint",null);
    }
}
else
{
    response(403,0,"Only POST method is allowed to send data",null);
}
?>