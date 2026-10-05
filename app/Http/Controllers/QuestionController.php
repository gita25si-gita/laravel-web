<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
{
    dd($request->all())
    // Mengambil data dari inputan form berdasarkan atribut name-nya
    $data['nama'] = $request->nama;
    $data['email'] = $request->email;
    $data['pertanyaan'] = $request->pertanyaan;

    // Mengirim (passing) array $data ke halaman view home-question-respon
    return view('home-question-respon', $data);
}
}
