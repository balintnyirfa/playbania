<?php
    include_once "./header.php";
?>

<div>
    <form action="./include/upload_inc.php" method="post" enctype="multipart/form-data">
        Text: <input type="text" name="joke" id="joke"><br>
        Meme: <input type="file" name="meme" id="meme"><br>
        <button type="submit">Upload</button>
    </form>
</div>

<?php
    include_once "./footer.php";
?>
