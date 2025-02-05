<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function index()
    {
        return view('article', [
            'navbar' => view('partials/navbar'),
            'articleHeroSection' => view('partials/articleHeroSection'),
            'articleCategoryNav' => view('partials/articleCategorySection'),
            'popularArticles' => view('partials/articlePopularSection'),
            'recentArticles' => view('partials/articleRecentSection'),
            'footer' => view('partials/footer')
        ]);
    }
}
