<!-- === VIEW BIODATA 1 === -->
<div class="row mb-4">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h5 class="font-weight-bolder mb-0">
                                Data Diri
                                <?php if ($status['judul'] != '') : ?>
                                    <span class="text-success text-sm font-weight-bolder">Selesai</span>
                                <?php else : ?>
                                    <span class="text-danger text-sm font-weight-bolder">Belum di isi</span>
                                <?php endif; ?>
                            </h5>
                                <?php if ($status['email'] != '') : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#modal_notification">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php else : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#datadiri">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 mb-xl-0">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h5 class="font-weight-bolder mb-0">
                                Pertanyaan Umum
                                <?php if ($status['stks1'] == 1) : ?>
                                    <span class="text-success text-sm font-weight-bolder">Selesai</span>
                                <?php else : ?>
                                    <span class="text-danger text-sm font-weight-bolder">Belum di isi</span>
                                <?php endif; ?>
                            </h5>
                                <?php if ($status['stks1'] == 1) : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#modal_notification">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php else : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#pertanyaanumum">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-chat-round text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h5 class="font-weight-bolder mb-0">
                                Metode Pembelajaran
                                <?php if ($status['stks2'] == 1) : ?>
                                    <span class="text-success text-sm font-weight-bolder">Selesai</span>
                                <?php else : ?>
                                    <span class="text-danger text-sm font-weight-bolder">Belum di isi</span>
                                <?php endif; ?>
                            </h5>
                                <?php if ($status['stks2'] == 1) : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#modal_notification">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php else : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#metodepembelajaran">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-book-bookmark text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 mb-xl-0">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h5 class="font-weight-bolder mb-0">
                                Pekerjaan
                                <?php if ($status['stks3'] == 1) : ?>
                                    <span class="text-success text-sm font-weight-bolder">Selesai</span>
                                <?php else : ?>
                                    <span class="text-danger text-sm font-weight-bolder">Belum di isi</span>
                                <?php endif; ?>
                            </h5>
                                <?php if ($status['stks3'] == 1) : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#modal_notification">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php else : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#pekerjaan">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-6 col-sm-6 mb-xl-0">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <h5 class="font-weight-bolder mb-0">
                                Kompetensi Lulusan
                                <?php if ($status['stks4'] == 1) : ?>
                                    <span class="text-success text-sm font-weight-bolder">Selesai</span>
                                <?php else : ?>
                                    <span class="text-danger text-sm font-weight-bolder">Belum di isi</span>
                                <?php endif; ?>
                            </h5>
                                <?php if ($status['stks4'] == 1) : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#modal_notification">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php else : ?>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" data-bs-toggle="modal" data-bs-target="#kompetensi">
                                    lengkapi..
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-hat-3 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- === MODAL Notifikasi === -->
    <div class="modal fade" id="modal_notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Information</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="text-gradient text-danger mt-4">Data Sudah Terisi!</h4>
              <p>Kamu tidak perlu mengisinya lagi.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<!-- === END MODAL Notifikasi === -->

<!-- === MODAL DATA DIRI === -->
<div class="modal fade" id="datadiri" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Data Diri</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <form action="<?= base_url('Biodata/Data_diri'); ?>" method="POST">
                <div class="modal-body">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Nim</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" value="<?= $status['nim'];?>" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?= $status['nama'];?>" readonly>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Email</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Tempat & Tanggal Lahir</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="ttl" placeholder="..." required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">jk</label>
                      <input type="tel" class="form-control" id="exampleFormControlInput1" name="jk" placeholder="..." required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Alamat</label>
                      <input type="tel" class="form-control" id="exampleFormControlInput1" name="alamat" placeholder="jl.undata..." required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">No. Hp</label>
                      <input type="tel" class="form-control" id="exampleFormControlInput1" name="noHp" placeholder="08xx-xxxx-xxxx" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Program Study</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="program_study" placeholder="Teknik Informatika" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Tahun Masuk</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="thn_masuk" placeholder="2018" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Tahun Lulus</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="thn_lulus" placeholder="2020" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">IPK</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="ipk" placeholder="3,33" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Judul Skripsi</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" placeholder="3,33" required>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">Save</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
<!-- === END MODAL DATA DIRI === -->

