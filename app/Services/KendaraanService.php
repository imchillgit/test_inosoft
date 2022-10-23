<?php

declare(strict_types=1);

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
        $result = $this->kendaraanRepository->all();
        return response()->json(['status' => '200', 'message' => 'success', 'data' => $result], 200);
    }
    public function savePostData($data)
    {
        $validator = Validator::make($data, [
            '_id'     => 'required',
            'tahun'   => 'required|int|min:1970|max:3000',
            'warna'   => 'required|string|max:30',
            'harga'   => 'required|int',
            'stok'    => 'required|int',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json(['status' => '422', 'message' => 'Unprocessable content', 'data' => $validator->errors()], 422);
        }
        $result = $this->kendaraanRepository->store($data);

        return response()->json(['status' => '201', 'message' => 'success', 'data' => $result], 201);
    }
    public function deletebyId($id)
    {
        $result = $this->kendaraanRepository->delete($id);
        
        return response()->json(['status' => '200', 'message' => 'success', 'data' => $result], 200);
    }
}