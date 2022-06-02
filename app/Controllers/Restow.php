<?php

namespace App\Controllers;

use App\Models\restowModel;

class Restow extends BaseController
{
    protected $restowModel;

    public function __construct()
    {
        $this->restowModel = new RestowModel();
    }

    public function index()
    {
        return view('landing');
    }

    public function restow()
    {
        $data = [
            'title' => 'Form Restow | WIRO',
            'validation' => \Config\Services::validation()
        ];

        return view('restow/restow', $data);
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
            'lbsb' => 'required',
            'lbsr' => 'required',
            'lbst' => 'required',
            'lasb' => 'required',
            'lasr' => 'required',
            'last' => 'required',
            'remarks' => 'required',
            'nama' => 'required'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/home/restow')->withInput()->with('validation', $validation);
            return redirect()->to('/restow/restow')->withInput();
        }

        $slug = url_title($this->request->getVar('container'), '-', true);

        $this->restowModel->save([
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
            'lbsb' => $this->request->getVar('lbsb'),
            'lbsr' => $this->request->getVar('lbsr'),
            'lbst' => $this->request->getVar('lbst'),
            'lasb' => $this->request->getVar('lasb'),
            'lasr' => $this->request->getVar('lasr'),
            'last' => $this->request->getVar('last'),
            'remarks' => $this->request->getVar('remarks'),
            'nama' => $this->request->getVar('nama'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan !!!');
        return redirect()->to('/restow/restow');
    }

    public function restowRead()
    {
        $currentPage = $this->request->getVar('page_form') ? $this->request->getVar('page_form') :
            1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $restow = $this->restowModel->search($keyword);
        } else {
            $restow = $this->restowModel;
        }

        $data = [
            'title' => 'Read Restow | WIRO',
            'restow' => $restow->paginate(5, 'form'),
            'pager' => $this->restowModel->pager,
            'currentPage' => $currentPage
        ];

        return view('restow/restowRead', $data);
    }

    public function FilterRestow()
    {
        $currentPage = $this->request->getVar('page_restow') ? $this->request->getVar('page_restow') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $pattern = $this->restowModel->getrestow();
            $indexFix = [];
            $restow = [];
            for ($i = 0; $i < count($pattern); $i++) {
                $index = filterData($keyword, $pattern[$i]['date']);
                // echo $pattern[$i]['date'] . "<br>";
                // echo $index . "<br><br>";

                if ($index >= 0) {
                    array_push($indexFix, $i);
                    array_push($restow, $pattern[$i]);
                }
            }
            // $restow = $this->restowModel->search($keyword);
        } else {
            $restow = $this->restowModel->findAll();
        }
        // print_r($restow);

        $data = [
            'title' => 'Read Handling EQ | WIRO',
            'restow' => $restow,
            'pager' => $this->restowModel->pager,
            'currentPage' => $currentPage
        ];

        return view('restow/FilterRestow', $data);
    }

    public function detailrestow($slug)
    {
        $data = [
            'title' => 'Detail Restow | WIRO',
            'restow' => $this->restowModel->getrestow($slug),
        ];

        return view('restow/detailrestow', $data);
    }

    public function delete($id)
    {

        $restow = $this->restowModel->find($id);

        $this->restowModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus !!!');
        return redirect()->to('/restow/filterRestow');
    }

    public function approval($slug)
    {
        $data = [
            'title' => 'Approval | WIRO',
            'validation' => \Config\Services::validation(),
            'restow' => $this->restowModel->getrestow($slug)
        ];

        return view('restow/approval', $data);
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
        $namaName = $this->request->getVar('namaLama');
        $namaRemarks = $this->request->getVar('remarksLama');
        $namaSlug = $this->request->getVar('slugLama');
        $namaLbsb = $this->request->getVar('lbsbLama');
        $namaLbsr = $this->request->getVar('lbsrLama');
        $namaLbst = $this->request->getVar('lbstLama');
        $namaLasb = $this->request->getVar('lasbLama');
        $namaLasr = $this->request->getVar('lasrLama');
        $namaLast = $this->request->getVar('lastLama');
        $namaFoto = $this->request->getVar('fotoLama');
        $namattd = $this->request->getVar('ttdForeman');
       
        $this->restowModel->save([
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
            'remarks' => $namaRemarks,
            'lbsb' => $namaLbsb,
            'lbsr' => $namaLbsr,
            'lbst' => $namaLbst,
            'lasb' => $namaLasb,
            'lasr' => $namaLasr,
            'last' => $namaLast,
            'nama' => $namaName,
            'signed' => $namattd,
            'namaKapal' => $this->request->getVar('namaKapal')
        ]);

        session()->setFlashdata('pesan', 'Approval Berhasil !!!');
        return redirect()->to('/');
    }
}
