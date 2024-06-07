<?php
include_once 'config/config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_REQUEST['register']) && $_REQUEST['register'] == true)
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
        $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
        $mobno=mysqli_real_escape_string($conn,$_POST['phone']);
        $occupation=mysqli_real_escape_string($conn,$_POST['occupation']);
        $tnc=mysqli_real_escape_string($conn,$_POST['tnc']);
        
        //Profile pic collection
        // $filename=$_FILES['profilePic']['name'];
        // $filetemp=$_FILES['profilePic']['tmp_name'];
        // $filetype=$_FILES['profilePic']['type'];
        // $fileerr=$_FILES['profilePic']['error'];
        // $filesize=$_FILES['profilePic']['size'];
        // $fileext=explode('.',$filename);
        // $ext=strtolower(end($fileext));
        // $allowed_exts=array('jpg','jpeg','png');
        if(empty($name))
        {
            response(200,0,"Name is required",null);
        }
        else if(empty($email))
        {
            response(200,0,"Email is required",null);
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL))
        {
            response(200,0,"Invalid Email Id",null);
        }
        else if(empty($password))
        {
            response(200,0,"Password is required",null);
        }
        else if(empty($cpassword))
        {
            response(200,0,"Confirm Password is required",null);
        }
        else if(empty($occupation))
        {
            response(200,0,"Occupation is required",null);
        }
        else if($tnc !== 'checked')
        {
            response(200,0,"Terms & Conditions should be accepted.",null);
        }
        else if(strcmp($password,$cpassword) !== 0)
        {
            response(200,0,"Password and confirm password must match",null);
        }
        else
        {
            $getemail="select * from generals where email='".$email."';";
            $emailchkres=mysqli_query($conn,$getemail);
            $cntemailrows=mysqli_num_rows($emailchkres);
            if($cntemailrows < 1)
            {
                if(empty($mobno))
                {
                    response(200,0,"Mobile number is required",null);
                }
                else if(strlen($mobno) < 10 || strlen($mobno) > 10)
                {
                    response(200,0,"Mobile number should contain only 10 digits",null);
                }
                else
                {
                    $getmob="select * from generals where phone='".$mobno."';";
                    $mobchkres=mysqli_query($conn,$getmob);
                    $cntmobrows=mysqli_num_rows($mobchkres);
                    if($cntmobrows < 1)
                    {
                        // else if($filename === '')
                        // {
                        //     response(200,0,"rofile pic is required",null);
                        // }
                            // if(in_array($ext,$allowed_exts) === true)
                            // {
                            //     if($fileerr === 0)
                            //     {
                            //         if($filesize < 1048576)
                            //         {
                            //             $newdestination='emp-pics/'.md5(uniqid(time(),true)).'.'.$ext;
                            //             if(move_uploaded_file($filetemp,$newdestination))
                            //             {
                            //                 $emp_id='E'.time();
                            //                 $createdOn=date("Y-m-d h:i:s");
                            //                 $insert="insert into employees(empId,empName,empEmail,Password,empMobNo,deptId,empState,empCity,empAddr,picPath,createdOn)values(?,?,?,?,?,?,?,?,?,?,?);";
                            //                 $stmt=mysqli_stmt_init($conn);
                            //                 mysqli_stmt_prepare($stmt,$insert);
                            //                 mysqli_stmt_bind_param($stmt,"sssssssssss",$emp_id,$empname,$empemail,$password,$empmobno,$deptid,$empstate,$empcity,$empaddr,$newdestination,$createdOn);
                            //                 if(mysqli_stmt_execute($stmt))
                            //                 {
                            //                     // $from="ems@feedorg.com";
                            //                     // $to=$empemail;
                            //                     // $subject="FEED - EMS";
                            //                     // $message="You have successfully registered as employee.\nYour ID:".$emp_id;
                            //                     // $headers="From:".$from."\r\n";
                            //                     // $headers.="Reply-To: feedorg59@gmail.com";
                            //                     // if(mail($to,$subject,$message,$headers))
                            //                     // {
                            //                         response(200,1,"Employee has been registered successfully",$emp_id);
                            //                     // }
                            //                     // else
                            //                     // {
                            //                     //     response(200,1,"Employee has been registered successfully, but failed to send mail",$emp_id);
                            //                     // }
                            //                 }
                            //                 else
                            //                 {
                            //                     unlink($newdestination);
                            //                     response(200,0,"Failed to register employee",null);
                            //                 }
                            //             }
                            //         }
                            //         else
                            //         {
                            //             response(200,0,"Only files which are less tha 1 MB size are allowed to upload",null);
                            //         }
                            //     }
                            //     else
                            //     {
                            //         response(200,0,"Some error occurred while uploading. Try again.",null);
                            //     }
                            // }
                            // else
                            // {
                            //     response(200,0,"Only PNG, JPEG or JPG images are allowed to upload",null);
                            // }
                            $id='G'.time();
                            $createdOn=date("Y-m-d h:i:s");
                            $insert="insert into generals(Id,name,email,phone,password,occupation,createdOn)values(?,?,?,?,?,?,?);";
                            $stmt=mysqli_stmt_init($conn);
                            mysqli_stmt_prepare($stmt,$insert);
                            mysqli_stmt_bind_param($stmt,"sssssss",$id,$name,$email,$mobno,$hashedpassword,$occupation,$createdOn);
                            if(mysqli_stmt_execute($stmt))
                            {
                                $from="info@feedorg.com";
                                $to=$email;
                                $subject="FEED";
                                $message="You have successfully registered as FEED member.\nYour ID:".$id;
                                $headers="From:".$from."\r\n";
                                $headers.="Reply-To: feedorg59@gmail.com";
                                if(mail($to,$subject,$message,$headers))
                                {
                                    response(200,1,"Registered successfully",$id);
                                }
                                else
                                {
                                    response(200,1,"Registered successfully, but failed to send mail",$id);
                                }
                            }
                            else
                            {
                                //unlink($newdestination);
                                response(200,0,"Failed to register",null);
                            }
                    }
                    else
                    {
                        response(200,0,"Mobile No. is already exists",null);
                    }
                }
            }
            else
            {
                response(200,0,"Email Id is already exists",null);
            }
        } 
    }
    else if(isset($_REQUEST['update']) && $_REQUEST['update'] == true && isset($_REQUEST['gid']) && !empty($_REQUEST['gid']))
    {
        $gid=$_REQUEST['gid'];
        $errors=array();
        $path=array();
        $stmt=mysqli_stmt_init($conn);
        $sql="select * from generals where Id=?;";
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$gid);
        if(mysqli_stmt_execute($stmt))
        {
            $gidres=mysqli_stmt_get_result($stmt);
            $gidrow=mysqli_fetch_assoc($gidres);
            // $oldpath=$gidrow['picPath'];
            foreach($_POST as $key => $val)
            {
                if(!empty($val))
                {
                    $update="update employees set ".$key."=? where empId=?;";
                    mysqli_stmt_prepare($stmt,$update);
                    mysqli_stmt_bind_param($stmt,"ss",$val,$gid);
                    if(!mysqli_stmt_execute($stmt))
                    {
                        array_push($errors,1);
                        break;
                    }
                }
            }
            // if(count($_FILES) > 0 && $_FILES['profilePic']['name'] !== '')
            // {
            //     $filetemp=$_FILES['profilePic']['tmp_name'];
            //     $filetype=$_FILES['profilePic']['type'];
            //     $fileerr=$_FILES['profilePic']['error'];
            //     $filesize=$_FILES['profilePic']['size'];
            //     $fileext=explode('.',$_FILES['profilePic']['name']);
            //     $ext=strtolower(end($fileext));
            //     $allowed_exts=array('jpg','jpeg','png');
            //     if(in_array($ext,$allowed_exts) === true)
            //     {
            //         if($fileerr === 0)
            //         {
            //             if($filesize < 1048576)
            //             {
            //                 $newdestination='emp-pics/'.md5(uniqid(time(),true)).'.'.$ext;
            //                 if(!move_uploaded_file($filetemp,$newdestination))
            //                 {
            //                     array_push($path,$newdestination);
            //                     array_push($errors,1); 
            //                 }
            //                 else
            //                 {
            //                     unlink($oldpath);
            //                     array_push($path,$newdestination);
            //                     $updtpath="update employees set picPath='".$newdestination."' where empId='".$empid."';";
            //                     if(!mysqli_query($conn,$updtpath))
            //                     {
            //                         array_push($errors,1);
            //                     }
            //                 }
            //             }
            //         }
            //     }
            //     else
            //     {
            //         response(200,0,"Failed to update data",null);
            //     }
            // }
            if(in_array(1,$errors))
            {
                // if($_FILES['profilePic']['name'] !== '')
                // {
                //     unlink($path[0]);
                // }
                response(200,0,"Failed to update data",null);
            }
            else
            {
                // if(count($path) < 1)
                // {
                //     response(200,1,"Data Updated successfully",null);
                // }
                // else
                // {
                    response(200,1,"Data Updated successfully",$path[0]);
                //}
            }
        }
        else
        {
            response(200,0,"Failed to fetch member's data",null);
        }
    }
    else if(isset($_REQUEST['login']) && $_REQUEST['login'] == true)
    {
        $loginKey=mysqli_real_escape_string($conn,$_POST['loginKey']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $stmt=mysqli_stmt_init($conn);
        if(empty($loginKey))
        {
            response(200,0,"Email ID or Mobile No. is required",null);
        }
        else if(empty($password))
        {
            response(200,0,"Password is required",null);
        }
        else
        {
            $chkemail="select * from generals where email=?;";
            mysqli_stmt_prepare($stmt,$chkemail);
            mysqli_stmt_bind_param($stmt,"s",$loginKey);
            if(mysqli_stmt_execute($stmt))
            {
                $emailresult=mysqli_stmt_get_result($stmt);
                $emailrow=mysqli_fetch_assoc($emailresult);
                $emailcount=mysqli_num_rows($emailresult);
                if($emailcount < 1)
                {
                    $chkphone="select * from generals where phone=?;";
                    mysqli_stmt_prepare($stmt,$chkphone);
                    mysqli_stmt_bind_param($stmt,"s",$loginKey);
                    if(mysqli_stmt_execute($stmt))
                    {
                        $phoneresult=mysqli_stmt_get_result($stmt);
                        $phonerow=mysqli_fetch_assoc($phoneresult);
                        $phonecount=mysqli_num_rows($phoneresult);
                        if($phonecount < 1)
                        {
                            response(200,0,"Invalid Email or Mobile No.",null);
                        }
                        else if(!password_verify($password,$phonerow['password']))
                        {
                            response(200,0,"Invalid Password",null);
                        }
                        else
                        {
                            login($phonerow['Id'],$loginKey);
                        }
                        
                    }
                    else
                    {
                        response(200,0,"Failed to login",null);
                    }
                }
                else if(!password_verify($password,$emailrow['password']))
                {
                    response(200,0,"Invalid Password",null);
                }
                else
                {
                    login($emailrow['Id'],$loginKey);
                }
            }
            else
            {
                response(200,0,"Failed to login",null);
            }
        }
    }
    else if(isset($_REQUEST['verifyToken']) && $_REQUEST['verifyToken'] == true)
    {
        //print_r(getallheaders());
        $type=gettype(verifyToken());
        if($type == 'array')
        {
            $dataArr=verifyToken();
            response(200,1,"Token is valid",$dataArr);
        }
        else if($type == 'string')
        {
            $msg=verifyToken();
            response(200,0,"$msg",null);
        }
        else
        {
            response(200,0,"Token is Invalid",null);
        }
    }
    else if(isset($_REQUEST['logout']) && $_REQUEST['logout'] == true)
    {
        $loginId=mysqli_real_escape_string($conn,$_POST['loginId']);
        $getLoggedInMember="select * from logs where uniqLoginId=?;";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$getLoggedInMember);
        mysqli_stmt_bind_param($stmt,"s",$loginId);
        if(mysqli_stmt_execute($stmt))
        {
            $dt=date('Y-m-d h:i:s');
            $update="update logs set loggedOutDateTime=? where uniqLoginId=?;";
            mysqli_stmt_prepare($stmt,$update);
            mysqli_stmt_bind_param($stmt,"ss",$dt,$loginId);
            if(mysqli_stmt_execute($stmt))
            {
                response(200,1,"Logged Out Successfully!",null);
            }
            else
            {
                response(200,0,"Failed to logout the session.$update",null);
            }
        }
        else
        {
            response(200,0,"Invalid session",null);
        }
    }
    else if(isset($_REQUEST['forgotPassword']) && $_REQUEST['forgotPassword'] == true)
    {
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        if(empty($email))
        {
            response(200,0,"Email is required",null);
        }
        else
        {
            $query="select * from generals where email=?";
            $stmt=mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,$query);
            mysqli_stmt_bind_param($stmt,'s',$email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $chkemail=mysqli_num_rows($result);
            if($chkemail < 1)
            {
                response(200,0,"Invalid Email Address",null);
            }
            else
            {
                $row=mysqli_fetch_assoc($result);
                $hostname=$_SERVER['HTTP_HOST'];
                $id=$row['Id'];
                $exptimestamp=strtotime("+15 minutes");
                $str=$id.'|'.$exptimestamp;
                $hash=bin2hex($str);
                $resetPswdLink="https://$hostname/reset-password.php?enc=$hash";
                $to=$row['email'];
                $subject="Reset Password Link";
                $message="Dear Customer,\nWe got a online reset password request from your account. If you haven't made this request, contact FEED support.\nReset Password Link: $resetPswdLink\nThis link is valid for 15 minutes only.";
                // $message="Test mail";
                $headers="From:info@feedorg.com";
                if(mail($to,$subject,$message,$headers))
                {
                    response(200,1,"Reset password link has been successfully sent to your mail.",$resetPswdLink);
                }
                else
                {
                    response(200,0,"Failed to send reset password link to your mail. Try again.",$resetPswdLink);
                }
            }
        }
    }
    else if(isset($_REQUEST['resetPassword']) && $_REQUEST['resetPassword'] == true)
    {
        $dataHash=mysqli_real_escape_string($conn,$_POST['dataHash']);
        $newPassword=mysqli_real_escape_string($conn,$_POST['newPassword']);
        if(empty($dataHash))
        {
            response(200,0,"Hashed data is required",null);
        }
        else
        {
            $deHashedStr=hex2bin($dataHash);
            $dataArr=explode('|',$deHashedStr);
            $id=$dataArr[0];
            $exp=$dataArr[1];
            $now=strtotime("now");
            
            if($now > $exp)
            {
                response(200,0,"Reset password link has been expired.",null);
            }
            else
            {
                $hashednewpassword=password_hash($newPassword,PASSWORD_DEFAULT);
                $updtpswd="update generals set password=?,resetPasswordLink=NULL where Id=?;";
                $stmt=mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$updtpswd);
                mysqli_stmt_bind_param($stmt,"ss",$hashednewpassword,$id);
                if(mysqli_stmt_execute($stmt))
                {
                    response(200,1,"Your password has been successfully reset",null);
                }
                else
                {
                    response(200,0,"Failed to reset your password. Try again.",null);
                }
            }
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
function login($id,$loginKey){
    global $conn;
    $dt=date('Y-m-d h:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];
    $uniqLoginId=strtotime("now").uniqid($ip,true);
    $insert_logs="insert into logs(Id,loginKey,uniqLoginId,loggedInDateTime,IP)values('$id','$loginKey','$uniqLoginId','$dt','$ip');";
    if(mysqli_query($conn,$insert_logs))
    {
        $token_exp=strtotime("+1 hour");
        $jwtToken=createJWTToken($id,$token_exp);
        $jwtToken['loginId']=$uniqLoginId;
        response(200,1,"Logged In Successfully",$jwtToken);
    }
    else
    {
        response(200,0,"Unable to login due to failure of log tracking",null);
    }
}
?>