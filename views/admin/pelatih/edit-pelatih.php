 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Pelatih</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=pelatih">Pelatih</a></li>
          <li><i class="fa fa-laptop"></i>Ubah Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Pelatih
          </header>
          <div class="panel-body">
            <div class="form">
              <?php
              include '../../class/koneksi.php';
              $id_pelatih = $_GET['id_pelatih'];
              $data = mysqli_query($koneksi,"select * from pelatih where id_pelatih = '$id_pelatih'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/pelatih/update.php">
                  <!--<label for="pelatih" class="control-label col-lg-2">NIP <span class="required">*</span></label>-->
                  <input class=" form-control" id="id_pelatih" name="id_pelatih" type="hidden" maxlength="25" placeholder="masukkan nip pelatih" title="ketik disini" required="required" value="<?php echo $d['id_pelatih']; ?>"/>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="masukkan nama lengkap pelatih" title="ketik disini" required="required" value="<?php echo $d['nama_lengkap']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="pelatih" class="control-label col-lg-2">Gelar</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="gelar" name="gelar" type="text" placeholder="masukkan gelar pelatih" title="ketik disini" value="<?php echo $d['gelar']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Ekskul<span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" id="id_ekskul" name="id_ekskul" title="pilih salah satu" required="required" onchange='changeValue(this.value)'>
                        <option value="" disabled selected>-=Pilih Salah Satu=-</option>
                        <?php
                        include '../../class/koneksi.php';
                        $data = mysqli_query($koneksi, "select * from ekstrakurikuler");
                        $jsArray = "var prdName = new Array();\n";
                        while ($d = mysqli_fetch_array($data)) {
                          echo "<option value='".$d['id_ekskul']."'>".$d['jenis_ekskul']." : ".$d['nama_ekskul']."</option>";
                          $jsArray .= "prdName['".$d['id_ekskul']."'] = {nama_ekskul: '".addslashes($d['nama_ekskul'])."'};\n";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <input class=" form-control" id="nama_ekskul" name="nama_ekskul" type="hidden" readonly="readonly" />
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-success" type="submit">Ubah</button>
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
    document.getElementById('nama_ekskul').value = prdName[id].nama_ekskul;
  }
</script>