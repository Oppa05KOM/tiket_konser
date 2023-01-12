<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA PEMESAN TIKET</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home/index">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Pemesan Tiket</li>
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
                        <th>Nama Pemesan</th>
                        <th>No Handphone</th>
                        <th>E-mail</th>
                        <th>Kota Domisili</th>
                        <th colspan="8">Action</th>
                    </tr>

                <?php foreach ($pesan as $ps) : ?>
                    <tr>
                        <td><?php echo ++$start ?>.</td>
                        <td><?php echo $ps['kode'] ?></td>
                        <td><?php echo $ps['nama'] ?></td>
                        <td><?php echo $ps['no_hp'] ?></td>
                        <td><?php echo $ps['email'] ?></td>
                        <td><?php echo $ps['alamat'] ?></td>
                        <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                            <td><?php echo anchor('pesan/edit_pesan/'.$ps['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                            <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('pesan/hapus/'.$ps['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
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
</div>