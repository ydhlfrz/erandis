<?php

namespace App\Controllers;

use App\Models\GroupModel;
use App\Models\TabelModel;

class Tabel extends BaseController
{

    function __construct() {
        $this->group = new GroupModel();
    }


    public function index()
    {
        $builder = $this->db->table('randisapp');
        $query = $builder->get()->getResult();
        $data['data'] = $query;
        return view('tabel/get', $data);
    }

    public function create()
    {
        return view('tabel/add');
    }

    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('randisapp')->insert($data);

        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('tabel'))->with('success', 'Kendaraan Berhasil Ditambah.');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('randisapp')->getWhere(['id_randis' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['randisapp'] = $query->getRow();
                return view('tabel/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('randisapp')->where(['id_randis' => $id])->update($data);
        return redirect()->to(site_url('tabel'))->with('success', 'Kendaraan Berhasil Di Update.');
    }

    public function destroy($id)
    {
        $this->db->table('randisapp')->where(['id_randis' => $id])->delete();
        return redirect()->to(site_url('tabel'))->with('success', 'Kendaraan Berhasil Dihapus.');
    }
}
