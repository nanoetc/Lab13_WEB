<?= $this->include('template/header_admin'); ?>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if($artikel): foreach($artikel as $row): ?>
    <tr>
      <td><?= $row['judul']; ?></b>
        <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
      </td>
      <td><?= $row['status']; ?></td>
      <td>
        <a class="btn" href='/lab11_php_ci/ci4/public/admin/artikel/edit/' . $row['id']>">Ubah</a>
        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href='/lab11_php_ci/ci4/public/admin/artikel/delete/' . $row['id']>">Hapus</a>
      </td>
    </tr>
    <?php endforeach; else: ?>
      <tr>
        <td colspan="4">Belum ada data.</td>
      </tr>
      <?php endif; ?>
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </tfoot>
  </table>

<?= $this->include('template/footer'); ?>
