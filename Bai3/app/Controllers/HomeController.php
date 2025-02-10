<?php
namespace App\Controllers;
use App\Models\Category;
class HomeController
{
    public function index()
    {
        $categories = Category::all();
        var_dump($categories);
        return view('home');
    }
    // public function about()
    // {
    //     return view('about');
    // }
    public function test()
    {
        $data = ['name'=> 'Tennis'];
        Category::create($data);
    }
}

