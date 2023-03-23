<?php

namespace App\Models;

use CodeIgniter\Model;

class RandisModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'randistable';
    protected $primaryKey       = 'id_randis';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_opd', 'id_group', 'jenis',
                                   'merk', 'no_rang', 'no_mesin',
                                   'th_pembuatan', 'th_perolehan',
                                   'no_pol', 'kondisi', 'pengguna', 'ket', 'dokumen'];

    function getAll() {
        $builder = $this->db->table('randistable');
        $builder->join('opd', 'opd.id_opd = randistable.id_opd');
        $query = $builder->get();
        return $query->getResult();
    }

    function getPaginated($num, $keyword = null) {
        $builder = $this->builder();
        $builder->join('opd', 'opd.id_opd = randistable.id_opd');
        if($keyword != '') {
            $builder->like('name_opd', $keyword);
            $builder->orlike('id_group', $keyword);
            $builder->orlike('jenis', $keyword);
            $builder->orlike('merk', $keyword);
            $builder->orlike('no_rang', $keyword);
            $builder->orlike('no_mesin', $keyword);
            $builder->orlike('th_pembuatan', $keyword);
            $builder->orlike('th_perolehan', $keyword);
            $builder->orlike('no_pol', $keyword);
        }
        return [
            'randistable' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
