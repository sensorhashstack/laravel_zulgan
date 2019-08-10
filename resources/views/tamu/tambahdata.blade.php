@extends('layouts.master')

@section('content')
        
            <div class="form" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silahkan Diisi</h5>
                    </div>
                    <div class="modal-body">
                        <form action="tamu/store" method="POST">                
                            {{csrf_field()}}
                            <table align="left">
                                <tr>
                                    <td>Name:</td>
                                    <td><input name="nama" type="text" class="form-control" placeholder="Nama"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('nama') }}</h6></td>
                                </tr>
                                <tr>
                                    <td>Alamat:</td>
                                    <td><input name="alamat" type="text" class="form-control" placeholder="Alamat"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('alamat') }}</h6></td>
                                </tr>
                                <tr>
                                    <td>No Telpon:</td>
                                    <td><input name="notelp" type="text" class="form-control" placeholder="+628xxxxxxxxxx"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('notelp') }}</h6></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><input name="email" type="text" class="form-control" placeholder="email"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('email') }}</h6></td>
                                </tr>
                                <tr>
                                    <td>Pesan:</td>
                                    <td><input name="pesan" type="text" class="form-control" placeholder="pesan"></td>
                                    <td><h6 style ="color : red ">{{$errors -> first('pesan') }}</h6></td>
                                </tr>
                            </table>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        
        
@endsection
       


