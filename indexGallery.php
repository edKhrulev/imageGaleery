<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 8/30/2018
 * Time: 12:33 PM
 */

use Symfony\Component\Debug\Debug;
require ('../vendor/autoload.php');
Debug::enable();
require ('Gallery.php');
require ('Image.php');

$gallery = new Gallery;

$uploadDir = './uploadImage/';

if (isset($_FILES['imageUpload'])) {

    $imageUpload = $_FILES['imageUpload'];

    if ($imageUpload['error'] === 0) {

        $image = new Image();

        $categoryName = isset($_POST['category']) ? $_POST['category'] : 'temp';

        if (isset($_POST['imageLabel'])) { $labelName = $_POST['imageLabel']; }

        $newFileName = time();

        $newFileExtension = $gallery->getExtension(basename($_FILES['imageUpload']['name']));

        $completeName = $labelName . ' - ' . $newFileName. '.' . $newFileExtension;
        $uploadFile = $uploadDir . $categoryName . '/' . $completeName;

        $image->setLabel($labelName);
        $image->setName($completeName);
        $image->setPath( $uploadFile);
        $image->setTempPath($_FILES['imageUpload']['tmp_name']);

        if (!file_exists($uploadDir . $categoryName . '/')) {
            mkdir($uploadDir . $categoryName . '/', 0777, true);
        }
        $image->saveImage();
    }
}
$category = isset($_GET['category']) ? $_GET['category'] : 'temp';

$completeImage = $gallery->setImage($uploadDir, $category);
$completeCategory = $gallery->completeCategory($uploadDir);

require ('imageGalleryForm.php');

