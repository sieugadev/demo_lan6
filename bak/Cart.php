<?php
namespace App\Imports;
class Cart
{
    protected $product= null;
    protected $totalprice=0;
    protected $totalquanti=0;
    public function __contruct($model)
    {
          $this->product=$model;
          $this->totalprice=$model->totalprice;
          $this->totalquanti=$model->totalquanti;
    }
    public function Addcart($product,$id)
    {
        $newproduct=
        [
            'soluong'=>0,
            'gia'=>0,
            'info'=>$product,
        ];
        if($this->product)
          {
            if(array_key_exists($id,$product))
             {
                $newproduct=$product[$id];
             }
          }
          $newproduct['soluong']++;
          $newproduct['gia']=$newproduct['soluong']*$newproduct['gia'];
          $this->product[$id]=$newproduct;
          $this->totalprice+=$product->price;
          $this->totalquanti++;
    }
}
