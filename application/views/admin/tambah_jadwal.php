        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal Praktek Dokter</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">

                    Silahkan Upload Gambar. <strong>Size Maximal 3Mb !</strong>
           
                    <?= form_open_multipart('admin/tambah_jadwal'); ?>

                  <form>
                    <div class="form-group col-md-6">
                      <br>
                      <input type="file" id="image" name="image" class="form-control-file"required>

                      <div class="form-group">
                        <br>
                        <input type="text" class="form-control" id="nama"  name="nama" placeholder="Nama Dokter"required>
                        <small id="nama" class="form-text text-muted">Nama Lengkap.</small>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="dokter_spesialis" name="dokter_spesialis" placeholder="Dokter Spesialis"required>
                        <small id="dokter_spesialis" class="form-text text-muted">*Contoh. Dokter Umum</small>
                      </div>

                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleFormControlTextarea1">Keterangan</label>
                      <textarea class="form-control" id="keterangan" name="keterangan" rows="2"></textarea>
                      <small id="nama_dokter" class="form-text text-muted">Masukan tanda - Jika tidak ada keterangan</small>
                    </div>
              <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>

                  </form>
                              
                  </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->