<?php

return [
//
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    'catalog/page-([0-9]+)' => 'catalog/index/$1', // actionIndex в CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',  // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', //actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //actionAdd в CartController
    'cart/checkout' => 'cart/checkout', //actionCheckout в CartController


    'cart' => 'cart/index', //actionIndex в CartController




    'help'=>'help/index',

    'user/register'=>'user/register',
    'user/login'=>'user/login',
    'user/logout'=>'user/logout',
    'user'=>'user/login',


    'cabinet/edit'=>'cabinet/edit',
    'cabinet'=>'cabinet/index',



    '' => 'site/index', // actionIndex в SiteController




];