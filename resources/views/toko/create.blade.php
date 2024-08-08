


<div class="container">
    <h2>Create User</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('toko.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="lokasi">lokasi</label>
            <input type="lokasi" name="lokasi" id="lokasi" class="form-control" value="{{ old('lokasi') }}">
            @error('lokasi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="alamat" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">kategori</label>
            <select name="kategori" id="">
                <option value="jasa">jasa</option>
                <option value="barang">barang</option>
            </select>
            @error('kategori')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
