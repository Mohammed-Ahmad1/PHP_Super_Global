<?php
session_start();

// Initialize session array for tasks
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['tasks'] as $task) {
        $task = trim($task);
        if (!empty($task)) {
            $_SESSION['tasks'][] = $task; 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
</head>
<body>

<h2>To-Do List</h2>

<form method="POST">
    <input type="text" name="tasks[]" placeholder="Task 1"><br><br>
    <input type="text" name="tasks[]" placeholder="Task 2"><br><br>
    <input type="text" name="tasks[]" placeholder="Task 3"><br><br>
    <button type="submit">Add</button>
</form>

<h3>Current Tasks:</h3>
<ul>
<?php
if (!empty($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        echo "<li>" . htmlspecialchars($task) . "</li>";
    }
}
?>
</ul>

</body>
</html>
