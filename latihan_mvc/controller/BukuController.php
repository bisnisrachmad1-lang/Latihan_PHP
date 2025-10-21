<?php
require_once "./model/BukuModel.php";
require_once "./view/BukuView.php";

class BukuController {
    private $model;

    public function __construct() {
        $this->model = new BukuModel();
    }

    public function tampilkanBuku() {
        $data = $this->model->getAllBuku();
        $view = new BukuView();
        $view->render($data);
    }
}
?>
