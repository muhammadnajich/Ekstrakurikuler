 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Kelas</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=kelas">Kelas</a></li>
          <li><i class="fa fa-laptop"></i>Tambah Data</li>
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
              <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/kelas/create.php">
                <div class="form-group ">
                  <label for="kelas" class="control-label col-lg-2">Kelas <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="kelas" maxlength="9" name="kelas" type="text" placeholder="masukkan kelas" title="ketik disini" required="required" />
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