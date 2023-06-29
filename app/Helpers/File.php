<?php

namespace App\Helpers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;

/**
 * @author Lyte Onyema <lyte.onyema@gmail.com>
 */
class File
{
    /**
     * Upload a file to cloudinary.
     *The file to be uploaded can either be from local disk or url link.
     *
     * @param UploadedFile|string $file
     * @param string $folder The folder to be stored in.
     * @param bool $withExt Determine if the extension should be added when getting the filename
     * @return string Returns the file name after uploading.
     */
    public static function upload(UploadedFile|string $file, string $folder, bool $withExt = true): string
    {
        $uploadedFile = self::store($file, $folder);

        $fileName = $uploadedFile->getFileName();

        if ($withExt) return $fileName . '.' . $uploadedFile->getExtension();

        return  $fileName;
    }

    public static function uploadAndGetSecurePath(UploadedFile|string $file, string $folder)
    {
        return self::store($file, $folder)->getSecurePath();
    }

    public static function store(UploadedFile|string $file, string $folder)
    {
        return str($file)->startsWith('http') ?
            Cloudinary::upload($file) : $file->storeOnCloudinary($folder);
    }
}
