<?php

class MainController extends AbstractController
{
    public function index()
    {
        $model = $this->getModel(Model::class);
        $articles = $model->getArticles();
        $this->render('view/homepage.php', compact('articles'));
    }

    public function gallery()
    {
        $model = $this->getModel(Model::class);
        $articles = $model->getArticles();
        $this->render('view/gallery.php', compact('articles'));
    }

    public function articles()
    {
        $model = $this->getModel(Model::class);
        $articles = $model->getArticles();
//        if (!$articles) {
//            return $this->render('view/404.php');
//        }
        $this->render('view/articles.php', compact('articles'));
    }

    public function article()
    {
        $id = filter_input(INPUT_GET, 'id');
        $model = $this->getModel(Model::class);
        $article = $model->getArticle($id);

        if (!$article) {
            return $this->render('view/404.php');
        }
        $this->render('view/article.php', compact('article'));
    }

    public function contact()
    {
        // $model = $this->getModel(Model::class);
        //$data = $model->getData2();
        $this->render('view/contact.php');
    }

    public function admin()
    {
        // $model = $this->getModel(Model::class);
        //$data = $model->getData2();
        $this->render('view/adminPage.php');
    }


    public function pageNotFound()
    {
        http_response_code(404);
        $this->render('view/404.php');
    }
}