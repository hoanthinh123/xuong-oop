<?php

namespace Asus\XuongOop\Controllers\Admin;

use Asus\XuongOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        $this->renderViewAdmin(__FUNCTION__);
    }
}