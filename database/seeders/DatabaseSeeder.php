<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PassStatement;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Faculty::create([
        //     'id' => 1,
        //     'name' => 'Fakultas Sains dan Teknologi',
        // ]);
        // Faculty::create([
        //     'id' => 2,
        //     'name' => 'Fakultas Ekonomi dan Bisnis',
        // ]);
        // Faculty::create([
        //     'id' => 3,
        //     'name' => 'Fakultas Ilmu Pengetahuan Budaya',
        // ]);
        // Faculty::create([
        //     'id' => 4,
        //     'name' => 'Fakultas Psikologi dan Pendidikan',
        // ]);
        // Faculty::create([
        //     'id' => 5,
        //     'name' => 'Fakultas Hukum',
        // ]);
        // Faculty::create([
        //     'id' => 6,
        //     'name' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
        // ]);

        // Department::create([
        //     'id' => 1,
        //     'name' => 'Teknik Industri',
        //     'faculty_id' => 1,
        //     'order_id' => 10,
        //     'title' => 'Sarjana Teknik',
        // ]);
        // Department::create([
        //     'id' => 2,
        //     'name' => 'Informatika',
        //     'faculty_id' => 1,
        //     'order_id' => 11,
        //     'title' => 'Sarjana Komputer',
        // ]);
        // Department::create([
        //     'id' => 3,
        //     'name' => 'Teknik Elektro',
        //     'faculty_id' => 1,
        //     'order_id' => 12,
        //     'title' => 'Sarjana Teknik',
        // ]);
        // Department::create([
        //     'id' => 40,
        //     'name' => 'Teknologi Pangan',
        //     'faculty_id' => 1,
        //     'order_id' => 18,
        //     'title' => 'Sarjana Teknik',
        // ]);
        // Department::create([
        //     'id' => 41,
        //     'name' => 'Gizi',
        //     'faculty_id' => 1,
        //     'order_id' => 19,
        //     'title' => 'Sarjana Teknik',
        // ]);
        // Department::create([
        //     'id' => 6,
        //     'name' => 'Biologi',
        //     'faculty_id' => 1,
        //     'order_id' => 13,
        //     'title' => 'Sarjana Sains',
        // ]);
        // Department::create([
        //     'id' => 7,
        //     'name' => 'Manajemen',
        //     'faculty_id' => 2,
        //     'order_id' => 14,
        //     'title' => 'Sarjana Manajemen',
        // ]);
        // Department::create([
        //     'id' => 8,
        //     'name' => 'Akuntansi',
        //     'faculty_id' => 2,
        //     'order_id' => 15,
        //     'title' => 'Sarjana Akuntansi',
        // ]);
        // Department::create([
        //     'id' => 9,
        //     'name' => 'Bahasa dan Kebudayaan Arab',
        //     'faculty_id' => 3,
        //     'order_id' => 2,
        //     'title' => 'Sarjana Linguistik',
        // ]);
        // Department::create([
        //     'id' => 10,
        //     'name' => 'Bahasa dan Kebudayaan Tiongkok',
        //     'faculty_id' => 3,
        //     'order_id' => 3,
        //     'title' => 'Sarjana Linguistik',
        // ]);
        // Department::create([
        //     'id' => 11,
        //     'name' => 'Bahasa dan Kebudayaan Inggris',
        //     'faculty_id' => 3,
        //     'order_id' => 4,
        //     'title' => 'Sarjana Linguistik',
        // ]);
        // Department::create([
        //     'id' => 12,
        //     'name' => 'Bahasa dan Kebudayaan Jepang',
        //     'faculty_id' => 3,
        //     'order_id' => 5,
        //     'title' => 'Sarjana Linguistik',
        // ]);
        // Department::create([
        //     'id' => 16,
        //     'name' => 'Bimbingan Konseling Islam',
        //     'faculty_id' => 4,
        //     'order_id' => 6,
        //     'title' => 'Sarjana Sosial',
        // ]);
        // Department::create([
        //     'id' => 18,
        //     'name' => 'Ilmu Hukum',
        //     'faculty_id' => 5,
        //     'order_id' => 9,
        //     'title' => 'Sarjana Hukum',
        // ]);
        // Department::create([
        //     'id' => 19,
        //     'name' => 'Ilmu Hubungan Internasional',
        //     'faculty_id' => 6,
        //     'order_id' => 16,
        //     'title' => 'Sarjana Ilmu Politik',
        // ]);
        // Department::create([
        //     'id' => 20,
        //     'name' => 'Ilmu Komunikasi',
        //     'faculty_id' => 6,
        //     'order_id' => 17,
        //     'title' => 'Sarjana Ilmu Komunikasi',
        // ]);
        // Department::create([
        //     'id' => 33,
        //     'name' => 'Psikologi',
        //     'faculty_id' => 4,
        //     'order_id' => 7,
        //     'title' => 'Sarjana Psikologi',
        // ]);
        // Department::create([
        //     'id' => 35,
        //     'name' => 'PG PAUD',
        //     'faculty_id' => 4,
        //     'order_id' => 8,
        //     'title' => 'Sarjana Pendidikan',
        // ]);
        // Department::create([
        //     'id' => 17,
        //     'name' => 'Pendidikan Agama Islam',
        //     'faculty_id' => 4,
        //     'order_id' => 20,
        //     'title' => 'Sarjana Pendidikan',
        // ]);
        // Department::create([
        //     'id' => 36,
        //     'name' => 'Magister Ilmu Hukum',
        //     'faculty_id' => 5,
        //     'order_id' => 1,
        //     'title' => 'Magister Hukum',
        // ]);
        // Department::create([
        //     'id' => 42,
        //     'name' => 'Magister Ilmu Komunikasi',
        //     'faculty_id' => 6,
        //     'order_id' => 21,
        //     'title' => 'Magister Ilmu Komunikasi',
        // ]);
        // Department::create([
        //     'id' => 43,
        //     'name' => 'Magister Linguistik Terapan',
        //     'faculty_id' => 3,
        //     'order_id' => 22,
        //     'title' => 'Magister Linguistik',
        // ]);

        // Job achieved
        PassStatement::create([
            'nim' => '0702619009',
            'description' => 'Auditor Ahli Muda, Inspektorat Jenderal Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia'
        ]);

        PassStatement::create([
            'nim' => '0702619010',
            'description' => 'Advocate and Legal Consultant, HDA and Associates'
        ]);

        PassStatement::create([
            'nim' => '0702619019',
            'description' => 'Legal Supervisor on Food & Beverage Company PT. ABUBA'
        ]);

        PassStatement::create([
            'nim' => '0702619056',
            'description' => 'Pendidikan Resource Based Learning'
        ]);

        PassStatement::create([
            'nim' => '0702619079',
            'description' => 'Politik dan Hukum, Badan Pengawas Pemilu Republik Indonesia'
        ]);

        PassStatement::create([
            'nim' => '0702619081',
            'description' => 'Kementerian Agraria dan Tata Ruang/ Badan Pertanahan Nasional, Republik Indonesia'
        ]);

        PassStatement::create([
            'nim' => '0702620014',
            'description' => 'Advokat LNP'
        ]);

        PassStatement::create([
            'nim' => '0702620017',
            'description' => 'Penata Pertanahan Muda Pada Pemberdayaan Tanah Masyarakat, Kementerian Agraria dan Tata Ruang/ Badan Pertanahan Nasional, Republik Indonesia'
        ]);

        PassStatement::create([
            'nim' => '0702620028',
            'description' => 'Dosen Universitas Prima Graha'
        ]);

        PassStatement::create([
            'nim' => '0702621002',
            'description' => 'Wirausaha CV Astana Teknik Sentosa',
        ]);

        PassStatement::create([
            'nim' => '0702621003',
            'description' => 'Pengamanan Kementerian Sosial Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702621004',
            'description' => 'Finance PT San Bersaudara Harmoni',
        ]);

        PassStatement::create([
            'nim' => '0702621007',
            'description' => 'Junior Asosiasi Kantor Advokat Wardhana Wiwoho',
        ]);

        PassStatement::create([
            'nim' => '0702621011',
            'description' => 'Konsultan Hukum dan Advokat Saputra & Tampa Law Firm',
        ]);

        PassStatement::create([
            'nim' => '0702621012',
            'description' => 'Kontraktor PT Somo Joyo Abadi',
        ]);

        PassStatement::create([
            'nim' => '0702621014',
            'description' => 'Pendidikan Yayasan Pendidikan Islam Al Azhar',
        ]);

        PassStatement::create([
            'nim' => '0702621015',
            'description' => 'Keuangan Yayasan Pendidikan Islam Al Azhar - PT. Tanmiyah Al Azhar',
        ]);

        PassStatement::create([
            'nim' => '0702621016',
            'description' => 'Advocate Triasdipa Partnership Law Firm',
        ]);

        PassStatement::create([
            'nim' => '0702621017',
            'description' => 'Wakil Bidang Hukum dan Perundang Undangan, Asosiasi Profesi Konsultan Hukum Bisnis Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702621027',
            'description' => 'Advocat Law Firm',
        ]);

        PassStatement::create([
            'nim' => '0702621028',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621030',
            'description' => 'Jasa Konstruksi dan Jalan Tol PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621031',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621032',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621033',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621037',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621039',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621041',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621045',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621046',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621048',
            'description' => 'Jasa Konstruksi dan Jalan Tol PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621050',
            'description' => 'Bidang Hukum PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621051',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702621052',
            'description' => 'Bidang Hukum PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622003',
            'description' => 'Kementerian Agraria Dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702622005',
            'description' => 'Jasa Konstruksi dan Jalan Tol PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622006',
            'description' => 'HR & Legal PT Mega Kapuas Dinamik',
        ]);

        PassStatement::create([
            'nim' => '0702622008',
            'description' => 'Advocate Kantor Hukum Alfonso Lawfirm',
        ]);

        PassStatement::create([
            'nim' => '0702622009',
            'description' => 'Human Capital PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622011',
            'description' => 'Jasa Hukum Law Firm T. Nasrullah & Associates',
        ]);

        PassStatement::create([
            'nim' => '0702622013',
            'description' => 'Sekretaris Perusahaan PT Hakaaston Cq. PT Bhirawa Steel (HK Group)',
        ]);

        PassStatement::create([
            'nim' => '0702622014',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622015',
            'description' => 'Esports PT BOOM JUARA EMAS',
        ]);

        PassStatement::create([
            'nim' => '0702622016',
            'description' => 'Kontraktor PT HUTAMA KARYA',
        ]);

        PassStatement::create([
            'nim' => '0702622017',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622018',
            'description' => 'Bidang Hukum PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622020',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622021',
            'description' => 'Kementerian Perhubungan Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702622022',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622024',
            'description' => 'Jasa Konstruksi PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622026',
            'description' => 'Jasa Engineering, Procurement, And Construction, PT Hutama Karya',
        ]);

        PassStatement::create([
            'nim' => '0702622031',
            'description' => 'Legal PT Bhumi Rantau Energi',
        ]);

        PassStatement::create([
            'nim' => '0702622033',
            'description' => 'Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702622035',
            'description' => 'Komisi Pemilihan Umum Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702622038',
            'description' => 'Kejaksaan Agung Republik Indonesia',
        ]);

        PassStatement::create([
            'nim' => '0702622040',
            'description' => 'Bahta Afif Ali & Partners Law Firm',
        ]);

        PassStatement::create([
            'nim' => '0702622041',
            'description' => 'Konstruksi PT BBM Garden Pratama',
        ]);

        PassStatement::create([
            'nim' => '0702622046',
            'description' => 'Badan Pengawas Pemilihan Umum, Republik Indonesia',
        ]);

        PassStatement::query()->create([
            'nim' => '0104519010',
            'description' => 'Penerima Pendanaan Program Pembinaan Mahasiswa Wirausaha (P2MW) Kemendikbud Ristek Republik Indonesia Tahun 2022 - dengan usaha Oncom Umi Pupu'
        ]);

        PassStatement::query()->create([
            'nim' => '0104519030',
            'description' => 'Penerima Pendanaan Program Pembinaan Mahasiswa Wirausaha (P2MW) Kemendikbud Ristek Republik Indonesia Tahun 2022 - dengan usaha Oncom Umi Pupu'
        ]);

        $nims = [
            "0702619010",
            "0702620028",
            "0702621002",
            "0702621007",
            "0702621011",
            "0702621016",
            "0702621027",
            "0702621028",
            "0702621030",
            "0702621033",
            "0702621037",
            "0702621039",
            "0702621041",
            "0702621045",
            "0702621046",
            "0702621048",
            "0702621050",
            "0702621052",
            "0702622001",
            "0702622003",
            "0702622005",
            "0702622006",
            "0702622008",
            "0702622009",
            "0702622011",
            "0702622013",
            "0702622015",
            "0702622016",
            "0702622017",
            "0702622018",
            "0702622020",
            "0702622022",
            "0702622024",
            "0702622026",
            "0702622031",
            "0702622033",
            "0702622035",
            "0702622037",
            "0702622038",
            "0702622040",
            "0104519010",
            "0301519007",
            "0301519012",
            "0301519052",
            "0301519063",
            "0301519064",
            "0302519001",
            "0302519028",
            "0302519029",
            "0311519045",
            "0312519127",
            "0312519202",
            "0401519007",
            "0401519031",
            "0401519037",
            "0401519046",
            "0401519054",
            "0402519002",
            "0402519004",
            "0402519005",
            "0402519006",
            "0402519007",
            "0402519008",
            "0402519010",
            "0402519020",
            "0402519023",
            "0403519042",
            "0404519007",
            "0404520009",
            "0404520024",
            "0602519003",
            "0602519014",
            "0603519050",
            "0603519054",
            "0603519059",
            "0604519006",
            "0604519010",
            "0701519063",
            "0701519078",
        ];

        foreach ($nims as $nim) {
            PassStatement::create([
                'nim' => $nim,
                'description' => 'Cumlaude'
            ]);
        }

        // High scores
        PassStatement::create([
            'nim' => '0104519010',
            'description' => 'IPK Tertinggi Fakultas Sains dan Teknologi'
        ]);
        PassStatement::create([
            'nim' => '0301519007',
            'description' => 'IPK Tertinggi Fakultas Ekonomi dan Bisnis'
        ]);
        PassStatement::create([
            'nim' => '0404520009',
            'description' => 'IPK Tertinggi Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0603519050',
            'description' => 'IPK Tertinggi Fakultas Psikologi dan Pendidikan'
        ]);
        PassStatement::create([
            'nim' => '0711519104',
            'description' => 'IPK Tertinggi Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0802519179',
            'description' => 'IPK Tertinggi Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
        PassStatement::create([
            'nim' => '0702621002',
            'description' => 'IPK Tertinggi Magister Ilmu Hukum'
        ]);

        PassStatement::create([
            'nim' => '0404520009',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0603519050',
            'description' => 'Lulusan Terbaik Fakultas Psikologi dan Pendidikan'
        ]);
        PassStatement::create([
            'nim' => '0701519063',
            'description' => 'Lulusan Terbaik Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0302519029',
            'description' => 'Lulusan Terbaik Fakultas Ekonomi dan Bisnis'
        ]);
        PassStatement::create([
            'nim' => '0802519179',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
        PassStatement::create([
            'nim' => '0104519010',
            'description' => 'Lulusan Terbaik Fakultas Sains dan Teknologi'
        ]);
        PassStatement::create([
            'nim' => '0702622020',
            'description' => 'Lulusan Terbaik Magister Ilmu Hukum'
        ]);

        // Best students
        PassStatement::create([
            'nim' => '0104519010',
            'description' => 'Lulusan Terbaik Universitas'
        ]);

        PassStatement::create([
            'nim' => '0404520009',
            'description' => 'IPK Tertinggi Universitas'
        ]);
    }
}
