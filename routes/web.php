<?php

use App\Models\User;
use App\Models\Agent;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard', 'articles' => Article::all()]);
});

Route::get('/articles', function () {
    return view('articles', ['title' => 'Articles', 'articles' => Article::all()]);

});

Route::get('/articles/{article:slug}', function(Article $article) {
    $article = $article->load(['author', 'category']);
    return view('article', ['title' => 'Single Article', 'article' => $article]);
});

// Berpotensi memiliki masalah N+1
// Route::get('/authors/{user}', function (User $user){
//     return view('articles', ['title' => 'Articles by' . $user->name, 'articles' => $user->articles]);
// });

Route::get('/authors/{user}', function (User $user) {
    $articles = $user->articles()->with(['author', 'category'])->get();
    return view('articles', ['title' => 'Articles by ' . $user->name, 'articles' => $articles]);
});


Route::get('/categories/{category:slug}', function (Category $category){
    $category->load('articles.author'); // Load author untuk menghindari N+1 problem
    return view('articles', ['title' => 'Articles in ' . $category->name, 'articles' => $category->articles]);
});

Route::get('/agents', function () {
    return view('agents', ['title' => 'Agents', 'agents' => Agent::all()]);
});

Route::get('/agents/{agent:slug}', function(Agent $agent) {
    return view('agent', ['title' => 'Agent Detail', 'agent' => $agent]);
});



Route::get('/weapon', function () {
    return view('weapon', ['title' => 'Weapon']);
});
Route::get('/map', function () {
    return view('map', ['title' => 'Map']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
