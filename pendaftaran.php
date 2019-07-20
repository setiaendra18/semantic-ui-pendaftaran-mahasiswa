<?php include "header.php" ?>
<div class="ui breadcrumb">
    <a class="section">Beranda</a>
    <span class="divider">/</span>
    <a class="section">Pendaftaran</a>
    <span class="divider">/</span>
    <div class="active section">Form Pendaftaran mahasiswa</div>
</div>
<h3 class="ui header">
    <img src="assets/img/website.png" class="ui  image">
    FORM PENDAFTARAN MAHASISWA BARU
</h3>
<div class="ui grid">
    <div class="fourteen wide column">
    <div class="ui attached message">
  <div class="header">
    HALO CALON PROGRAMER HANDAL AKAKOM
  </div>
  <p>Pastikan isi data dengan benar , sebelum klik daftar. Code For Life !!</p>
</div>
        <div class="ui inverted segment teal">
            <div class="ui inverted form">
                <form method="post" action="web_service/tambahDataMahasiswa.php" >
                    <div class="field">
                        <label>NAMA LENGKAP</label>
                        <div class="ui left icon input">
                            <input type="text" placeholder="Masukan Nama..." name="nama" required>
                            <i class="users icon"></i>
                        </div>

                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>JENIS KELAMIN</label>
                            <select name="jenis_kelamin" required>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>TANGGAL LAHIR</label>
                            <div class="ui left icon input">
                                <input type="date" name="tanggal_lahir" required>
                                <i class="calendar check icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>PRODI</label>
                            <select name="prodi" required>
                                <option value="1">Teknik Informatika</option>
                                <option value="2">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>SEKOLAH ASAL </label>
                            <select name="sekolah_asal" required>
                                <option value="1">SMK</option>
                                <option value="2">SMA</option>
                                <option value="3">MA</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label>ALAMAT LENGKAP</label>
                        <div class="ui left icon input">
                            <textarea name="alamat" placeholder="Alamat lengkap calon mahasiswa" required></textarea>
                            <i class="books"></i>
                        </div>

                    </div>
            </div>
            <br>
            <button type="submit" class="ui button red">DAFTAR</button>
        </div>

    </div>
    </form>
</div>

</div>

<?php include "footer.php" ?>