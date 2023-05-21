<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable =['path'];

    public static function getUrlByFilePath($filePath , $w = null, $h= null){
        if(!$w && !$h){
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}__{$filename}";

        return Storage::url($file);
    }

    public function getUrl($w = null, $h= null){
        return Image::getUrlByFilePath($this->path, $w ,$h);
    }



    protected $casts = [
        'labels' => 'array'
    ];
    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }


    // funzioni statiche crop immagini
    public static function getUrlByFilePath($filePath, $w = null, $h = null){
        if (!$w && !$h){
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null){
        return Image::getUrlByFilePath($this->path, $w, $h);
    }
}
