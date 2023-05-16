<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['user_id','category_id','title','body','price'];

    // TNTSearch
    public function toSearchableArray(){
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category' => $category,
        ];
        return $array;
    }
    //tntSearch


    //relazione user annuncio 1-N
    public function user(){
        return $this->belongsTo(User::class);
    } 
    //relazione categoria annuncio N-1
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }

    
}
