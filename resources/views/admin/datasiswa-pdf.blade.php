<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

h1{
    text-align: center;
}
</style>
</head>
<body>

<h1>Data Siswa PKL</h1>

<table id="customers">
  <tr>
    <th>Nisn</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Kelas</th>
    <th>Kota</th>
    <th>Keahlian</th>
  </tr>
  @foreach($siswa as $user)
  <tr>
      <td>{{ $user->Nisn }}</td>
      <td>{{ $user->Nama }}</td>
      <td>{{ $user->JK }}</td>
      <td>{{ $user->Kelas }}</td>
      <td>{{ $user->Kota }}</td>
      <td>{{ $user->Keahlian }}</td>
  </tr> 
    @endforeach

</table>

</body>
</html>