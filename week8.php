<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mixed Layout Calculator</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 50px;
text-align: center;
}
form {
display: inline-block; /* Center form horizontally */
text-align: left; /* Align content inside form to the left */
padding: 20px;
border: 1px solid #ddd;
border-radius: 5px;
box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
background-color: #f9f9f9;
}
.form-group {
display: flex; /* Use flexbox for horizontal alignment */
align-items: center; /* Vertically align label and input */
justify-content: space-between; /* Adjust spacing between label and input */
margin-bottom: 15px; /* Add spacing between rows */
}
.form-group label {

width: 150px; /* Fixed width for labels */
text-align: right; /* Align label text to the right */
margin-right: 10px; /* Add spacing between label and input */
font-size: 16px;
}
.form-group input {
flex: 1; /* Make input fields fill the remaining space */
padding: 8px; /* Add padding for input fields */
font-size: 16px;
box-sizing: border-box;
}
.buttons {
text-align: center; /* Center-align the buttons */
margin-top: 20px;
}
.buttons button {
width: 40%; /* Set consistent width for buttons */
padding: 10px;
margin: 8px;
font-size: 13px;
cursor: pointer;
background-color:purple; /* Default blue color */
color: white; /* White text */
border: none;
border-radius: 5px;
transition: background-color 0.5s; /* Smooth color transition */

}
.buttons button:hover {
background-color: purple; /* Darker purple on hover */
}
.buttons button:active {
background-color: purple; /* Even darker blue when clicked */
}
</style>
<script>
// Function to change button color on submit
function changeButtonColor(event, button) {
button.style.backgroundColor = "#28a745"; // Green color
button.textContent = "Submitted"; // Change button text
}
</script>
</head>
<body>
<h1>Calculator by Ashwini using Switch Case</h1>
<form method="post" action="">
<!-- First Number Field -->
<div class="form-group">
<p>First Number</p>
<input type="number" id="num1" name="num1" required
value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
</div>

<!-- Second Number Field -->
<div class="form-group">

<p>Second Number</p>
<input type="number" id="num2" name="num2" required
value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">
</div>

<!-- Result Field -->
<div class="form-group">

<p>Calculator Result</p>
<input type="text" id="result" name="result" readonly
value="<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$result = '';

switch ($operation) {
case 'sum':
$result = $num1 + $num2;
break;
case 'subtraction':
$result = $num1 - $num2;

break;
case 'multiplication':
$result = $num1 * $num2;
break;
case 'division':
if ($num2 != 0) {
$result = $num1 / $num2;
} else {
$result = 'Error: Division by zero';
}
break;
default:
$result = 'Invalid operation';
}

echo $result;
}
?>">
</div>

<!-- Submit Buttons -->
<div class="buttons">
<button type="submit" name="operation" value="sum"
onclick="changeButtonColor(event, this)">Sum</button>
<button type="submit" name="operation" value="subtraction"
onclick="changeButtonColor(event, this)">Subtraction</button>

<button type="submit" name="operation" value="multiplication"
onclick="changeButtonColor(event, this)">Multiplication</button>
<button type="submit" name="operation" value="division"
onclick="changeButtonColor(event, this)">Division</button>
</div>
</form>
</body>
</html>