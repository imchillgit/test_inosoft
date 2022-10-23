<?php

namespace App\Repository\Eloquent;

use App\Models\Order;
use Illuminate\Support\Collection;

class TransactionRepository extends BaseRepository
{
     /**
      * UserRepository constructor.
      *
      * @param Order $model
      */
     public function __construct(Order $model)
     {
          parent::__construct($model);
     }
     /**
      * @return Collection
      */
     public function all()
     {
          return $this->model->all();
     }
     public function store($data)
     {
          $order = $this->model->create([
               'idkendaraan'        => $data['idkendaraan'],
               'jumlah_penjualan'   => $data['jumlah_penjualan'],
               'harga'              => $data['harga'],
               'harga_total'        => $data['harga'] * $data['jumlah_penjualan'],
          ]);

          return $order;
     }
     public function getTotalPriceById($id)
     {
          $find = $this->model->where('idkendaraan', $id)->sum('harga_total');
          return response()->json($find);
     }
}
