<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta ttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soft Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="card mt-5">
                Data Guru 
        </div>
        <div class="card-body">
            <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>
            <a href="/guru/trash" class="btn btn-sm btn-primary">Tong sampah</a>
            <br/>
            <br/>
            <a href="/guru/kembalikan_semua">Kembalikan Semua</a>
            <a href="/guru/hapus_permanen_semua">Hapus Permanen Semua</a>
            <br/>
            <br/>

            <table class="table table-bordered">
                <thread>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Opsi</th>
                    </tr>
                </thread>

                <tbody>
                    @foreach($guru as $g)
                    <tr>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->umur }}</td>
                        <td>
                            <a href="/guru/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
                            <a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>