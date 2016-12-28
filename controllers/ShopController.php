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
        if(empty($cat))
            throw new \yii\web\HttpException(404, 'Такой категории нет');

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
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Поиск: ' . $q);
        if(!$q)
            return $this->render('search');
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }

    public function actionSearchForm()
    {
        return $this->render('search-form');
    }

    public function actionProductsView($id)
    {
        $products = Product::find()->where(['id' => $id])->all();
        if(empty($products))
            throw new \yii\web\HttpException(404, 'Такого товара нет');

        $this->setMeta($products[0]->name . ' - Valensia Restourant', 'ключевые слова', 'описание');
        return $this->render('products-view', compact('products'));
    }

}
