<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'title' => 'news 1',
            'category' => 'category 1'
        ],
        2 => [
            'title' => 'news 2',
            'category' => 'category 2'
        ],
    ];


    public function index()
    {

        foreach ($this->news as $id => $item) {
            $url = route('news-card', ['id' => $id]);
            echo "<div><a href='{$url}'>{$item['title']}</a></div>";
        }

        echo "this is main news page";
        exit;
    }

    public function newsCard($id)
    {
        echo "concrete news {$id}";
        exit;
    }
    public function newsCategory($id)
    {
        echo "category news {$id}";
        exit;
    }
}
