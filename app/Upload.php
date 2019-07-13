<?php

namespace App;

class Upload{

    public static function uploadFile($image, $uploadPath) {
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }
        $image->move($uploadPath, $imageName);
        return '/' . $uploadPath . '/' . $imageName;
    }

    public static function getImage($name, $path, $request) {
        if ($request->hasFile($name)) {
            $file = $request->file($name);

            // Upload file
            $uploadPath = $path;
            $image = self::uploadFile($file, $uploadPath);
            return $image;
        }

        return '';
    }
    public static function getVideo($name, $path, $request) {
        if ($request->hasFile($name)) {
            $file = $request->file($name);

            // Upload file
            $uploadPath = $path;
            $videos = self::uploadFile($file, $uploadPath);
            return $videos;
        }

        return '';
    }

}

