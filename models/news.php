<?php
include_once __DIR__ . "/db_connect.php";

class newsModels{
    public $id;
    public $title;
    public $post;
    public $date;
    public $category_id;
    public $user_id;
    public $image;

    //hallo//
        //hallo//




     public function __construct(){

        
        $this->title = '';
        $this->post = '';
        $this->date = date('Y-m-d');
        $this->category_id = null;
        $this->user_id = null;
        $this->image = null;

    }




    public function save(){
        global $pdo;
        
            $stmt = $pdo->prepare("INSERT INTO news (title, post, date, category_id, user_id ,image) VALUES (:title, :post, :date, :category_id, :user_id, :image)");
            $stmt->execute([':date' => $this->date, ':title' => $this->title, ':post' => $this->post, ':category_id' => $this->category_id, ':user_id' => $this->user_id,':image' => $this->image]);
            $idfetchstatement = $pdo->prepare("SELECT LAST_INSERT_ID();");
            $idfetchstatement->execute();
            $this->id = $idfetchstatement->fetchAll()[0]["LAST_INSERT_ID()"];

    }


    public function update(){
        
        global $pdo;

        $stmt = $pdo->prepare("UPDATE news set title = :title, post = :post, date = :date, category_id = :category_id, user_id = :user_id  where id = :id");
        $stmt->execute([':date' => $this->date, ':title' => $this->title, ':post' => $this->post, ':category_id' => $this->category_id, ':user_id' => $this->user_id, ':id' => $this->id]);
        
        
    }


    public function delete(){

        global $pdo;

        $stmt = $pdo->prepare("DELETE from news where id = :id");
        $stmt->execute([':id' => $this->id]);


    }




    public function selectItem($id){

        global $pdo;
        $stmt = $pdo->prepare("SELECT * from news where id =:id");
        $stmt->execute([':id' => $id ]);

        $item = $stmt->fetch(PDO::FETCH_OBJ);

        $this->title = $item->title;
        $this->post = $item->post;
        $this->date = $item->date;
        $this->category_id = $item->category_id;
        $this->user_id = $item->user_id;
        $this->id = $item->id;
        


    }




   
    public function selectAll() {


        global $pdo;
        // $stmt = $this->pdo->query("SELECT * FROM news");
        $stmt = $pdo->prepare("SELECT *, users.name as user_name, category.name as category_name,news.id as news_id
        FROM news JOIN category ON news.category_id = category.id  JOIN users ON news.user_id = users.id");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); 
        
    }

    public function search($Zoeken) {
        global $pdo;
    
        // Prepare the SQL query with placeholders for the search term
        $stmt = $pdo->prepare("
            SELECT 
                news.*, 
                users.name AS user_name, 
                category.name AS category_name, 
                news.id AS news_id
            FROM 
                news 
            JOIN 
                category ON news.category_id = category.id  
            JOIN 
                users ON news.user_id = users.id
            WHERE 
                news.title LIKE :Zoeken
                OR news.post LIKE :Zoeken
                OR users.name LIKE :Zoeken
                OR category.name LIKE :Zoeken
        ");
    
        // Bind the search term with wildcards to the prepared statement
        $searchTermWithWildcards = '%' . $Zoeken . '%';
        $stmt->bindParam(':Zoeken', $searchTermWithWildcards, PDO::PARAM_STR);
    
        // Execute the statement
        $stmt->execute();
    
        // Fetch and return the results as objects
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



    public function lasteNews(){

        global $pdo;
        // $stmt = $this->pdo->query("SELECT * FROM news");
        $stmt = $pdo->prepare("SELECT *, users.name as user_name, category.name as category_name,news.id as news_id
        FROM news JOIN category ON news.category_id = category.id  JOIN users ON news.user_id = users.id ORDER BY news.date DESC limit 1");

        $stmt->execute();
        $item = $stmt->fetch(PDO::FETCH_OBJ);
        return $item;

    }



    



   

    



}

//hallo
// 
// $news = new newsModels();

// print_r($news);

// $news->setValue('ahmed2', 'sport', '13-02-2022', 1, 1 );

// print_r($news);


// $news->save();


// $news->selectItem(7);

// print_r($news);


    // $allItems = $news->selectAll();
    //   print_r($allItems);


?>