<!-- === MODAL PERTANYAAN UMUM === -->
<div class="modal fade" id="pertanyaanumum" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Pertanyaan Umum</h6>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
        <form name="formPendaftaran" action="<?= base_url('Biodata/Pertanyaan_umum');?>" method="POST">
            <div class="modal-body">
              <div class="form-group">
                  <label for="exampleFormControlInput1">1. Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama ? kira-kira</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="k1a" id="k1a" placeholder="..." required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">2. Sebutkan sumberdana dalam pembiayaan kuliah anda ? </label>
                <select class="form-control" id="exampleFormControlSelect1" name="k1b" id="k1b" required>
                    <option value="0" selected disabled>-- Pilih --</option>
                    <option value="Biaya Sendiri / Keluarga">a. Biaya Sendiri / Keluarga</option>
                    <option value="Beasiswa ADIK">b. Beasiswa ADIK</option>
                    <option value="Beasiswa BIDIKMISI">c. Beasiswa BIDIKMISI</option>
                    <option value="Beasiswa PPA">d. Beasiswa PPA</option>
                    <option value="Beasiswa Perusahaan / Swasta">e. Beasiswa Perusahaan / Swasta</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">3. Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha) ?</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="k1c" id="k1c" placeholder="..." required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">4. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda ?</label>
                <select class="form-control" id="exampleFormControlSelect1" name="k1d" id="k1d" required>
                    <option value="0" selected disabled>-- Pilih --</option>
                    <option value="Sangat Erat">a. Sangat Erat</option>
                    <option value="Erat">b. Erat</option>
                    <option value="Cukup Erat">c. Cukup Erat</option>
                    <option value="Kurang Erat">d. Kurang Erat</option>
                    <option value="Tidak sama sekali">e. Tidak sama sekali</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">5. Tingkat Pendidikan apa yang paling tepat/ sesuai untuk pekerjaan anda saat ini ?</label>
                <select class="form-control" id="exampleFormControlSelect1" name="k1e" id="k1e" required>
                    <option value="0" selected disabled>-- Pilih --</option>
                    <option value="Setingkat Lebih Tinggi">a. Setingkat Lebih Tinggi</option>
                    <option value="Tingkat Yang Sama">b. Tingkat Yang Sama</option>
                    <option value="Setingkat Lebih Rendah">c. Setingkat Lebih Rendah</option>
                    <option value="Tidak Perlu Pendidikan Tinggi">d. Tidak Perlu Pendidikan Tinggi</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">6. Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Pekerjaan Utama ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="k1f" id="k1f" placeholder="..." required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">7. Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Lembur dan Tips ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="k1g" id="k1g" placeholder="..." required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">8. Kira-kira berapa pendapatan anda setiap bulannya ?  Dari Pekerjaan Lainnya ? (isilah dengan ANGKA saja tanpa tanda Titik atau Koma)</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="k1h" id="k1h" placeholder="..." required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn bg-gradient-primary">Save</button>
              <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- === END MODAL PERTANYAAN UMUM === -->

<!-- === MODAL METODE PEMBELAJARAN === -->
    <div class="modal fade" id="metodepembelajaran" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">ANGKET RESPONDEN ALUMNI TERHADAP METODE PEMBELAJARAN</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <form action="<?= base_url('Biodata/Metode_pembelajaran');?>" method="POST">
                <div class="modal-body">
                  <div class="form-group">
                  <label>Catatan :</label><br>
                    <label>
                    Angket ini bertujuan untuk mengetahui seberapa besar penekanan pada Metode Pembelajaran dibawah ini dilaksanakan di Program Studi anda ?
                    </label>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">1. Perkuliahan</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2a">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">2. Demonstrasi</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2b">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">3. Partisipasi Dalam Proyek Riset</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2c">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">4. Magang</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2d">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">5. Praktikum</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2e">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">6. Kerja Lapangan</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2f">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">7. Diskusi</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="k2g">
                        <option selected disabled>-- Pilih --</option>
                        <option value="Sangat Besar">a. Sangat Besar</option>
                        <option value="Besar">b. Besar</option>
                        <option value="Cukup Besar">c. Cukup Besar</option>
                        <option value="Kurang">d. Kurang</option>
                        <option value="Tidak Sama Sekali">e. Tidak Sama Sekali</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn bg-gradient-primary">Save</button>
                  <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
      </div>
    </div>
