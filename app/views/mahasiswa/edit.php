<div class="container mt-3">
<h3>Edit Data Mahasiswa</h3>
<div class="row">
    <div class="col-lg-6">
        <form action="<?= BASEURL;?>/mahasiswa/save" method="post">
                <div class="mb-3">
                    
                    <input type="hidden" class="form-control" id="id" value="<?= $data['mhs']['id']?>" name="id">
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" value="<?= $data['mhs']['nama_lengkap']?>" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
                
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="number" class="form-control" id="nrp" value="<?= $data['mhs']['nrp']?>" name="nrp" placeholder="NRP">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?= $data['mhs']['email']?>" name="email" placeholder="example@email.com">
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" value="<?= $data['mhs']['jurusan']?>" name="jurusan" placeholder="Jurusan">
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="<?=BASEURL;?>/mahasiswa/index" class="card-link">Back to list</a>
                </div>
                     
        </form>
    </div>
</div>

</div>