<?php
    include_once "header.php";
?>

<div>
    <form action="upload_inc.php" method="post" enctype="multipart/form-data">
        Text: <textarea name="joke" rows="3" required></textarea><br>
        <!--<input type="text" name="joke" id="joke"><br>-->
        Meme: <input type="file" name="meme" id="meme" required><br>
        <button type="submit">Upload</button>
    </form>
</div>

<?php
    include_once "footer.php";
?>
