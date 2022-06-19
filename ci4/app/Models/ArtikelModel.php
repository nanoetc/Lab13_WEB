<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
  protected $table = 'artikel';
  protected $primarykey = 'id';
  protected $useAutoIncrement = true;
  protected $allowFields = ['judul','isi','status','slug','gambar'];

} ?>
