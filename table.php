<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM characters ORDER BY name";
	$characters = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>The Star Wars Minor Character Database</title>
		<link href="https://fonts.googleapis.com/css?family=Russo+One|Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>The Star Wars Minor Character Database</h1>


<table>
    <tr>
        <th>Name</th>
        <th>Movie</th>
        <th>Physical description</th>
        <th>Updated</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($characters)) :  ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['movie']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['date']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_character.php">Add new characters</a></p>

</div> <!-- close container -->
</body>
</html>
