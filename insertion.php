<?php 
$conn = new mysqli("localhost","root", "", "words_db" ); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
// SQL queries 
$query = " 
INSERT INTO students (name, college, marks, city) VALUES ('Pranali', 'DITMS College', 75, 'Chh. Sambhajinagar'); 
INSERT INTO students (name, college, marks, city) VALUES ('Apurva', 'dimms', 78, 'Chh. Sambhajinagar'); 
INSERT INTO students (name, college, marks, city) VALUES ('Aniket', 'DITMS', 78, 'mannwat'); 
"; 
if ($conn->multi_query($query)) { 
echo "Queries executed successfully<br>"; 
} else { 
echo "Error executing queries: " . $conn->error . "<br>"; 
} 
$conn->close(); 
?>
