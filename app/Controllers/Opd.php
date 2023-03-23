<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Opd extends ResourcePresenter
{
    protected $modelName = 'App\Models\OpdModel';
    protected $helpers = ['custom'];
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['opd'] = $this->model->findAll();
        return view('opd/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('opd/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return redirect()->to(site_url('opd'))->with('success', 'OPD berhasil ditambah.');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $opd = $this->model->where('id_opd', $id)->first();
        if (is_object($opd)) {
            $data['opd'] = $opd;
            return view('opd/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getpost();
        $this->model->update($id, $data);
        return redirect()->to(site_url('opd'))->with('success', 'OPD berhasil di Update.');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(site_url('opd'))->with('success', 'OPD berhasil dihapus.');
    }
}
