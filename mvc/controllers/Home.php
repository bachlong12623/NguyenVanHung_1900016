<?php
class Home extends Controller
{
    function Show()
    {
        $show = $this->model('NewsModel');
        $this->view('ListNew', ["news" => $show->getNews()]);
        // $product = $this->model('ProductModel');
        // echo $product->getProduct();
    }
    function dmsp($id)
    {
        $this->view('danhmuc');
        $this->view('sptheoloai');
        $show = new sptheoloai();
        $show->showsp($id);
    }
    function dssp()
    {
        $this->view('danhmuc');
        $this->view('sanphamnoibat');
    }
}
