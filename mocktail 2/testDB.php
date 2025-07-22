<?php

include 'includes/connDB.php';


$sql = "SELECT * FROM mocktail_recipes";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

if ($stmt->execute() === false) {    die("Error executing statement: " . $stmt->error);}

$result = $stmt->get_result();


while ($row = $result->fetch_assoc()) {

echo '<div class="card"><h2>' . htmlspecialchars($row['title'] ). '</h2>';

$ingredientsArray = json_decode(stripslashes($row['ingredients']), true);
$methodArray = json_decode(stripslashes($row['method']), true);
$descriptionArray = json_decode(stripslashes($row['method']), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decoding JSON: ' . json_last_error_msg();
    continue;
}
//echo '<pre>'.print_r($ingredientsArray,true). '</pre>';



for ($i = 0; $i < count($ingredientsArray); $i++){
    $temp = $ingredientsArray[$i];
    //echo($temp);
echo '<li><a target=\"_blank\" href="https://www.tesco.com/groceries/en-GB/search?query=' . $temp . '">' . htmlspecialchars($temp) . '</a>: ' . '</li>';
}

echo '</div>';
}

$stmt->close();
$conn->close();