<!-- <style>
    .modal-dialog{
        max-width: 700px
    }
</style> -->
<h3>Halaman Data Alumni</h3>
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Data Alumni</h6>
        </div>
        <!-- <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <div class="container">
                    <table id="alumni" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIM</td>
                                <td>Program Studi</td>
                                <td>Judul</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($alumni as $a) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><span class="badge bg-gradient-primary detail" type="button" data-bs-toggle="modal" data-bs-target="#modaldetail"><?= $a->nama; ?></span></td>                                    
                                    <td><?= $a->nim; ?></td>
                                    <td><?= $a->prodi; ?></td>
                                    <td><?= $a->judul; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <div class="container">
                    <table id="alumni" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIM</td>
                                <td>Biodata</td>
                                <td>Kuesioner 1</td>
                                <td>Kuesioner 2</td>
                                <td>Kuesioner 3</td>
                                <td>Kuesioner 4</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($alumni as $a) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nama; ?></td>
                                    <td><?= $a->nim; ?></td>
                                    <td>
                                        <?php if ($a->idks1 == 1) { ?>
                                            ✅
                                        <?php } else if ($a->idks1 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks1 == 1) { ?>
                                            ✅
                                        <?php } else if ($a->stks1 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks2 == 1) { ?>
                                            ✅
                                        <?php } else if ($a->stks2 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks3 == 1) { ?>
                                            ✅
                                        <?php } else if ($a->stks3 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks4 == 1) { ?>
                                            ✅
                                        <?php } else if ($a->stks4 == 0) { ?>
                                            ❌
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

    <!-- Modal Detail -->
    <!-- <div class="col-md-12">
        <div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Modal Detail</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">Nama</div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Nama</div>
                                    <div class="col-md-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Modal -->

    <script>
        $(document).ready(function() {
            $('#alumni').DataTable();
        });
    </script>