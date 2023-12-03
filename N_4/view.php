<?php
require("includes/header.php");
require("database.php");

$data = $con->prepare("SELECT * FROM post WHERE id=?");
$data->execute([$_GET['id']]);
$post = $data->fetch();
?>
<h1><?= $post["title"]?></h1>
<p><?= $post["body"]?></p>
<small><?= $post["crated_at"]?></small>
<?php
require("includes/footer.php");