<!-- Add Modal Tambah -->
<div class="modal fade" id="tambahMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewModalLabel">Add New Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Mahasiswa -->
                <form action="{{route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data" id="add-mahasiswa-form">
                    @csrf
                    <div class="form-group">
                        <label for="edit-nama">Nama</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="edit-nim">NIM</label>
                        <input type="text" class="form-control" id="edit-nim" name="nim" value="">
                    </div>
                    <div class="form-group">
                        <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="edit-jenis-kelamin" name="kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal edit -->
<div class="modal fade" id="editMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewModalLabel">Update Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Mahasiswa -->
                @isset($row)
                <form action="{{ route('mahasiswa.update', $row->id) }}" method="POST" enctype="multipart/form-data" id="add-mahasiswa-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit-nama">Nama</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama" value="{{ $row->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="edit-nim">NIM</label>
                        <input type="text" class="form-control" id="edit-nim" name="nim" value="{{ $row->nim }}">
                    </div>
                    <div class="form-group">
                        <label for="edit-jenis-kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="edit-jenis-kelamin" name="kelamin">
                            <option value="Laki-laki" {{ $row->kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $row->kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                @endisset
            </div>
        </div>
    </div>
</div>
