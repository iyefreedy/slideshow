<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\PassStatement;
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
        //     'id' => 36,
        //     'name' => 'Magister Ilmu Hukum',
        //     'faculty_id' => 5,
        //     'order_id' => 1,
        //     'title' => 'Magister Hukum',
        // ]);

        // Assign pass statements
        $highScores = [
            '0101518021',
            '0311518074',
            '0402518009',
            '0604518004',
            '0711518110',
            '0702620004',
            '0801518117',
        ];

        PassStatement::create([
            'nim' => '0101518021',
            'description' => 'Nilai Tertinggi FST'
        ]);
        PassStatement::create([
            'nim' => '0311518074',
            'description' => 'Nilai Tertinggi FEB'
        ]);
        PassStatement::create([
            'nim' => '0402518009',
            'description' => 'Nilai Tertinggi FIPB'
        ]);
        PassStatement::create([
            'nim' => '0604518004',
            'description' => 'Nilai Tertinggi FPsP'
        ]);
        PassStatement::create([
            'nim' => '0711518110',
            'description' => 'Nilai Tertinggi FH'
        ]);
        PassStatement::create([
            'nim' => '0702620004',
            'description' => 'Nilai Tertinggi Magister Hukum'
        ]);
        PassStatement::create([
            'nim' => '0801518117',
            'description' => 'Nilai Tertinggi FISIP'
        ]);


        $nims = [
            '0101518021',
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
    }
}
