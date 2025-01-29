<?php
include_once __DIR__ . "/../models/news.php";
include_once __DIR__ . "/../views/news.php";



class NewsPageController{

        public static function execute(){
        $news = new newsModels();
        $allItems = $news->selectAll();
        $lastelast = $news->lasteNews();
        NewsView::render($allItems,$lastelast);
    }


    public static  function search($Zoeken){
        $news = new newsModels();
        $allItems = $news->search($Zoeken);
        $lastelast = $news->lasteNews();
        NewsView::render($allItems,$lastelast,$Zoeken);
    }
}




if($_SERVER['REQUEST_METHOD'] === 'POST') {
      
    NewsPageController::search($_POST['zoekterm']);
   
    } 
    else {

        NewsPageController::execute();
    }

