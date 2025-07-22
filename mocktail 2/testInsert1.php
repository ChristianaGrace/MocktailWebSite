<?php
include 'includes/connDB.php';

$sql = "INSERT INTO mocktail_users (uname, name , email, socials) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $uname, $name, $email, $socials);
$uname = "BigBadBarry";
  $name = "Barry";
  $email = "BazzaTheBigFish@elfmail.com";
  $socials = '{
                "socials":[
                    {"facebook":"big.barry01"},
                    {"twitter":"@bigBarry"},
                    {"instagram":"@big.barry01"}
                ]
                }';
 if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn-> error;
}
$stmt->close();
$conn->close();