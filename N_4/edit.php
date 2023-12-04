<?php
    require("database.php");
    require("includes/header.php");
    $data = $con->prepare("SELECT * FROM post WHERE id=?");
    $data->execute([$_GET['id']]);
    $post = $data->fetch();
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['PUT'])) {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $id = $_POST["id"];

        $data = $con->prepare("UPDATE post SET title=:title, body=:body WHERE id=:id");
        $data->execute([
            "title"=> $title,
            "body"=> $body,
            "id"=> $id,
        ]);

        $_SESSION["succes"] = "Post updated";

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
        <input type="hidden" name="PUT">
        <input type="hidden" name="id" value="<?= $post["id"]?>">
        <input type="text" name="title" value="<?= $post['title']?>">
        <input type="text" name="body" value="<?= $post['title']?>">
        <button type="submit">OK</button>
    </form>
</body>
</html>
<?php
require("includes/footer.php");