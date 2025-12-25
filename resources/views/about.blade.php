@extends('layouts.app')

@section('title', 'Tentang UKM | Bina Insani University')
@section('description', 'Pelajari tentang Unit Kegiatan Mahasiswa (UKM) Bina Insani University dan peran pentingnya
dalam pengembangan mahasiswa.')

@section('content')
<section class="relative overflow-hidden
                bg-linear-to-b from-accent/5 via-background to-background">

    <!-- Soft Background Glow -->
    <div class="absolute -top-40 -left-40 w-lg h-128 bg-accent/15 rounded-full blur-[120px]"></div>
    <div class="absolute top-1/3 -right-40 w-120 h-120 bg-primary/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-32">

        <!-- Header -->
        <div class="text-center mb-24" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-6xl font-display font-bold text-primary mb-6 leading-tight">
                Unit Kegiatan Mahasiswa
            </h1>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-muted-foreground leading-relaxed">
                Wadah pengembangan karakter, bakat, kepemimpinan, dan prestasi mahasiswa
                <span class="font-semibold text-primary">Bina Insani University</span>.
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">

            <!-- Text Content -->
            <div class="space-y-6 text-muted-foreground text-lg leading-relaxed" data-aos="fade-right"
                data-aos-duration="1000">
                <p>
                    Unit Kegiatan Mahasiswa (UKM) bukan sekadar tempat berkumpul,
                    melainkan ruang tumbuh bagi mahasiswa untuk mengasah potensi diri
                    di luar kegiatan akademik.
                </p>
                <p>
                    Melalui UKM, mahasiswa belajar berorganisasi, berkolaborasi,
                    serta membangun karakter kepemimpinan yang kuat sebagai bekal
                    menghadapi dunia profesional.
                </p>
                <p>
                    Setiap UKM didampingi oleh dosen pembina dan difasilitasi penuh
                    oleh kampus agar setiap kegiatan berjalan positif, produktif,
                    dan berkelanjutan.
                </p>
            </div>

            <!-- Highlight Card -->
            <div class="relative bg-white/80 backdrop-blur rounded-[2.5rem]
                       border border-primary/10 p-10
                       shadow-xl shadow-primary/10" data-aos="fade-left" data-aos-duration="1000">

                <div class="absolute inset-0 bg-accent/5 rounded-[2.5rem] -z-10"></div>
                <div class="absolute -top-6 -right-6 w-28 h-28 bg-accent/20 rounded-full blur-2xl"></div>

                <h3 class="text-2xl font-bold text-primary mb-6">
                    Mengapa Bergabung dengan UKM?
                </h3>

                <ul class="space-y-4 text-muted-foreground">
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-accent rounded-full"></span>
                        Mengembangkan soft skill & hard skill
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-accent rounded-full"></span>
                        Memperluas relasi dan pengalaman organisasi
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-accent rounded-full"></span>
                        Menyalurkan minat dan bakat secara positif
                    </li>
                </ul>
            </div>
        </div>

        <!-- Feature Cards -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- Komunitas -->
            <div class="group bg-white/70 backdrop-blur p-8 rounded-3xl
                       border border-primary/10 shadow-sm
                       hover:shadow-xl hover:-translate-y-2
                       hover:bg-accent/5 transition-all" data-aos="fade-up" data-aos-delay="0">
                <div class="w-14 h-14 rounded-2xl
                           bg-linear-to-br from-accent/20 to-primary/10
                           flex items-center justify-center text-primary mb-6
                           group-hover:scale-110 transition">
                    <i class="fa-solid fa-people-group text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-3">
                    Komunitas Solid
                </h3>
                <p class="text-muted-foreground">
                    Membangun relasi kuat lintas jurusan dan angkatan
                    dalam lingkungan yang positif dan suportif.
                </p>
            </div>

            <!-- Pengembangan -->
            <div class="group bg-white/70 backdrop-blur p-8 rounded-3xl
                       border border-primary/10 shadow-sm
                       hover:shadow-xl hover:-translate-y-2
                       hover:bg-accent/5 transition-all" data-aos="fade-up" data-aos-delay="150">
                <div class="w-14 h-14 rounded-2xl
                           bg-linear-to-br from-accent/20 to-primary/10
                           flex items-center justify-center text-primary mb-6
                           group-hover:scale-110 transition">
                    <i class="fa-solid fa-user-plus text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-3">
                    Pengembangan Diri
                </h3>
                <p class="text-muted-foreground">
                    Melatih leadership, teamwork, dan manajemen waktu
                    sebagai bekal karier masa depan.
                </p>
            </div>

            <!-- Prestasi -->
            <div class="group bg-white/70 backdrop-blur p-8 rounded-3xl
                       border border-primary/10 shadow-sm
                       hover:shadow-xl hover:-translate-y-2
                       hover:bg-accent/5 transition-all" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-2xl
                           bg-linear-to-br from-accent/20 to-primary/10
                           flex items-center justify-center text-primary mb-6
                           group-hover:scale-110 transition">
                    <i class="fa-solid fa-star text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-3">
                    Berprestasi
                </h3>
                <p class="text-muted-foreground">
                    Mendorong mahasiswa meraih prestasi dari tingkat kampus
                    hingga nasional dan internasional.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection