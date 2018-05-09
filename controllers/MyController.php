<?php

namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id = 'test')
    {
        $hi = 'Hello World!!!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
//        return $this->render('index', ['hi' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
        // my/blog-post
        return 'Blog Post';
    }
}