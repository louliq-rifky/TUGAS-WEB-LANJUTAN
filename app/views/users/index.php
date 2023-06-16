<h2>Data Pengguna</h2>

<a href="<?php echo URL; ?>users/input" class="btn">Tambah Data</a>

<table>
      <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NAMA PENGGUNA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>KODE POS</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo $row['user_role']; ?></td>
                  <td><?php echo $row['user_aktif']; ?></td>
                  <td><a href="<?php echo URL; ?>users/edit/<?php echo $row['user_id']; ?>"" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>users/delete/<?php echo $row['user_id']; ?>"" class="btn" onclick="return confirm('Apakah benar ingin dihapus?')">Delete</a></td>
            </tr>
      <?php } ?>

</table>