 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Ekstrakurikuler</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=ekstrakurikuler">Ekstrakurikuler</a></li>
          <li><i class="fa fa-laptop"></i>Ubah Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Ekstrakurikuler
          </header>
          <div class="panel-body">
            <div class="form">
              <?php
                include '../../class/koneksi.php';
                $id_ekskul = $_GET['id_ekskul'];
                $data = mysqli_query($koneksi,"select * from ekstrakurikuler where id_ekskul='$id_ekskul'");
                while($d = mysqli_fetch_array($data)){
              ?>
              <form class="form-validate form-horizontal" method="post" action="../../controllers/admin/ekstrakurikuler/update.php">

                <input class=" form-control" name="id_ekskul" type="hidden" value="<?php echo $d['id_ekskul']; ?>"/>

                <div class="form-group ">
                  <label for="ekstrakurikuler" class="control-label col-lg-2">Nama Ekstrakurikuler <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="ekstrakurikuler" name="nama_ekskul" type="text" placeholder="masukkan nama ekstrakurikuler" title="ketik disini" required="required" value="<?php echo $d['nama_ekskul']; ?>"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jenis Ekskul <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15" name="jenis_ekskul" required="required" title="pilih salah satu"> value="<?php echo $d['jenis_ekskul']; ?>'" />
                      <option>Ekstrakurikuler Pendidikan Karakter</option>
                      <option>Ekstrakurikuler Pengembangan Bakat dan Minat (PBM)</option>
                    </select>
                  </div>
                </div>

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