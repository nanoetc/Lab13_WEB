<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function about()
  {
    return view('about', [
      'title' => 'halaman about',
      'content' => 'ini adalah halaman about yang menjelaskan tentang isi halaman ini'
    ]);
  }
  public function contact()
  {
    echo "Ini halaman Contact";
  }
  public function index()
  {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/index', compact('artikel','title'));
  }
  public function tos()
  {
    echo "Ini halaman Term of Services";
  }
}
?>
