<?php 

namespace Asus\XuongOop\Controllers\Client;

use Asus\XuongOop\Commons\Controller;
use Asus\XuongOop\Commons\Helper;
use Asus\XuongOop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {

        $getTop4 = $this->product->getTop4();
        // Helper::debug($getTop4);

        $this->renderViewClient('home',[
            'getTop4' => $getTop4
        ]);
    }
}