<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Multi-Step Form</title> 
<style> 
 body { 
 font-family: Arial, sans-serif; 
 } 
 form { 
 max-width: 400px; 
 margin: 0 auto; 
 } 
 input[type="text"], 
 input[type="email"] { 
 width: 100%; 
 padding: 10px; 
 margin-bottom: 10px; 
 border: 1px solid #ccc; 
 border-radius: 4px; 
 box-sizing: border-box; 
 } 
 input[type="submit"], 
 button { 
 background-color: #4CAF50; 
 color: white; 
 padding: 10px 20px; 
 border: none; 
 border-radius: 4px; 
 cursor: pointer; 
 float: right; 
 } 
 button[type="button"] { 
 background-color: #ccc; 
 } 
 input[type="submit"]:hover, 
 button:hover { 
 background-color: #45a049; 
 } 
 .form-step { 
 display: none; 
 } 
 h2{ 
 text-align: center; 
 } 
 .form-step.active { 
 display: block; 
 } </style> 
</head> 
<body> 
<h2>Multi-Step Form</h2> 
<form method="post" action="<?php echo 
htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
class="form-step active"> 
Name: <input type="text" name="name" required><br> 
Email: <input type="email" name="email" required><br>
<input type="hidden" name="step" value="1">
<button type="button" onclick="nextStep()">Next</button></form> 
<form method="post" action=" 
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-step">
Address: <input type="text" name="address" required><br> 
Phone: <input type="text" name="phone" required><br> 
<input type="hidden" name="name" value="<?php echo isset($_POST['name']
) ? $_POST['name'] : ''; ?>"> 
<input type="hidden" name="email" value="<?php echo isset($_POST['email'])
 ? $_POST['email'] : ''; ?>"> 
<input type="hidden" name="step" value="2"> 
<input type="submit" value="Submit" onclick="alert('Data Is Submitted 
Successfully..!')"> 
<button type="button" onclick="prevStep()">Previous</button> 
</form> 
<script> 
function nextStep() { 
 var currentStep = document.querySelector('.form-step.active'); 
 var nextStep = currentStep.nextElementSibling; 
 currentStep.classList.remove('active'); 
 nextStep.classList.add('active'); 
} 
function prevStep() { 
 var currentStep = document.querySelector('.form-step.active'); 
 var prevStep = currentStep.previousElementSibling; 
 currentStep.classList.remove('active'); 
 prevStep.classList.add('active'); 
} 
</script> 
</body> 
</html> 