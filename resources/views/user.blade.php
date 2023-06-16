<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Kelas</th>
                <th>Kota</th>
            </tr>
            
        </thead>

    <tbody>
    @foreach($siswa as $r)
       <tr>
        <td>{{$r->NO}}</td>
        <td>{{$r->Nisn}}</td>
        <td>{{$r->Nama}}</td>
        <td>{{$r->JK}}</td>
        <td>{{$r->Kelas}}</td>
        <td>{{$r->Kota}}</td>
        </tr> 
              
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>