<?php

namespace App;

use Illuminate\Support\Facades\File;

class UploadName
{
    public static function uploadFile($name, $request, $path) {
        if ($request->hasFile($name)) {
            $file = $request->file($name);

            //create import success directory
            if (!File::exists( dirname(dirname(__FILE__)) . '/public/upload/' . $path)) {
                File::makeDirectory( dirname(dirname(__FILE__)) . '/public/upload/' . $path, 0777, true, true);
            }
            // Upload file
            $filename = $file->getClientOriginalName();

            $file->move( dirname(dirname(__FILE__)) . '/public/upload/' . $path, $filename);

            return $filename;
        }

        return '';
    }

}
