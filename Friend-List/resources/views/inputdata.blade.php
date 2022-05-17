@extends('template')
@section('title', 'Input Data Teman')

@section('konten')
<div class="content">
    <div class="row">    
                  <div class="col-7 col-md-8">
                    <div class="isi">
                        <form action="/teman/store" method ="post">
                        {{csrf_field()}}
                        nama <br> <input type=text, name="nama", required="required"><br>
                        alamat <br> <input type=text, name="alamat", required="required"><br>
                        kontak <br> <input type=text, name="kontak", required="required"><br>
                        keterangan <br> <input type=text, name="keterangan", required="required"><br>
                        <input type="submit" value="Simpan Data">
                        </form>
                    </div>
                  </div>
    </div>
</div>

@endsection