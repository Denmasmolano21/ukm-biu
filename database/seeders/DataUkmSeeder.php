<?php

namespace Database\Seeders;

use App\Models\DataUkm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'full_description' => 'CC (Computer Club) adalah UKM yang mewadahi mahasiswa yang memiliki minat di bidang teknologi informasi, mulai dari programming, networking, cybersecurity, hingga multimedia. CC aktif mengadakan pelatihan, seminar, dan event IT.',
                'visi' => 'Menjadi komunitas IT kampus yang inovatif, kolaboratif, dan berdaya saing.',
                'misi' => "• Mengembangkan skill teknologi mahasiswa\n• Mendorong inovasi dan kreativitas\n• Menjalin relasi dengan komunitas IT luar kampus",
                'activities' => [
                    'Workshop Coding',
                    'Seminar IT',
                    'Hackathon Internal',
                    'Sharing Session'
                ],
                'benefits' => [
                    'Relasi sesama programmer',
                    'Skill coding meningkat',
                    'Pengalaman project',
                    'Sertifikat pelatihan'
                ],
                'instagram' => '@cc_biu',
                'regis_url' => 'https://forms.gle/cc-registration',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/2920/2920277.png',
                'contact_info' => '85780355323',
                'is_open_recruitment' => true,
            ],
            [
                'name' => 'BESTARI (Seni Tari)',
                'slug' => 'bestari',
                'category' => 'Seni',
                'short_description' => 'Melestarikan budaya melalui seni tari.',
                'full_description' => 'BESTARI merupakan UKM seni tari yang mewadahi mahasiswa dalam mengembangkan bakat seni tari tradisional dan modern serta aktif tampil dalam berbagai acara kampus maupun luar kampus.',
                'visi' => 'Menjadi UKM seni tari yang berprestasi dan berbudaya.',
                'misi' => "• Melestarikan seni budaya\n• Mengembangkan kreativitas mahasiswa\n• Mengikuti event seni",
                'activities' => [
                    'Latihan Rutin Mingguan',
                    'Pentas Seni Kampus',
                    'Lomba Tari',
                    'Makeup Class'
                ],
                'benefits' => [
                    'Kepercayaan diri',
                    'Kebugaran tubuh',
                    'Pengalaman tampil',
                    'Relasi seni'
                ],
                'instagram' => '@bestari_biu',
                'regis_url' => 'https://forms.gle/bestari-registration',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/3079/3079080.png',
                'contact_info' => '81234567890',
                'is_open_recruitment' => true,
            ],
            [
                'name' => 'BIP (Basket)',
                'slug' => 'bip',
                'category' => 'Olahraga',
                'short_description' => 'Menjunjung sportivitas di lapangan basket.',
                'full_description' => 'BIP merupakan UKM basket yang fokus pada pembinaan atlet mahasiswa dan rutin mengikuti liga serta kompetisi antar kampus.',
                'visi' => 'Mencetak atlet basket kampus yang berprestasi.',
                'misi' => "• Latihan rutin dan disiplin\n• Meningkatkan fisik dan mental\n• Mengikuti kejuaraan basket",
                'activities' => [
                    'Latihan Teknik',
                    'Sparring',
                    'Liga Mahasiswa',
                    'Fun Games'
                ],
                'benefits' => [
                    'Tubuh sehat',
                    'Teamwork',
                    'Prestasi olahraga',
                    'Jersey tim'
                ],
                'instagram' => '@bip_biu',
                'regis_url' => '',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/889/889455.png',
                'contact_info' => '81398765432',
                'is_open_recruitment' => false,
            ],
            [
                'name' => 'MAPALA (Pecinta Alam)',
                'slug' => 'mapala',
                'category' => 'Sosial',
                'short_description' => 'Menjelajah alam dan mencintai lingkungan.',
                'full_description' => 'MAPALA adalah UKM pecinta alam yang aktif dalam kegiatan pendakian, konservasi lingkungan, dan pelatihan SAR untuk mahasiswa.',
                'visi' => 'Menjadi pelopor cinta lingkungan kampus.',
                'misi' => "• Menumbuhkan kepedulian lingkungan\n• Melatih fisik dan mental\n• Membangun solidaritas anggota",
                'activities' => [
                    'Pendakian Gunung',
                    'Konservasi Alam',
                    'Latihan SAR',
                    'Camping'
                ],
                'benefits' => [
                    'Mental kuat',
                    'Fisik prima',
                    'Cinta alam',
                    'Solidaritas'
                ],
                'instagram' => '@mapala_biu',
                'regis_url' => 'https://forms.gle/mapala-registration',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/3233/3233497.png',
                'contact_info' => '82233445566',
                'is_open_recruitment' => true,
            ],
            [
                'name' => 'BIMS (Musik)',
                'slug' => 'bims',
                'category' => 'Seni',
                'short_description' => 'Ekspresi diri lewat musik.',
                'full_description' => 'BIMS merupakan UKM musik kampus yang menjadi wadah mahasiswa dalam berkarya, tampil, dan mengembangkan kemampuan bermusik.',
                'visi' => 'Menjadi komunitas musik kreatif kampus.',
                'misi' => "• Menyalurkan bakat musik\n• Mengadakan event musik\n• Kolaborasi antar musisi",
                'activities' => [
                    'Jamming Session',
                    'Festival Musik',
                    'Coaching Clinic',
                    'Recording'
                ],
                'benefits' => [
                    'Penyaluran hobi',
                    'Pengalaman tampil',
                    'Relasi musisi',
                    'Akses studio'
                ],
                'instagram' => '@bims_biu',
                'regis_url' => '',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/2907/2907253.png',
                'contact_info' => '85122334455',
                'is_open_recruitment' => false,
            ],
            [
                'name' => 'LDK Al-Ikhlas',
                'slug' => 'ldk-al-ikhlas',
                'category' => 'Kerohanian',
                'short_description' => 'Mempererat ukhuwah islamiyah.',
                'full_description' => 'LDK Al-Ikhlas merupakan lembaga dakwah kampus yang fokus pada pembinaan keislaman, akhlak, dan kepemimpinan mahasiswa.',
                'visi' => 'Membentuk mahasiswa berakhlak mulia dan berintegritas.',
                'misi' => "• Pembinaan keislaman\n• Mentoring rutin\n• Kegiatan sosial dan dakwah",
                'activities' => [
                    'Kajian Rutin',
                    'Mentoring',
                    'Buka Puasa Bersama',
                    'Bakti Sosial'
                ],
                'benefits' => [
                    'Ilmu agama',
                    'Ketenangan hati',
                    'Relasi islami',
                    'Soft skill organisasi'
                ],
                'instagram' => '@ldk_biu',
                'regis_url' => 'https://forms.gle/ldk-registration',
                'logo_url' => 'https://cdn-icons-png.flaticon.com/512/4358/4358667.png',
                'contact_info' => '85666777888',
                'is_open_recruitment' => true,
            ],
        ];

        foreach ($ukms as $ukm) {
            DataUkm::updateOrCreate(
                ['slug' => $ukm['slug']],
                $ukm
            );
        }
    }
}
