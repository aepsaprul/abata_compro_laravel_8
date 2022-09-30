<?php

namespace App\Http\Controllers;

use App\Models\ComproCabang;
use App\Models\ComproGabung;
use App\Models\ComproPartner;
use App\Models\ComproProduk;
use App\Models\ComproTentang;
use App\Models\ComproTestimoni;
use App\Models\ComproTim;
use Illuminate\Http\Request;

class ComproController extends Controller
{
  public function index()
  {
    $sejarah = ComproTentang::where('grup', 'abata')->where('nama', 'sejarah')->first();
    $gabung = ComproGabung::where('grup', 'abata')->get();
    $cabang = ComproCabang::where('grup', 'abata')->get();
    $produk = ComproProduk::where('grup', 'abata')->get();
    $testimoni = ComproTestimoni::where('grup', 'abata')->get();
    $tim = ComproTim::where('grup', 'abata')->get();
    $partner = ComproPartner::where('grup', 'abata')->get();

    return view('welcome', [
      'sejarah' => $sejarah,
      'gabungs' => $gabung,
      'cabangs' => $cabang,
      'produks' => $produk,
      'testimonis' => $testimoni,
      'tims' => $tim,
      'partners' => $partner
    ]);
  }

  public function tentang()
  {
    $sejarah = ComproTentang::where('grup', 'abata')->where('nama', 'sejarah')->first();
    $visi = ComproTentang::where('grup', 'abata')->where('nama', 'visi')->get();
    $misi = ComproTentang::where('grup', 'abata')->where('nama', 'misi')->get();

    return view('tentang', [
      'sejarah' => $sejarah,
      'visi' => $visi,
      'misi' => $misi
    ]);
  }
}
