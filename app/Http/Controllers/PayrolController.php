<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUsers;
use App\Imports\PayrolImport;
use App\Models\PayrolModel;
use Symfony\Component\HttpFoundation\Response;

class PayrolController extends Controller
{
    //
    public function importExport()
    {
        return view('payrol');
    }


    public function import(Request $request)
    {
        // Excel::import(new PayrolImport, request()->file('file'));
        Excel::import(new PayrolImport, $request->file('file'));
        $response = [
            'suceess' => true,
            'message' => 'data imported',
        ];
        return response()->json($response, Response::HTTP_OK);
        // return back(); 
    }

    public function showdetail(string $token)
    {
        $data = PayrolModel::where('link_token', $token)->first();
        $response = [
            'suceess' => true,
            'message' => 'data imported',
            'data'  => $data,
        ];
        return response()->json($response, Response::HTTP_OK);
    }
    public function showall()
    {
        $data = PayrolModel::all();
        $response = [
            'suceess' => true,
            'message' => 'data readed',
            'data'  => $data,
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
