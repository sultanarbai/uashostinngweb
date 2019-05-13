<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <?php  $view = $articel; ?>

            <h3><?= $view['title']; ?></h3>
            <br>
            <h5><?= $view['content']; ?></h5>
            <br>
            <h5><?= date('d F Y', $view['date_created']); ?></h5>
            <br>
            <h6>kategori : '<?= $view['kategori']; ?>'</h6>



        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     