<?php

namespace App\Http\Services\Image;

use App\Http\Services\Image\ImageToolsServies;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Config;


class ImageService extends ImageToolsServies
{
    public function save($image)
    {
        $this->setImage($image);

        $this->provider();

        // save IMage
        $manager = new ImageManager(new Driver());

        $result = $manager->read($image->getRealPath())->save(public_path($this->getImageAddress()));
        return $result ? $this->getImageAddress() : false;
    }
    public function fitAndSave($image, $width, $height)
    {
        $this->setImage($image);

        $this->provider();

        // save IMage
        $manager = new ImageManager(new Driver());

        $result = $manager->read($image->getRealPath());

        $result->resize($width, $height);
        $result->crop($width, $height, 0, 0); // برش به ابعاد مشخص از مختصات (0, 0)


        $result->save(public_path($this->getImageAddress()));
        return $result ? $this->getImageAddress() : false;
    }

    public function createIndexAndSave($image)
    {
        //get data from config
        $imageSizes = Config::get('image.index-image-sizes');

        //set image
        $this->setImage($image);

        //set directory
        $this->getImageDirectory() ?? $this->setImageDirectory(date("Y") . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
        $this->setImageDirectory($this->getImageDirectory() . DIRECTORY_SEPARATOR . time());

        //set name
        $this->getImageName() ?? $this->setImageName(time());
        $imageName = $this->getImageName();

        $indexArray = [];
        foreach ($imageSizes as $sizeAlias => $imageSize) {

            //create and set this size name
            $currentImageName = $imageName . '_' . $sizeAlias;
            $this->setImageName($currentImageName);

            //execute provider
            $this->provider();

            $manager = new ImageManager(new Driver());

            //save image
            // $result = $manager->read($image->getRealPath())->save(public_path($this->getImageAddress()));

            // $result = Image::make($image->getRealPath())->fit($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()), null, $this->getImageFormat());
            $result = $manager->read($image->getRealPath())->resize($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()), null, $this->getImageFormat());
            if ($result)
                $indexArray[$sizeAlias] = $this->getImageAddress();
            else {
                return false;
            }
        }
        $images['indexArray'] = $indexArray;
        $images['directory'] = $this->getFinalImageDirectory();
        $images['currentImage'] = Config::get('image.default-current-index-image');

        return $images;
    }


    public function deleteImage($image)
    {
        if (file_exists($image)) {
            unlink($image);
        }
    }
    public function deleteDirectoryAndFiles($directory)
    {
        if (!is_dir($directory)) {
            return false;
        }

        $files = glob($directory . DIRECTORY_SEPARATOR . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                $this->deleteDirectoryAndFiles($file);
            } else {
                unlink($file);
            }
        }
        $result = rmdir($directory);
        return $result;
    }
}
