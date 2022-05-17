@extends('template')
@section('title', 'Edit Data Teman')

@section('konten')
@foreach($teman as $tmn)
<div class="content">
    <div class="row">    
        <div class="col-7 col-md-8">
            <div class="edit">
                <form action="/teman/update" method ="post">
                    {{csrf_field()}}
                    nama <br>  <input type=text, name="nama", required="required", value="{{$tmn->nama}}"><br>
                    alamat <br> <input type=text, name="alamat", required="required", value="{{$tmn->alamat}}"><br>
                    kontak <br><input type=text, name="kontak", required="required", value="{{$tmn->kontak}}"><br>
                    keterangan <br> <input type=text, name="keterangan", required="required", value="{{$tmn->keterangan}}"><br>
                    <input type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>
</div>
 @endforeach

@endsection 