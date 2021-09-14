<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    protected $table = "products";

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `books`( `name`, `price`, `type`, `size`,`origin`,`material`,`brand`,`insurance`,`shipp`) 
        VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['type']);
        $stmt->bindParam(4, $data['size']);
        $stmt->bindParam(4, $data['origin']);
        $stmt->bindParam(4, $data['material']);
        $stmt->bindParam(4, $data['brand']);
        $stmt->bindParam(4, $data['insurance']);
        $stmt->bindParam(4, $data['shipp']);
        $stmt->execute();

    }


    public function update($id, $data)
    {
        $sql = "UPDATE `books` SET `name`=?,`price`=?,`type`=?,`size`=?,`origin`=?,`material`=?,`brand`=?,`insurance`=?,`shipp`=?, WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['type']);
        $stmt->bindParam(4, $data['size']);
        $stmt->bindParam(4, $data['origin']);
        $stmt->bindParam(4, $data['material']);
        $stmt->bindParam(4, $data['brand']);
        $stmt->bindParam(4, $data['insurance']);
        $stmt->bindParam(4, $data['shipp']);
        $stmt->execute();
    }
}







