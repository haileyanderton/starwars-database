<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> The Star Wars Minor Character Database </title>
    <link href="https://fonts.googleapis.com/css?family=Russo+One|Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>The Star Wars Minor Character Database</h1>

<div id="content">

<form id="characterform" method="post" action="simple_form.php" autocomplete="off">
    <label for="name">Name</label>
	<input type="text" name="name" id="name" maxlength="25" required>

    <label for="movie">Movie of 1st Appearance</label>
    <select name="movie" id="movie" required>
        <option value="episode-one">Episode I - The Phantom Menace</option>
        <option value="episode-two">Episode II - Attack of the Clones</option>
        <option value="episode-three">Episode III - Revenge of the Sith</option>
        <option value="episode-four">Episode IV - A New Hope</option>
        <option value="episode-five">Episode V - The Empire Strikes Back</option>
        <option value="episode-six">Episode VI - Return of the Jedi</option>
        <option value="episode-seven">Episode VI - The Force Awakens</option>
        <option value="other">Other (Spinoffs and Expanded Universe Material)</option>
    </select>

    <label for="description">physical description </label>
	<input type="text" name="description" id="description" maxlength="200" required>


	<input type="submit" id="submit" value="Submit">
</form>

</div>

</div> <!-- close container -->
</body>
</html>
