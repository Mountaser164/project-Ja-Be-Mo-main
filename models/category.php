

<?php

include_once __DIR__ . "/db_connect.php";

class catogeryModels{
    public $id;
    public $name;




public function _construct(){
    $this->name ='';
}

public function save(){
    global $pdo;
    
        $stmt = $pdo->prepare("INSERT INTO category   (name) VALUES (:name)");
        $stmt->execute([':name' => $this->name]);
        $idfetchstatement = $pdo->prepare("SELECT LAST_INSERT_ID();");
        $idfetchstatement->execute();
        $this->id = $idfetchstatement->fetchAll()[0]["LAST_INSERT_ID()"];

}


public function update(){
    
    global $pdo;

    $stmt = $pdo->prepare("UPDATE category set name = :name where id = :id");
    $stmt->execute([':name' => $this->name, ':id' => $this->id]);
    
    
}


public function delete(){

    global $pdo;

    $stmt = $pdo->prepare("DELETE from category where id = :id");
    $stmt->execute([':id' => $this->id]);


}




public function selectItem($id){

    global $pdo;
    $stmt = $pdo->prepare("SELECT * from category where id =:id");
    $stmt->execute([':id' => $id ]);

    $item = $stmt->fetch(PDO::FETCH_OBJ);

    $this->name = $item->name;
  

}





public function selectAll() {


    global $pdo;
    $stmt = $pdo->query("SELECT * FROM category");
    // $stmt = $pdo->prepare();

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ); 
    
}

}
?>