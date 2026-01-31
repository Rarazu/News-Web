<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Facades\Schema;

class NewsSeeder extends Seeder
{
    public function run()
    {
        // Kosongkan tabel news sebelum mengisi agar tidak duplikat
        Schema::disableForeignKeyConstraints();
        News::truncate(); 
        Schema::enableForeignKeyConstraints();

        News::create([
            'title' => 'Peluncuran Portal Informasi Resmi',
            'content' => "Instansi resmi meluncurkan portal informasi terbaru sebagai sarana komunikasi publik yang terintegrasi dan modern. Portal ini dirancang untuk menyajikan informasi secara cepat, akurat, dan transparan kepada masyarakat. Kehadiran sistem digital ini diharapkan dapat meningkatkan kualitas layanan publik.\n\nMelalui portal ini, masyarakat dapat mengakses pengumuman, agenda kegiatan, serta berita resmi secara daring. Sistem ini juga mendukung efisiensi administrasi internal instansi. Pengembangan portal akan terus dilakukan sesuai kebutuhan pengguna.",
            'imagePath' => 'images/informasi.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Program Beasiswa Tahun 2026 Resmi Dibuka',
            'content' => "Yayasan pendidikan secara resmi membuka program beasiswa tahun 2026 bagi siswa berprestasi dan kurang mampu. Program ini bertujuan memberikan kesempatan pendidikan yang lebih merata. Proses seleksi dilakukan secara transparan dan objektif.\n\nPenilaian meliputi kondisi ekonomi keluarga, prestasi akademik, serta hasil tes seleksi. Pendaftaran dilakukan secara daring melalui portal resmi yayasan. Diharapkan beasiswa ini dapat mendukung keberhasilan studi siswa.",
            'imagePath' => 'images/beasiswa.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Kegiatan Bakti Sosial Sekolah',
            'content' => "Sekolah menyelenggarakan kegiatan bakti sosial sebagai bentuk kepedulian terhadap masyarakat sekitar. Kegiatan ini melibatkan siswa, guru, dan tenaga kependidikan. Program ini bertujuan menumbuhkan empati dan kepedulian sosial.\n\nBantuan yang disalurkan berupa kebutuhan pokok dan perlengkapan sekolah. Siswa turut berpartisipasi langsung dalam kegiatan tersebut. Sekolah berharap kegiatan ini memberi dampak positif bagi lingkungan.",
            'imagePath' => 'images/sosial.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pengumuman Libur Nasional dan Cuti Bersama',
            'content' => "Pemerintah mengumumkan jadwal libur nasional dan cuti bersama secara resmi. Pengumuman ini bertujuan memberikan kepastian bagi masyarakat. Sekolah diminta menyesuaikan kalender akademik.\n\nOrang tua dan siswa diharapkan memperhatikan jadwal tersebut. Informasi ini penting untuk perencanaan kegiatan belajar. Kebijakan ditetapkan melalui keputusan kementerian terkait.",
            'imagePath' => 'images/libur.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Workshop Teknologi Informasi untuk Siswa',
            'content' => "Workshop teknologi informasi diselenggarakan untuk meningkatkan literasi digital siswa. Materi mencakup pemrograman dasar dan keamanan data. Kegiatan ini dipandu oleh instruktur berpengalaman.\n\nSiswa mengikuti kegiatan dengan antusias and aktif. Selain teori, siswa melakukan praktik langsung. Workshop ini diharapkan meningkatkan kesiapan siswa menghadapi era digital.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Lomba Prestasi Akademik Antar Siswa',
            'content' => "Sekolah menggelar lomba prestasi akademik sebagai ajang kompetisi sehat. Kegiatan ini bertujuan meningkatkan motivasi belajar siswa. Berbagai mata pelajaran diperlombakan.\n\nPenilaian dilakukan oleh dewan juri profesional. Pemenang memperoleh penghargaan khusus. Sekolah berharap kegiatan ini mendorong prestasi siswa.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pelatihan Guru Berbasis Pembelajaran Digital',
            'content' => "Pelatihan guru berbasis digital dilaksanakan untuk meningkatkan kompetensi tenaga pendidik. Materi mencakup media interaktif dan platform pembelajaran daring. Kegiatan ini mendukung inovasi pembelajaran.\n\nGuru diharapkan mampu menerapkan metode modern di kelas. Pelatihan berlangsung selama beberapa hari. Sekolah berkomitmen meningkatkan kualitas pendidikan.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Penerimaan Peserta Didik Baru Dibuka',
            'content' => "Sekolah membuka penerimaan peserta didik baru untuk tahun ajaran mendatang. Pendaftaran dilakukan secara online. Sistem ini memudahkan calon siswa dan orang tua.\n\nInformasi persyaratan tersedia di website resmi. Proses seleksi dilakukan secara adil. Sekolah berharap menjaring siswa berkualitas.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Kunjungan Industri untuk Siswa',
            'content' => "Kunjungan industri dilaksanakan sebagai pembelajaran berbasis praktik. Siswa mengenal dunia kerja secara langsung. Kegiatan ini memperluas wawasan siswa.\n\nSiswa berdiskusi dengan praktisi industri. Pengalaman ini meningkatkan kesiapan kerja. Sekolah akan terus menjalin kerja sama industri.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Penghargaan bagi Siswa Berprestasi',
            'content' => "Sekolah memberikan penghargaan kepada siswa berprestasi. Penghargaan diberikan atas pencapaian akademik dan non-akademik. Hal ini sebagai bentuk apresiasi.\n\nSiswa diharapkan semakin termotivasi untuk berprestasi. Penghargaan diserahkan secara resmi. Sekolah mendukung pengembangan potensi siswa.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Peningkatan Fasilitas Sekolah',
            'content' => "Sekolah melakukan peningkatan fasilitas sarana dan prasarana. Langkah ini bertujuan menciptakan lingkungan belajar yang nyaman. Renovasi dilakukan secara bertahap.\n\nFasilitas yang ditingkatkan meliputi ruang kelas dan laboratorium. Diharapkan kegiatan belajar menjadi lebih optimal. Sekolah berkomitmen menjaga kualitas fasilitas.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Seminar Motivasi dan Pengembangan Diri',
            'content' => "Seminar motivasi diselenggarakan untuk membangun karakter siswa. Kegiatan ini menghadirkan narasumber inspiratif. Siswa dibekali wawasan pengembangan diri.\n\nSeminar bertujuan meningkatkan kepercayaan diri. Peserta mengikuti kegiatan dengan antusias. Sekolah berharap siswa lebih siap menghadapi tantangan.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pembukaan Ekstrakurikuler Baru',
            'content' => "Sekolah membuka kegiatan ekstrakurikuler baru. Program ini bertujuan mengembangkan minat dan bakat siswa. Pilihan kegiatan cukup beragam.\n\nSiswa dapat memilih sesuai minat masing-masing. Kegiatan dibimbing oleh pelatih berpengalaman. Sekolah mendukung pengembangan potensi non-akademik.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pelaksanaan Ujian Akhir Semester',
            'content' => "Ujian akhir semester dilaksanakan sesuai kalender akademik. Ujian bertujuan mengevaluasi hasil belajar siswa. Seluruh siswa mengikuti ujian dengan tertib.\n\nPengawasan dilakukan oleh guru pengawas. Hasil ujian digunakan sebagai bahan evaluasi. Sekolah menjaga integritas pelaksanaan ujian.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Sosialisasi Kurikulum Merdeka',
            'content' => "Sekolah mengadakan sosialisasi kurikulum merdeka. Kegiatan ini memberikan pemahaman tentang sistem pembelajaran baru. Guru dan siswa ikut berpartisipasi.\n\nSosialisasi bertujuan meningkatkan kesiapan implementasi kurikulum. Diskusi interaktif turut dilaksanakan. Sekolah mendukung penerapan kurikulum nasional.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Lomba Olahraga Antar Kelas',
            'content' => "Sekolah menyelenggarakan lomba olahraga antar kelas. Kegiatan ini bertujuan meningkatkan kebugaran dan sportivitas siswa. Suasana lomba berlangsung meriah.\n\nSiswa berpartisipasi aktif dalam setiap pertandingan. Lomba mempererat kebersamaan antar kelas. Sekolah mendukung gaya hidup sehat.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pengumuman Jadwal Ujian Sekolah',
            'content' => "Sekolah mengumumkan jadwal ujian secara resmi. Informasi disampaikan melalui media sekolah. Tujuannya agar siswa dapat mempersiapkan diri.\n\nOrang tua juga diharapkan memperhatikan jadwal tersebut. Ujian dilaksanakan sesuai ketentuan. Sekolah menjaga keteraturan pelaksanaan.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Program Literasi Sekolah',
            'content' => "Program literasi sekolah dilaksanakan secara rutin. Kegiatan ini bertujuan meningkatkan minat baca siswa. Berbagai aktivitas literasi diselenggarakan.\n\nSiswa diajak membaca dan berdiskusi. Program ini meningkatkan kemampuan berpikir kritis. Sekolah mendukung budaya literasi.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Peringatan Hari Pendidikan Nasional',
            'content' => "Sekolah memperingati Hari Pendidikan Nasional. Kegiatan ini menjadi refleksi pentingnya pendidikan. Upacara dan kegiatan pendukung dilaksanakan.\n\nPeringatan bertujuan menumbuhkan semangat belajar. Siswa mengikuti kegiatan dengan khidmat. Sekolah berkomitmen meningkatkan mutu pendidikan.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pelaksanaan Try Out Ujian Nasional',
            'content' => "Try out ujian nasional dilaksanakan sebagai persiapan siswa. Kegiatan ini bertujuan mengukur kesiapan siswa. Soal disusun sesuai standar nasional.\n\nHasil try out menjadi bahan evaluasi. Siswa dapat mengetahui kemampuan masing-masing. Sekolah memberikan pendampingan lanjutan.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Kerja Sama Sekolah dengan Dunia Industri',
            'content' => "Sekolah menjalin kerja sama dengan dunia industri. Kerja sama ini mendukung pembelajaran berbasis praktik. Program magang turut direncanakan.\n\nSiswa mendapatkan pengalaman nyata dunia kerja. Kerja sama meningkatkan relevansi pendidikan. Sekolah memperluas jaringan industri.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pendaftaran Ulang Siswa Lama',
            'content' => "Sekolah membuka pendaftaran ulang siswa lama. Proses dilakukan secara online. Sistem ini memudahkan administrasi sekolah.\n\nOrang tua diminta memperhatikan jadwal pendaftaran. Informasi tersedia di website resmi. Sekolah memastikan proses berjalan lancar.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pelatihan Kepemimpinan Siswa',
            'content' => "Pelatihan kepemimpinan diselenggarakan untuk siswa. Kegiatan ini bertujuan membentuk karakter dan tanggung jawab. Materi mencakup kepemimpinan dasar.\n\nSiswa dilatih bekerja sama dan berorganisasi. Pelatihan berlangsung interaktif. Sekolah mendukung pembentukan jiwa pemimpin.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Evaluasi Proses Belajar Mengajar',
            'content' => "Sekolah melakukan evaluasi proses belajar mengajar. Evaluasi bertujuan meningkatkan kualitas pendidikan. Guru dan siswa terlibat dalam proses ini.\n\nHasil evaluasi digunakan sebagai bahan perbaikan. Sekolah berkomitmen pada peningkatan mutu. Proses evaluasi dilakukan secara berkala.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);

        News::create([
            'title' => 'Pengumuman Kenaikan Kelas Siswa',
            'content' => "Sekolah mengumumkan hasil kenaikan kelas secara resmi. Penilaian dilakukan berdasarkan akademik dan non-akademik. Pengumuman disampaikan melalui media sekolah.\n\nSiswa dan orang tua diharapkan memperhatikan informasi tersebut. Proses dilakukan secara transparan. Sekolah mendorong siswa untuk terus berkembang.",
            'imagePath' => 'images/it.jpg',
            'status' => 'publish',
            'id_category' => 1,
            'id_user' => 1
        ]);
    }
}