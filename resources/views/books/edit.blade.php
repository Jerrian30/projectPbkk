<h2>Edit Data Buku <div style="color: rgb(5, 90, 5); display:inline-block">{{ $book->title }}</div></h2>
<form action="{{ route('books.update', $book->id) }}" method="post">
    @csrf
    @method('PUT')

<table  cellpadding="10">
    <tr>
        <td>
            <label for="title">Judul</label>
        </td>
        <td>
            <input id="title"
            value="{{ old('title', $book->title) }}"
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
            <select name="author_id" id="author" class="form-control form-control-lg">
                <option selected disabled>Pilih Penulis</option>
                    @foreach ($authors as $author)
                <option value="{{ $author->id }}" @if (old('author_id', $book->author_id)) selected @endif>
                                        {{ $author->name }}</option>
                    @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="excerpt">Kutipan</label>
        </td>
        <td>
        <textarea name="excerpt" id="excerpt" cols="30" rows="10"  class="@error('excerpt') is-invalid @enderror" >
            {{ old('excerpt', $book->excerpt) }}
        </textarea>
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
        <textarea name="description" id="description" cols="30" rows="10"  class="@error('description') is-invalid @enderror">
            {{ old('description', $book->description) }}
        </textarea>

        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </td>
        
    </td>
        
    </tr>

    <tr >
        <td></td>
        <td>
            <input type="submit" value="Edit">
        </td>
    </tr>
</table>
</form>