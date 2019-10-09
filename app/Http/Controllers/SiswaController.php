<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
      //  $data ['siswa'] = \DB::table('t_siswa')
      //  ->get();

      $data['siswa'] = \App\Siswa::orderBy('jenkel')->get();
      return view('siswa', $data);
    }

    public function create(){
        return view('siswa.form');
    }

    public function store(Request $request){
        $rule = [
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenkel' => 'required',
            'goldar' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);    
        // $status = \DB::table('t_siswa')->insert($input);

        // $status = \App\Siswa::create($input);

        $siswa = new \App\Siswa;
        $siswa->nis = $input['nis'];
        $siswa->nama_lengkap = $input['nama_lengkap'];
        $siswa->jenkel = $input['jenkel'];
        $siswa->goldar = $input['goldar'];
        $status = $siswa->save();

        if ($status){
            return redirect('/siswa')->with('success','Data berhasil ditambahkan');
        } else {
            return redirect('/siswa/create')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit (Request $request, $id){
        $data['siswa'] = \DB::table('t_siswa')->find($id);
        return view ('siswa.form', $data);
    }
    public function update (Request $request, $id){
        $rule = [
            'nis'=> 'required|numeric',
            'nama_lengkap'=> 'required|string',
            'jenkel'=> 'required',
            'goldar'=> 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);
        // unset($input['_method']);

        // $status = \DB::table('t_siswa')->where('id', $id)->update($input);

        $siswa = \App\Siswa::find($id);
        // $status = $siswa->update($input);

        $siswa = new \App\Siswa;
        $siswa->nis = $input['nis'];
        $siswa->nama_lengkap = $input['nama_lengkap'];
        $siswa->jenkel = $input['jenkel'];
        $siswa->goldar = $input['goldar'];
        $status = $siswa->update();

        if ($status) {
            return redirect('/siswa')->with('success', 'Data Berhasil di ubah');
        }
        else {
            return redirect('/siswa/create')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy (Request $request, $id){
        $siswa = \App\Siswa::find($id);
        $status = $siswa->delete();
        
        // $status = \DB::table('t_siswa')->where('id', $id)->delete();

        if ($status) {
            return redirect('/siswa')->with('success', 'Data Berhasil dihapus');
        }
        else {
            return redirect('/siswa/create')->with('error', 'Data gagal dihapus');
        }
    }
}
