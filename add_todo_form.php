<!DOCTYPE html>
<html>
<head>
  <title>To Do List</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
  <h1>To Do List</h1>
</header>
<main>
<h1>Add To Do Item</h1>
<form action="addtodoitem.php" method="post" id="add_todo_form">
<label>Title:</label>
<input type="text" name="title"><br>
<label>Description:</label>
<input type="text" name="description"><br>
<label>&nbsp;</label>
<input type="submit" value="Add To Do Item"><br>
<p>
  <a href="index.php">View To Do List</a></p>
</form>
</main>
<footer>
<p>&copy;
  <?php echo date("Y"); ?> To Do List</p> </footer>
</body>
</html>
