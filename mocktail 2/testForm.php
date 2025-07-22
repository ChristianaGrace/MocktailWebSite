<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
</head>
<body>
    <button id="addIngredient_btn">Add Ingredient</button>
   <form id="recipe_form" action="" method="post">
   </form> 
</body>

<script>
    count = 0;
    function addIngredient(){
        form = document.getElementById('recipe_form');
        newInput = document.createElement('input');
        newInputlabel = document.createElement('label');
        newInputlabel.for = "ingredient" + count;
        newInputlabel.innerHTML = "<br>Ingredient: ";

        newInput.id = "ingredient" + count;
        newInput.placeholder = "Ingredient: ";
        newInput.size = "100";
        form.appendChild(newInputlabel);
        form.appendChild(newInput);
       
    }
addIngredient();

document.getElementById('addIngredient_btn').addEventListener('click',addIngredient);
</script>
</html>