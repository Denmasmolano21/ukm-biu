<?php

namespace Database\Seeders;

use App\Models\DataUkm;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataUkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukms = [
            [
                'name' => 'CC (Computer Club)',
                'slug' => 'cc',
                'category' => 'Teknologi',
                'short_description' => 'Komunitas penggiat teknologi dan coding.',
                'full_description' => 'CC adalah wadah bagi mahasiswa yang tertarik dengan dunia IT, mulai dari programming, networking, hingga multimedia. Kami aktif mengadakan pelatihan dan berpartisipasi dalam kompetisi.',
                'activities' => ['Workshop Coding', 'Seminar IT', 'Hackathon Internal', 'Sharing Session'],
                'benefits' => ['Relasi sesama programmer', 'Skill coding meningkat', 'Info lowongan kerja IT', 'Sertifikat Pelatihan'],
                'instagram' => '@cc_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/2920/2920277.png',
                'contact_info' => 'cc@binainsani.ac.id',
            ],
            [
                'name' => 'BESTARI (Seni Tari)',
                'slug' => 'bestari',
                'category' => 'Seni',
                'short_description' => 'Melestarikan budaya melalui seni tari.',
                'full_description' => 'Unit Kegiatan Mahasiswa yang mewadahi minat dan bakat mahasiswa dalam bidang seni tari, baik tradisional maupun modern. Kami sering tampil dalam acara-acara besar kampus dan luar kampus.',
                'activities' => ['Latihan Rutin Mingguan', 'Pentas Seni Kampus', 'Lomba Tari Antar Universitas', 'Makeup Class'],
                'benefits' => ['Melatih kepercayaan diri', 'Menjaga kebugaran', 'Melestarikan budaya', 'Pengalaman Tampil'],
                'instagram' => '@bestari_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/3079/3079080.png',
                'contact_info' => 'bestari@binainsani.ac.id',
            ],
            [
                'name' => 'BIP (Basket)',
                'slug' => 'bip',
                'category' => 'Olahraga',
                'short_description' => 'Menjunjung sportivitas tinggi di lapangan basket.',
                'full_description' => 'UKM Basket Bina Insani (BIP) adalah tempat berkumpulnya mahasiswa yang hobi bermain basket dan ingin berprestasi. Kami memiliki tim putra dan putri yang solid.',
                'activities' => ['Latihan Fisik & Teknik', 'Sparring Partner', 'Mengikuti Liga Mahasiswa', 'Fun Games'],
                'benefits' => ['Sehat jasmani', 'Teamwork', 'Prestasi non-akademik', 'Jersey Tim'],
                'instagram' => '@bip_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/889/889455.png',
                'contact_info' => 'basket@binainsani.ac.id',
            ],
            [
                'name' => 'MAPALA (Pecinta Alam)',
                'slug' => 'mapala',
                'category' => 'Sosial',
                'short_description' => 'Menjelajah alam, mencintai lingkungan.',
                'full_description' => 'Mahasiswa Pecinta Alam Bina Insani. Kegiatan kami berfokus pada pelestarian alam, kegiatan outdoor, dan pengabdian masyarakat.',
                'activities' => ['Pendakian Gunung', 'Konservasi Alam', 'Latihan SAR', 'Camping Ceria'],
                'benefits' => ['Mental yang kuat', 'Fisik prima', 'Cinta lingkungan', 'Solidaritas Tinggi'],
                'instagram' => '@mapala_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/3233/3233497.png',
                'contact_info' => 'mapala@binainsani.ac.id',
            ],
            [
                'name' => 'BIMS (Musik)',
                'slug' => 'bims',
                'category' => 'Seni',
                'short_description' => 'Ekspresikan dirimu lewat musik.',
                'full_description' => 'Bina Insani Music Society. Tempat anak band, solois, dan penikmat musik berkarya dan berekspresi bersama.',
                'activities' => ['Jamming Session', 'Music Festival', 'Coaching Clinic', 'Recording'],
                'benefits' => ['Penyaluran hobi', 'Tampil di event kampus', 'Networking musisi', 'Akses Studio'],
                'instagram' => '@bims_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/2907/2907253.png',
                'contact_info' => 'musik@binainsani.ac.id',
            ],
            [
                'name' => 'LDK AL-Ikhlas',
                'slug' => 'ldk-alikhlas',
                'category' => 'Kerohanian',
                'short_description' => 'Mempererat ukhuwah islamiyah.',
                'full_description' => 'Lembaga Dakwah Kampus yang bergerak di bidang kerohanian Islam, kajian, dan kegiatan sosial.',
                'activities' => ['Kajian Rutin', 'Buka Puasa Bersama', 'Mentoring', 'Bakti Sosial'],
                'benefits' => ['Ilmu Agama', 'Ketenangan Hati', 'Saudara Seiman', 'Soft Skill Organisasi'],
                'instagram' => '@ldk_biu',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/4358/4358667.png',
                'contact_info' => 'ldk@binainsani.ac.id',
            ],
        ];

        foreach ($ukms as $ukm) {
            DataUkm::create($ukm);
        }
    }
}
