### Fackage được dùng
1. Route: https://github.com/bramus/router
2. View: https://github.com/EFTEC/BladeOne
3. Model: https://github.com/doctrine/dbal/
    
    3.1. Lệnh cài: composer require doctrine/dbal
    
    3.2. Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html
4. Validate: https://github.com/rakit/validation
5. ENV: https://github.com/vlucas/phpdotenv
6. htaccess: 
    ```
    RewriteEngine On
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php [L]
    ```

     <?php if (isset($_SESSION['user'])) : ?>
                                    <div class='btn-group'>
                                        <button class='btn btn-warning btn-sm dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        </button>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='#'>Hồ sơ</a></li>
                                            <li><a class='dropdown-item' href='#'?>'>Giỏ hàng</a></li>
                                            <li>
                                                <hr class='dropdown-divider'>
                                            </li>
                                            <li><a class='dropdown-item' href='<?=  '?act=logout' ?>'>Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                <?php else : ?>
                                    <a href='<?=  asset('logout') ?>' class='font-weight-bold'>Đăng nhập</a>
                                    /<a href='<?=  '?act=login' ?>'>Đăng ký</a>
                                <?php endif ?>
