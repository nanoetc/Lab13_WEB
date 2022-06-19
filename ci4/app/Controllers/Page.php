<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

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
  public function artikel()
  {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/index', compact('artikel', 'title'));
  }
  public function view($slug)
  {
    $model = new ArtikelModel();
    $artikel = $model->where([
      'slug' => $slug
    ])->first();
    if (!$artikel)
    {
      throw PageNotFoundException::forPageNotFound();
    }
    $title = $artikel['judul'];;
    return view('artikel/detail', compact('artikel', 'title'));
  }
  public function admin_index()
  {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/admin_index', compact('artikel', 'title'));
  }
  public function add()
  {
    $validation = \Config\Services::validation();
    $validation = \Config\Services::validation();
    $validation = \Config\Services::validation();

    if ($isDataValid)
    {
      $artikel = new ArtikelModel();
      $artikel->insert([
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
        'slug' => url_title($this->request->getPost('judul')),
      ]);
      return redirect('admin/artikel');
    }
    $title = "Tambah Artikel";
    return view('artikel/form_add', compact('title'));
  }
  public function tos()
  {
    echo "Ini halaman Term of Services";
  }
}

?>
