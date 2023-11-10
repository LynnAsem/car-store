<?php
$server ="localhost";
$username ="root";
$password="";
$dbname="mercedes";

$conn =mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['phone'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $phone = $_POST['phone'];

      $query = "insert into orders(firstname,lastname,email,city,country,phonenumber) values('$firstname','$lastname','$email','$city','$country','$phone')";
      $run =mysqli_query($conn,$query) or die(mysqli_connect_error());
      if($run){
        echo "Form submitted successfully";
      }
      else{
        echo "form not submitted";
      }
    
    }
    else{
        echo "all fields required";
    }
    
}
?>