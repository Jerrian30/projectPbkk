<center><h1>DATA PENULIS</h1></center><br><br>


<a href="{{ route('authors.create') }}">Tambah Data</a><br><br>

@if (session()->has('success'))
    <div style="color:green">
       {{ session()->get('success') }} 
    </div>
 @else
  <div style="color:rgb(170, 8, 8)">
       {{ session()->get('succdel') }} 
    </div>
@endif

<table border="1" cellpadding="15" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $i }}</td>
            <td>
                <a href="{{ route('authors.show', $author->id) }}"> {{$author->name }}</a>
            </td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->address }}</td>
            <td>
                <a href="{{ route('authors.edit', $author->id) }}" ><button style="display:inline-block">Edit</button></a>
                <form action="{{ route('authors.destroy', $author->id) }}" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" onclick="return confirm('Yakin hapus penulis {{ $author->name }}?')">
                </form>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </tbody>
</table>