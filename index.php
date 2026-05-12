<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>

<body>
    <?php
    try {
        $host = 'localhost';
        $db = 'submission_service';
        $user = 'postgres';
        $pass = '';

        // Establish connection
        $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

        // Execute query
        $stmt = $pdo->query("SELECT id, display_name FROM users");

        // Fetch and display rows
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . " - Name: " . $row['display_name'] . "<br>";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    ?>

</body>

</html>