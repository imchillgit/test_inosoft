<?php
namespace App\Repository;

use App\Models\Kendaraan;
use Illuminate\Support\Collection;

interface KendaraanRepositoryInterface
{
   public function all();

   public function store($data);
   
   public function delete($id);
}