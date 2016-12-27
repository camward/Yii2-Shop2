<?php

namespace app\controllers;

class ShopController extends AppController
{
    public function actionCategory()
    {
        return $this->render('category');
    }

    public function actionCategoryView()
    {
        return $this->render('category-view');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
