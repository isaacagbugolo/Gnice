<?php

class Product extends Controller {
     public function index(){
        echo 'product';
        $data = [];
        $this->view('Product/product', $data);
    }
}
