<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     $this->call([
    //         UserSeeder::class,
    //         CategorySeeder::class,
    //         NewsSeeder::class,
    //     ]);
    // }

    public function run()
    {
        Schema::disableForeignKeyConstraints();
        News::truncate();
        Category::truncate();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        // Buat 10 Penulis (User)
        $users = [];
        $users[] = User::create([
            'name'     => 'Admin',
            'email'    => 'admin@inews.com',
            'password' => Hash::make('admin123'),
        ]);

        for ($i = 2; $i <= 10; $i++) {
            $users[] = User::create([
                'name'     => "Penulis Ke-$i",
                'email'    => "writer$i@inews.com",
                'password' => Hash::make('password123'),
            ]);
        }

        $categories = [];
        $catNames = ['Kebijakan Publik', 'Teknologi', 'Pendidikan', 'Kesehatan', 'Sosial'];
        foreach ($catNames as $name) {
            $categories[] = Category::create(['name' => $name]);
        }

        $fixedArticles = [
            [
                'title' => 'Peluncuran Portal Informasi Resmi',
                'imagePath' => 'images/informasi.jpg',
                'id_category' => $categories[0]->id_category, // Kebijakan Publik
            ],
            [
                'title' => 'Program Beasiswa Tahun 2026 Resmi Dibuka',
                'imagePath' => 'images/beasiswa.jpg',
                'id_category' => $categories[2]->id_category, // Pendidikan
            ],
            [
                'title' => 'Kegiatan Bakti Sosial Sekolah',
                'imagePath' => 'images/sosial.jpg',
                'id_category' => $categories[4]->id_category, // Sosial
            ],
            [
                'title' => 'Pengumuman Libur Nasional dan Cuti Bersama',
                'imagePath' => 'images/libur.jpg',
                'id_category' => $categories[0]->id_category, // Kebijakan Publik
            ],
            [
                'title' => 'Workshop Teknologi Informasi untuk Siswa',
                'imagePath' => 'images/it.jpg',
                'id_category' => $categories[1]->id_category, // Teknologi
            ],
        ];

        foreach ($fixedArticles as $data) {
            News::create([
                'title'       => $data['title'],
                'content'     => "Isi konten utama untuk artikel: " . $data['title'] . ". Ini dirancang untuk menyajikan informasi secara cepat, akurat, dan transparan kepada masyarakat.",
                'imagePath'   => $data['imagePath'],
                'status'      => 'publish',
                'id_category' => $data['id_category'],
                'id_user'     => $users[0]->id_user, 
            ]);
        }

        for ($i = 6; $i <= 25; $i++) {
            News::create([
                'title'       => "Berita Tambahan Ke-$i tentang Literasi Digital",
                'content'     => "Evaluasi proses belajar mengajar dilakukan secara berkala untuk meningkatkan kualitas pendidikan dan inovasi di era modern.",
                'imagePath'   => 'images/it.jpg',
                'status'      => 'publish',
                'id_category' => $categories[array_rand($categories)]->id_category, 
                'id_user'     => $users[array_rand($users)]->id_user,
            ]);
        }
    }
}
