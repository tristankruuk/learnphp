<?php

namespace App\Controllers;


use App\Models\Article;

class ArticlesController
{
    public function index() {
        $articles = Article::all();
        $title = 'Articles';
        view('articles/index', compact('title', 'articles'));
    }

    public function create() {
        $title = 'New Article';
        view('articles/create', compact('title'));
    }

    public function store() {
        $article = new Article();
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->date = $_POST['date'];
        $article->author = $_POST['author'];
        $article->save();
        redirect('/admin/articles');
    }

    public function view() {
        dump($_GET['id']);
    }
}