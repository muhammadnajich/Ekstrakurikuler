 <section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Akun</h3>
        <ol class="breadcrumb">
          <li><i class=""></i><a href="?page=akun">Akun</a></li>
          <li><i class="fa fa-laptop"></i>Tambah Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading" style="color: red;">
            Hanya untuk akun Admin dan Pelatih 
          </header>
          <div class="panel-body">
            <div class="form">
              <form class="form-validate form-horizontal " method="post" action="../../controllers/admin/akun/create.php">
                <div class="form-group ">
                  <label for="akun" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="masukkan nama lengkap " title="ketik disini" required="required" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="akun" class="control-label col-lg-2">Username <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="username" name="username" type="text" placeholder="masukkan username" title="ketik disini" required="required" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="akun" class="control-label col-lg-2">Password <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="password" name="password" type="password" placeholder="masukkan password" title="ketik disini" required="required" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="inputSuccess">Level Akun <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <select class="form-control m-bot15" name="level" title="pilih salah satu" required="required">
                      <option value="admin">Admin</option>
                      <option value="pelatih">Pelatih</option>
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