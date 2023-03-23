<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\RandisModel;
use App\Models\OpdModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class TabelRandis extends ResourceController
{
    protected $helpers = ['custom'];

    function __construct() {
        $this->opd = new OpdModel();
        $this->tabelrandis = new RandisModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->tabelrandis->getPaginated(10, $keyword);
        $data['keyword'] = $keyword;
        return view('tabelrandis/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['opd'] = $this->opd->findAll();
        return view('tabelrandis/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->tabelrandis->insert($data);
        return redirect()->to(site_url('tabelrandis'))->with('success', 'Kendaraan berhasil ditambah.');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $tabelrandis = $this->tabelrandis->find($id);
        if (is_object($tabelrandis)) {
            $data['tabelrandis'] = $tabelrandis;
            $data['opd'] = $this->opd->findAll();
            return view('tabelrandis/edit', $data);
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
        $this->tabelrandis->update($id, $data);
        return redirect()->to(site_url('tabelrandis'))->with('success', 'Kendaraan berhasil di Update.');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->tabelrandis->delete($id);
        return redirect()->to(site_url('tabelrandis'))->with('success', 'Kendaraan berhasil dihapus.');
    }

    public function export()
    {
        // $tabelrandis = $this->tabelrandis->findAll();
        $filename = "randistable-".date('ymd').".xlsx";
        $keyword = $this->request->getGet('keyword');
        $db = \Config\Database::connect();
        $builder = $db->table('randistable');
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
            $builder->orlike('kondisi', $keyword);
            $builder->orlike('pengguna', $keyword);
            $builder->orlike('ket', $keyword);
            $filename = "randistable-filter-".date('ymd').".xlsx";
        }
        $query = $builder->get();
        $randistable = $query->getResult();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', '#');
        $sheet->setCellValue('B1', 'Perangkat Daerah');
        $sheet->setCellValue('C1', 'Kategori');
        $sheet->setCellValue('D1', 'Jenis Kendaraan');
        $sheet->setCellValue('E1', 'Merk/Type');
        $sheet->setCellValue('F1', 'Nomor Rangka');
        $sheet->setCellValue('G1', 'Nomor Mesin');
        $sheet->setCellValue('H1', 'Tahun Pembuatan');
        $sheet->setCellValue('I1', 'Tahun Perolehan');
        $sheet->setCellValue('J1', 'Nomor Polisi');
        $sheet->setCellValue('K1', 'Kondisi');
        $sheet->setCellValue('L1', 'Status Pengguna');
        $sheet->setCellValue('M1', 'Keterangan');

        $column = 2;
        foreach ($randistable as $key => $value) {
            $sheet->setCellValue('A'.$column, ($column-1));
            $sheet->setCellValue('B'.$column, $value->name_opd);
            $sheet->setCellValue('C'.$column, $value->id_group);
            $sheet->setCellValue('D'.$column, $value->jenis);
            $sheet->setCellValue('E'.$column, $value->merk);
            $sheet->setCellValue('F'.$column, $value->no_rang);
            $sheet->setCellValue('G'.$column, $value->no_mesin);
            $sheet->setCellValue('H'.$column, $value->th_pembuatan);
            $sheet->setCellValue('I'.$column, $value->th_perolehan);
            $sheet->setCellValue('J'.$column, $value->no_pol);
            $sheet->setCellValue('K'.$column, $value->kondisi);
            $sheet->setCellValue('L'.$column, $value->pengguna);
            $sheet->setCellValue('M'.$column, $value->ket);
            $column++;
        }

        $sheet->getStyle('A1:M1')->getFont()->setBold(true);
        $sheet->getStyle('A1:M1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFFFFF00');
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000']
                ],
            ],
        ];
        $sheet->getStyle('A1:M1'.($column-1))->applyFromArray($styleArray);

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        $sheet->getColumnDimension('L')->setAutoSize(true);
        $sheet->getColumnDimension('M')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('content-Disposition: attachment;filename='.$filename);
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function import()
    {
        $file = $this->request->getFile('file_excel');
        $extension = $file->getClientExtension();
        if($extension == 'xlsx' || $extension == 'xls') {
            if($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $randistable = $spreadsheet->getActiveSheet()->toArray();
            foreach ($randistable as $key => $value) {
                if($key == 0) {
                    continue;
                }
                $data = [
                    'id_opd' => $value[1],
                    'id_group' => $value[2],
                    'jenis' => $value[3],
                    'merk' => $value[4],
                    'no_rang' => $value[5],
                    'no_mesin' => $value[6],
                    'th_pembuatan' => $value[7],
                    'th_perolehan' => $value[8],
                    'no_pol' => $value[9],
                    'kondisi' => $value[10],
                    'pengguna' => $value[11],
                    'ket' => $value[12],
                    
                ];
                $this->tabelrandis->insert($data);
            }
            return redirect()->back()->with('success', 'Data Kendaraan berhasil ditambah.');
        } else {
            return redirect()->back()->with('errors', 'Format file tidak sesuai!');
        }
    }
}
