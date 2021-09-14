<?php
namespace App\Controllers;
use App\Models\ProductModel;

class productController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }


    public function index(){
        $products = parent::index();
        include "src/Views/Product/list.php";

    }

    public function store()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Product/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "type" => $_POST["type"],
                "size" => $_POST["size"],
                "origin" => $_POST["origin"],
                "material" => $_POST["material"],
                "brand" => $_POST["brand"],
                "insurance" => $_POST["insurance"],
                "shipp" => $_POST["shipp"],

            ];
            $this->model->store($data);
            header("Location:index.php?page=product-list");
        }

    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }

    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $book = $this->model->getById($id);
            include "src/Views/Product/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "type" => $_POST["type"],
                "size" => $_POST["size"],
                "origin" => $_POST["origin"],
                "material" => $_POST["material"],
                "brand" => $_POST["brand"],
                "insurance" => $_POST["insurance"],
                "shipp" => $_POST["shipp"],

            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }


    public function search($keyword){
        $books = $this->model->search($keyword);
        include "src/Views/Product/list.php";
    }

}
