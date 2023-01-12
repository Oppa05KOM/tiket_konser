<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CHECK - IN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home/index">Beranda</a></li>
                        <li class="breadcrumb-item active">Check-in</li>
                    </ol>
                </div>
            </div>
        </div>  
    </div>

    <section class = "content">
        <div class="container">
            <?php echo $this->session->flashdata('message'); ?>

        </center>
            <div class="table-responsive">
                <table class="table table-striped text-center">  
                    <tr class="bg-secondary ">
                        <th>No.</th>
                        <th>Kode Tiket</th>
                        <th>Status</th>
                        <th colspan="8">Action</th>
                    </tr>

                <?php foreach ($pesan as $ps) : ?>
                    <tr>
                        <td><?php echo ++$start ?>.</td>
                        <td><?php echo $ps['kode'] ?></td>
                        <td><?php echo $ps['status'] ?></td>
                        <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'P' ) { ?>
                            <td><?php echo anchor('cekin/edit_pesan2/'.$ps['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                        <?php } ?>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($pesan)) : ?>
                    <tr>
                        <td colspan="12">
                            <div class="alert alert-warning" role="alert"><center>
                                <h4>Data <b>TIDAK</b> ditemukan !! </h4></center>
                            </div>
                        </td>
                    </tr>
                <?php endif ; ?>

                </table>
            </div> 

            <div class="row">
                <div class="col">
                    <?php echo $this->pagination->create_links() ; ?>
                </div>
            </div>

            <table class="table text-center">  
                <tr>
                    <th class="h6 right">Jumlah Data :  <span class="badge badge-warning center"><b> <?php echo $total_rows ; ?></b></span></th>
                </tr>
            </table>
        </div>
    </section><br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">INPUT FILE ENGINE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open_multipart('engine/tambah_aksi') ; ?>
                        <div class="form-group">
                            <label>Tanggal Upload</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Title File</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>File PDF</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <br>

                        <center>
                        <button type="RESET" class="btn btn-danger" data-dismiss="modal">RESET</button>
                        <button type="SUBMIT" class="btn btn-primary">SIMPAN</button>
                        </center>
                    <?php form_close() ; ?>
                </div>
            </div>
        </div>
    </div>
</div>