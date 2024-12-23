@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>BIODATA DIRI</title>
    </head>

    <body>
        <h1 align="center">BIODATA DIRI</h1>
        <table width="745" border="1" cellspacing="2" cellpadding="5" align="center">
            <tr align="center" bgcolor="grey">
                <td width="174">DATA DIRI</td>
                <td width="353">KETERANGAN</td>
                <td width="232">FOTO</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>M. Rayhan Labib afifi</td>
                <td rowspan="10" align="center">
                    <img src="rayhan.jpg" width="250" height="310"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>Banyuwangi, 30 September 2003</td>
            </tr>
            <tr>
                <td>Perguruan Tinggi</td>
                <td>Tel-u Surabaya</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Raya Jember, Desa Tegalharjo, Kec Glenmore, Kab Banyuwangi</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>Apapun itu yang penting multimedia</td>
            </tr>
        </table>
    </body>
    </html>
@endsection
