<?php

namespace Asus\XuongOop\Models;

use Asus\XuongOop\Commons\Model;

class Product extends Model
{
    protected string $tableName = 'products';
    
    public function getTop4()
    {
        try {
            return  $this->queryBuilder
                ->select(
                    'p.id',
                    'p.category_id',
                    'p.name',
                    'p.img_thumbnail',
                    'p.created_at',
                    'p.updated_at',
                    'p.overview',
                    'p.content',
                    'p.price_regular',
                    'p.price_sale',
                    'c.name as c_name'
                )
                ->from($this->tableName, 'p')
                ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
                ->orderBy('p.id', 'desc')
                ->setFirstResult(0)
                ->setMaxResults(4)
                ->fetchAllAssociative();
        } catch (\Throwable $e) {
            echo $e->getMessage();
            die;
        }
    }
    public function all()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.price_regular',
                'p.price_sale',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();
    }
    public function shop()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.price_regular',
                'p.price_sale',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->orderBy('p.id', 'desc')
            ->setFirstResult(0)
            ->setMaxResults(6)
            ->fetchAllAssociative();
    }
    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone ($this->queryBuilder);


        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.price_regular',
                'p.price_sale',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();

        return [$data, $perPage];
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.overview',
                'p.content',
                'p.price_regular',
                'p.price_sale',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->where('p.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
    public function countProductsByCategory($category_id, $categorie_name)
    {
        $data =  $this->queryBuilder
            ->select('COUNT(*) as sosp')
            ->from($this->tableName)
            ->where('category_id = ? ')
            ->setParameter(0, $category_id) // xuất hiện 1 lần nên truyền số không vào 
            // doctrine sẽ đếm từ 0
            ->fetchAllAssociative();
        return [$categorie_name, $data[0]['sosp']];
    }
    
}
