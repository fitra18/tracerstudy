<h3 class="mb-2"> Halaman Management User</h3>
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Data User</h6>
        </div>
        <div class="container">
            <div class="text-align-right">
                <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modaladduser">Tambah Data</button>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <div class="container">
                    <?php if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success" role="alert">
                    Success ! ';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    } ?>
                    <?php if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-error" role="alert">
                    Errort ! ';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    } ?>
                    <table id="user" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIM</td>
                                <td>Akses</td>
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
                                    <td><span class="badge bg-gradient-primary detail" type="button" id="<?= $u->iduser; ?>" username="<?= $u->username; ?>" pass="<?= $u->pass; ?>" nim="<?= $u->nim; ?>" nama="<?= $u->nama; ?>" role="<?= $u->role; ?>" status="<?= $u->active; ?>" data-bs-toggle="modal" data-bs-target="#modaldetailuser"><?= $u->nama; ?></span></td>
                                    <td><?= $u->nim; ?></td>
                                    <td>
                                        <?php if ($u->role == 1) { ?>
                                            Admin
                                        <?php } else if ($u->role == 0) { ?>
                                            Mahasiswa
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($u->active == 1) { ?>
                                            <span class="badge badge-sm bg-gradient-info">Active</span>
                                        <?php } else if ($u->active == 0) { ?>
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

    <!-- Modal Detail -->
    <div class="col-md-4">
        <div class="modal fade" id="modaldetailuser" tabindex="-1" role="dialog" aria-labelledby="modaldetailuser" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification"></h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">Nama Pemilik Akun =></div>
                            <div class="col-md-7" id="ednama"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">NIM/Stambuk =></div>
                            <div class="col-md-7" id="ednim"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">Hak Akses =></div>
                            <div class="col-md-7" id="edrole"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">Status Active =></div>
                            <div class="col-md-7" id="edstatus"></div>
                        </div>
                        <div class="text-align-right mt-2">
                            <button type="button" class="btn bg-gradient-primary" id="editdetail">Reset Password</button>
                            <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#modaldeleteuser">Hapus</button>
                        </div>
                        <div class="row mt-2" id="edit">
                            <hr>
                            <form action="<?= base_url('management_user') ?>/edit" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="id" id="edid" hidden>
                                            <input type="text" class="form-control" name="username" id="edusername">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="pass" id="edpass">
                                        </div>
                                        <div class="form">
                                            <input type="checkbox" class="form-checkbox">
                                            <label>Tampilkan password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-align-right">
                                    <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal Delete -->
    <div class="col-md-4">
        <div class="modal fade" id="modaldeleteuser" tabindex="-1" role="dialog" aria-labelledby="modaldeleteuser" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-notification">Delete User</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="messagedelete"></span>
                        <form action="<?= base_url('Management_User') ?>/delete" method="POST">
                            <input type="text" class="form-control" name="idhapusmhs" id="idhapusmhs" hidden>

                    </div>
                    <div class="modal-footer">
                        <div class="text-align-right">
                            <button type="submit" class="btn bg-gradient-primary">Yes, Delete</button>
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal Add -->
    <div class="col-md-4">
        <div class="modal fade" id="modaladduser" tabindex="-1" role="dialog" aria-labelledby="modaladduser" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-notification">Add User</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('management_user') ?>/add" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM/Stambuk">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="pass" class="form-control" name="pass" id="pass" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Pilih Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="">Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Non Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Pilih Akses</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="">Select</option>
                                            <option value="1">Admin</option>
                                            <option value="0">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-align-right">
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script>
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('#edpass').attr('type', 'text');
                } else {
                    $('#edpass').attr('type', 'password');
                }
            });
        });

        $(document).ready(function() {
            $('#user').DataTable();
            $('#edit').hide();
        });

        $('.detail').click(function() {
            var id = $(this).attr('id');
            var nama = $(this).attr('nama');
            var nim = $(this).attr('nim');
            var role = $(this).attr('role');
            var username = $(this).attr('username');
            var pass = $(this).attr('pass');
            var status = $(this).attr('status');
            $('.detailname').text('Detail user ' + nama);
            $('#ednama').text(nama);
            $('#ednim').text(nim);
            $('#edid').val(id);
            $('#idhapusmhs').val(id);
            $('#edusername').val(username);
            $('#edpass').val(pass);
            $('#messagedelete').text('Apakah Anda Yakin Ini Menghapus akun ' + nama + '?');
            if (role == 1) {
                $('#edrole').text('Admin');
            } else if (role == 0) {
                $('#edrole').text('Mahasiswa');
            }
            if (status == 1) {
                $('#edstatus').text('Active');
            } else if (status == 1) {
                $('#edstatus').text('Non Active');
            }
        });

        $('.klikhapus').click(function() {

        });

        $('#editdetail').click(function() {
            $('#edit').show();
        });
    </script>