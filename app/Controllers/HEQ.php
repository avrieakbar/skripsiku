<?php

namespace App\Controllers;

use App\Models\HEQModel;

class HEQ extends BaseController
{
    protected $heqModel;

    public function __construct()
    {
        $this->heqModel = new HEQModel();
    }

    public function index()
    {
        return view('landing');
    }

    public function heq()
    {
        $data = [
            'title' => 'Form Handiling EQ | WIRO',
            'validation' => \Config\Services::validation()
        ];

        return view('heq/heq', $data);
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
            'remarks' => 'required',
            'nama' => 'required'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/home/heq')->withInput()->with('validation', $validation);
            return redirect()->to('/heq/heq')->withInput();
        }

        $slug = url_title($this->request->getVar('container'), '-', true);

        $this->heqModel->save([
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
            'remarks' => $this->request->getVar('remarks'),
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan !!!');
        return redirect()->to('/heq/heq');
    }

    public function heqRead()
    {
        $currentPage = $this->request->getVar('page_heq') ? $this->request->getVar('page_heq') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $pattern = $this->heqModel->getHEQ();
            $indexFix = [];
            $heq = [];
            for ($i = 0; $i < count($pattern); $i++) {
                $index = filterData($keyword, $pattern[$i]['date']);
                // echo $pattern[$i]['date'] . "<br>";
                // echo $index . "<br><br>";

                if ($index >= 0) {
                    array_push($indexFix, $i);
                    array_push($heq, $pattern[$i]);
                }
            }
            // $heq = $this->heqModel->search($keyword);
        } else {
            $heq = $this->heqModel->findAll();
        }
        // print_r($heq);

        $data = [
            'title' => 'Read Handling EQ | WIRO',
            'heq' => $heq,
            'pager' => $this->heqModel->pager,
            'currentPage' => $currentPage
        ];

        return view('heq/HEQRead', $data);
    }

    public function filterHEQ()
    {
        $currentPage = $this->request->getVar('page_heq') ? $this->request->getVar('page_heq') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $pattern = $this->heqModel->getHEQ();
            $indexFix = [];
            $heq = [];
            for ($i = 0; $i < count($pattern); $i++) {
                $index = filterData($keyword, $pattern[$i]['date']);
                // echo $pattern[$i]['date'] . "<br>";
                // echo $index . "<br><br>";

                if ($index >= 0) {
                    array_push($indexFix, $i);
                    array_push($heq, $pattern[$i]);
                }
            }
            // $heq = $this->heqModel->search($keyword);
        } else {
            $heq = $this->heqModel->findAll();
        }
        // print_r($heq);

        $data = [
            'title' => 'Read Handling EQ | WIRO',
            'heq' => $heq,
            'pager' => $this->heqModel->pager,
            'currentPage' => $currentPage
        ];

        return view('heq/FilterHEQ', $data);
    }

    public function detailheq($slug)
    {
        $data = [
            'title' => 'Detail Handling EQ | WIRO',
            'heq' => $this->heqModel->getHEQ($slug),
        ];

        return view('heq/detailheq', $data);
    }

    public function delete($id)
    {

        $heq = $this->heqModel->find($id);

        $this->heqModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus !!!');
        return redirect()->to('/heq/filterHEQ');
    }

    public function approval($slug)
    {
        $data = [
            'title' => 'Approval | WIRO',
            'validation' => \Config\Services::validation(),
            'heq' => $this->heqModel->getHEQ($slug)
        ];

        return view('heq/approval', $data);
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

        $this->heqModel->save([
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
            'remarks' => $namaRemarks,
            'nama' => $namaName
        ]);

        session()->setFlashdata('pesan', 'Approval Berhasil !!!');
        return redirect()->to('/');
    }

    function delete_temporary() {
        $q = $this->db->get('heq')->result(); // get first table
        foreach($q as $r) { // loop over results
            $this->db->update('restore', $r, array('id' => $r->id)); // insert each row to another table
        }
    }
}
