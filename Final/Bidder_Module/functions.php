<?php


function validate_text($data){
    if (!preg_match("/^[a-zA-Z .]*$/",$data)) {
        return  "Only letters and white space allowed";
    }
}


function validate_text_and_numbers($data){
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$data)) {
        return  "Only letters and numbers allowed";
    }
}

function validate_email($data){
  include 'connect.php';
  if (!(filter_var($data, FILTER_VALIDATE_EMAIL))) {
    return "Email is not valid";
 }
 $sql="SELECT * FROM bidder WHERE Bemail='$data' ";
 $result = mysqli_query($conn,$sql);
 if(!$result){
   echo "Could not execute query".mysqli_error();
 }
 if(!(mysqli_num_rows($result)>0)){

 } else{
    return "Already registered";
 }


}

function validate_profile_email($email,$user){
  include 'connect.php';
/*  $initial="SELECT Bemail FROM bidder WHERE bidderID='$user' ";
  if($initial==$email){

  }else
  {
  if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    return "Email is not valid";
 }*/
 $sql="SELECT * FROM bidder WHERE Bemail='$email' ";
 $result =mysqli_query($conn,$sql);
 if(!$result){
   return "Could not execute query".mysqli_error();
 }
  if(!(mysqli_num_rows($result)==1)){
     return "";
 }else{
     return "Already exist";
 }

 }

function validate_contact($data){
  if(!(preg_match('/^\d{10}$/',$data))) // phone number is valid
    {
      return "Phone number is invalid";
    }

}

function update__bidder($u_username,$password2,$email,$contact){
    include 'connect.php';
  $sql="UPDATE bidder set BidderKey='$password2', Bemail='$email', Bcontact='$contact' where BidderId='$u_username'";
  $result= mysqli_query($conn,$sql);
  if(!$result){
    echo mysql_error();
  }
}




function user_login($user,$pass){
    include 'connect.php';
    //$hashed=password_hash($pass,PASSWORD_DEFAULT);
  //  $pass=md5($pass);

      $sql="SELECT * FROM bidder WHERE bidderID='$user' AND bidderKey='$pass' ";


        $block="SELECT Status FROM bidder WHERE bidderID='$user '";
        $result2 = mysqli_query($conn,$block);
        $row2=mysqli_fetch_assoc($result2);
        if ($row2['Status']==0){
            echo "<script type='text/javascript'>

            alert('You are not allow to access The System , Contact the C.P.O');


    </script>";
        }else
            {

            $result = mysqli_query($conn,$sql);
            if(!$result){
                echo "Could not execute query".mysqli_error();
            }


            if(mysqli_num_rows($result)==0){
                return "Invalid Username/Password";
            } else{
                echo "User Logged In";
                session_start();
                $_SESSION['username']=$user;
                $_SESSION['password']=$pass;
                $_SESSION['type']="bidder";
                header("location:Bidder UI/examples/dashboard.php");
            }

        }





}

function register__operator($name,$user,$passwordN,$email,$contact){
    include 'connect.php';
    //$hash=password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO operator (operatorID,operatorKey,Name,Oemail,Ocontact) VALUES ('$user','$passwordN','$name','$email',$contact)";
     mysqli_query($conn,$sql);
  //  header("location:");


}
function register__procurementer($name,$user,$passwordN,$email,$contact){
    include 'connect.php';
    //$hash=password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO pcm (procurementID,procurementKey,Name,Pemail,Pcontact) VALUES ('$user','$passwordN','$name','$email',$contact)";
    mysqli_query($conn,$sql);

}
function register__bidder($name,$user,$passwordN,$userfile,$email,$contact){
    include 'connect.php';
    //$hash=md5($passwordN);

    $sql = "INSERT INTO bidder (BidderID,TdFile,BidderKey,Name,Bemail,Bcontact) VALUES ('$user','$userfile','$passwordN','$name','$email',$contact)";
    $result=mysqli_query($conn,$sql);
    if(!$result){
      echo mysqli_error($conn);
    }else{
      echo "<script type='text/javascript'>
        alert('Thank you for registering');
        </script>";
    }

    header("location:login.php");


}

function register__tec($name,$user,$passwordN,$about,$email,$contact,$spc){
    include 'connect.php';
    //$hash=md5($passwordN);

    $sql = "INSERT INTO `tec` (`TecID`, `TecName`, `TecMail`, `TpNO`, `Spc`, `TecPwd`, `TecAbout`) VALUES ('$user', '$name', '$email', '$contact', '$spc', '$passwordN', '$about')  ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
      echo mysqli_error($conn);
    }else{
        echo "<script type='text/javascript'>
        alert('Thank you for registering');
        </script>";
    }

    header("location:login.php");


}

function register__pc($name,$user,$passwordN,$about,$email,$contact){
    include 'connect.php';
    //$hash=md5($passwordN);

    $sql = "INSERT INTO `pc` (`PcID`, `PcName`, `PcEmail`, `PcContact`, `PcKey`, `PcAbout`) VALUES ('$user', '$name', '$email', '$contact', '$passwordN', '$about') ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
      echo mysqli_error($conn);
    }else{
        echo "<script type='text/javascript'>
        alert('Thank you for registering');
        </script>";
    }
    echo "<script type='text/javascript'>
        alert('Thank you for registering');
        </script>";

    header("location:login.php");


}

function validate_username($user){
    include 'connect.php';
    if (!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
        return  "Only letters and numbers allowed";
    }

    $sql="SELECT * FROM bidder WHERE bidderID='$user' ";



    $result = mysqli_query($conn,$sql);
    if(!$result){
      echo "Could not execute query".mysqli_error();
    }


    if(mysqli_num_rows($result)==1){
        return "username already available";
    } else{

    }
}

  function validate_password($bpass,$user){
    include 'connect.php';

    $sql="SELECT * FROM bidder WHERE bidderID='$user' and bidderKey='$bpass' ";

    $result = mysqli_query($conn,$sql);
    if(!$result){
      return "Could not execute query".mysqli_error();
    }


    if(mysqli_num_rows($result)==1){
        return "";
    } else{
        return "Invalid password";
    }

  }

?>
