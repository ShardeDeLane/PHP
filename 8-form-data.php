<?php 
// Super Globals GET and POST
// form_process.php
if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
    $minimum = 5;
    $maximum = 10;
    
    // VALIDATING FORM
    if(strlen($username) < $minimum) {
        echo "Username has to be longer than five characters";
    } 
    
    if(strlen($username) > $maximum) {
        echo "Username cannot be longer than ten characters";
    }
    
    if(!in_array($username, $name)) {
        echo "Sorry you cannot login";        
    } else {
        echo "Welcome";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!-- Super Globals GET and POST -->
  <form action="form_process.php" method="post">
    <input type="text" placeholder="Enter Name" name="username">
    <input type="password" placeholder="Enter Password" name="password"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
