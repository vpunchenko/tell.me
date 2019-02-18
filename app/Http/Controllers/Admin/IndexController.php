<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        $data = array(
            'title' => 'Laravell project',
            'data' => [
                'one'=>'List 1',
                'two'=>'List 2',
                'three'=>'List 3',
                'four'=>'List 4',
                'five'=>'List 5'
            ],
            'dataI'=>['List 1','List 2','List 3','List 4'],
            'bvar'=>true,
            'script'=>"<script>alert('hello')</script>"
        );
        if (view()->exists('index')) {
            return view('index', $data);
        }

    }
}
