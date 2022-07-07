<?php

namespace App\Controllers;

use App\Models\ObjekModel;

class Wisata extends BaseController
{
    public function __construct()
    {
        $this->wisata = new ObjekModel();
    }

    public function index()
    {
        $ow = $this->wisata->findAll();
        $validation = \Config\Services::validation();
        return view('wisata/index',compact('ow','validation'));
    }

    public function save()
    {
        // Validation
        if(!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[Objekwisata.nama]',
                'errors' => [
                    'required' => 'nama wajib diisi !!',
                    'is_unique' => 'nama sudah ada !!',
                ]
            ],

            'kode' => [
                'rules' => 'required|is_unique[Objekwisata.kode]',
                'errors' => [
                    'required' => ' kode wajib diisi !!',
                    'is_unique' => ' kode sudah ada !!',
                ]
            ],
            
            'harga_anak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' harga anak wajib diisi !!',
                ]
            ],

            'harga_dewasa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' harga dewasa wajib diisi !!',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/wisata')->withInput()->with('validation', $validation);
        }

        $this->wisata->save([
           'nama' => $this->request->getVar('nama'),
           'harga_anak' => $this->request->getVar('harga_anak'),
           'kode' => $this->request->getVar('kode'),
           'harga_dewasa' => $this->request->getVar('harga_dewasa')
        ]);

        return redirect()->to('/wisata');
    }

    public function delete($id)
    {
        $data = $this->wisata->find($id);
        $this->wisata->delete($data);
        return redirect()->to('/wisata');

    }

    public function edit($id)
    { 
        $objekwisata = $this->wisata->findAll();
        $ow = $this->wisata->find($id);
        $validation = \Config\Services::validation();
        return view('wisata/edit',compact('ow','validation','objekwisata'));
    }

    public function update($id)
    {
        $this->wisata->update($id ,[
           'nama' => $this->request->getVar('nama'),
           'harga_anak' => $this->request->getVar('harga_anak'),
           'kode' => $this->request->getVar('kode'),
           'harga_dewasa' => $this->request->getVar('harga_dewasa')
        ]);

        return redirect()->to('/wisata');
    }


    public function detail($id)
    {
        $ow = $this->wisata->find($id); 
        $validation = \Config\Services::validation();
        return view('wisata/detail', compact('ow','validation'));
    }
}
