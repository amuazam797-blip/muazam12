<?php
$servername="localhost";
$username="root";
$password="";
$dbname="muazam";
$conn= mysqli_connect($servername,$username,$password,$dbname);
?>
<form method="GET">
    <h1>login form</h1>
    username:<input type="text" name="user" value=""> <br><br>
    password:<input type="password" name="pass" value=""> <br><br>
    <input type="submit" name="submite" value="login">
</form>
<?php 
if(isset($_get['submite']))
{
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $query= "SELECT * FORM STUDENT WHERE user='$user' && pass= '$pass'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        header('location:index.html');
    }else{
        echo "faild";
    }
}
?>