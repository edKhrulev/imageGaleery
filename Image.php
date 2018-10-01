<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 9/4/2018
 * Time: 11:15 PM
 */

class Image
{
    protected $name;
    protected $label;
    protected $path;
    protected $tempPath;

    public function saveImage()
    {
       $result = move_uploaded_file($this->tempPath, $this->path);

       return $result;
    }

    public function getTempPath()
    {
        return $this->tempPath;
    }

    public function setTempPath($tempPath)
    {
        $this->tempPath = $tempPath;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($imageName)
    {
       $this->name = $imageName;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($imageLabel)
    {
        $this->label = $imageLabel;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($imagePath)
    {
        $this->path = $imagePath;
    }
}