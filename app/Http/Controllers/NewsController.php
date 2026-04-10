<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class NewsController extends Controller
{
    //
    public function news(){
        $f = Faker::create();
        $news = [];
        for($i=0; $i<10; $i++){
            $title = $f->sentence();
            $body = $f->paragraphs(5);
            $excerpt = substr($body[0], 0, 100) . '...';
            array_push(
                $news, [
                    'title' => $title,
                    'body' => $body,
                    'excerpt' => $excerpt
                ]
            );
        }
        return view('home', ['news' => $news]);
    }
}
