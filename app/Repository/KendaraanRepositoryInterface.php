<?php
namespace App\Repository;


interface KendaraanRepositoryInterface
{
   public function all();

   public function store($data);
   
   public function delete($id);
}