<!-- <style>
    .dataTables_info {
        font-size: 12px;
    }
    .paginate_button {
        font-size: 12px;
    }
</style> -->

<h3 class="mb-2"> Halaman Management User</h3>
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Data User</h6>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="container">
                        <table id="user" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>NIM</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u->nama; ?></td>
                                        <td><?= $u->nama; ?></td>
                                        <td>
                                            <?php if ($u->active == 1) { ?>
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            <?php } else { ?>
                                                <span class="badge badge-sm bg-gradient-secondary">Not Active</span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#user').DataTable();
            });
        </script>