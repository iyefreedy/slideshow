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
            'nim' => '0702619007',
            'description' => 'Kementerian Pekerjaan Umum dan Perumahan Rakyat'
        ]);
        PassStatement::create([
            'nim' => '0702619015',
            'description' => 'PT Boopin Communications Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702619040',
            'description' => 'Kementerian Agraria dan Tata Ruang/ Badan Pertanahan Nasional'
        ]);
        PassStatement::create([
            'nim' => '0702620024',
            'description' => 'The Candidate Center'
        ]);
        PassStatement::create([
            'nim' => '0702620036',
            'description' => 'Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional'
        ]);
        PassStatement::create([
            'nim' => '0702621008',
            'description' => 'Badan Pengawas Pemilihan Umum Provinsi DKI Jakarta'
        ]);
        PassStatement::create([
            'nim' => '0702621038',
            'description' => 'PT Hutama Karya (Persero)'
        ]);
        PassStatement::create([
            'nim' => '0702621040',
            'description' => 'PT Hutama Karya (Persero)'
        ]);
        PassStatement::create([
            'nim' => '0702621049',
            'description' => 'PT Bursa Efek Indonesia'
        ]);
        PassStatement::create([
            'nim' => '0702622002',
            'description' => 'PT. TOKYULAND INDONESIA'
        ]);
        PassStatement::create([
            'nim' => '0702622007',
            'description' => 'Mahkamah Agung Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702622012',
            'description' => 'PT. TOKYULAND INDONESIA',
        ]);
        PassStatement::create([
            'nim' => '0702622019',
            'description' => 'Ombudsman Republik Indonesia',
        ]);
        PassStatement::create([
            'nim' => '0702622028',
            'description' => 'PT Hutama Karya (Persero)',
        ]);
        PassStatement::create([
            'nim' => '0702622029',
            'description' => 'Dewan Perwakilan Rakyat Republik Indonesia (DPR-RI)',
        ]);
        PassStatement::create([
            'nim' => '0702622039',
            'description' => 'Law Office Mardiansyah & Associates',
        ]);
        PassStatement::create([
            'nim' => '0702622044',
            'description' => 'Kementerian Agraria dan Tata Ruang/ Badan Pertanahan Nasional',
        ]);
        PassStatement::create([
            'nim' => '0702622048',
            'description' => 'Bimo & Partner Law Office',
        ]);
        PassStatement::create([
            'nim' => '0702622049',
            'description' => 'General Affair: Kenvue',
        ]);
        PassStatement::create([
            'nim' => '0702622050',
            'description' => 'Syamsul Hasibuan & Partners Law Firm: Konsultan Hukum',
        ]);
        PassStatement::create([
            'nim' => '0702622051',
            'description' => 'PT. PROTELINDO: Property Management',
        ]);
        PassStatement::create([
            'nim' => '0702622052',
            'description' => 'Jasa Hukum: PT Noesantara Gardapati',
        ]);
        PassStatement::create([
            'nim' => '0702622055',
            'description' => 'Syamsul Hasibuan & Partners Law Firm: Konsultan Hukum',
        ]);
        PassStatement::create([
            'nim' => '0702622061',
            'description' => 'Konsultan Hukum: MBS & Co. Law Firm',
        ]);
        PassStatement::create([
            'nim' => '0702622062',
            'description' => 'Kenny Wiston Law Offices: Law Firm, Contract Management, Legal Consultants',
        ]);
        PassStatement::create([
            'nim' => '0702622063',
            'description' => 'LEGAL CONSULTANT: PT JAMEX INDO VISATAMA',
        ]);
        PassStatement::create([
            'nim' => '0702622065',
            'description' => 'Haris Azhar Law Office: Advokat',
        ]);
        PassStatement::create([
            'nim' => '0702622066',
            'description' => 'Kementerian Agraria dan Tata Ruang/ Badan Pertanahan Nasional',
        ]);
        PassStatement::create([
            'nim' => '0702622067',
            'description' => 'DKPP RI: Legal Drafting (Pemilu)',
        ]);
        PassStatement::create([
            'nim' => '0702622071',
            'description' => 'BRIS & PARTNERS: Advokat',
        ]);
        PassStatement::create([
            'nim' => '0702622072',
            'description' => 'BRAWIJAYA HEALTHCARE GROUP',
        ]);
        PassStatement::create([
            'nim' => '0702622074',
            'description' => 'Konservasi Indonesia affiliated with Conservation International',
        ]);

        $nims = [
            '0702621040',
            '0702622002',
            '0702622007',
            '0702622028',
            '0702622029',
            '0702622044',
            '0702622048',
            '0702622049',
            '0702622050',
            '0702622051',
            '0702622061',
            '0702622062',
            '0702622063',
            '0702622065',
            '0702622066',
            '0702622067',
            '0702622071',
            '0702622072',
            '0702622073',
            '0702622074',
            '0803622014',
            '0102520027',
            '0102520044',
            '0102520052',
            '0102520053',
            '0105520001',
            '0105520002',
            '0106520023',
            '0106520030',
            '0301520022',
            '0311520119',
            '0302520008',
            '0302520016',
            '0401520005',
            '0401520015',
            '0401520029',
            '0401520040',
            '0401520058',
            '0401520071',
            '0403520023',
            '0403520028',
            '0403520029',
            '0403520032',
            '0404520016',
            '0404520023',
            '0404520029',
            '0601520031',
            '0602520008',
            '0602520009',
            '0602520039',
            '0602520047',
            '0602520053',
            '0602520069',
            '0604520009',
            '0701520028',
            '0701520035',
            '0701520044',
            '0701520052',
            '0701520056',
            '0701520064',
            '0701520079',
            '0711520025',
            '0711520058',
            '0711520060',
            '0711520076',
            '0401520033',
            '0601518013',
            '0711520078',
            '0711520079',
            '0711520100',
            '0711520102',
            '0711520123',
            '0802520011',
            '0802520087',
            '0802520128',
            '0802520131',
            '0802520201',
            '0802520202',
            '0802520213',
            '0802520222',
        ];

        foreach ($nims as $nim) {
            PassStatement::create([
                'nim' => $nim,
                'description' => 'Cumlaude'
            ]);
        }

        // Best of the best
        PassStatement::create([
            'nim' => '0601520031',
            'description' => 'Lulusan Terbaik Universitas'
        ]);
        PassStatement::create([
            'nim' => '0401520033',
            'description' => 'IPK Tertinggi Universitas'
        ]);
        PassStatement::create([
            'nim' => '0702622052',
            'description' => 'Lulusan Terbaik & IPK Tertinggi Universitas'
        ]);
        PassStatement::create([
            'nim' => '0702622052',
            'description' => 'Lulusan Terbaik & IPK Tertinggi Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0803622014',
            'description' => 'Lulusan Terbaik & IPK Tertinggi Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);

        // // High scores
        PassStatement::create([
            'nim' => '0105520002',
            'description' => 'IPK Tertinggi Fakultas Sains dan Teknologi'
        ]);
        PassStatement::create([
            'nim' => '0301520022',
            'description' => 'IPK Tertinggi Fakultas Ekonomi dan Bisnis'
        ]);
        PassStatement::create([
            'nim' => '0401520033',
            'description' => 'IPK Tertinggi Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0601518013',
            'description' => 'IPK Tertinggi Fakultas Psikologi dan Pendidikan'
        ]);
        PassStatement::create([
            'nim' => '0711520078',
            'description' => 'IPK Tertinggi Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0802520131',
            'description' => 'IPK Tertinggi Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);

        // Best students
        PassStatement::create([
            'nim' => '0404520023',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Pengetahuan Budaya'
        ]);
        PassStatement::create([
            'nim' => '0601520031',
            'description' => 'Lulusan Terbaik Fakultas Psikologi dan Pendidikan'
        ]);
        PassStatement::create([
            'nim' => '0711520079',
            'description' => 'Lulusan Terbaik Fakultas Hukum'
        ]);
        PassStatement::create([
            'nim' => '0301520022',
            'description' => 'Lulusan Terbaik Fakultas Ekonomi dan Bisnis'
        ]);
        PassStatement::create([
            'nim' => '0802520128',
            'description' => 'Lulusan Terbaik Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
        PassStatement::create([
            'nim' => '0102520052',
            'description' => 'Lulusan Terbaik Fakultas Sains dan Teknologi'
        ]);
    }
}
