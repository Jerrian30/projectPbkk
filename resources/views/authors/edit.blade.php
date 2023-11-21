<form action="{{ route('authors.update', $author->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nama</label>
    <input type="text"
    value="{{ old('name', $author->name) }}"
    name="name"
    id="name"
    class="@error('name')is-invalid @enderror">

    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    
    <label for="email">Email</label>

    <input type="email"
    value="{{ old('email', $author->email) }}"
    name="email"
    id="email"
    class="@error('email') is-invalid @enderror">

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     <br><br>

    <label for="address">Alamat</label>
    <input type="text"
    value="{{ old('address', $author->address) }}"
    name="address"
    id="address"
    class="@error('address') is-invalid @enderror">
    @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     <br><br>
    
    <button type="submit">Simpan</button>
</form>