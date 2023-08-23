<?php



// $servername = "localhost";
// $username = "username";
// $password = "password";


/*

INSERT INTO user_registration(username,password,email,cell,address,birthdate)
VALUES ("test","tsta","asdf","adsfa","dhaka","1990-01-04")
*/
$username = $_POST['username'];
$password = $_POST['password'];

$email = $_POST['email'];
$cell = $_POST['cell'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];






$link = mysqli_connect("localhost","root","","codemanbd");

if($link==true){   

    $query ="INSERT INTO user_registration(username,password,email,cell,address,birthdate) 
    VALUES ('$username','$password','$email','$cell','$address','$birthdate')";

    
$sql = mysqli_query($link,$query);

        if($sql==true){
            echo "Data Save Done";
        }
        else{
            echo "Sorry gure ai";
        }

}
else{
   
}



?>