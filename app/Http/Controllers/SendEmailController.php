<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExampleMailable;
use App\Mail\MailablePayroll;
use App\Models\PayrolModel;
use Symfony\Component\HttpFoundation\Response;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $response = [
            'suceess' => true,
            'message' => 'send payroll Successfully',
        ];
        $data = PayrolModel::where('email', '<>', '',)->get();
        foreach ($data as $dt) {
            $data=PayrolModel::where('link_token',$dt->link_token)->first();
            $data->update([
                'status'=>'success'
            ]);
            $details = [
                'judul' => 'Payroll ',
                'konten' => 'Kami dengan senang hati menginformasikan bahwa payroll karyawan Rumah Sakit Pindad untuk bulan Juli 2023 telah berhasil diproses. Gaji dan tunjangan karyawan telah disetorkan ke rekening masing-masing pada tanggal 30 Juli 2023. Harap dapat memeriksa rekening Anda untuk memastikan pembayaran telah diterima dengan benar. Jika Anda menemui masalah atau pertanyaan terkait penggajian, jangan ragu untuk menghubungi tim HR kami. Terima kasih atas kerja keras dan dedikasi Anda dalam menjaga kualitas pelayanan di Rumah Sakit Pindad' ,
                'link' => 'Untuk mengunduh slip gaji klik link: https://rsupindadturen.com/payroll/'. $dt->link_token,
            ];
            Mail::to($dt->email)->send(new MailablePayroll($details));
        }

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
