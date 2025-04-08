<?php


namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    function add(){
        return view('category.addcategory');
    }
    function display(){
        return view('category.displaycategory');
    }
}
