<h2>Data Buku <div style="color: rgb(5, 90, 5); display:inline-block">{{ $book->title }}</div></h2>

<table>
    <tr>
        <td>Judul</td>
        <td>: {{ $book->title }}</td>
    </tr>
    <tr>
        <td>Author</td>
        <td>: {{ $book->author }}</td>
    </tr>

    <tr>
        <td>Deskripsi</td>
        <td>: {{ $book->description }}</td>
    </tr>
</table>