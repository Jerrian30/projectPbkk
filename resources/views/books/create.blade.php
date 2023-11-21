<h2>Tambah Data buku</h2>
<form action="{{ route('books.store') }}" method="post">
    @csrf
<table  cellpadding="10">
    <tr>
        <td>
            <label for="title">Judul</label>
        </td>
        <td>
            <input id="title"
            name="title"
            type="text"
            class="@error('title') is-invalid @enderror">
        
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </td>
    </tr>
    <tr>
        <td>
            <label for="title">Penulis</label>
        </td>
        <td>
            <select name="author_id" id="author" class="form-control form-control-lg @error('author_id') is-invalid @endif">
                <option selected disabled>Pilih Penulis</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" @if (old('author_id') == $author->id) selected @endif>
                            {{ $author->name }}
                        </option>
                    @endforeach
            </select>
                     @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </td>
    </tr>
    <tr>
        <td>
            <label for="excerpt">Kutipan</label>
        </td>
        <td>
            
    <input id="excerpt"
    type="text"
    name="excerpt"
    class="@error('excerpt') is-invalid @enderror">

    @error('excerpt')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        </td>
    </tr>
    <tr>
        <td>
            <label for="description">Deskripsi</label>
        </td>
      <td>
        <input id
        type="text"
        name="description"
        class="@error('description') is-invalid @enderror">

        @error('description')
            <div class="alert alert-danger"></div>
        @enderror
      </td>
        
    </tr>

    <tr >
        <td></td>
        <td>
            <input type="submit" value="Simpan">
        </td>
    </tr>
</table>
</form>