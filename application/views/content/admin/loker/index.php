<!-- <style>
    .dataTables_info {
        font-size: 12px;
    }
    .paginate_button {
        font-size: 12px;
    }
</style> -->

<h3 class="mb-2"> <?= $title ?></h3>
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Data Lowongan Pekerjaan</h6>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Add</button>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <div class="container">
                    <?php 
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">
                Success ! ';
                echo $this->session->flashdata('pesan');
                echo '</div>';  
            }
            ?>
                        <table id="user" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <td width="50">No</td>
                                    <td>Nama Perusahaan</td>
                                    <td>Deskripsi</td>
                                    <td>Judul Job</td>
                                    <td>Tanggal Berakhir</td>
                                    <td class="text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;
                                foreach ($loker as $l) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $l->nama_perusahaan; ?></td>
                                        <td><?= $l->deskripsi; ?></td>
                                        <td><?= $l->job_title; ?></td>
                                        <td><?= $l->tgl_berakhir; ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-info " data-bs-toggle="modal" data-bs-target="#detail<?= $l->id_loker ?>"> Detail</button>
                                            <button class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#edit<?= $l->id_loker ?>"> Edit</button>
                                            <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete<?= $l->id_loker ?>"> Hapus</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal Add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Lowongan Pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php 
                echo form_open_multipart('loker/add');
                ?>
                
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required>
                </div>

                <div class="form-group">
                    <label>Bidang Usaha</label>
                    <input type="text" name="bidang_usaha" class="form-control" placeholder="Bidang Usaha" required>
                </div>

                <div class="form-group">
                    <label>Judul Lowongan</label>
                    <input type="text" name="job_title" class="form-control" placeholder="Judul Lowongan" required>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Deskripsi</label>
                </div>

                <div class="form-group">
                    <label>Tanggal Berakhir Lowongan</label>
                    <input type="date" name="tgl_berakhir" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambar/nofoto.png') ?>" id="gambar_load" width="200px">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php 
            echo form_close();
            ?>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<?php foreach ($loker as $l) { ?>

<div class="modal fade" id="detail<?= $l->id_loker ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Lowongan Pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php 
                echo form_open_multipart('loker/detail/' . $l->id_loker);
                ?>
                
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" value="<?= $l->nama_perusahaan ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Bidang Usaha</label>
                    <input type="text" name="bidang_usaha" value="<?= $l->bidang_usaha ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Judul Lowongan</label>
                    <input type="text" name="job_title" value="<?= $l->job_title ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Tanggal Berakhir Lowongan</label>
                    <input type="text" name="tgl_berakhir" value="<?= $l->tgl_berakhir ?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Tanggal Posting</label>
                    <input type="text" name="tgl_upload" value="<?= $l->tgl_upload ?>" class="form-control" readonly>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px" readonly><?= $l->deskripsi ?></textarea>
                    <label for="floatingTextarea2">Deskripsi</label>
                </div>

                <div class="row">

                <div class="col-sm-4 mt-3">
                    <div class="form-group">
                        <img src="<?= base_url('assets/gambar/'. $l->gambar) ?>" id="gambar_load" width="200px">
                    </div>
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            <?php 
            echo form_close();
            ?>
        </div>
    </div>
</div>

<?php } ?>

<!-- Modal Edit -->
<?php foreach ($loker as $l) { ?>

    <div class="modal fade" id="edit<?= $l->id_loker ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Lowongan Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php 
                    echo form_open_multipart('loker/edit/' . $l->id_loker);
                    ?>
                    
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" value="<?= $l->nama_perusahaan ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <input type="text" name="bidang_usaha" value="<?= $l->bidang_usaha ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Judul Lowongan</label>
                        <input type="text" name="job_title" value="<?= $l->job_title ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Berakhir Lowongan</label>
                        <input type="date" name="tgl_berakhir" value="<?= $l->tgl_berakhir ?>" class="form-control" required>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"><?= $l->deskripsi ?></textarea>
                        <label for="floatingTextarea2">Deskripsi</label>
                    </div>

                    <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Ganti Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="preview_gambar">
                        </div>
                    </div>

                    <div class="col-sm-4 mt-3">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambar/'. $l->gambar) ?>" id="gambar_load" width="200px">
                        </div>
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                <?php 
                echo form_close();
                ?>
            </div>
        </div>
    </div>

<?php } ?>


<!-- Modal Delete -->
<?php foreach ($loker as $l) { ?>

<div class="modal fade" id="delete<?= $l->id_loker ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Lowongan Pekerjaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <span>Apakah Anda Yakin Ingin Menghapus Data <?= $l->nama_perusahaan ?> ?</span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('loker/delete/' . $l->id_loker) ?>" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<script>
    $(document).ready(function() {
        $('#user').DataTable();
    });
</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#preview_gambar').change(function() {
        bacaGambar(this);
    });
</script>