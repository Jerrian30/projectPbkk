<h2>Data Penulis <div style="color: rgb(5, 90, 5); display:inline-block">{{ $author->name }}</div></h2>

<table>
    <tr>
        <td>Nama</td>
        <td>: {{$author->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>: {{ $author->email}}</td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>: {{ $author->address }}</td>
    </tr>
</table>