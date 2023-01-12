<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h3><strong>EDIT DATA PENGGUNA / USER</strong></h3>
        <br> </center>
        <?php foreach ($user as $usr)  { ?>
            <form action="<?php echo base_url().'user/update' ; ?>" method="post">
                
            <div class="form-group">
                    <label>Nama Lengkap Pengguna (User)</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
                    <input type="text" name="nama_lengkap" value="<?php echo $usr->nama_lengkap ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" value="<?php echo $usr->username ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $usr->password ?>" class="form-control">
                </div> 

                <div class="form-group">
                    <input type="hidden" name="hak_akses" class="form-control" value="<?php echo $usr->hak_akses ?>">
                </div><br>

                <center>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                    <a href="<?php echo base_url('user/index') ?>" class="btn btn-warning">KEMBALI</i></a>
                </center>
            </form>
        <?php } ?>
    </section><br>
</div>