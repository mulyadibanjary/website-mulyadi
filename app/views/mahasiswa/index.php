<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash();?>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Mahasiswa
        </button><br><br>
            <ul>Daftar Mahasiswa</ul>
                <ul class="list-group">
                    <?php   foreach($data['mhs'] as $mhs):?>
                    <li class="list-group-item ">
                    <?= $mhs['nama_lengkap']?>
                    <a href="<?= BASEURL;?>/mahasiswa/delete/<?= $mhs['id'];?>" class="badge bg-danger float-end ms-1"
                    onclick="return confirm('Anda yakin akan menghapus data ini?');">Delete</a>  
                    <a href="<?= BASEURL;?>/mahasiswa/update/<?= $mhs['id'];?>" class="badge bg-success float-end ms-1" >Edit</a>
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge bg-primary float-end ms-1">Detail</a>
                    </li>
                    <?php endforeach;?>
               </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
          </div>
        
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">
          </div>

          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
