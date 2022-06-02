<?php

namespace App\Controllers;

use App\Models\CDRModel;

class CDR extends BaseController
{
    protected $cdrModel;

    public function __construct()
    {
        $this->cdrModel = new CDRModel();
    }

    public function index()
    {
        return view('landing');
    }

    public function CDR()
    {
        $data = [
            'title' => 'Form CDR | WIRO',
            'validation' => \Config\Services::validation()
        ];

        return view('cdr/CDR', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'HOME | WIRO',
        ];

        return view('user/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'container' => 'required',
            'ref' => 'required',
            'size' => 'required',
            'type' => 'required',
            'status' => 'required',
            'activity' => 'required',
            'vessel' => 'required',
            'voyage' => 'required',
            'ship' => 'required',
            'date' => 'required',
            'time' => 'required',
            'code' => 'required',
            'dcode' => 'required',
            'remarks' => 'required',
            'nama' => 'required'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/home/CDR')->withInput()->with('validation', $validation);
            return redirect()->to('/cdr/CDR')->withInput();
        }

        $slug = url_title($this->request->getVar('container'), '-', true);

        $this->cdrModel->save([
            'id' => $this->request->getVar('id'),
            'ref' => $this->request->getVar('ref'),
            'container' => $this->request->getVar('container'),
            'slug' => $slug,
            'size' => $this->request->getVar('size'),
            'type' => $this->request->getVar('type'),
            'status' => $this->request->getVar('status'),
            'activity' => $this->request->getVar('activity'),
            'vessel' => $this->request->getVar('vessel'),
            'voyage' => $this->request->getVar('voyage'),
            'ship' => $this->request->getVar('ship'),
            'date' => $this->request->getVar('date'),
            'time' => $this->request->getVar('time'),
            'code' => $this->request->getVar('code'),
            'dcode' => $this->request->getVar('dcode'),
            'remarks' => $this->request->getVar('remarks'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan !!!');
        return redirect()->to('/cdr/CDR');
    }

    public function CDRRead()
    {
        $currentPage = $this->request->getVar('page_form') ? $this->request->getVar('page_form') :
            1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $cdr = $this->cdrModel->search($keyword);
        } else {
            $cdr = $this->cdrModel;
        }

        $data = [
            'title' => 'Read CDR | WIRO',
            'cdr' => $cdr->paginate(5, 'form'),
            'pager' => $this->cdrModel->pager,
            'currentPage' => $currentPage
        ];

        return view('cdr/CDRRead', $data);
    }

    public function FilterCDR()
    {
        $currentPage = $this->request->getVar('page_CDR') ? $this->request->getVar('page_CDR') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $pattern = $this->cdrModel->getCDR();
            $indexFix = [];
            $cdr = [];
            for ($i = 0; $i < count($pattern); $i++) {
                $index = filterData($keyword, $pattern[$i]['date']);
                // echo $pattern[$i]['date'] . "<br>";
                // echo $index . "<br><br>";

                if ($index >= 0) {
                    array_push($indexFix, $i);
                    array_push($cdr, $pattern[$i]);
                }
            }
            // $CDR = $this->CDRModel->search($keyword);
        } else {
            $cdr = $this->cdrModel->findAll();
        }
        // print_r($CDR);

        $data = [
            'title' => 'Read Handling EQ | WIRO',
            'cdr' => $cdr,
            'pager' => $this->cdrModel->pager,
            'currentPage' => $currentPage
        ];

        return view('CDR/FilterCDR', $data);
    }

    public function detailCDR($slug)
    {
        $data = [
            'title' => 'Detail CDR | WIRO',
            'cdr' => $this->cdrModel->getCDR($slug),
        ];

        return view('cdr/detailCDR', $data);
    }

    public function delete($id)
    {

        $cdr = $this->cdrModel->find($id);

        $this->cdrModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus !!!');
        return redirect()->to('/cdr/filterCDR');
    }

    public function approval($slug)
    {
        $data = [
            'title' => 'Approval',
            'validation' => \Config\Services::validation(),
            'cdr' => $this->cdrModel->getCDR($slug)
        ];

        return view('cdr/approval', $data);
    }

    public function update($id)
    {
        $namaVessel = $this->request->getVar('vesselLama');
        $namaRef = $this->request->getVar('refLama');
        $namaContainer = $this->request->getVar('containerLama');
        $namaSize = $this->request->getVar('sizeLama');
        $namaStatus = $this->request->getVar('statusLama');
        $namaType = $this->request->getVar('typeLama');
        $namaActivity = $this->request->getVar('activityLama');
        $namaVoyage = $this->request->getVar('voyageLama');
        $namaDate = $this->request->getVar('dateLama');
        $namaTime = $this->request->getVar('timeLama');
        $namaShip = $this->request->getVar('shipLama');
        $namaCode = $this->request->getVar('codeLama');
        $namaDcode = $this->request->getVar('dcodeLama');
        $namaName = $this->request->getVar('namaLama');
        $namaRemarks = $this->request->getVar('remarksLama');
        $namaSlug = $this->request->getVar('slugLama');
        $namaFoto = $this->request->getVar('fotoLama');
        $namattd = $this->request->getVar('ttdForeman');


        $folderPath = "img/ttdkapal/" . $this->request->getVar('nama') . "/";
        $image_parts = explode(";base64,", $this->request->getVar('signedKapal'));
        $image_type_aux = explode("data:image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filettdkapal =  $this->request->getVar('nama') . "_" . uniqid() . '.' . $image_type;
        $file = $folderPath . $filettdkapal;

        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
            file_put_contents($file, $image_base64);
        } else {
            file_put_contents($file, $image_base64);
        }

        $this->cdrModel->save([
            'id' => $id,
            'ref' => $namaRef,
            'container' => $namaContainer,
            'slug' => $namaSlug,
            'size' => $namaSize,
            'type' =>  $namaType,
            'status' => $namaStatus,
            'activity' => $namaActivity,
            'vessel' => $namaVessel,
            'voyage' =>  $namaVoyage,
            'ship' => $namaShip,
            'date' => $namaDate,
            'time' =>  $namaTime,
            'foto' => $namaFoto,
            'code' => $namaCode,
            'dcode' => $namaDcode,
            'remarks' => $namaRemarks,
            'nama' => $namaName,
            'signed' => $namattd,
            'signedKapal' => $filettdkapal,
            'namaKapal' => $this->request->getVar('namaKapal')
        ]);

        session()->setFlashdata('pesan', 'Approval Berhasil !!!');
        return redirect()->to('/');
    }
}
