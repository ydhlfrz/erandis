<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OpdModel;
use App\Models\RandisModel;
use App\Models\GroupModel;

class RandisTable extends ResourceController
{
    protected $helpers = ['custom'];

    function __construct() {
        $this->opd = new OpdModel();
        $this->groups = new GroupModel();
        $this->randistable = new RandisModel();

    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['randisapp'] = $this->randistable->getAll();
        return view('randistable/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['opd'] = $this->opd->findAll();
        return view('randistable/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->randistable->insert($data);
        return redirect()->to(site_url('randistable'))->with('success', 'Kendaraan berhasil ditambah.');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $randistable = $this->randistable->find($id);
        if (is_object($randistable)) {
            $data['randistable'] = $randistable;
            $data['opd'] = $this->opd->findAll();
            return view('randistable/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->randistable->update($id, $data);
        return redirect()->to(site_url('randistable'))->with('success', 'Kendaraan berhasil di Update.');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->randistable->delete($id);
        return redirect()->to(site_url('randistable'))->with('success', 'Kendaraan berhasil dihapus.');
    }
}
