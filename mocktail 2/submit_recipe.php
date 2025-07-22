<?php
session_start();
$servername ="localhost";
$dbname = "mocktail";
$username = "mocktail";
$password = "Letmein1";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error ){
    die("Connection failed:" . $conn->connect_error) ;
}

$uid = 1;
$title = $_POST['title'];
$description = $_POST['description'];
$ingredients =htmlspecialchars($_POST['ingredients']);
$method =htmlspecialchars($_POST['method']);
/*$password = $_POST['[password]'];

/*$ingredients = '{
    "ingredients": [
      "lime juice",
      "soda water",
      "white rum",
      "sugar",
      "mint"
    ]
  }';

$method = '{
    "recipe": {
      "instructions": [
        "Place the limes, mint and sugar into a sturdy highball glass and muddle or mash with the end of a clean rolling pin, to bruise the mint and release the lime juice.",
        "Add the ice and pour over the rum.",
        "Add soda water to taste and stir well.",
        "Garnish with a mint sprig and serve."
      ]
    }
  }

  ';*/

$error_messages =[];
if(empty($title) || empty($description)) {
    echo "All fields are required!";
}
if(empty($ingredients)) {
    $error_messages[] =  "All fields are required!";
}
else if (strpos($ingredients,',' )  === false){
    $error_messages[] = "Please separate ingredients with commas.";
}
if(empty($method)) {
  $error_messages[] =  "All fields are required!";
}/*
else if (strpos($method,',' )  === false){
  $error_messages[] = "Please separate method with commas.";
}*/

if (count($error_messages) > 0 ) {
  foreach ($error_messages as $message)
  {
              echo "<p> $message </p>" ;
          //   $_SESSION['Ingredients_Error'] = $message  ;
}
     echo "<p><a href = \"add_recipe.php\">Go back</a></p>";
}
else{
  $ingredientsArray = explode (',', $ingredients );
  //echo $ingredientsArray[0];
    //convert ingredients array to JSON
    $ingredientsJSON = json_encode($ingredientsArray);

    $methodArray = explode ('\n', $method );
    //echo $methodArray[0];
      //convert ingredients array to JSON
      $methodJSON = json_encode($methodArray);
      //add them as numbers or lists before update or after

    $sql =("INSERT INTO mocktail_recipes (uid, title, description, ingredients, method) VALUES (?,?,?,?,?)");
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss",$uid,$title,$description,$ingredientsJSON,$methodJSON);
    //echo $sql;
    if ($stmt->execute()){
        echo("Recipe added successfully");
    }else{
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location:homepage.php");

  }


