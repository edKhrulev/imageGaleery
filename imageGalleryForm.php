<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 8/30/2018
 * Time: 11:11 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="imageGalleryStyle.css">
    <title>Image Gallery</title>
</head>
<body>

<div class="wrapper">

    <div class="header">
        <div class="inner-header">
            <div class="form-gallery">

            <form method="POST" enctype="multipart/form-data">
                <div class="field">
                    <label for="a">Choose fail</label>
                    <input  required type="file" name="imageUpload">
                </div>
                <div class="field">
                    <label for="b">Category:</label>
                    <input required type="text" name="category">
                </div>
                <div class="field">
                    <label for="c">Label:</label>
                    <input required type="text" name="imageLabel">
                </div>
                <div class="field">
                <button>Upload</button>
                </div>
            </form>

            </div>
        </div>
    </div>

<div class="container row">

    <div class="content">
        <div class="inner-content">
            <?php foreach ($completeImage as $img ) {
                echo "<span class='image'><a download href='{$img}'><img src='{$img}' width='250' height='250'></a></span>";
            } ?>
        </div>
    </div>

    <div class="sidebar">
        <div class="inner-sidebar">
            Categories
            <ul>
                <?php foreach ($completeCategory as $category ) {
                    echo "<li><a href='/imageGallery/indexGallery.php?category={$category}'>{$category}</a></li>";
                } ?>
            </ul>
        </div>
    </div>
</div>

    <div class="footer">
       <div class="inner-footer"></div>
    </div>

</div>
</body>
</html>
