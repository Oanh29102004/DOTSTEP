<?php
require '../connect/connect.php';
class Category extends connect  { 
    public function listCategory(){
        $sql = 'SELECT * FROM categorys';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function create($name, $image, $status, $description){
        $sql = 'INSERT INTO categorys(name, image, status, description) VALUES (?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $image, $status, $description]);

    }
    public function update($id, $name, $image, $status, $description){
        $sql = 'UPDATE categorys SET name=? , image=?, status=?,  description=? WHERE category_id= ? ';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([ $name, $image, $status, $description, $id]);
    }
    
    public function delete($id){
        $sql = 'DELETE FROM categorys where category_id=?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$_GET['id']]);
    }

    public function detail(){
        $sql = "SELECT * FROM categorys WHERE category_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$_GET['id']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
   

}
