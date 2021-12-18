 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

<div class="row">
    <div class="col-12">
        <?= form_error('isi_aspirasi','<div class="alert alert-danger" role="alert">', '</div');?>
        <?= $this->session->flashdata('message');?>
    </div>  
</div>


<div class="jumbotron jumbotron-fluid bg-info my-2 mx-4">

    <div class="jumbotron-background">
        <img src="<?= base_url('assets/img/welcome_msg.svg'); ?>" class="blur">
    </div>

    <div class="container text-white">

        <h1 class="display-4">Selamat datang, <?= $user['name']; ?>!</h1>
        <p class="lead">Selamat datang di sistem aspirasi Sakura Melati Hotel, silahkan berikan aspirasi anda kepada kami.</p>
        <hr class="my-4">
        <p>Klik tombol tambah aspirasi berikut untuk mengirimkan data aspirasi yang ingin disampaikan.</p>
        <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-primary btn-lg" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Aspirasi</button>

    </div>
    <!-- /.container -->

</div>



<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Aspirasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('User/tambah_aspirasi');?>" method="post">
                <div class="modal-body">
                    <label for="name_aspirasi" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name_aspirasi" name="name_aspirasi" placeholder="Tulis Nama Anda!">
                </div>
                <div class="modal-body">
                    <label for="isi_aspirasi" class="form-label">Aspirasi</label>
                    <input type="text" class="form-control" id="isi_aspirasi" name="isi_aspirasi" placeholder="Tulis Aspirasi Anda!">
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
