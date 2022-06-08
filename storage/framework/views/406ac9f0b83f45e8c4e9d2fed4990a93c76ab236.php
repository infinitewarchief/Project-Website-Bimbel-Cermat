<?php $__env->startSection('content'); ?>

<br><br><br><br>
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
               <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"

        <div class="container">
            <div class="form-group col-12 p-0">
                <div>
                <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
                <?php endif; ?>

            </div>

        <form action="<?php echo e(route('daftar')); ?>"method="POST">
        <?php echo csrf_field(); ?>


                    <center><h3>Data Peserta Didik</h3></center>
                    <br>
                    <b>Tanggal Registrasi</b>
                    <div class="input-group mb-3">
                        <input required type="date" class="form-control" name="tanggal_registrasi" placeholder="Tanggal Registrasi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nama Lengkap Siswa</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nomor Whatsapp</b>
                    <div class="input-group mb-3">
                        <input required type="numeric" class="form-control" name="no_wa" placeholder="Nomor Whatsapp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jenis Kelamin</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <b>Alamat</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="alamat" placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Usia</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="usia" placeholder="Usia">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Asal Sekolah</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Agama</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="agama" placeholder="Agama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Kelas</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="kelas" placeholder="Kelas">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nama Orang Tua</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="nama_ortu" placeholder="Nama Orang Tua">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Nomor Whatsapp Orang Tua</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="no_wa_ortu" placeholder="Nomor whatsapp orang tua">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Paket</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="paket" placeholder="Paket">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Program yang Di Ambil</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="program" placeholder="Program yang Ingin di Ambil">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Mata Pelajaran</b>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="mapel" placeholder="Mata Pelajaran yang di Ambil">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jadwal</b>
                    <br>
                    <a>Silahkan memilih hari les privat yang available untuk anak didik sesuai dengan jumlah pertemuan les yang mau diambil </a>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" name="jadwal_hari" placeholder="Jadwal">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Jam Privat</b>
                    <br>
                    <a>Silahkan memilih waktu les sesuai dengan waktu kerja bimbel kami yakni mulai pukul 7 pagi hingga 6 sore.</a>
                    <div class="input-group mb-3">
                        <input required type="time" class="form-control" name="jam_les" placeholder="Jam Privat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <b>Tanggal Mulai Les</b>
                    <div class="input-group mb-3">
                        <input required type="date" class="form-control" name="tanggal_mulai_les" placeholder="Tanggal mulai les">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\Materi Kuliah\Materi Semester 4\Project Pak Yuli\laravel remake\resources\views/daftar/index.blade.php ENDPATH**/ ?>