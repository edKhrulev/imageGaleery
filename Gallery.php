<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 9/2/2018
 * Time: 9:55 PM
 */

class Gallery
{
    public function completeCategory($uploadDir)
    {
        $categories = scandir($uploadDir);
        $categoriesFinale = [];

        foreach ($categories as $category) {

            if (is_dir($category)) {
                continue;
            }
            $categoriesFinale[] = $category;
        }
        return $categoriesFinale;
    }

    public  function setImage($uploadDir, $category)
    {
        $folder = $uploadDir . $category;
        $images = scandir($folder);
        $imagesFinale = [];

        foreach ($images as $img) {

            if (is_dir($img)) {
                continue;
            }
            $imagesFinale[] = "/imageGallery/uploadImage/{$category}/{$img}";
        }
        return $imagesFinale;
    }

    public function getExtension($filename) {

        $path_info = pathinfo($filename);
        return $path_info['extension'];
    }
}