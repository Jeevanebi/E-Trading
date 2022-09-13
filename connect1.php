<?php


$conn = mysqli_connect('127.0.0.1','root','');
if(!$conn){  echo 'Not Connected To Server';}
if(!mysqli_select_db($conn,'sih')){ echo 'Database Not Selected';}




if (isset($_POST['submit'])) {
    if (empty($_POST['Username']) || empty($_POST['Password'])) {
    $error = "Username or Password is invalid";
    }
    else{
    // Define $username and $password
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    // mysqli_connect() function opens a new connection to the MySQL server.
    
    // SQL query to fetch information of registerd users and finds user match.
    $query = "SELECT Username, Password from user where Username=$Username AND Password=$Password ";
    // To protect MySQL injection for Security purpose
    $stmt = $conn->prepare($query);
    $stmt->bind_param($Username, $Password);
    $stmt->execute();
    $stmt->bind_result($Username, $Password);
    $stmt->store_result();
    if($stmt->fetch()) //fetching the contents of the row 
    {
    
if(isset($_SESSION['Username']))
{
    header("url=index.html");
}

    }
    
    }
}



?>