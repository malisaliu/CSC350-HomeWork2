<?php
if (isset($_POST['calculate'])) {
    $input1 = $_POST['input1'];
    $operator1 = $_POST['operator1'];
    $input2 = $_POST['input2'];
    $operator2 = $_POST['operator2'];
    $input3 = $_POST['input3'];

    $expression = "$input1 $operator1 $input2 $operator2 $input3";

    try {
        $result = eval("return $input1 $operator1 $input2 $operator2 $input3;");

        echo "<h3>Result: $result</h3>";
    } catch (Exception $e) {
        echo "ERROR: Invalid input.";
    }
} else {
    echo "No data received!";
}
?>
