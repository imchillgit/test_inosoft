<?php

namespace App\Services;

use App\Repository\Eloquent\KendaraanRepository; 
use Illuminate\Support\Facades\Validator;

class KendaraanService
{
    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }
    public function getAll()
    {
        return $this->kendaraanRepository->all();
    }
    public function savePostData($data)
    {
        $validator = Validator::make($data, [
            '_id'     => 'required',
            'tahun'   => 'required',
            'warna'   => 'required',
            'harga'   => 'required',
            'stok'    => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $result = $this->kendaraanRepository->store($data);

        return $result;
    }
    public function deletebyId($id)
    {
        $result = $this->kendaraanRepository->delete($id);

        return $result;
    }
}