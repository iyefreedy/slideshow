<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\Graduate;
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

        // $this->call(PassStatementSeeder::class);
        $graduates = Graduate::where('idWisuda', 27)->get();
        foreach($graduates as $graduate) {
            $nim = $graduate->nim;
        }
    }
}
