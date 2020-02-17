<?php
require_once('database.php');


$query = 'select * from todoitems';
// Example: $query = 'SELECT * FROM customers';

$statement = $db->prepare($query);
$statement->execute();
$todolist = $statement->fetchAll();
$statement->closeCursor();

 if (!empty($todolist))
  {
    $string ="<p>Click here to <a href=\"add_todo_form.php\">add a To Do Item</a></p>"  ;
  }
  else
  {
    $string ="<p>There are no items in the to do list.  Click here to <a href=\"add_todo_form.php\">add a To Do Item</a></p>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>To Do List</h1></header>
<main>
    <section>
      <table>
        <tr>
          <td>Item Number</td>
          <td>Title</td>
          <td>Description</td>
          <td>&nbsp</td>
        </tr>
            <?php foreach ($todolist as $todoitem) : ?>
            <tr>
            <td><?php echo $todoitem['ItemNum']; ?></td>
            <td><?php echo $todoitem['Title']; ?></td>
            <td><?php echo $todoitem['Description']; ?></td>
            <td><form action="delete_todoitem.php" method="post">
              <input type="hidden" name="ItemNum" value="<?php echo $todoitem['ItemNum']; ?>">
              <input type="submit" value="Remove">
              </form></td>
            </tr>
            <br>
        <?php endforeach; ?>
      </table>
    </section>
    <P>
    <?php echo $string; ?>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> To Do List.</p>
</footer>
</body>
</html>
