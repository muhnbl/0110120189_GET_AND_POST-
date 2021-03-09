<!DOCTYPE html>
<html>
<body>
<h3>Method GET!</h3>
<form method="GET" action="finish.php">
    <label for="name">Name :</label>
    <input type="text" name="name"><br>
    <label for="email">E-mail :</label>
    <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Submit!">
</form>
<br>
<h3>Method POST!</h3>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="name">Name :</label>
    <input type="text" name="name"><br>
    <label for="email">E-mail :</label>
    <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Submit!">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
          
        echo "Thank you, you registered as $name and your email is $email";
}
?>  
</body>
</html> 