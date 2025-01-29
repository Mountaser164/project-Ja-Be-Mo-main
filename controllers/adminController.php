<?php
include_once __DIR__ . "/../models/news.php";
include_once __DIR__ . "/../views/admin.php";
include_once __DIR__ . "/../models/category.php";
include_once __DIR__ . "/../views/updateNews.php";




class AdminPageController{

    public static function execute(){
    $news = new newsModels();
    $allItems = $news->selectAll();

    $category = new catogeryModels();
    $allcategory = $category->selectAll();

    AdminView::render($allItems,$allcategory);

    

    }


public static function updateNewsView($id){
    $news = new newsModels();
    $news->selectItem($id);
    $category = new catogeryModels();
    $allcategory = $category->selectAll();
    updateNewsView::render($news,$allcategory);

}



    public static function delete($id){
        $news = new newsModels();
        $news->id = $id;
        $news->delete();
        header('Location:adminController.php');

    
       }
    
    public static function addPost() {
    // Controleer of de request methode POST is
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $news = new newsModels();  // Initialiseer de $news variabele hier

        // Stel de eigenschappen in
        $news->title = $_POST['title'];
        $news->post = $_POST['post'];
        $news->date = $_POST['date'];
        $news->category_id = $_POST['category'];
        $news->user_id = 1;


        // Afbeelding uploaden
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = "../uploads/";
            $uploadFile = $uploadDir . basename($_FILES['image']['name']);

             move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
                $news->image = basename($_FILES['image']['name']);
        
        }

        // Voer de insert methode uit en controleer het resultaat
        $news->save();
            // header('Location:adminController.php');

    }
}







public static function updatePost($id) {
    // Controleer of de request methode POST is
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $news = new newsModels();  // Initialiseer de $news variabele hier
        $news->selectItem($id);

        // Stel de eigenschappen in
        $news->title = $_POST['title'];
        $news->post = $_POST['post'];
        $news->date = $_POST['date'];
        $news->category_id = $_POST['category'];
        $news->id= $id;


        // Afbeelding uploaden
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = "../uploads/";
            $uploadFile = $uploadDir . basename($_FILES['image']['name']);

             move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
                $news->image = basename($_FILES['image']['name']);
        
        }

        // Voer de insert methode uit en controleer het resultaat
        $news->update();
            // header('Location:adminController.php');

           

    }
}



   

}





if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {
      
AdminPageController::delete($_GET['delete_id']);

} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['update_id'])) {

    AdminPageController::updateNewsView($_GET['update_id']);
}
else {
// AdminPageController::execute();
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_id'])) {
      
    AdminPageController::updatePost($_POST['update_id']);
    } 
    else {
    AdminPageController::addPost();
    
    }

    AdminPageController::execute();


    

    

