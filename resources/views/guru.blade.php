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
            <h2>Data Guru </h2>
        </div>
        <div class="card-body">
            <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>
            <a href="/guru/trash">Tong sampah</a>
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
                        <a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>