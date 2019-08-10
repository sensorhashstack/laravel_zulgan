<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Propaganistas\LaravelPhone\PhoneNumber;
// use Illuminate\Support\Facades\Validator;
use Validator;
use Redirect;
use App\Http\Request\TamuRequest;

class TamuController extends Controller
{
    //
    public function index()
    {
        $data_tamu = \App\Tamu::all();
        return view('tamu.index', ['data_tamu' => $data_tamu]);
    }

    public function bos()
    {
        $data_tamu = \App\Tamu::all();
        return view('tamu.tambahdata', ['data_tamu' => $data_tamu]);
    }

    public function create(Request $request)
    {
        \App\Tamu::create($request->all());
        return redirect('/tamu')->with('sukses', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $tamu = \App\Tamu::find($id);
        return view('tamu/edit', ['tamu' => $tamu]);
    }

    public function update(Request $request, $id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->update($request->all());
        return redirect('/tamu')->with('sukses', 'Data Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->delete($tamu);
        return redirect('/tamu')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function search(Request $request, $id)
    {
        $tamu = \App\Tamu::find($id);
        $tamu->search($tamu);
        return redirect('/search')->with('sukses', 'Data Berhasil Ditemukan');
        //egulias

    }

    public function messages(){
        return[
            'nama.required' => 'gak boleh kosong'
        ];
    }

    // public function store(Request $request)
    // {
    public function store(TamuRequest $request)
    {
        \App\Tamu::create($request->all());
        return redirect('/tamu')->with('sukses', 'Data Berhasil Disimpan');
        // $message = [
        //     'nama.required' => 'gak boleh kosong'
        // ];

        // $data = [
        //     'nama' => $request->nama,
            // 'alamat' => $request->alamat,
            // 'email' => $request->email,
            // 'notelp' => $request->notelp,
            // 'pesan' => $request->pesan
            // ];
        // $rules = [
            // 'email' => 'required|email|regex:/(.*).co\.id$/i',
            // 'email' => 'required|email|regex:/^[A-Za-z0-9\.]*@(gmail)[.](com)$/',
            // 'nama' => 'required',
            // 'alamat' => 'required',
            // 'email' => 'required|ends_with:@gmail.com,@stis.ac.id,@yahoo.com',
            // 'notelp' => 'required|string|phone_number',
            // 'pesan' => 'required'
        // ];
        // $validator = Validator::make($data, $rules, $message);

        // if ($validator->fails()) {
        //         return $validator->messages();
                // return TamuController::messages();
        //         return $validator->errors()->add('field', 'Something is wrong with this field!');
        // }

        // if ($validator->fails()) {
            // return redirect()
                // ->back
                // return $validator->messages();
        //         return Redirect::to('bos')
        //         ->withErrors($message);
                
        // }



        // $isoCode = $request->iso_code;
        // $notelp = $request->notelp;
        // $data = [
        //     'iso_code' => $request->iso_code,
        //     'notelp' => $request->notelp
        // ];
        // $rules = [
        //     'iso_code' => 'required',
        //     // 'notelp' => 'required|notelp:'.$isoCode
        //     // 'notelp' => '[new App\Rules\PhoneNumber]'
        //     'notelp' => 'required|regex:[+62\0-9/]|min:10'
        // ];
        // $validator = Validator::make($data, $rules);
        // // $this->assertFalse(validator($data, $rules)->passes());
        // if ($validator->fails()) {
        //     return $validator->messages();
        // }
        
        // return PhoneNumber::make($notelp, $isoCode);

        // \App\Tamu::create($request->all());
        // return redirect('/tamu')->with('sukses', 'Data Berhasil Disimpan');
        // if ($validator->fails()) {
        //     // return $validator->messages();
        //     // $messages = $validator->messages();
        //     return Redirect::to('index')
        //      ->withErrors($validator);
        //    } else {
        //     $duck = new Duck;
        //     $duck->name     = Input::get('name');
        //     $duck->email    = Input::get('email');
        //     $duck->password = Hash::make(Input::get('password'));
          
        //     // save our duck
        //     $duck->save();
          
        //     // redirect ----------------------------------------
        //     // redirect our user back to the form so they can do it all over again
        //     return Redirect::to('ducks');
          
        //    }
        // }          
    }
}
