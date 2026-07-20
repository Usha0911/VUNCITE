<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

public function storyBased()
    {
        return view('story-based');
    }

    public function techAwareness()
    {
        return view('tech-awareness');
    }

    public function handson()
    {
        return view('handson');
    }

    public function youthMentoring()
    {
        return view('youth-mentoring');
    }

    public function prototype()
    {
        return view('prototype');
    }
  public function aboutus()
    {
        return view('about-us');
    }


    }
