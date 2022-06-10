<!-- <style>
    .modal-dialog{
        max-width: 700px
    }
</style> -->
<h3>Halaman Data Alumni</h3>
<div class="col-md-12">
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
                                        <?php if ($a->stbiodata == 1) { ?>
                                            <a href="<?= base_url('Data_Alumni/detail/') . $a->idmhs; ?>" data-bs-toggle="modal" data-bs-target="#detailBiodata" data-idbiodata="<?= $a->idmhs; ?>" class="biodata detail" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                            <i class="ni ni-check-bold"></i>
                                            </a>
                                        <?php } else if ($a->stbiodata == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks1 == 1) { ?>
                                            <a href="<?= base_url('Data_Alumni/detail/') . $a->idmhs; ?>" data-bs-toggle="modal" data-bs-target="#detailK1" data-idbiodata="<?= $a->idmhs; ?>" class="kuis1 detail" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                            <i class="ni ni-check-bold"></i>
                                            </a>
                                        <?php } else if ($a->stks1 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks2 == 1) { ?>
                                            <a href="<?= base_url('Data_Alumni/detail/') . $a->idmhs; ?>" data-bs-toggle="modal" data-bs-target="#detailK2" data-idbiodata="<?= $a->idmhs; ?>" class="kuis2 detail" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                            <i class="ni ni-check-bold"></i>
                                            </a>
                                        <?php } else if ($a->stks2 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks3 == 1) { ?>
                                            <a href="<?= base_url('Data_Alumni/detail/') . $a->idmhs; ?>" data-bs-toggle="modal" data-bs-target="#detailK3" data-idbiodata="<?= $a->idmhs; ?>" class="kuis3 detail" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                            <i class="ni ni-check-bold"></i>
                                            </a>
                                        <?php } else if ($a->stks3 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->stks4 == 1) { ?>
                                            <a href="<?= base_url('Data_Alumni/detail/') . $a->idmhs; ?>" data-bs-toggle="modal" data-bs-target="#detailK4" data-idbiodata="<?= $a->idmhs; ?>" class="kuis4 detail" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                            <i class="ni ni-check-bold"></i>
                                            </a>
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
</div>

    <!-- Modal Detail Biodata -->
        <div class="modal fade" id="detailBiodata" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Detail Biodata</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body text-dark">
                                <div class="row">
                                    <div class="col-4">Nim</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="nim"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Nama</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="nama"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Email</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="email"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Tempat & Tanggal Lahir</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="ttl"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Jenis Kelamin</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="jk"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Alamat</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="alamat"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">No. Hp</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="nohp"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Program Study</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="prodi"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Tahun Masuk</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="tahunmasuk"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Tahun Lulus</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="tahunlulus"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4">IPK</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="ipk"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">Judul Skripsi</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7" id="judul"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal -->
    <!-- Modal Detail K1 -->
        <div class="modal fade" id="detailK1" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Detail Kuisioner 1 (Pertanyaan Umum)</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">1.</div>
                                        <div class="col-10 text-dark">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama ? kira-kira</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1a"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1a"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">2.</div>
                                        <div class="col-10 text-dark">Sebutkan sumberdana dalam pembiayaan kuliah anda ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1b"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1b"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">3.</div>
                                        <div class="col-10 text-dark">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha) ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1c"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1c"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">4.</div>
                                        <div class="col-10 text-dark">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1d"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1d"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">5.</div>
                                        <div class="col-10 text-dark">Tingkat Pendidikan apa yang paling tepat/ sesuai untuk pekerjaan anda saat ini ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1e"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1e"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">6.</div>
                                        <div class="col-10 text-dark">Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Pekerjaan Utama ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1f"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1f"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">7.</div>
                                        <div class="col-10 text-dark">Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Lembur dan Tips ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1g"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">8.</div>
                                        <div class="col-10 text-dark">Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Pekerjaan Lainnya ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k1h"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k1h"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal -->
    <!-- Modal Detail K2 -->
        <div class="modal fade" id="detailK2" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Detail Kuisioner 2 (Metode Pembelajaran)</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">1.</div>
                                        <div class="col-10 text-dark">Perkuliahan</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2a"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2a"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">2.</div>
                                        <div class="col-10 text-dark">Demonstrasi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2b"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2b"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">3.</div>
                                        <div class="col-10 text-dark">Partisipasi Dalam Proyek Riset</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2c"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2c"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">4.</div>
                                        <div class="col-10 text-dark">Magang</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2d"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2d"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">5.</div>
                                        <div class="col-10 text-dark">Praktikum</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2e"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2e"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">6.</div>
                                        <div class="col-10 text-dark">Kerja Lapangan</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2f"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2f"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">7.</div>
                                        <div class="col-10 text-dark">Diskusi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k2g"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal -->
    <!-- Modal Detail K3 -->
        <div class="modal fade" id="detailK3" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Detail Kuisioner 3 (Pekerjaan)</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">1.</div>
                                        <div class="col-10 text-dark">Kira-kira berapa bulan sebelum Lulus ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3a"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">2.</div>
                                        <div class="col-10 text-dark">Kira-kira berapa bulan sesudah Lulus ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3b"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">3.</div>
                                        <div class="col-10 text-dark">Bagaimana anda mencari pekerjaan tersebut ? (jawaban bisa lebih dari satu)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3c"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">4.</div>
                                        <div class="col-10 text-dark">Berapa Peruhaan Instansi/Institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memperoleh pekerjaan pertama ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3d"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">5.</div>
                                        <div class="col-10 text-dark">Berapa banyak perusahaan Instansi / Institusi yang merespon lamaran anda ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3e"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">6.</div>
                                        <div class="col-10 text-dark">Berapa banyak perusahaan Instansi / Institusi yang mengundang anda untuk wawancara ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3f"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">7.</div>
                                        <div class="col-10 text-dark">Bagaimana anda menggambarkan situasi anda saat ini ? (Jawaban anda bisa lebih dari satu)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3g"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">8.</div>
                                        <div class="col-10 text-dark">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3h"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">9.</div>
                                        <div class="col-10 text-dark">Apa jenis Perusahaan/ Instansi/ Institusi tempat anda bekerja sekarang ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3i"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">10.</div>
                                        <div class="col-10 text-dark">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ? (Jawaban bisa lebih dari satu)</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k3j"></span></div>
                                    </div>
                                    <!-- <div class="row justify-content-end">
                                        <div class="col-10 text-success" id="k2g"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal -->
    <!-- Modal Detail K4 -->
        <div class="modal fade" id="detailK4" tabindex="-1" role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title detailname" id="modal-title-notification">Detail Kuisioner 4 (Kompetensi Lulusan)</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">1.</div>
                                        <div class="col-10 text-dark">Pengetahuan di bidang atau disiplin ilmu anda ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4a"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">2.</div>
                                        <div class="col-10 text-dark">Pengetahuan di luar bidang atau disiplin ilmu anda ?</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4b"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">3.</div>
                                        <div class="col-10 text-dark">Pengetahuan Umum</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4c"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">4.</div>
                                        <div class="col-10 text-dark">Bahasa Inggris</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4d"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">5.</div>
                                        <div class="col-10 text-dark">Keterampilan Internet</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4e"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">6.</div>
                                        <div class="col-10 text-dark">Keterampilan Komputer</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4f"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">7.</div>
                                        <div class="col-10 text-dark">Berpikir Kritis</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4g"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">8.</div>
                                        <div class="col-10 text-dark">Keterampilan Riset</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4h"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">9.</div>
                                        <div class="col-10 text-dark">Kemampuan Belajar</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4i"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">10.</div>
                                        <div class="col-10 text-dark">Kemampuan berkomunikasi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4j"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">11.</div>
                                        <div class="col-10 text-dark">Bekerja dibawah tekanan</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4k"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">12.</div>
                                        <div class="col-10 text-dark">Manajemen Waktu</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4l"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">13.</div>
                                        <div class="col-10 text-dark">Bekerja secara mandiri</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4m"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">14.</div>
                                        <div class="col-10 text-dark">Bekerja dalam tim / bekerjasama dengan orang lain</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4n"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">15.</div>
                                        <div class="col-10 text-dark">Kemampuan dalam memecahkan masalah</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4o"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">16.</div>
                                        <div class="col-10 text-dark">Negosiasi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4p"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">17.</div>
                                        <div class="col-10 text-dark">Kemampuan Analisis</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4q"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">18.</div>
                                        <div class="col-10 text-dark">Toleransi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4r"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">19.</div>
                                        <div class="col-10 text-dark">Kemampuan Adaptasi</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4s"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">20.</div>
                                        <div class="col-10 text-dark">Loyalitas</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4t"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">21.</div>
                                        <div class="col-10 text-dark">Integritas</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4u"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">22.</div>
                                        <div class="col-10 text-dark">Bekerja dengan orang yang berbeda budaya maupun latar belakang</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4v"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">23.</div>
                                        <div class="col-10 text-dark">Kepemimpinan</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4w"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">24.</div>
                                        <div class="col-10 text-dark">Kemampuan dalam memegang tanggungjawab</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4x"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">25.</div>
                                        <div class="col-10 text-dark">Inisiatif</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4y"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">26.</div>
                                        <div class="col-10 text-dark">Manajemen Proyek/ Program</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4z"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">27.</div>
                                        <div class="col-10 text-dark">Kemampuan untuk mempresentasikan ide/produk/ laporan</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4aa"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">28.</div>
                                        <div class="col-10 text-dark">Kemampuan dalam menulis laporan, memo dan dokumen</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4bb"></span></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-2">
                                        <div class="col-2 text-dark text-center">29.</div>
                                        <div class="col-10 text-dark">Kemampuan untuk terus belajar sepanjang hayat</div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-10 text-dark text-bold">Jawab : <span class="text-success" id="k4cc"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal -->
    
    
    <script>
        $(document).ready(function() {
            $('#alumni').DataTable();
        });

        // === Biodata ===
        $('.biodata').on('click', function() {
            const idbiodata = $(this).data('idbiodata');

            $.ajax({
                url: '<?= base_url('Data_Alumni/detail'); ?>',
                data: {id_bdta : idbiodata},
                method: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    $('#nim').html(data.nim);
                    $('#nama').html(data.nama);
                    $('#email').html(data.email);
                    $('#ttl').html(data.ttl);
                    $('#jk').html(data.jk);
                    $('#alamat').html(data.alamat);
                    $('#nohp').html(data.nohp);
                    $('#prodi').html(data.prodi);
                    $('#tahunmasuk').html(data.tahunmasuk);
                    $('#tahunlulus').html(data.tahunlulus);
                    $('#ipk').html(data.ipk);
                    $('#judul').html(data.judul);
                }
            });
        });

        // === Kuisioner 1 ===
        $('.kuis1').on('click', function() {
            const idbiodata = $(this).data('idbiodata');

            $.ajax({
                url: '<?= base_url('Data_Alumni/detail'); ?>',
                data: {id_bdta : idbiodata},
                method: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    $('#k1a').html(data.k1a);
                    $('#k1b').html(data.k1b);
                    $('#k1c').html(data.k1c);
                    $('#k1d').html(data.k1d);
                    $('#k1e').html(data.k1e);
                    $('#k1f').html(data.k1f);
                    $('#k1g').html(data.k1g);
                    $('#k1h').html(data.k1h);
                }
            });
        });

        // === Kuisioner 2 ===
        $('.kuis2').on('click', function() {
            const idbiodata = $(this).data('idbiodata');

            $.ajax({
                url: '<?= base_url('Data_Alumni/detail'); ?>',
                data: {id_bdta : idbiodata},
                method: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    $('#k2a').html(data.k2a);
                    $('#k2b').html(data.k2b);
                    $('#k2c').html(data.k2c);
                    $('#k2d').html(data.k2d);
                    $('#k2e').html(data.k2e);
                    $('#k2f').html(data.k2f);
                    $('#k2g').html(data.k2g);
                }
            });
        });

        // === Kuisioner 3 ===
        $('.kuis3').on('click', function() {
            const idbiodata = $(this).data('idbiodata');

            $.ajax({
                url: '<?= base_url('Data_Alumni/detail'); ?>',
                data: {id_bdta : idbiodata},
                method: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    $('#k3a').html(data.k3a);
                    $('#k3b').html(data.k3b);
                    $('#k3c').html(data.k3c);
                    $('#k3d').html(data.k3d);
                    $('#k3e').html(data.k3e);
                    $('#k3f').html(data.k3f);
                    $('#k3g').html(data.k3g);
                    $('#k3h').html(data.k3h);
                    $('#k3i').html(data.k3i);
                    $('#k3j').html(data.k3j);
                }
            });
        });

        // === Kuisioner 4 ===
        $('.kuis4').on('click', function() {
            const idbiodata = $(this).data('idbiodata');

            $.ajax({
                url: '<?= base_url('Data_Alumni/detail'); ?>',
                data: {id_bdta : idbiodata},
                method: 'POST',
                dataType: 'JSON',
                success: function(data) {
                    $('#k4a').html(data.k4a);
                    $('#k4b').html(data.k4b);
                    $('#k4c').html(data.k4c);
                    $('#k4d').html(data.k4d);
                    $('#k4e').html(data.k4e);
                    $('#k4f').html(data.k4f);
                    $('#k4g').html(data.k4g);
                    $('#k4h').html(data.k4h);
                    $('#k4i').html(data.k4i);
                    $('#k4j').html(data.k4j);
                    $('#k4k').html(data.k4k);
                    $('#k4l').html(data.k4l);
                    $('#k4m').html(data.k4m);
                    $('#k4n').html(data.k4n);
                    $('#k4o').html(data.k4o);
                    $('#k4p').html(data.k4p);
                    $('#k4q').html(data.k4q);
                    $('#k4r').html(data.k4r);
                    $('#k4s').html(data.k4s);
                    $('#k4t').html(data.k4t);
                    $('#k4u').html(data.k4u);
                    $('#k4v').html(data.k4v);
                    $('#k4w').html(data.k4w);
                    $('#k4x').html(data.k4x);
                    $('#k4y').html(data.k4y);
                    $('#k4z').html(data.k4z);
                    $('#k4aa').html(data.k4aa);
                    $('#k4bb').html(data.k4bb);
                    $('#k4cc').html(data.k4cc);
                }
            });
        });
    </script>