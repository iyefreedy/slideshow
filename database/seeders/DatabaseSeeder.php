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
            'nim' => '0702618004',
            'description' => 'Jasa Keuangan, PT Indo Koala Remmitance'
        ]);
        PassStatement::create([
            'nim' => '0702618041',
            'description' => 'Pelayanan Hukum dan Litigasi, Direktorat Hak Cipta dan Desain Industry, Kementerian Hukum dan Hak Asasi Manusia, Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702619001',
            'description' => 'Bidang Pertanahan, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702619008',
            'description' => 'Bidang Konsultan Pajak, PT. Bagoes Global Konsultindo'
        ]);
        PassStatement::create([
            'nim' => '0702619014',
            'description' => 'Bidang Agraria/Pertanahan, Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702620031',
            'description' => 'Cumlaude'
        ]);
        PassStatement::create([
            'nim' => '0702620031',
            'description' => 'Penyelenggara Pemilihan Umum, Badan Pengawas Pemilihan Umum, Kota Depok'
        ]);
        PassStatement::create([
            'nim' => '0702621013',
            'description' => 'Bidang Pengadaan, Yayasan Pesantren Islam Al-Azhar'
        ]);
        PassStatement::create([
            'nim' => '0702621024',
            'description' => 'Cumlaude'
        ]);
        PassStatement::create([
            'nim' => '0702621024',
            'description' => 'Penyidik Badan Reserse Kriminal, Kepolisian Negara Republik Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702621029',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621029',
            'description' => 'IPK Tertinggi Magister Ilmu Hukum',
        ]);
        PassStatement::create([
            'nim' => '0702621029',
            'description' => 'Bidang Kontraktor Konstruksi dan Badan Usaha Jalan Tol PT Hutama Karya (Persero)',
        ]);
        PassStatement::create([
            'nim' => '0702621035',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621035',
            'description' => 'Advokat Firma Hukum Ercolaw',
        ]);
        PassStatement::create([
            'nim' => '0702621036',
            'description' => 'Perbankan, PT Bank Mandiri (Persero) Tbk',
        ]);
        PassStatement::create([
            'nim' => '0702621043',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621043',
            'description' => 'Yayasan Pendidikan Islam Ziyadatul Hasanaat',
        ]);
        PassStatement::create([
            'nim' => '0702621044',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621044',
            'description' => 'Bidang Finance, PT Hutama Karya (Persero)',
        ]);
        PassStatement::create([
            'nim' => '0702621047',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621047',
            'description' => 'Bidang Legal, PT Hutama Karya (Persero)',
        ]);
        PassStatement::create([
            'nim' => '0702621053',
            'description' => 'Cumlaude',
        ]);
        PassStatement::create([
            'nim' => '0702621053',
            'description' => 'Konsultan Hukum, Kenny Wiston Law Offices',
        ]);

        // Best students
        PassStatement::create([
            'nim' => '0104519018',
            'description' => 'Lulusan Terbaik Universitas'
        ]);

        $nims = [
            "0104519018",
            "0104519019",
            "0105519002",
            "0105519010",
            "0106519044",
            "0301519002",
            "0301519015",
            "0301519035",
            "0301519053",
            "0301519059",
            "0311518317",
            "0311519011",
            "0302519005",
            "0302519013",
            "0302519014",
            "0302519015",
            "0302519027",
            "0312518150",
            "0312519012",
            "0312519029",
            "0312519030",
            "0401519040",
            "0403519024",
            "0403519027",
            "0403519050",
            "0403519062",
            "0403519064",
            "0403519068",
            "0404519001",
            "0404519003",
            "0404519004",
            "0404519009",
            "0404519010",
            "0404519012",
            "0404519014",
            "0404519017",
            "0404519019",
            "0404519024",
            "0602519022",
            "0602519075",
            "0603518055",
            "0604519001",
            "0711518245",
            "0711519006",
            "0711519036",
            "0711519037",
            "0711519114",
            "0802519016",
            "0802519047",
            "0802519192"
        ];

        foreach ($nims as $nim) {
            PassStatement::create([
                'nim' => $nim,
                'description' => 'Cumlaude'
            ]);
        }

        // High scores
        PassStatement::create([
            'nim' => '0106519044',
            'description' => 'IPK Tertinggi Fakultas Sains dan Teknologi'
        ]);
        PassStatement::create([
            'nim' => '0301519053',
            'description' => 'IPK Tertinggi Fakultas Ekonomi dan Bisnis'
        ]);
        PassStatement::create([
            'nim' => '0404519010',
            'description' => 'IPK Tertinggi Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0602519022',
            'description' => 'IPK Tertinggi Fakultas Psikologi dan Pendidikan'
        ]);
        PassStatement::create([
            'nim' => '0711519006',
            'description' => 'IPK Tertinggi Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0802519192',
            'description' => 'IPK Tertinggi Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
    }
}
