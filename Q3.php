<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    Number 1: <input type="number" step="any" name="number1" required><br><br>

    Operation:
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    Number 2: <input type="number" step="any" name="number2" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = (float)$_POST['number1'];
    $num2 = (float)$_POST['number2'];
    $op = $_POST['operation'];

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero!";
            break;
        default:
            $result = "Invalid operator!";
    }

    echo "<br><strong>Result: </strong>" . $result;
}
?>

</body>
</html>
