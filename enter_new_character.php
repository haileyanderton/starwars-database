<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> The Star Wars Minor Character Database - Add New </title>
    <link href="https://fonts.googleapis.com/css?family=Russo+One|Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>The Star Wars Minor Character Database: Add New Character</h1>

<p class="middle"><a href="table.php">View full database</a></p>

<div id="content">

<form id="characterform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="name">Name</label>
	<input type="text" name="name" id="name" maxlength="140" required>

    <label for="movie">Movie of 1st Appearance</label>
    <select name="movie" id="movie" required>
        <option value="episode-one">Episode I - The Phantom Menace</option>
        <option value="episode-two">Episode II - Attack of the Clones</option>
        <option value="episode-three">Episode III - Revenge of the Sith</option>
        <option value="episode-four">Episode IV - A New Hope</option>
        <option value="episode-five">Episode V - The Empire Strikes Back</option>
        <option value="episode-six">Episode VI - Return of the Jedi</option>
        <option value="episode-seven">Episode VII - The Force Awakens</option>
        <option value="other">Other (Spinoffs and Expanded Universe Material)</option>
    </select>

    <label for="description">Physical description</label>
	<input type="text" name="description" id="description" maxlength="200" required>


	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting a new character!</p>
    <p class="middle"><a href="enter_new_character.php">Add another new character</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
