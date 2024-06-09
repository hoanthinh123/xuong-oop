<?php
 namespace Asus\XuongOop\Controllers\Client;

use Asus\XuongOop\Commons\Controller;
use Asus\XuongOop\Commons\Helper;
use Asus\XuongOop\Models\Category;
use Asus\XuongOop\Models\Product;

 class ShopController extends Controller{
     private Product $product;
     private Category $category;

     public function __construct(){
        $this->product = new Product();
        $this->category = new Category();

     }
     public function index(){
        $CategoryAll = $this->category->all();
        $ProductAll = $this->product->all();    
        // Helper::debug($Categorys);
        $this->renderViewClient('shop',[
            'CategoryAll' => $CategoryAll,
            'ProductAll'=> $ProductAll
        ]);
     }
    //  public function paginate($page = 1, $perPage = 5)
    //  {
    //      $queryBuilder = clone($this->queryBuilder);
 
    //      $totalPage = ceil($this->count() / $perPage);
 
    //      $offset = $perPage * ($page - 1);
 
    //      $data = $queryBuilder
    //      ->select('*')
    //      ->from($this->tableName)
    //      ->setFirstResult($offset)
    //      ->setMaxResults($perPage)
    //      ->orderBy('id', 'desc')
    //      ->fetchAllAssociative();
 
    //      return [$data, $totalPage];
    //  }
 }