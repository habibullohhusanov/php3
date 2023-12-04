<?php
    require("database.php");
    require("includes/header.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $body = $_POST["body"];

        $data = $con->prepare("INSERT INTO post (title, body) VALUES (:title, :body)");
        $data->execute([
            "title"=> $title,
            "body"=> $body,
        ]);

        $_SESSION["succes"] = "Post created";

        header("Location: post.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="title">
        <input type="text" name="body">
        <button type="submit">OK</button>
    </form>
</body>
</html>
<?php
require("includes/footer.php");