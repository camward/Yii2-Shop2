<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class ShopController extends AppController
{
    public function actionProducts()
    {
        $products = Product::find()->all();
        $this->setMeta('Products - Valensia Restourant', 'ключевые слова', 'описание');
        return $this->render('products', compact('products'));
    }

    public function actionCategoryView($id)
    {
        $products = Product::find()->where(['category_id' => $id])->all();
        $cat = Category::find()->where(['id' => $id])->all();
        $this->setMeta($cat[0]->name . ' - Valensia Restourant', 'ключевые слова', 'описание');
        return $this->render('category-view', compact('products', 'cat'));
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
        $this->setMeta('Valensia Restourant', 'ключевые слова', 'описание');
        $hits = Product::find()->where(['hit' => '1'])->limit(4)->all();
        return $this->render('index', compact('hits'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
