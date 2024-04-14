<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userSearch = $_POST['usersearch'];
    
    try {
      require_once "includes/dbh.inc.php";
  
      $query = "SELECT * FROM promodatabase.comments WHERE username = :usersearch;";
  
      $statement = $pdo->prepare($query);
  
      $statement->bindParam(":usersearch", $userSearch);

      $statement->execute();
      
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);

      $pdo = null;
      $statement = null;
  
    } catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
    }
  } else {
      header("Location: index.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3 style="text-align: center; font-size: 20px;">Search results:</h3>
    <section class="comment-section">
    <?php
    if (empty($result)) {
        echo "No data was found for that user.";
    }
    else {
        foreach ($result as $row) {
            echo "<div class=comments>";
            echo "<h3>" . htmlspecialchars($row["username"]) . "</h3>";
            echo "<p><strong>Comment:</strong></p>";
            echo "<p>" .  htmlspecialchars($row["comment_text"]) . "</p>";
            echo "<p><strong>Date:</strong></p>";
            echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
            echo "</div>";
        }
    }
    ?>
    </section>
</body>
</html>