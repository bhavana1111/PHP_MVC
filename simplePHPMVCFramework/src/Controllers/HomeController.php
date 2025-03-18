<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journal;

class HomeController extends Controller
{
    public function index()
    {
        $journals=[
            new Journal('My third Journal Entry','2023'),
            new Journal('My second Journal Entry','2022'),
            new Journal('My first Journal Entry','2021')
        ];

        $this->render('index',['journals'=>$journals]);
    }
}