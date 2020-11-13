 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Jadwal</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=jadwal">Jadwal</a></li>
          <li><i class="fa fa-laptop"></i>Ubah Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Jadwal
          </header>
          <div class="panel-body">
            <div class="form">
              <?php
              include '../../class/koneksi.php';
              $id_jadwal = $_GET['id_jadwal'];
              $data = mysqli_query($koneksi,"select * from jadwal where id_jadwal='$id_jadwal'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/jadwal/update.php">
                  <div class="form-group ">
                    <input class=" form-control" name="id_jadwal" type="hidden" value="<?php echo $d['id_jadwal']; ?>"/>

                    <label for="jadwal" class="control-label col-lg-2">Hari<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="hari" title="pilih hari" required="required" value="<?php echo $d['hari']; ?>">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="jadwal" class="control-label col-lg-2">Jam Masuk<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="jam_masuk" name="jam_masuk" type="time" title="ketik disini" required="required" value="<?php echo $d['jam_masuk']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="jadwal" class="control-label col-lg-2">Jam Keluar<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="jam_keluar" name="jam_keluar" type="time" title="ketik disini" required="required" value="<?php echo $d['jam_keluar']; ?>"/>
                    </div>
                  </div>                    
                  <script>
                    function myFunction() {
                      document.getElementById("jam_masuk");
                      document.getElementById("jam_keluar");
                    }
                  </script>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Ekskul dan Pelatih<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" id="id_pelatih" name="id_pelatih" title="pilih salah satu" required="required" onchange='changeValue(this.value)'>
                        <option value="" disabled selected>-=Pilih Salah Satu=-</option>
                        <?php
                        include '../../class/koneksi.php';
                        $data = mysqli_query($koneksi, "select * from pelatih");
                        $jsArray = "var prdName = new Array();\n";
                        while ($d = mysqli_fetch_array($data)) {
                          echo "<option value='".$d['id_pelatih']."'>".$d['nama_ekskul']." : ".$d['nama_lengkap']."</option>";
                          $jsArray .= "prdName['".$d['id_pelatih']."'] = {nama_ekskul: '".addslashes($d['nama_ekskul'])."',nama_lengkap: '".addslashes($d['nama_lengkap'])."'};\n";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <input class=" form-control" id="nama_lengkap" name="nama_lengkap" type="hidden" readonly="readonly" />
                  <input class=" form-control" id="nama_ekskul" name="nama_ekskul" type="hidden" readonly="readonly" />

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-success" type="submit" onclick="myFunction()">Ubah</button>
                    </div>
                  </div>
                </form>
                <?php 
              }
              ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>
<script type="text/javascript">
  <?php echo $jsArray; ?>
  function  changeValue(id){
    document.getElementById('nama_lengkap').value = prdName[id].nama_lengkap;
    document.getElementById('nama_ekskul').value = prdName[id].nama_ekskul;
  }
</script>