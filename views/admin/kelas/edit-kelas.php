 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Kelas</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=kelas">Kelas</a></li>
          <li><i class="fa fa-laptop"></i>Ubah Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Kelas
          </header>
          <div class="panel-body">
            <div class="form">
              <?php
                include '../../class/koneksi.php';
                $id_kelas = $_GET['id_kelas'];
                $data = mysqli_query($koneksi,"select * from kelas where id_kelas='$id_kelas'");
                while($d = mysqli_fetch_array($data)){
              ?>
              <form class="form-validate form-horizontal" method="post" action="../../controllers/admin/kelas/update.php">
                <div class="form-group ">
                  <input class=" form-control" name="id_kelas" type="hidden" value="<?php echo $d['id_kelas']; ?>"/>

                  <label for="kelas" class="control-label col-lg-2">Kelas <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="kelas" name="kelas" maxlength="8" required="required" type="text" placeholder="masukkan kelas" title="ketik disini" value="<?php echo $d['kelas']; ?>"/>
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