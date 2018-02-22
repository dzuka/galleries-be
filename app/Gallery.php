<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Gallery extends Model
{
    public $timestamps = false;
    // protected $casts = [
    //     'images_url' => 'array'
    //   ];
    public function users(){
        return $this->belongsTo(User::class);
    }
    public static function search($term)
    {
        return self::where('name', 'LIKE', '%'.$term.'%')->get();
    }
  
}