<!-- === END MODAL METODE PEMBELAJARAN === -->

<!-- === MODAL PEKERJAAN === -->
    <div class="modal fade" id="pekerjaan" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Pekerjaan</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <form action="<?= base_url('Biodata/Pekerjaan');?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Catatan :</label><br>
                        <label>
                        Kapan anda mulai mencari pekerjaan ? Mohon pekerjaan sambilan tidak dimasukkan 
                        </label>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">1. Kira-kira berapa bulan sebelum Lulus ?</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="k3a" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">2. Kira-kira berapa bulan sesudah Lulus ?</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="k3b" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">3. Bagaimana anda mencari pekerjaan tersebut ? (jawaban bisa lebih dari satu)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Melalui iklan di koran / majalah / brosur" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">a. Melalui iklan di koran / majalah / brosur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Melamar ke Perusahaan tanpa mengetahui lowongan yang ada" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">b. Melamar ke Perusahaan tanpa mengetahui lowongan yang ada</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pergi ke Bursa / Pameran kerja" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">c. Pergi ke Bursa / Pameran kerja</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Mencari lewat internet/ iklan online" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">d. Mencari lewat internet/ iklan online</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Dihubungi oleh Perusahaan" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">e. Dihubungi oleh Perusahaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Menghubungi Kemenakertrans" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">f. Menghubungi Kemenakertrans</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Menghubungi Agen Tenaga Kerja" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">g. Menghubungi Agen Tenaga Kerja</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Memperoleh Informasi dari Kampus" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">h. Memperoleh Informasi dari Kampus</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Membangun jejaring (network) sejak masih kuliah" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">i. Membangun jejaring (network) sejak masih kuliah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Melalui relasi (Dosen, Orang Tua, Saudara, Teman dll) Teman" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">j. Melalui relasi (Dosen, Orang Tua, Saudara, Teman dll) Teman</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Membangun Bisnis Sendiri" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">k. Membangun Bisnis Sendiri</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Melalui Penempatan Kerja/ Magang" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">l. Melalui Penempatan Kerja/ Magang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah" id="fcustomCheck1" name="k3c[]">
                            <label class="custom-control-label" for="customCheck1">m. Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">4. Berapa Peruhaan Instansi/Institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memperoleh pekerjaan pertama ?</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="k3d" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">5. Berapa banyak perusahaan Instansi / Institusi yang merespon lamaran anda ?</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="k3e" placeholder="...">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">6. Berapa banyak perusahaan Instansi / Institusi yang mengundang anda untuk wawancara ?</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="k3f" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">7. Bagaimana anda menggambarkan situasi anda saat ini ? (Jawaban anda bisa lebih dari satu)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya masih belajar / melanjutkan kuliah profesi atau pascasarjana" id="fcustomCheck1" name="k3g[]">
                            <label class="custom-control-label" for="customCheck1">a. Saya masih belajar / melanjutkan kuliah profesi atau pascasarjana</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya Menikah" id="fcustomCheck1" name="k3g[]">
                            <label class="custom-control-label" for="customCheck1">b. Saya Menikah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya sibuk dengan keluarga dan anak-anak" id="fcustomCheck1" name="k3g[]">
                            <label class="custom-control-label" for="customCheck1">c. Saya sibuk dengan keluarga dan anak-anak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya sekarang sedang mencari pekerjaan" id="fcustomCheck1" name="k3g[]">
                            <label class="custom-control-label" for="customCheck1">d. Saya sekarang sedang mencari pekerjaan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">8. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir ?</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k3h">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Tidak">a. Tidak</option>
                            <option value="Tidak, tapi saya sedang menunggu hasil lamaran kerja">b. Tidak, tapi saya sedang menunggu hasil lamaran kerja</option>
                            <option value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan">c. Ya, saya akan mulai bekerja dalam 2 minggu ke depan</option>
                            <option value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan">d. Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">9. Apa jenis Perusahaan/ Instansi/ Institusi tempat anda bekerja sekarang ?</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k3i">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Instansi Pemerinta (termasuk BUMN)">a. Instansi Pemerinta (termasuk BUMN)</option>
                            <option value="Organisasi Non-Profit/ Lembaga Swadaya Masyarakat">b. Organisasi Non-Profit/ Lembaga Swadaya Masyarakat</option>
                            <option value="Perusahaan Swasta">c. Perusahaan Swasta</option>
                            <option value="Wiraswasta/ Perusahaan sendiri">d. Wiraswasta/ Perusahaan sendiri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">10. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ? (Jawaban bisa lebih dari satu)</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">a. Pertanyaan tidak sesuai, pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya belum mendapatkan pekerjaan yang lebih sesuai" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">b. Saya belum mendapatkan pekerjaan yang lebih sesuai</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Di Pekerjaan ini saya memperoleh prospek karir yang baik" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">c. Di Pekerjaan ini saya memperoleh prospek karir yang baik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungan dengan pendidikan saya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">d. Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungan dengan pendidikan saya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">e. Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saya dapat memperolah pendapatan yang lebih tinggi di pekerjaan ini" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">f. Saya dapat memperolah pendapatan yang lebih tinggi di pekerjaan ini</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih aman/terjamin/secure" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">g. Pekerjaan saya saat ini lebih aman/terjamin/secure</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih menarik" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">h. Pekerjaan saya saat ini lebih menarik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/ jadwal yang fleksibel dll" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">i. Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/ jadwal yang fleksibel dll</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">j. Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">k. Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pada awal meniti karir, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" id="fcustomCheck1" name="k3j[]">
                            <label class="custom-control-label" for="customCheck1">l. Pada awal meniti karir, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">Save</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
