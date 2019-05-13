<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('admin/newarticel'); ?>" class="btn btn-primary mb-3">Add New Articel</a>

                    <?php $i = 1; ?>
                    <?php foreach ($articel as $r) : ?>
                <div class="container-fluid">
                        <div class="col-md-4 float-left ">
                            <div class="card mb-3 border-left-primary">
                                  <img class="card-img-top" src="" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title"><?= $r['title']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <a href="<?= base_url('admin/viewarticel/') . $r['id']; ?>" class="badge badge-warning">view</a>
                                    <a href="<?= base_url('controller/index_edit/') . $r['id']; ?>" class="badge badge-success">edit</a>
                                    <a href="<?= base_url('controller/delete/') .$r['id'] ?>" onclick="return confirm('Yakin Hapus?')" class="badge badge-danger">delete</a>
                                  </div>
                            </div>
                        </div>
                </div>


                    <?php $i++; ?>
                    <?php endforeach; ?>
            


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 