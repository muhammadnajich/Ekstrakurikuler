 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Ekstrakurikuler</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=ekstrakurikuler">Ekstrakurikuler</a></li>
          <li><i class="fa fa-laptop"></i>Tambah Data</li>
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
              <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/ekstrakurikuler/create.php">
                <div class="form-group ">
                  <label for="ekstrakurikuler" class="control-label col-lg-2">Nama Ekstrakurikuler <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="ekstrakurikuler" name="nama_ekskul" type="text" placeholder="masukkan nama ekstrakurikuler" title="ketik disini" required="required" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Jenis Ekskul <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15" name="jenis_ekskul" title="pilih salah satu" required="required">
                      <option value="Ekstrakurikuler Pendidikan Karakter">Ekstrakurikuler Pendidikan Karakter</option>
                      <option value="Ekstrakurikuler Pengembangan Bakat dan Minat (PBM)">Ekstrakurikuler Pengembangan Bakat dan Minat (PBM)</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>