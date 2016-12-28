<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use Yii;

class ShopController extends AppController
{
    public function actionProducts()
    {
        $query = Product::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Products - Valensia Restourant', 'ключевые слова', 'описание');
        return $this->render('products', compact('products', 'pages'));
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
