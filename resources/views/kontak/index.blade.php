@extends('layout')

@section('content')
<br><br><br><br>
 <style>
     img{
        float: left;
        margin: 10px 10px 0 150px;
        width: 20%;
        height: 50%;
     }
     footer{
        background-color: yellowgreen;
    }
 </style>
 <body>
   <img src={{asset ('image/1.jpeg')}}  >
   <br><br>
    <a>Facebook : </a>
    <a href="https://m.facebook.com/Bimbel.PrivatCermat.Smd">Bimbel Privat Cermat Samarinda </a><br>
    <a>Instagram : </a>
    <a href="https://instagram.com/bimbelcermatsmd1?igshid=YmMyMTA2M2Y=">bimbelcermatsmd1</a><br>
    <a>Whatsapp : </a>
    <a href="https://m.facebook.com/Bimbel.PrivatCermat.Smd">Bimbel Privat Cermat Samarinda </a><br>
    <a>Alamat : </a>
    <a href="https://maps.app.goo.gl/coruxgnww5MDNaXG9">Gg padaidi, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur </a>
 </body>

    @endsection
