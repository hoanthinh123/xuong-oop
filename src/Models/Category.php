<?php

namespace Asus\XuongOop\Models;

use Asus\XuongOop\Commons\Model;

class Category extends Model
{
   protected string $tableName = 'categories';
   public function all() {
      return $this->queryBuilder
      ->select('*')
      ->from($this->tableName)
      ->orderBy('id', 'desc')
      ->fetchAllAssociative();
  }
  
}
