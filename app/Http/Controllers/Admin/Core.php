<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{

    public function __construct()
    {
        $this->middleware('myMiddle');
    }


    public function getArticles()
    {
        echo 'Jopa';

    }
    public function getArticle($id)
    {
        echo 'Jopa';
    }
}
