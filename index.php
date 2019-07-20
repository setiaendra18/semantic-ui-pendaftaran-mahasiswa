<?php include "header.php" ?>
<div class="ui breadcrumb">
    <a class="section">Beranda</a>
    <span class="divider">/</span>
    <div class="active section">Data Pendaftar</div>
</div>
<h3 class="ui header">
  <img src="assets/img/list.png" class="ui  image">
 DATA MAHASISWA BARU
</h3>
<div class="ui grid">
    <div class="fourteen wide column">
        <table class="ui celled table orange">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA LENGKAP</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>PRODI</th>
                    <th>SEKOLAH ASAL</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(data,nomor) in mahasiswa">
                    <td>{{nomor+1}}</td>
                    <td>{{data.nama}}</td>
                    <td>{{data.alamat}}</td>
                    <td><strong v-if="data.jenis_kelamin==1">Laki-Laki</strong>
                        <strong v-else-if="data.jenis_kelamin==2">Perempuan</span></td>
                    <td>{{data.tanggal_lahir}}</td>
                    <td>

                        <strong v-if="data.prodi==1">TEKNIK INFORMATIKA</strong>
                        <strong v-else-if="data.prodi==2">SISTEM INFORMASI</span>

                    </td>
                    <td>
                        <span class="ui blue label" v-if="data.sekolah_asal==1">SMK</span>
                        <span class="ui purple label" v-else-if="data.sekolah_asal==2">SMA</span>
                        <span class="ui green label" v-else-if="data.sekolah_asal==3">MA</span>
                    </td>
                </tr>

            </tbody>
        </table>
        <h4>Jumlah Pendaftar : {{mahasiswa.length}} Mahasiswa</h4>
    </div>

</div>


<script>
    new Vue({
        el: '#app',
        data() {
            return {
                mahasiswa: []
            }
        },
        mounted() {
            axios
                .get('web_service/ambilDataMahasiswa.php')
                .then(response => (this.mahasiswa = response.data))
        }
    })
</script>
<?php include "footer.php" ?>