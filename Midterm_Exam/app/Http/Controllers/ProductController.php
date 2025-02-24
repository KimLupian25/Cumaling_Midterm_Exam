<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Array of books with title, author, and year
        $books = [
            ['title' => 'Secretly Marries', 'author' => 'forgottenglimmerENG', 'year' => 2018],
            ['title' => 'The Bet', 'author' => 'ilurvbooks', 'year' => 2014],
            ['title' => 'Lady and the Wolf', 'author' => 'Hendrixx', 'year' => 2017],
            ['title' => 'For Your Eyes Only', 'author' => 'kaywritesx', 'year' => 2016]
        ];

        // Pass the books array to the welcome view
        return view('welcome', compact('books'));
    }
}