<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $categories = GalleryCategory::all();
        return view('backend.pages.admin.gallery-category.index', compact("categories"));
    }
    public function create()
    {
        return view('backend.pages.admin.gallery-category.create');
    }



}
