<?php



// Define your username and password

$username = "admin";

$password = "admin";



if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {



?>



<h1>Login To PHP Search Admin Panel</h1>



<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <p><label for="txtUsername">Username:</label>

    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>



    <p><label for="txtpassword">Password:</label>

    <br /><input type="password" title="Enter your password" name="txtPassword" /></p>



    <p><input type="submit" name="Submit" value="Login" /></p>



</form>



<?php



}

else {

?>

<html>
<title>Admin Panel</title>
<center><h2>PHP Search Admin Panel</h2></center>
<body>
<center><form action="addurl.php" method="post">
Page Title: <input type="text" name="title"><br>
Page Url: <input type="text" name="url"><br>
Page Description: <input type="text" name="des"><br>
<input type="submit" value="Submit">
</form> </center>

</body>
</html>






<?php






}



?> 