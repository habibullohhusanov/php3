<?php

require("includes/header.php");
if (isset($_SESSION["succes"])) {
    echo "<h1>" . $_SESSION["succes"] . "</h1>";
    unset($_SESSION["succes"]);
}
if (isset($_SESSION["error"])) {
    echo "<h1>" . $_SESSION["error"] . "</h1>";
    unset($_SESSION["error"]);
}
require("database.php");
$data = $con->prepare("SELECT * FROM post");
$data->execute();
$posts = $data->fetchAll();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["DELETE"])) {
    $data = $con->prepare("DELETE FROM post WHERE id=?");
    $response = $data->execute([$_POST["id"]]);
    if ($response) {
        $_SESSION["succes"] = "Post deleted";
        header("Location: post.php");
        exit;
    } else {
        $_SESSION["error"] = "Post deleted";
        header("Location: post.php");
        exit;
    }

}
?>
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>created_at</th>
                <th>Settings</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($posts as $post):
            ?>
            <tr>
                <td><a href="view.php?id=<?= $post["id"]; ?>"><?= $post["id"]; ?></a></td>
                <td><?= $post["title"]; ?></td>
                <td><?= $post["body"]; ?></td>
                <td><?= $post["crated_at"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $post["id"]; ?>">Edit</a>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $post["id"]; ?>">
                        <input type="hidden" name="edit">
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
<?php
require("includes/footer.php");
