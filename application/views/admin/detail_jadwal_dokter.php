<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a
            href="#collapseCardExample"
            class="d-block card-header py-3"
            data-toggle="collapse"
            role="button"
            aria-expanded="true"
            aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Detail Jadwal Dokter</h6>
        </a>
        <?php $no = 1;
    foreach ($jadwal_dokter as $jd) {
        ?>
        <!-- Card Content - Collapse -->
           <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <div class="card mb-3 mt-3 ml-3" style="max-width: 940px;">

                    <div class="row no-gutters">
                        
                        <div class="col-md-4 mt-1 ml-1 mb-1">

                        <img src="<?=base_url()?>assets/backend/img/dokter/<?=$jd->image;?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h3 class="card-title"><?= $jd->nama ?></h3>
                                    <h5 class="text-muted"><?= $jd->dokter_spesialis ?></h5>

                                    <small class="card-text"><?= $jd->keterangan ?></small>
                                    
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>

                    </div>

                </div>

                <div class="form-group col-md-6">
                        <a href="<?= base_url('admin/jadwal_dokter');?>" class="badge badge-danger">Kembali</a>
                    </div>
            </div>
            <?php } ?>
        </div>
        
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->