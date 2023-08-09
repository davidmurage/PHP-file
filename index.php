<?php
  // Initialize variables
  $result = '';
  $error = '';

  // Check if the form is submitted
  if (isset($_POST['calculate'])) {
    // Get the input values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Perform the calculation based on the selected operator
    switch ($operator) {
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
        if ($num2 != 0) {
          $result = $num1 / $num2;
        } else {
          $error = 'Error: Division by zero!';
        }
        break;
      default:
        $error = 'Error: Invalid operator!';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h2>Simple Calculator</h2>

  <form method="POST" action="">
    <input type="number" name="num1" placeholder="Enter number 1" required>
    <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="number" name="num2" placeholder="Enter number 2" required>
    <input type="submit" name="calculate" value="Calculate">
  </form>

  <?php if ($result != ''): ?>
    <h3>Result: <?php echo $result; ?></h3>
  <?php endif; ?>

  <?php if ($error != ''): ?>
    <h3 style="color: red;"><?php echo $error; ?></h3>
  <?php endif; ?>
</body>
</html>