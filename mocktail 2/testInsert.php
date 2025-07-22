<?php

$servername ="localhost";
$dbname = "mocktail";
$username = "mocktail";
$password = "Letmein1";


$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error ){
    die("Connection failed:" . $conn->connect_error) ;
}

$ingredients = '{
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
  ';

$uid = "3";
$title = "New Mocktail";
$description = "Test description";

$sql = "INSERT INTO mocktail_recipes (uid, title, description, ingredients, method) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssss",$uid,$title,$description,$ingredients,$method);

//echo $sql;
if ($stmt->execute()){
    echo("New Record Created");
}else{
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
$stmt->close();
$conn->close();