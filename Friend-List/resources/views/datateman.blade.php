@extends('template')
@section('title', 'Data Teman')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Friend List </h2>
	<div class="row">
    <div class="col-7 col-md-8">
        <div class="table-responsive">
        
            <table id="mytable" class="table table-bordered table-striped">
                <thead>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>kontak</th>
                    <th>keterangan</th>
                </thead>
            <tbody>
                @foreach($teman as $tmn)
                <tr>
                    <td>{{$tmn->nama}}</td>
                    <td>{{$tmn->alamat}}</td>
                    <td>{{$tmn->kontak}}</td>
                    <td>{{$tmn->keterangan}}</td>
                    <td>
                        <a href="/teman/edit/{{ $tmn->kontak}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/teman/hapus/{{ $tmn->kontak}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
             </div>
            </div>
    </div>
</div>

<style>
 .container{
     padding: 100px;
 }
</style>
@endsection
