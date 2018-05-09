<?php

namespace app\controllers;

class PostController extends AppController
{
    public function actionTest()
    {
        $names = ['Ivanov', 'Petrov', 'Sidorov'];

        return $this->render('test', compact('names'));
    }
}