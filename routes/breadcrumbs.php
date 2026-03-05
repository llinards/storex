<?php

use App\Models\Category;
use App\Models\Product;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('Sākums'), route('home'));
});

Breadcrumbs::for('category.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Tenta angāru veidi'), route('category.index'));
});

Breadcrumbs::for('category.show', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('category.index');
    $trail->push($category->title, route('category.show', $category->slug));
});

Breadcrumbs::for('product.show', function (BreadcrumbTrail $trail, Product $product) {
    $trail->parent('category.show', $product->category);
    $trail->push($product->title);
});
