  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus-circle"></i> Tambah </button>

      <?php $this->load->view("template/breadcrumb.php") ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php
      $data = $this->session->flashdata('sukses');
      if ($data != "") { ?>
        <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
      <?php } ?>

      <?php
      $data2 = $this->session->flashdata('error');
      if ($data2 != "") { ?>
        <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?= $data2; ?></div>
      <?php } ?>

      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomer Hp</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($mahasiswa->result() as $row) : ?>
                    <tr class="odd gradeX">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->nim; ?></td>
                      <td><?php echo $row->nama_mahasiswa; ?></td>
                      <td><?php echo $row->jenis_kelamin; ?></td>
                      <td><?php echo $row->alamat; ?></td>
                      <td><?php echo $row->no_hp; ?></td>
                      <td>
                        <center>
                          <div class="tooltip-demo">
                            <a data-toggle="modal" data-target="#modal-edit<?= $row->id; ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo site_url('mahasiswa/hapus/'.$row->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?= $row->nama_mahasiswa; ?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                          </div>
                        </center>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div id="modal-tambah" class="modal fade">
            <div class="modal-dialog">
              <form action="<?php echo site_url('mahasiswa/tambah'); ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Tambah Mahasiswa</h4>
                  </div>

                  <div class="modal-body">

                    <div class="form-group">
                      <label>Nim</label>
                      <input type="text" name="nim" required placeholder="Masukkan Nim Mahasiswa" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Nama Mahasiswa</label>
                      <input type="text" name="nama_mahasiswa" required placeholder="Masukkan Nama Mahasiswa" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>jenis Kelamin</label>
                      <input type="text" name="jenis_kelamin" required placeholder="Masukkan Jenis Kelamin" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" required placeholder="Masukkan Alamat" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>No Hp</label>
                      <input type="text" name="no_hp" required placeholder="Masukkan No Hp" class="form-control">
                    </div>

                    <br>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <?php $no = 0;
          foreach ($mahasiswa->result() as $row) : $no++; ?>
            <div class="row">
              <div id="modal-edit<?= $row->id; ?>" class="modal fade">
                <div class="modal-dialog">
                  <form action="<?php echo site_url('mahasiswa/edit'); ?>" method="post">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                        
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Data Mahasiswa</h4>
                      </div>
                      <div class="modal-body">

                        <input type="hidden" readonly value="<?= $row->id; ?>" name="id" class="form-control">

                        <div class="form-group">
                          <label>Nim</label>
                          <input type="text" name="nim" autocomplete="off" value="<?= $row->nim; ?>" required placeholder="Edit Nim" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Nama Mahasiswa</label>
                          <input type="text" name="nama_mahasiswa" autocomplete="off" value="<?= $row->nama_mahasiswa; ?>" required placeholder="Edit Nama Mahasiswa" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="jenis_kelamin" autocomplete="off" value="<?= $row->jenis_kelamin; ?>" required placeholder="Edit Jenis Kelamin" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" autocomplete="off" value="<?= $row->alamat; ?>" required placeholder="Edit Alamat" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="text" name="no_hp" autocomplete="off" value="<?= $row->no_hp; ?>" required placeholder="Edit No Hp" class="form-control">
                        </div>

                        <br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"> Edit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->