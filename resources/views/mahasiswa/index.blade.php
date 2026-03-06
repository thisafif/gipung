<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Prodi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jenis_kelamin }}</td>
            <td>{{ $mhs->usia }}</td>
            <td>{{ $mhs->prodi }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>