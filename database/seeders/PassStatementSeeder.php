<?php

namespace Database\Seeders;

use App\Models\PassStatement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassStatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assign pass statements
        $highScores = [
            '0101518021',
            '0311518074',
            '0402518009',
            '0604518004',
            '0711518110',
            '0702620004',
            '0801518117',
            '0401518025'
        ];

        // Raihan Yosa Zimly
        PassStatement::create([
            'nim' => '0101518021',
            'description' => 'IPK Tertinggi Fakultas Sains dan Teknologi'
        ]);
        PassStatement::create([
            'nim' => '0101518021',
            'description' => 'Lulusan Terbaik Universitas'
        ]);

        // Intan Rembulan
        PassStatement::create([
            'nim' => '0401518025',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Pengetahuan Budaya'
        ]);

        //
        PassStatement::create([
            'nim' => '0311518074',
            'description' => 'IPK Tertinggi Fakultas Ekonomi dan Bisnis'
        ]);

        // Firyal Luthfiyyah
        PassStatement::create([
            'nim' => '0402518009',
            'description' => 'IPK Tertinggi Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0402518009',
            'description' => 'IPK Tertinggi Universitas'
        ]);

        //
        PassStatement::create([
            'nim' => '0604518004',
            'description' => 'IPK Tertinggi Fakultas Psikologi dan Pendidikan'
        ]);

        //
        PassStatement::create([
            'nim' => '0711518110',
            'description' => 'IPK Tertinggi Fakultas Hukum'
        ]);

        // Eko Priyono
        PassStatement::create([
            'nim' => '0702620004',
            'description' => 'IPK Tertinggi Magister Ilmu Hukum'
        ]);

        // Yolanda Tasya Amalia
        PassStatement::create([
            'nim' => '0801518117',
            'description' => 'IPK Tertinggi Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
        PassStatement::create([
            'nim' => '0801518117',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);

        // Urip Waluyo
        PassStatement::create([
            'nim' => '0802518289',
            'description' => 'Pemilik Sertifikasi Kompetensi BNSP skema Public Relations Officer'
        ]);

        // Rahma Mahardhika Ananda Putri
        PassStatement::create([
            'nim' => '0802518289',
            'description' => 'Pemilik Sertifikasi Kompetensi BNSP skema Public Relations Officer'
        ]);

        // Nadia Salsabila
        PassStatement::create([
            'nim' => '0701518053',
            'description' => 'Pemilik Sertifikasi Kompetensi BNSP skema Penentuan Jenis Produk Usaha'
        ]);

        // Dwi Hardiyanto
        PassStatement::create([
            'nim' => '0702620041',
            'description' => 'Lulusan Terbaik Program Studi Magister Hukum'
        ]);




        $nims = [
            '0101518021',
            '0402518028',
            '0311518074',
            '0402518009',
            '0604518004',
            '0711518110',
            '0702620004',
            '0801518117',
            '0101518002',
            '0101518003',
            '0101518007',
            '0101518012',
            '0101518013',
            '0101518020',
            '0101518023',
            '0101518032',
            '0102518006',
            '0102518007',
            '0104518009',
            '0104518035',
            '0301518004',
            '0301518031',
            '0301518063',
            '0311518066',
            '0302518002',
            '0302518007',
            '0302518011',
            '0302518013',
            '0302518015',
            '0302518020',
            '0312518028',
            '0312518073',
            '0312518115',
            '0312518128',
            '0312518179',
            '0401518016',
            '0401518025',
            '0401518028',
            '0401518035',
            '0401518059',
            '0402518001',
            '0402518004',
            '0402518008',
            '0402518010',
            '0402518011',
            '0402518017',
            '0402518019',
            '0403518007',
            '0403518014',
            '0403518027',
            '0403518035',
            '0403518041',
            '0403518042',
            '0601518031',
            '0603518004',
            '0603518008',
            '0603518016',
            '0603518037',
            '0603518042',
            '0603518048',
            '0603518059',
            '0603518061',
            '0603518062',
            '0603518082',
            '0603518091',
            '0603518096',
            '0604518001',
            '0604518021',
            '0604518061',
            '0701518014',
            '0701518015',
            '0701518021',
            '0701518022',
            '0701518070',
            '0701518071',
            '0711518119',
            '0711518135',
            '0711518147',
            '0801518012',
            '0801518044',
            '0801518050',
            '0801518080',
            '0801518096',
            '0802518016',
            '0802518028',
            '0802518050',
            '0802518066',
            '0802518137',
            '0802518156',
            '0802518254',
            '0802518268',
            '0802518283',
            '0802518285',
            '0802518302',
            '0802518309',
            '0702620002',
            '0702620005',
            '0702620012',
            '0702620032',
            '0702620034',
            '0702620035',
            '0702620038',
            '0702620039',
            '0702620041',
            '0702620042',
            '0702620044',
            '0702620046',
        ];

        foreach ($nims as $nim) {
            PassStatement::create([
                'nim' => $nim,
                'description' => 'Cumlaude'
            ]);
        }

        // Assign jobs
        PassStatement::create([
            'nim' => '0702618029',
            'description' => 'Bidang Pengawasan, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702618030',
            'description' => 'Inspektorat Jenderal (Pengawasan), Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702618034',
            'description' => 'Bidang Training Kita Borneo Kompeten'
        ]);
        PassStatement::create([
            'nim' => '0702618044',
            'description' => 'Kantor Konsultasi Bantuan Hukum Al Azhar'
        ]);
        PassStatement::create([
            'nim' => '0702618046',
            'description' => 'Bidang Retail PT. Buanacitra Internusa',
        ]);
        PassStatement::create([
            'nim' => '0702618061',
            'description' => 'Bidang Pengendalian dan Penertiban Tanah dan Ruang, Kementerian Agraria Dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702618066',
            'description' => 'Kementerian Pekerjaan Umum dan Perumahan Rakyat, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702618067',
            'description' => 'Bidang Legal PT. Panjasa Intradin',
        ]);
        PassStatement::create([
            'nim' => '0702618069',
            'description' => 'Konsultan Konstruksi Oriental Consultants Global Co., Ltd',
        ]);
        PassStatement::create([
            'nim' => '0702618074',
            'description' => 'Bidang Penata Pertanahan Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702618076',
            'description' => 'Bidang Transportasi PT. Gojek Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619006',
            'description' => 'Yayasan Pesantren Islam Al Azhar Bidang Dakwah dan Sosial',
        ]);
        PassStatement::create([
            'nim' => '0702619030',
            'description' => 'Advokat dan Konsultan Hukum BPO (Bussiness Process Outsourcing) Lawfirm and Partners',
        ]);
        PassStatement::create([
            'nim' => '0702619036',
            'description' => 'Pemerintahan Badan Pengawas Pemilihan Umum, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619060',
            'description' => 'Bidang Hukum, Badan Pengawas Pemilihan Umum, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619062',
            'description' => 'Bidang Perpajakan PT. Nestle Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619064',
            'description' => 'Bidang Hukum Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619065',
            'description' => 'Bidang Auditor Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619070',
            'description' => 'Direktur Utama PT. PMH (Perbuatan Melawan Hukum)',
        ]);
        PassStatement::create([
            'nim' => '0702619071',
            'description' => 'Bidang Analis Hukum dan Politik, Badan Pengawas Pemilihan Umum Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702619077',
            'description' => 'Bidang Transportasi PT. Takatrans',
        ]);
        PassStatement::create([
            'nim' => '0702619080',
            'description' => 'Bidang Sertifikasi Tanah, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620002',
            'description' => 'Bidang Direktorat Jenderal Penetapan Hak dan Pendaftaran Tanah, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620004',
            'description' => 'Bidang Keuangan PT. Pembangkit Listrik Negara',
        ]);
        PassStatement::create([
            'nim' => '0702620005',
            'description' => 'Perawat Cardiologi Rumah Sakit Pondok Indah (RSPI)',
        ]);
        PassStatement::create([
            'nim' => '0702620012',
            'description' => 'Staf Persidangan Dewan Kehormatan Penyelenggara Pemilihan Umum (DKPP), RepubIik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620032',
            'description' => 'Bidang Pertanahan, Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620033',
            'description' => 'Bidang Tata Usaha Direktorat Jenderal Sumber Daya Alam (SDA) Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR), Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620035',
            'description' => 'Bidang Umum, Badan Pengawas Pemilihan Umum Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620038',
            'description' => 'Bidang Analis Teknologi Intelijen, Polisi Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620039',
            'description' => 'Advokat Yayasan Pesantren Islam Al Azhar',
        ]);
        PassStatement::create([
            'nim' => '0702620041',
            'description' => 'Bidang Pertanahan dan Tata Ruang, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620042',
            'description' => 'PT. Great Eastern General Insurance Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620044',
            'description' => 'Bidang Tata Ruang, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702620046',
            'description' => 'Advokat Law Firm Supriadi Syarif',
        ]);


    }
}
