<!DOCTYPE html> 
<html> 
<head><title>Login and Registration Form</title></head> 
<body> 
 <!-- Registration Form --> 
 <h2>Registration</h2> 
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
 <label for="username">Username:</label> 
 <input type="text" name="email" id="username" required> <br> 
 <label for="password">Password:</label> 
 <input type="password" name="password" id="password" required><br> 
 <input type="submit" value="Register" name="register"></form> 
 <?php 
 session_start(); 
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['register'])) {
 $username = $_POST['email']; 
 $password = $_POST['password']; 
 $conn = new mysqli('localhost', 'root', '', 'demo'); 
 if ($conn->connect_error) { 
die ("Connection failed: " . $conn->connect_error); 
 } 
 $sql = "INSERT INTO demo (email, password) VALUES (?, ?)"; 
 $stmt = $conn->prepare($sql); 
 $stmt->bind_param("ss", $username, $password); 
 $stmt->execute(); 
 echo "<p>Registration successful!</p>"; 
 $stmt->close(); 
 $conn->close();}?> 
 <!-- Login Form --> 
 <h2>Login</h2> 
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
 <label for="login_username">Username:</label> 
<input type="text" name="login_username" id="login_username" required> 
 <label for="login_password">Password:</label> 
 <input type="password" name="login_password" id="login_password" 
 required><br> 
 <input type="submit" value="Login" name="login"></form> 
 <?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['login'])) { 
 $login_username = $_POST['login_username']; 
 $login_password = $_POST['login_password']; 
 $conn = new mysqli('localhost', 'root', '', 'demo'); 
 if ($conn->connect_error) { 
die ("Connection failed: " . $conn->connect_error); 
 } 
 $sql = "SELECT * FROM demo WHERE email=? AND password=?"; 
 $stmt = $conn->prepare($sql); 
 $stmt->bind_param("ss", $login_username, $login_password); 
 $stmt->execute(); 
 $result = $stmt->get_result(); 
 if ($result->num_rows == 1) { 
$_SESSION['email'] = $login_username; 
echo "<p>Login successful!</p>"; 
 } else { echo "<p>Invalid username or password!</p>";} 
 $stmt->close(); 
 $conn->close(); 
 }?></body></html> 
