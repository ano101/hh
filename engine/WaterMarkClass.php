<?php

class WaterMarkClass
{
    private $width;
    private $height;
    private $ext;
    private $waterMark;
    private $pathImg;
    public function __construct($img){
        $this->pathImg = $img;
        $this->getInfoPic();
        $this->waterMark = $_SERVER['DOCUMENT_ROOT'].'/assets/pic/water.png';
    }

    public function getInfoPic(){
        $this->ext = pathinfo($this->pathImg, PATHINFO_EXTENSION);
        list($width, $height) = getimagesize($this->pathImg);
        $this->width = $width;
        $this->height = $height;
    }
    public function generationWaterMark(){
        switch ($this->ext) {
            case 'png':
                $this->waterMarkPNG();
                break;
            case 'jpeg':
            case 'jpg':
                $this->waterMarkJPG();
                break;
            default:
                break;
        }
    }
    public function waterMarkPNG(){
        $img = imagecreatefrompng($this->pathImg);
        $watermark = imagecreatefrompng($this->waterMark);
        list($width, $height) = getimagesize($this->waterMark);
        $pos_x = ($this->width - $width) / 2; ;
        $pos_y = ($this->height - $height) / 2; ;
        imagecopy($img, $watermark, $pos_x, $pos_y, 0, 0, $width, $height);
        imagesavealpha($watermark, true);
        imagesavealpha($img, true);
        imagepng($img, $_SERVER['DOCUMENT_ROOT'].'/newpng.'.$this->ext, 9);
        imagedestroy($img);
        imagedestroy($watermark);
    }

    public function waterMarkJPG(){
        $img = imagecreatefromjpeg($this->pathImg);
        $watermark = imagecreatefrompng($this->waterMark);
        list($width, $height) = getimagesize($this->waterMark);
        $pos_x = ($this->width - $width) / 2; ;
        $pos_y = ($this->height - $height) / 2; ;
        imagecopy($img, $watermark, $pos_x, $pos_y, 0, 0, $width, $height);
        imagejpeg($img, $_SERVER['DOCUMENT_ROOT'].'/newjpg.'.$this->ext, 100);
        imagedestroy($img);
        imagedestroy($watermark);
    }

}