<?php 

namespace Asus\XuongOop\Controllers\Client;

use Asus\XuongOop\Commons\Controller;
use Asus\XuongOop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'Hoanthinh';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}