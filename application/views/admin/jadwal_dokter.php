
<!-- Begin Page Content -->
        <div class="container-fluid">

        <a href="<?= base_url('admin/tambah_jadwal');?>" class="btn btn-primary btn-circle btn-lg mb-3">
                    <i class="fas fa-ambulance"></i>
                  </a>
        <small>Tambah Data</small>


          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $title;  ?></h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">


  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Dokter Spesialis</th>
            <th>Keterangan</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
        <?php $no = 1;
        foreach ($jadwal_dokter as $jd) : ?>
          <tr>
          <td><?php echo $no++ ?></td>
            <td><?= $jd['nama']; ?></td>
            <td><?= $jd['dokter_spesialis']; ?></td>
            <td><?= $jd['keterangan']; ?></td>
            <td>
                <a href="<?= base_url('admin/detail_jadwal_dokter/') . $jd['id']; ?>"class="badge badge-warning">View</a>
                <a href="" class="badge badge-success">Edit</a>
                <a href="<?php echo base_url('admin/delete_jadwal_dokter/'); ?><?= $jd['id']; ?>" class="badge badge-danger" onClick="return confirm('Anda yakin akan menghapus data *<?= $jd['nama']; ?>*?')">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  

                  </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->