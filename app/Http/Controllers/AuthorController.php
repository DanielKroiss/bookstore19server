<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function findBySearchTerm(string $searchTerm)
    {
        $author = Author::with([])
            ->where('firstname', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('lastname', 'LIKE', '%' . $searchTerm . '%')->get();
        return $author;
    }
}
