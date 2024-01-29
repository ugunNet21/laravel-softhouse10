<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image_path', 'category_id'];
    public function categoryGallery()
    {
        return $this->belongsTo(GalleryCategory::class);
    }
}
