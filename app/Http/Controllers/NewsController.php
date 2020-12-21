<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Здоровье',
        2 => 'ИТ',
        3 => 'Спорт'
    ];

    public function index()
    {

        return view(
            'news.index',
            [
                'categories' => $this->categories,
            ]);
    }

    public function list($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view(
            'news.list',
            [
                'news' => $news
            ]);
    }

    public function newsCard($id)
    {
        $news = (new News())->getById($id);
        return view(
            'news.card',
            [
                'news' => $news
            ]
        );
    }
}