<!-- === END MODAL PEKERJAAN === -->
    
<!-- === MODAL KOMPETENSI LULUSAN === -->
    <div class="modal fade" id="kompetensi" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Kompetensi Lulusan</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <form action="<?= base_url('Biodata/Kompetensi');?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Catatan :</label><br>
                        <label>
                        Angket ini bertujuan untuk mengetahui Pada saat Lulus, tingkat mana kompetensi dibawah ini anda kuasai ? 
                        </label>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">1. Pengetahuan di bidang atau disiplin ilmu anda ?</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4a">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">2. Pengetahuan di luar bidang atau disiplin ilmu anda ?</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4b">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">3. Pengetahuan Umum</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4c">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">4. Bahasa Inggris</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4d">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">5. Keterampilan Internet</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4e">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">6. Keterampilan Komputer</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4f">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">7. Berpikir Kritis</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4g">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">8. Keterampilan Riset</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4h">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">9. Kemampuan Belajar</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4i">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">10. Kemampuan berkomunikasi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4j">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">11. Bekerja dibawah tekanan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4k">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">12. Manajemen Waktu</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4l">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">13. Bekerja secara mandiri</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4m">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">14. Bekerja dalam tim / bekerjasama dengan orang lain</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4n">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">15. Kemampuan dalam memecahkan masalah</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4o">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">16. Negosiasi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4p">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">17. Kemampuan Analisis</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4q">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">18. Toleransi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4r">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">19. Kemampuan Adaptasi</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4s">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">20. Loyalitas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4t">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">21. Integritas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4u">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">22. Bekerja dengan orang yang berbeda budaya maupun latar belakang</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4v">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">23. Kepemimpinan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4w">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">24. Kemampuan dalam memegang tanggungjawab</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4x">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">25. Inisiatif</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4y">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">26. Manajemen Proyek/ Program</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4z">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">27. Kemampuan untuk mempresentasikan ide/produk/ laporan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4aa">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">28. Kemampuan dalam menulis laporan, memo dan dokumen</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4bb">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">29. Kemampuan untuk terus belajar sepanjang hayat</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="k4cc">
                            <option selected disabled>-- Pilih --</option>
                            <option value="Sangat Rendah">a. Sangat Rendah</option>
                            <option value="Rendah">b. Rendah</option>
                            <option value="Cukup">c. Cukup</option>
                            <option value="Tinggi">d. Tinggi</option>
                            <option value="Sangat Tinggi">e. Sangat Tinggi</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient-primary">Save</button>
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
<!-- === END MODAL KOMPETENSI LULUSAN === -->

<!-- <script>
    $(document).ready(function() {
        $('#informasi').hide;
        $('#infoPesan').click(function () {
            $('.informasi').fadeToggle('slow');
        });
    });
</script> -->
