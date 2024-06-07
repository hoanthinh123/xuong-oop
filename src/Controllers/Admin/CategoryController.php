<?php

namespace Asus\XuongOop\Controllers\Admin;

use Asus\FpolyBaseWeb3014\Commons\Helper;
use Asus\XuongOop\Commons\Controller;
use Asus\XuongOop\Models\Category;
use Rakit\Validation\Validator;

class CategoryController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $categorys = $this->category->all();
        // Helper::debug($products);
        $this->renderViewAdmin('categories.index', [
            'categories' => $categorys
        ]);
    }
    public function create()
    {
        $this->renderViewAdmin('categories.create');
    }
    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/categories'));
            exit;
        } else {
            $data = [
                'name'     => $_POST['name'],
            ];

            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/categories'));
            exit;
        }
    }
    public function edit($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('categories.edit', [
            'category' => $category
        ]);
    }

    public function update($id)
    {
        $category = $this->category->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/categories/{$category['id']}/edit"));
            exit;
        } else {
            $data = [
                'name'     => $_POST['name'],
            ];

            $this->category->update($id, $data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url("admin/categories"));
            exit;
        }
    }
    public function delete($id)
    {
        $category = $this->category->findByID($id);

        $this->category->delete($id);

        header('Location: ' . url('admin/categories'));
        exit();
    }
}
