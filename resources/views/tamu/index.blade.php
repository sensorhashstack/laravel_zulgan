@extends('layouts.master')

@section('content')

            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1>DATA TAMU</h1>
                </div>
                <div class="col-6">
                    <!-- <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Tamu
                    </button> -->
                    <a href="http://localhost/project_zul/public/bos" class="btn btn-primary btn-sm float-right">Tambah Data Tamu</a>
                </div>

                <table class="table table-hover">
                    <tr>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>NO TELP</th>
                        <th>EMAIL</th>
                        <th>PESAN</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_tamu as $tamu)
                    <tr>
                        <td>{{$tamu->nama}}</td>
                        <td>{{$tamu->alamat}}</td>
                        <td>{{$tamu->notelp}}</td>
                        <td>{{$tamu->email}}</td>
                        <td>{{$tamu->pesan}}</td>
                        <td>
                            <a href="/tamu/{{$tamu->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/tamu/{{$tamu->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
            </div>
        </div>
        
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silahkan Diisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="tamu/store" method="POST"> -->
                        <!-- <form action="/tamu/create" method="POST"> -->
                        <!-- <a class="nav-link" href="{{ route('store.st') }}" method="POST"> -->
                            <!-- {{csrf_field()}} -->
                            <!-- <table align="left">
                                <tr>
                                    <td>Name:</td>
                                    <td><input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('nama') }}</h6></td>
                                </tr>
                            </table>                            -->
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                                    <h6 style ="color : red ">{{$errors -> first('nama') }}</h6>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                            </div>
                           
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">No Telp</label>
                                    <input name="phone" type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pesan</label>
                                <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div> -->
                            
                        <!-- </a> -->
                    <!-- </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div> -->
        
@endsection
       


