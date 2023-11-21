<center><h1>DATA BUKU</h1></center><br><br>

@if (session()->has('success'))
    <div style="color:green;">
        {{ session()->get('success') }}
    </div>
    <br>
@else
     <div style="color:red;">
        {{ session()->get('succdel') }}
    </div>
@endif

<a href="{{ route('books.create') }}">Tambah Data Buku</a><br>
<table border="1" cellpadding="15" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kutipan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        @foreach ($books as $book)
        
        <tr>
            <td>{{ $i }}</td>
            <td>
                <a href="{{ route('books.show', $book->id) }}" style="text-decoration:none; color:black">
                    {{$book->title }}
                </a>
            </td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->excerpt }}</td>
            <td>{{ $book->created_at->diffForHumans()}}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}"> <button>Edit</button></a>
                <form action="{{ route('books.destroy', $book->id) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Hapus" onclick="return confirm('Hapus buku {{ $book->title }}?')">
                </form>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </tbody>
</table>