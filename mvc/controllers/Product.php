<?php
class Product extends Controller
{
    function getProduct()
    {
    }
    function detailProduct($id)
    {
        $product = $this->model('ProductModel');
        echo $product->getDetailsProduct($id);
    }
}
?>