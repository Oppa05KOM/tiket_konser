
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA PENGGUNA / USER</h1>
                    </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home/index">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Pengguna / User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class = "content"><center>

    <?php if ($_SESSION['hak_akses'] == 'A' ) { ?>
        <?php echo $this->session->flashdata('message'); ?>
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambahkan Data</button>
    <?php } ?>

        <br><br>
            <div class="row">
                <div class="col-md">
                    <form action="<?php echo base_url('user/index') ; ?>" method="POST">
                        <div class="input-group mb-3">
                        <input class="form-control" type="search" name="keyword" placeholder="Search. . ." aria-label="Search" autocomplete="off">
                            <div class="input-group-append">
                                <input class="btn btn-dark" type="submit" name="submit"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </center><br>
    
        <div class="table-responsive">
            <table class="table table-striped text-center">  
                <tr class="bg-secondary">
                    <th>No.</th>
                    <th>Nama Lengkap User</th>
                    <th>Username / Nama Pengguna</th>
                <?php if ($_SESSION['hak_akses'] == 'A' ) { ?>
                    <th colspan="8">Action</th>
                <?php } ?>
                </tr>
            
                <?php foreach ($user as $usr) : ?>
                    <tr>
                        <td><?php echo ++$start ?>.</td>
                        <td><?php echo $usr['nama_lengkap'] ?></td>
                        <td><?php echo $usr['username'] ?></td>
                    <?php if ($_SESSION['hak_akses'] == 'A' ) { ?>
                        <td><?php echo anchor('user/edit_user/'.$usr['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                        <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('user/hapus/'.$usr['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <?php } ?>
                    </tr>
                <?php endforeach; ?>
            
                <?php if (empty($user)) : ?>
                    <tr>
                        <td colspan="12">
                            <div class="alert alert-danger" role="alert"><center>
                                <h4>Data <b>TIDAK</b> ditemukan !! </h4></center>
                            </div>
                        </td>
                    </tr>
                <?php endif ; ?>
            </table>
        </div><br>

            <table class="table text-center">  
                <tr>
                    <th class="h5 right">Jumlah Data :  <span class="badge badge-warning center"><b> <?php echo $total_rows ; ?></b> Data</span></th>
                </tr>
            </table><br>

            <div class="row">
                <div class="col">
                    <?php echo $this->pagination->create_links() ; ?>
                </div>
            </div>

            <a id="back-to-top" href="#" class="btn btn-dark back-to-top" role="button" aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
    </section><br>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">INPUT DATA PENGGUNA (USER)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <div class="modal-body">
            <?php echo form_open_multipart('user/tambah_aksi') ; ?>
                <div class="form-group">
                    <label>Nama Lengkap User</label>
                    <input type="text" name="nama_lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="form-group">
                            <div class="icheck-warning">
                                <input type="checkbox" id="agreeTerms" name="hak_akses" value="O">
                                    <label for="agreeTerms">
                                        Saya Setuju
                                    </label>
                            </div>
                        </div>
                    </div>
                </div><br>

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
