<h3 class="mb-2"> <?= $title ?></h3>
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Data Lowongan Pekerjaan</h6>
        </div>
        <?php if ($this->session->userdata('role') == 0) { ?>
        <?php } else if ($this->session->userdata('role') == 1) { ?>
            <div class="container">
                <div class="row">
                    <div class="text-align-right">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn bg-gradient-primary">Tambah Data</button>
                    </div>
                </div>
            </div>
        <?php } ?>
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

                    <!-- <?php
                    if ($this->session->flashdata('valid')) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>';
                        echo $this->session->flashdata('valid');
                        echo '</div>';
                    }
                    ?> -->

                    <table id="user" class="table align-items-center mb-0 table-responsive">
                        <thead>
                            <tr>
                                <td width="50">No</td>
                                <td>Nama Perusahaan</td>
                                <td>Judul Job</td>
                                <td>Berakhir Lowongan</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($loker as $l) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $l->nama_perusahaan; ?></td>
                                    <td><?= word_limiter($l->job_title, 1, ' ...'); ?></td>
                                    <td><?= $l->tgl_berakhir; ?></td>
                                    <td class="text-center">
                                        <?php if ($this->session->userdata('role') == 0) { ?>
                                        <button class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $l->id_loker ?>"> Detail</button>
                                        <?php } else if ($this->session->userdata('role') == 1) { ?>
                                        <button class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $l->id_loker ?>"> Detail</button>
                                        <button class="btn bg-gradient-success " data-bs-toggle="modal" data-bs-target="#edit<?= $l->id_loker ?>"> Edit</button>
                                        <button class="btn bg-gradient-danger " data-bs-toggle="modal" data-bs-target="#delete<?= $l->id_loker ?>"> Hapus</button>
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

    <!-- Modal Add -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Lowongan Pekerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php
                    echo form_open_multipart('loker/add');
                    ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Bidang Usaha</label>
                            <input type="text" name="bidang_usaha" class="form-control" placeholder="Bidang Usaha" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Judul Lowongan</label>
                            <input type="text" name="job_title" class="form-control" placeholder="Judul Lowongan" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Berakhir Lowongan</label>
                            <input type="date" name="tgl_berakhir" class="form-control" oninvalid="this.setCustomValidity('Tanggal Berakhir Lowongan Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea required>
                        <label for="floatingTextarea2">Deskripsi Singkat</label>
                    </div>

                    

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" id="preview_gambar" oninvalid="this.setCustomValidity('Gambar Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
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

    <!-- Modal Edit -->
    <?php foreach ($loker as $l) { ?>

        <div class="modal fade" id="edit<?= $l->id_loker ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Lowongan Pekerjaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <?php
                        echo form_open_multipart('loker/edit/' . $l->id_loker);
                        ?>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" value="<?= $l->nama_perusahaan ?>" class="form-control" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bidang Usaha</label>
                                <input type="text" name="bidang_usaha" value="<?= $l->bidang_usaha ?>" class="form-control" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Judul Lowongan</label>
                                <input type="text" name="job_title" value="<?= $l->job_title ?>" class="form-control" pattern="^[a-zA-Z\s]*$" oninvalid="this.setCustomValidity('Input Wajib Huruf & Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tanggal Berakhir Lowongan</label>
                                <input type="date" name="tgl_berakhir" value="<?= $l->tgl_berakhir ?>" class="form-control" onkeypress="return harusHuruf(event)" oninvalid="this.setCustomValidity('Tanggal Berakhir Lowongan Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"><?= $l->deskripsi ?></textarea>
                            <label for="floatingTextarea2">Deskripsi Singkat</label>
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
                                    <img src="<?= base_url('assets/gambar/' . $l->gambar) ?>" id="gambar_load" width="200px">
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
            <div class="modal-dialog modal-dialog-centered">
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

    <!-- Modal Detail -->
    <?php foreach ($loker as $l) { ?>

    <div class="modal fade" id="detail<?= $l->id_loker ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Lowongan Pekerjaan</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card">
                    <div class="mb-4 mt-4 ms-4">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-4 d-flex align-items-center">
                                    <div class="card card-profile card-plain">
                                    <div class="card-body text-center bg-white shadow border-radius-lg p-3 position-relative z-index-1">
                                        <a href="javascript:;">
                                        <img class="w-100 h-auto border-radius-md" src="<?= base_url('assets/gambar/'. $l->gambar) ?>">
                                        </a>
                                        <h5 class="mt-3 mb-1 d-md-block d-none"><?= $l->nama_perusahaan ?></h5>
                                        <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker"><?= $l->nama_perusahaan ?></p>
                                        <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase"><?= $l->bidang_usaha ?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-8 ps-0 my-auto">
                                    <div class="card-body text-left">
                                        <div class="row">
                                            <div class="col-6">Nama Perusahaan</div>
                                            <div class="col-1">:</div>
                                            <div class="col-5"><strong><?= $l->nama_perusahaan ?></strong></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">Bidang Usaha</div>
                                            <div class="col-1">:</div>
                                            <div class="col-5"><?= $l->bidang_usaha ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">Judul Lowongan</div>
                                            <div class="col-1">:</div>
                                            <div class="col-5"><?= $l->job_title ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">Tanggal Berakhir Lowongan</div>
                                            <div class="col-1">:</div>
                                            <div class="col-5"><?= $l->tgl_berakhir ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">Tanggal Upload</div>
                                            <div class="col-1">:</div>
                                            <div class="col-5"><?= $l->tgl_upload ?></div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <strong>Deskripsi Singkat</strong>
                                                <i class="collapse-close ni ni-bold-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            </button>
                                            </h5>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm">
                                                <?= $l->deskripsi ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
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

    <script>
        function harusHuruf(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                return false;
            return true;
        }
    </script>

    <script>
        var alpha = /^[a-zA-Z\s]*$/;
        if (!input.value.match(alpha)) {
            alert('Invalid ');       
            return false;
        }
        else 
        {
        return true;
        }
    </script>