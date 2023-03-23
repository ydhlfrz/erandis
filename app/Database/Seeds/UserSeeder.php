<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name_user' => 'Biro Umum Setda Prov NTB',
                'email_user' => 'biroumum',
                'password_user' => password_hash('biroumum', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Sekretariat DPRD Provinsi NTB',
                'email_user' => 'dprdntb',
                'password_user' => password_hash('dprdntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Pengelolaan Keuangan dan Aset Daerah Provinsi NTB',
                'email_user' => 'bpkadntb',
                'password_user' => password_hash('bpkadntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Satuan Polisi Pamong Praja Provinsi NTB',
                'email_user' => 'polppntb',
                'password_user' => password_hash('polppntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Kepegawaian Daerah Provinsi NTB',
                'email_user' => 'bkdntb',
                'password_user' => password_hash('bkdntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Pengembangan Sumber Daya Manusia Daerah provinsi NTB',
                'email_user' => 'bpsdmntb',
                'password_user' => password_hash('bpsdmntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Perpustakaan dan Kearsipan Provinsi NTB',
                'email_user' => 'perpusntb',
                'password_user' => password_hash('perpusntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Kesatuan Bangsa dan Politik Dalam Negeri Provinsi NTB',
                'email_user' => 'kesbangpolntb',
                'password_user' => password_hash('kesbangpolntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pekerjaan Umum dan Penataan Ruang Provinsi NTB',
                'email_user' => 'puprntb',
                'password_user' => password_hash('puprntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengujian Material Konstruksi Provinsi NTB',
                'email_user' => 'materialkonstruksi',
                'password_user' => password_hash('materialkonstruksi', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengelolaan Sumber Daya Air Pulau Sumbawa Provinsi NTB',
                'email_user' => 'psdasumbawa',
                'password_user' => password_hash('psdasumbawa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pemeliharaan Jalan Provinsi Wilayah Pulau Lombok Provinsi NTB',
                'email_user' => 'balaijalanlombok',
                'password_user' => password_hash('balaijalanlombok', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pemeliharaan Jalan Provinsi Wilayah Pulau Sumbawa Provinsi NTB',
                'email_user' => 'balaijalansumbawa',
                'password_user' => password_hash('balaijalansumbawa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Perumahan dan Permukiman Provinsi NTB',
                'email_user' => 'perkimntb',
                'password_user' => password_hash('perkimntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Perhubungan Provinsi NTB',
                'email_user' => 'dishubntb',
                'password_user' => password_hash('dishubntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Komunikasi Informatika dan Statistik Provinsi NTB',
                'email_user' => 'kominfontb',
                'password_user' => password_hash('kominfontb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Kesehatan Provinsi NTB',
                'email_user' => 'dikesntb',
                'password_user' => password_hash('dikesntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Rumah Sakit Mata Nusa Tenggara Barat Provinsi NTB',
                'email_user' => 'rsmatantb',
                'password_user' => password_hash('rsmatantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Lab. Kesehatan, Pengujian dan Kalibrasi Provinsi NTB',
                'email_user' => 'balabkesntb',
                'password_user' => password_hash('balabkesntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Rumah Sakit H. L. Manambai Abdulkadir Provinsi NTB',
                'email_user' => 'rsmanambaintb',
                'password_user' => password_hash('rsmanambaintb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Rumah Sakit Umum Provinsi NTB',
                'email_user' => 'rsupntb',
                'password_user' => password_hash('rsupntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Rumah Sakit Jiwa Mutiara Sukma Provinsi NTB',
                'email_user' => 'rsjntb',
                'password_user' => password_hash('rsjntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pendidikan dan Kebudayaan Provinsi NTB',
                'email_user' => 'dikbudntb',
                'password_user' => password_hash('dikbudntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Museum Negeri Provinsi NTB',
                'email_user' => 'museumntb',
                'password_user' => password_hash('museumntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengembangan Teknologi Pendidikan Provinsi NTB',
                'email_user' => 'baltekntb',
                'password_user' => password_hash('baltekntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Lombok Barat dan Kota Mataram Provinsi NTB',
                'email_user' => 'kcdlobarmataram',
                'password_user' => password_hash('kcdlobarmataram', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Lombok Utara Provinsi NTB',
                'email_user' => 'kcdklu',
                'password_user' => password_hash('kcdklu', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Lombok Tengah Provinsi NTB',
                'email_user' => 'kcdloteng',
                'password_user' => password_hash('kcdloteng', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Lombok Timur Provinsi NTB',
                'email_user' => 'kcdlotim',
                'password_user' => password_hash('kcdlotim', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Sumbawa Barat Provinsi NTB',
                'email_user' => 'kcdsumbawabarat',
                'password_user' => password_hash('kcdsumbawabarat', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Sumbawa Provinsi NTB',
                'email_user' => 'kcdsumbawa',
                'password_user' => password_hash('kcdsumbawa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Dompu Provinsi NTB',
                'email_user' => 'kcddompu',
                'password_user' => password_hash('kcddompu', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Cabang Dinas Pendidikan dan Kebudayaan Bima dan Kota Bima Provinsi NTB',
                'email_user' => 'kcdbimakota',
                'password_user' => password_hash('kcdbimakota', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Riset dan Inovasi Daerah Provinsi NTB',
                'email_user' => 'bridantb',
                'password_user' => password_hash('bridantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pemuda dan Olahraga Provinsi NTB',
                'email_user' => 'disporantb',
                'password_user' => password_hash('disporantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Sosial Provinsi NTB',
                'email_user' => 'dinsosntb',
                'password_user' => password_hash('dinsosntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Asuhan Anak “Generasi Harapan” Provinsi NTB',
                'email_user' => 'generasiharapan',
                'password_user' => password_hash('generasiharapan', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Karya Wanita “Mirah Adi” Provinsi NTB',
                'email_user' => 'mirahadi',
                'password_user' => password_hash('mirahadi', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Lanjut Usia “Mandalika" Provinsi NTB',
                'email_user' => 'pslumandalika',
                'password_user' => password_hash('pslumandalika', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Lanjut Usia “Meci Angi" Provinsi NTB',
                'email_user' => 'meciangi',
                'password_user' => password_hash('meciangi', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Bina Remaja “Karya Mandiri" Provinsi NTB',
                'email_user' => 'karyamandiri',
                'password_user' => password_hash('karyamandiri', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Bina Laras “Muthmainnah" Provinsi NTB',
                'email_user' => 'muthmainnah',
                'password_user' => password_hash('muthmainnah', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Bina Karya “Madani" Provinsi NTB',
                'email_user' => 'psbkmadani',
                'password_user' => password_hash('psbkmadani', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Panti Sosial Perlindungan dan Petirahan Sosial Anak “Sasambo Matupa" Provinsi NTB',
                'email_user' => 'sasambomatupa',
                'password_user' => password_hash('sasambomatupa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pemberdayaan Masyarakat Pemerintahan Desa dan Dukcapil Provinsi NTB',
                'email_user' => 'dukcapilntb',
                'password_user' => password_hash('dukcapilntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Penanggulangan Bencana Daerah Provinsi NTB',
                'email_user' => 'bpbdntb',
                'password_user' => password_hash('bpbdntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Tenaga Kerja dan Transimigrasi Provinsi NTB',
                'email_user' => 'disnakerntb',
                'password_user' => password_hash('disnakerntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Latihan Kerja Provinsi NTB',
                'email_user' => 'blkntb',
                'password_user' => password_hash('blkntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengawasan Ketenaga Kerjaan dan K3 Pulau Lombok Provinsi NTB',
                'email_user' => 'k3lombok',
                'password_user' => password_hash('k3lombok', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengawasan Ketenaga Kerjaan dan K3 Pulau Sumbawa Provinsi NTB',
                'email_user' => 'k3sumbawa',
                'password_user' => password_hash('k3sumbawa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Ketahanan Pangan Provinsi NTB',
                'email_user' => 'dkpntb',
                'password_user' => password_hash('dkpntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pertanian dan Perkebunan Provinsi NTB',
                'email_user' => 'distanbunntb',
                'password_user' => password_hash('distanbunntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Benih Induk Pertanian Provinsi NTB',
                'email_user' => 'bbintb',
                'password_user' => password_hash('bbintb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Perbenihan dan Proteksi Tanaman Perkebunan (BP2TP) Provinsi NTB',
                'email_user' => 'bp2tpntb',
                'password_user' => password_hash('bp2tpntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Perlindungan Tanaman Pertanian Provinsi NTB',
                'email_user' => 'bptpntb',
                'password_user' => password_hash('bptpntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengawasan dan Sertifikasi Benih Tanaman Pertanian Provinsi NTB',
                'email_user' => 'bpsb_pertanian',
                'password_user' => password_hash('bpsb_pertanian', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. BPSB Tanaman Perkebunan Provinsi NTB',
                'email_user' => 'bpsb_perkebunan',
                'password_user' => password_hash('bpsb_perkebunan', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pelatihan Pertanian dan Perkebunan Provinsi NTB',
                'email_user' => 'bapeltanbunntb',
                'password_user' => password_hash('bapeltanbunntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Sekolah Menengah Kejuruan Pertanian Pembangunan Negeri Mataram Provinsi NTB',
                'email_user' => 'smkppmataram',
                'password_user' => password_hash('smkppmataram', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Sekolah Menengah Kejuruan Pertanian Pembangunan Negeri Bima Provinsi NTB',
                'email_user' => 'smkppbima',
                'password_user' => password_hash('smkppbima', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Lingkungan Hidup dan Kehutanan Provinsi NTB',
                'email_user' => 'dlhkntb',
                'password_user' => password_hash('dlhkntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Hutan Taman Raya Nuraksa Provinsi NTB',
                'email_user' => 'tahuranuraksa',
                'password_user' => password_hash('tahuranuraksa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Rinjani Barat Provinsi NTB',
                'email_user' => 'ksphrinbar',
                'password_user' => password_hash('ksphrinbar', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Maria Donggomasa Provinsi NTB',
                'email_user' => 'ksphmariadonggomasa',
                'password_user' => password_hash('ksphmariadonggomasa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Ampang Riwo Provinsi NTB',
                'email_user' => 'ksphampangriwo',
                'password_user' => password_hash('ksphampangriwo', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Laboratorium Lingkungan Provinsi NTB',
                'email_user' => 'lablingntb',
                'password_user' => password_hash('lablingntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Sejorong Mataiyang Provinsi NTB',
                'email_user' => 'ksphsejorongmataiyang',
                'password_user' => password_hash('ksphsejorongmataiyang', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Batu Lanteh Provinsi NTB',
                'email_user' => 'ksphbatulanteh',
                'password_user' => password_hash('ksphbatulanteh', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Brang Beh Provinsi NTB',
                'email_user' => 'ksphbrangbeh',
                'password_user' => password_hash('ksphbrangbeh', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Ropang Provinsi NTB',
                'email_user' => 'ksphropang',
                'password_user' => password_hash('ksphropang', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Ampang Plampang Provinsi NTB',
                'email_user' => 'ksphampangplampang',
                'password_user' => password_hash('ksphampangplampang', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Toffo Pajo Soromandi Provinsi NTB',
                'email_user' => 'ksphtoffopajo',
                'password_user' => password_hash('ksphtoffopajo', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Orong Telu Provinsi NTB',
                'email_user' => 'ksphorongtelu',
                'password_user' => password_hash('ksphorongtelu', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Madapangga Rompu Waworada Provinsi NTB',
                'email_user' => 'ksphmarowa',
                'password_user' => password_hash('ksphmarowa', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KPH Pelangan Tastura Provinsi NTB',
                'email_user' => 'ksphpelangantastura',
                'password_user' => password_hash('ksphpelangantastura', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD Balai KPH Rinjani Timur',
                'email_user' => 'kphrintim',
                'password_user' => password_hash('kphrintim', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Tempat Pemrosesan Akhir (TPA) Sampah Regional Provinsi NTB',
                'email_user' => 'tpantb',
                'password_user' => password_hash('tpantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPT. Balai KPH Brangrea Puncak Ngengas Provinsi NTB',
                'email_user' => 'kphbrangreapuncakngengas',
                'password_user' => password_hash('kphbrangreapuncakngengas', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KSPH Ampang Plampang Provinsi NTB',
                'email_user' => 'ksphampangplampang',
                'password_user' => password_hash('ksphampangplampang', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai KPH Tambora Provinsi NTB',
                'email_user' => 'kphtambora',
                'password_user' => password_hash('kphtambora', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Kelautan dan Perikanan Provinsi NTB',
                'email_user' => 'dislutkanntb',
                'password_user' => password_hash('dislutkanntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Pelabuhan Perikanan Labuhan Lombok Provinsi NTB',
                'email_user' => 'perikananlabuhanlombok',
                'password_user' => password_hash('perikananlabuhanlombok', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Pelabuhan Perikanan Teluk Santong Provinsi NTB',
                'email_user' => 'perikananteluksantong',
                'password_user' => password_hash('perikananteluksantong', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengembangan Budidaya Perikanan Pelabuhan Sekotong',
                'email_user' => 'bpbppsekotong',
                'password_user' => password_hash('bpbppsekotong', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. BKPSDKP Kawasan Sumbawa Provinsi NTB',
                'email_user' => 'bkpsdkpsumbawa',
                'password_user' => password_hash('dislutkanntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB BLPPMHPK Mataram',
                'email_user' => 'blppmhpkmataram',
                'password_user' => password_hash('blppmhpkmataram', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. BKPSDKP Kawasan Bima Dompu Provinsi NTB',
                'email_user' => 'bkpsdkpbidom',
                'password_user' => password_hash('bkpsdkpbidom', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Rumah Sakit Hewan dan Laboratorium Veteriner Provinsi NTB',
                'email_user' => 'rshewanveteriner',
                'password_user' => password_hash('rshewanveteriner', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pembibitan Ternak dan Hijauan Makanan Ternak Serading Provinsi NTB',
                'email_user' => 'bptseradingntb',
                'password_user' => password_hash('bptseradingntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Balai Pengembangan dan Pengelolaan Pakan Ternak Ruminansia Provinsi NTB',
                'email_user' => 'ternakruminansia',
                'password_user' => password_hash('ternakruminansia', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pemberdayaan Perempuan Perlindungan Anak Pengendalian Penduduk dan KB',
                'email_user' => 'dp3akbntb',
                'password_user' => password_hash('dp3akbntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Perdagangan Provinsi NTB',
                'email_user' => 'disdagntb',
                'password_user' => password_hash('disdagntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Perindustrian Provinsi NTB',
                'email_user' => 'perindustrianntb',
                'password_user' => password_hash('perindustrianntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Energi dan Sumber Daya Mineral Provinsi NTB',
                'email_user' => 'desdmntb',
                'password_user' => password_hash('desdmntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Koperasi Usaha Kecil Menengah Provinsi NTB',
                'email_user' => 'diskopukmntb',
                'password_user' => password_hash('diskopukmntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Inspektur Provinsi NTB',
                'email_user' => 'inspektoratntb',
                'password_user' => password_hash('inspektoratntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah Provinsi NTB',
                'email_user' => 'bappedantb',
                'password_user' => password_hash('bappedantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Pengelolaan Pendapatan Daerah Provinsi NTB',
                'email_user' => 'bappendantb',
                'password_user' => password_hash('bappendantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Mataram Provinsi NTB',
                'email_user' => 'uppdmataram',
                'password_user' => password_hash('uppdmataram', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Tanjung Provinsi NTB',
                'email_user' => 'uppdtanjung',
                'password_user' => password_hash('uppdtanjung', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Gerung Provinsi NTB',
                'email_user' => 'uppdgerung',
                'password_user' => password_hash('dp3akbntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Praya Provinsi NTB',
                'email_user' => 'uppdpraya',
                'password_user' => password_hash('uppdpraya', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Selong Provinsi NTB',
                'email_user' => 'uppdselong',
                'password_user' => password_hash('uppdselong', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Raba Bima Provinsi NTB',
                'email_user' => 'uppdrababima',
                'password_user' => password_hash('uppdrababima', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Panda Bima Provinsi NTB',
                'email_user' => 'uppdpandabima',
                'password_user' => password_hash('uppdpandabima', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Sumbawa Besar Provinsi NTB',
                'email_user' => 'uppdsumbawabesar',
                'password_user' => password_hash('uppdsumbawabesar', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Taliwang Provinsi NTB',
                'email_user' => 'uppdtaliwang',
                'password_user' => password_hash('uppdtaliwang', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTB. UPPD Dompu Provinsi NTB',
                'email_user' => 'uppddompu',
                'password_user' => password_hash('uppddompu', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Dinas Pariwisata Provinsi NTB',
                'email_user' => 'pariwisatantb',
                'password_user' => password_hash('pariwisatantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD Destinasi Wisata Unggulan Provinsi NTB',
                'email_user' => 'destinasiwisatantb',
                'password_user' => password_hash('destinasiwisatantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Badan Penghubung Provinsi NTB',
                'email_user' => 'penghubungntb',
                'password_user' => password_hash('penghubungntb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Rumah Sakit Mandalika Provinsi NTB',
                'email_user' => 'rsmandalikantb',
                'password_user' => password_hash('rsmandalikantb', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'UPTD. Taman Budaya Provinsi NTB',
                'email_user' => 'tamanbudayantb',
                'password_user' => password_hash('tamanbudayantb', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
