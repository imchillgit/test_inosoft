<?php


declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\KendaraanService;
use App\Models\Kendaraan;
use Illuminate\Http\Request;


class KendaraanController extends Controller
{
    private $kendaraanService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->middleware('auth:api');
        $this->kendaraanService = $kendaraanService;
    }
    public function index()
    {
        //
        $kendaraan = $this->kendaraanService->getAll();
        return $kendaraan;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $kendaraan = $this->kendaraanService->savePostData($data);

        return $kendaraan;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendararan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->kendaraanService->deletebyId($id);
        return response()->json($id);
        //
    }
}
