<?php

namespace App\Repository\Eloquent;

use App\Models\Kendaraan;
use App\Repository\KendaraanRepositoryInterface;
use Illuminate\Support\Collection;

class KendaraanRepository extends BaseRepository implements KendaraanRepositoryInterface
{
   /**
    * UserRepository constructor.
    *
    * @param Kendaraan $model
    */
   public function __construct(Kendaraan $model)
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
        $kendaraan = $this->model->create([
            '_id'     => $data['_id'],
            'tahun'   => $data['tahun'],
            'warna'   => $data['warna'],
            'harga'   => $data['harga'],
            'stok'    => $data['stock']
        ]);

        return $kendaraan;
   }
   public function delete($id)
   {
        $kendaraan = $this->model->find($id);
        $kendaraan->delete();

        return $kendaraan;
   }
}