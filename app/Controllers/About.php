<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('about', [
            'navbar' => view('partials/navbar'),
            'aboutHeroSection' => view('partials/aboutHeroSection'),
            'aboutCompanySection' => view('partials/aboutCompanySection'),
            'aboutExperienceSection' => view('partials/aboutExperienceSection'), 
            'aboutContact' => view('partials/aboutContact'),
            'footer' => view('partials/footer')
        ]);
    }
}
