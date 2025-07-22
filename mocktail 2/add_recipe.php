<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> New Recipe</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_recipe.css">
    </head>
    <body>
    <form method ="post" action="submit_recipe.php" class="recipe-form">


        <label >Recipe Name:</label> <br><br>
        <input type ="text" id = "title" name="title" required><br><br>

        <label for="description">Description: </label>
        <br><br>
        <textarea id= "description" name = "description" rows = "4" cols ="100" required> 
    </textarea>
        <br><br>

        <label
        for="ingredients">Ingredients: Please enter ingredients separated by commas (e.g, 'water,lime') </label><br><br>
        <textarea id= "ingredients" name = "ingredients" rows = "4" cols ="100" required> </textarea> <br><br>


    <label for="method">Method:</label><br><br>
    <textarea id= "method"
    name = "method" rows = "10" cols ="100" required> </textarea> <br><br>

          <button type="submit">Submit</button>
    </form>
</body>
</html>
