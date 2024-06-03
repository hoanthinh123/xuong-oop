<?php

namespace Asus\XuongOop\Controllers\Client;
use Asus\XuongOop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Hoanntph45196';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}