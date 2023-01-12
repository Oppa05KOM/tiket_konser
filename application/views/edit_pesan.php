<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">EDIT DATA PESANAN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home/index">Beranda</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </div>
            </div>
        </div>  
    </div>

    <section class="content">
        <div class="container">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-12">
                        <?php foreach ($pesan as $ps)  { ?>
                            <form action="<?php echo base_url().'pesan/update' ; ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Pemesan</label>
                                    <input type="text" name="nama" value="<?php echo $ps->nama ?>"  class="form-control">
                                    <input type="text" name="kode" value="<?php echo $ps->kode ?>"  class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label>No Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" value="<?php echo $ps->no_hp ?>">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $ps->id ?>">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $ps->email ?>">
                                </div>

                                <div class="form-group">
                                    <label>Kota Domisili</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $ps->alamat ?>">
                                    <input type="hidden" name="jumlah" class="form-control" value="<?php echo $ps->jumlah ?>">
                                    <input type="hidden" name="jenis_tiket" class="form-control" value="<?php echo $ps->jenis_tiket ?>">
                                    <input type="hidden" name="status" class="form-control" value="<?php echo $ps->status ?>">
                                </div>
                                <br>
                                <center>
                                    <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-sm btn-danger">RESET</button>
                                    <a href="<?php echo base_url('pesan/index') ?>" class="btn btn-sm btn-warning">KEMBALI</i></a>
                                </center>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
</div>