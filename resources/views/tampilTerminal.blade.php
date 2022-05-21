<html>
    <head>
        <title>Tugas Migration Ika Fitri</title>
        <style>
        body {
        width: 900px;
        background:darkred; ;
        padding: 80px;
        margin: auto;
        }
        .pink{background-color: pink;}
        .bue{background-color: plum;}
    </style>
    </head>
    <body>
    <center>
        
        <table border="1" width=55%>
            <tr class="bue"> 
                
                <td><center>No</center></td>
                <td><center>Plat Bis</center></td>
                <td><center>Merk Bis</center></td>
                <td><center>Tipe Bis</center></td>
                <td><center>Nama Supir</center></td>

            </tr>
            @foreach($bis as $data)
            <tr class="pink"> 
                <td><center>{{  $loop->iteration    }}</center></td>
                <td>{{  $data->plat_bis }}</td>
                <td>{{  $data->merk_bis }}</td>
                <td>{{  $data->tipe_bis }}</td>
                <td>{{  $data->supir->nama_supir    }}</td>
            </tr>
            @endforeach
        </table>
        </center>
        <h1>REKAP DATA</h1>
        <h3>Jumlah bis kecil : {{$bis_kecil}} unit</h3>
        <h3>Jumlah bis menengah : {{$bis_menengah}} unit</h3>
        <h3>Jumlah bis besar : {{$bis_besar}} unit</h3>
        <h3>Total bis : {{$total_bis}} unit</h3>

    </body>
</html>