<?php

namespace Asus\XuongOop\Controllers\Admin;

use Asus\XuongOop\Commons\Controller;
use Asus\XuongOop\Commons\Helper;
use Asus\XuongOop\Models\Category;
use Asus\XuongOop\Models\Product;

class DashboardController extends Controller
{
    private Product $product;
    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function dashboard()
    {
        $categorys = $this->category->all();
        $countProductsbyCategories = [];
        foreach ($categorys as $categorie) {
            $countProductsbyCategories[] = $this->product->countProductsByCategory($categorie['id'], $categorie['name']);
        }
        $analysisProduct = array_map(function ($item) {
            return [
                $item['0'],
                $item['1'],
            ];
        }, $countProductsbyCategories);

        array_unshift($analysisProduct, ['Tên sản phẩm', 'Số sản phẩm']);

        $this->renderViewAdmin(__FUNCTION__, [
            'analysisProduct' => $analysisProduct,
        ]);
    }
  




}
