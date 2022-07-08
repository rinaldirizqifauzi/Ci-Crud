<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Models\ObjekModel;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $this->objekwisata = new ObjekModel();
        $this->transaksi = new TransaksiModel();
    }

    public function printpdf()
    {
        $dompdf = new Dompdf();
        $transaksi = $this->transaksi->getAll();
        $html =  view('transaksi/cetak', compact('transaksi'));
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('data transaksi.pdf', array(
            "Attachment" => false
        ));
        
    }

    public function index()
    {
        $transaksi = $this->transaksi->getAll();
        $data = [
            'transaksi' => $transaksi,
            'validation' =>  \Config\Services::validation(),
            'objekwisata' => $this->objekwisata->findAll(),
        ];
        return view('transaksi/index', $data);
    }

    public function save()
    {
         // Validation
         if(!$this->validate([
            'nofak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nofak wajib diisi !!',
                ]
            ],

            'kode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' kode wajib diisi !!',
                ]
            ],
            
            'jumlah_anak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' jumlah anak wajib diisi !!',
                ]
            ],

            'jumlah_dewasa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => ' jumlah dewasa wajib diisi !!',
                ]
            ],
            
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/transaksi')->withInput()->with('validation', $validation);
        }

        $this->transaksi->save([
            'nofak' => $this->request->getVar('nofak'),
            'jumlah_anak' => $this->request->getVar('jumlah_anak'),
            'kode' => $this->request->getVar('kode'),
            'jumlah_dewasa' => $this->request->getVar('jumlah_dewasa')
         ]);
 
         return redirect()->to('/transaksi');
    }
}
