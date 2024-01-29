<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
}
