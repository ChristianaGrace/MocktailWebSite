<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mocktail Recipes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .card h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .card ul {
            list-style-type: none;
            padding: 0;
        }
        .card li {
            margin: 5px 0;
        }
        .card a {
            text-decoration: none;
            color: #007bff;
        }
        .card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Mocktail Recipes</h1>
    <div class="container">
        <?php
        include 'includes/connDB.php';

        $sql = "SELECT * FROM mocktail_recipes";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        if ($stmt->execute() === false) {
            die("Error executing statement: " . $stmt->error);
        }

        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card"><h2>' . htmlspecialchars($row['title']) . '</h2>';

            $imageSearchTerm = urlencode($row['title']);
            $imageUrl = "https://mindfulmocktail.com/?{$imageSearchTerm},mocktail";

            echo '<img src="' . htmlspecialchars($imageUrl) . '" alt="' . htmlspecialchars($row['title']) . '">';

            $ingredientsArray = json_decode(stripslashes($row['ingredients']), true);
            $methodArray = json_decode(stripslashes($row['method']), true);
            $descriptionArray = json_decode(stripslashes($row['method']), true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                echo 'Error decoding JSON: ' . json_last_error_msg();
                continue;
            }

            echo '<ul>';
            for ($i = 0; $i < count($ingredientsArray); $i++){
                $temp = $ingredientsArray[$i];
                echo '<li><a target="_blank" href="https://www.tesco.com/groceries/en-GB/search?query=' . urlencode($temp) . '">' . htmlspecialchars($temp) . '</a></li>';
            }
            echo '</ul>';

            echo '</div>';
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
