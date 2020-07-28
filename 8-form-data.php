<?php 

// POST - the data is sent to the server as a package in a separate communication with the processing script
// data sent through POST will not be visible in the url

// POST - Advantages & Disadvantages
// more secure than GET because user-entered information is not visible in the url query string or in the server logs
// larger limit on amount of data that can be passed and can send text data as well as 
// binary data (uploading a file) using POST
// since data is not visible in the url, it's not possible to bookmark a page with the specific query

// PHP provides super global variable $_POST to access information sent via post method
// or submitted through an html form using the method="post"

// REQUEST variable
// php provides another superglobal variable $_REQUEST that contains the values of 
// $_GET and $_POST variables as well as the values of the $_COOKIE superglobal variable

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
