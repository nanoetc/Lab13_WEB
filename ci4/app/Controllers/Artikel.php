<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
  public function index()
  {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('/artikel/index', compact('artikel','title'));
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
  public function admin()
  {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/admin', compact('artikel', 'title'));
  }
  public function add()
  {
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

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
} ?>
