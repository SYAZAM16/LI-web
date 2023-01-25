<?php 

session_start(); 

include "./config/dbconnect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM USERS WHERE USER_NAME='$uname' AND PASSWORD='$pass'";

        $st=oci_parse($conn,$sql);
      oci_execute($st);
echo $sql;
$r2 = oci_fetch_assoc($st);
var_dump($r2);


        if (oci_num_rows($st))  {

           



            if (($r2['USER_NAME'] === $uname) && ($r2['PASSWORD'] === $pass)) { 
           /* if ( "test" === $uname && "1234" === $pass) {*/
                echo "Logged in!";

                $_SESSION['USER_NAME'] = $r2['USER_NAME'];

                $_SESSION['NAME'] = $r2['NAME'];

                $_SESSION['ID'] = $r2['ID'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or passwordmmmmm");

                exit();

            }

         } else{

            header("Location: index.php?error=Incorect User name or password $uname $pass")  ;

            exit();

        } 

     } 

} else{

    header("Location: index.php");

    exit();

}