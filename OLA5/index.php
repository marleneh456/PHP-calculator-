<!-- Name: Marlene Habib -->
<!-- Instructor: Dr. Yang -->
<!-- OLA 5 -->
<!-- index.php -->
<!-- Date: 04-04-2024 -->
<!-- Due Date: 04-04-2024 --> 


<!-- Define HTML5 document -->
<!DOCTYPE html>

<!-- Declare html -->
<html>

<!-- Declare head -->
<head>

	<!-- The title of this assignment -->
    <title>Calculator Website</title>
	
	<!-- Link to index.css -->
    <link type="text/css" rel="stylesheet" href="index.css" />
	
	<!-- Link to Orbitron fonts for Input text -->
	<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet'>
	
<!-- End of head -->	
</head>

<!-- Declare body -->
<body>

	<!-- Heading 1 of top of the website and id top -->
    <h1>Welcome to my Calculator!</h1>
	
	<!-- div section for the calculator -->
	
    <div id="calculator">
		
		<!-- Declare form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input type="text" name="display" id="display">
			
			<!-- Making Clear button and using class for css -->
			<button type="button" onclick="clearDisplay()" class="clear">C</button>
			
			<!-- Break two lines -->
			<br>
			<br>
			
			<!-- Making Operator buttons and using class for css -->
			<button type="button" onclick="addToDisplay('+')" class="operator">+</button>
			<button type="button" onclick="addToDisplay('-')" class="operator">-</button>
			<button type="button" onclick="addToDisplay('*')" class="operator">*</button>
			<button type="button" onclick="addToDisplay('/')" class="operator">/</button>
			
			<!-- Break two lines -->
			<br>
            <br>
			
			<!-- Making Number buttons and using class for css -->
            <button type="button" onclick="addToDisplay('7')" class="numbervalue">7</button>
            <button type="button" onclick="addToDisplay('8')" class="numbervalue">8</button>
            <button type="button" onclick="addToDisplay('9')" class="numbervalue">9</button>
			
            <!-- Break two lines -->
            <br>
            <br>
			
            <button type="button" onclick="addToDisplay('4')" class="numbervalue">4</button>
            <button type="button" onclick="addToDisplay('5')" class="numbervalue">5</button>
            <button type="button" onclick="addToDisplay('6')" class="numbervalue">6</button>
			
			<!-- Break two lines -->
			<br>
			<br>
			
            <button type="button" onclick="addToDisplay('1')" class="numbervalue">1</button>
            <button type="button" onclick="addToDisplay('2')" class="numbervalue">2</button>
			<button type="button" onclick="addToDisplay('3')" class="numbervalue">3</button>
			
			<!-- Break two lines -->
			<br>
			<br>
			
            <button type="button" onclick="addToDisplay('0')" class="numbervalue">0</button>
			
			<!-- Making Decimal button and using class for css -->
			<button type="button" onclick="addToDisplay('.')" class="numbervalue">.</button>
			
			<!-- Making Equal button and using class for css -->
			<button type="submit" name="submit" class="equal">=</button>
			
			
        </form>
		<!-- End of form -->
		
    </div>
	<!-- End of div section -->

<!-- JavaScript section -->	
<script>
    function addToDisplay(value) {
        document.getElementById("display").value += value;
    }

    function clearDisplay() {
        document.getElementById("display").value = ' ';
    }
	
</script>	
<!-- End of JavaScript section -->

<!-- PHP section -->	
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['display'];
    $expression = preg_replace('/[^0-9+\-*.\/\s]/', '', $expression);
    
    if (!empty($expression)) {
        eval("\$result = ($expression);");
		
		//Printing the result using JavaScript and PHP together
		echo "<script>document.getElementById('display').value = '$result';</script>";
    }
} else {
    $result = " ";
}
?>
<!-- End of PHP section -->
	
<!-- End of body -->
</body>

<!-- End of html -->
</html>
