@extends('layouts.app')

@section('title', 'Tentang UKM | Bina Insani University')
@section('description', 'Pelajari tentang Unit Kegiatan Mahasiswa (UKM) Bina Insani University dan peran pentingnya
dalam pengembangan mahasiswa.')

@section('content')
<section class="relative overflow-hidden bg-linear-to-b from-accent/5 via-background to-background">

    <!-- Soft Background Glow - Enhanced with animation -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-accent/15 rounded-full blur-[120px] animate-blob"></div>
    <div class="absolute top-1/3 -right-40 w-96 h-96 bg-primary/10 rounded-full blur-[120px] animate-blob"
        style="animation-delay: 2s;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-32">

        <!-- Header - Enhanced spacing and badge -->
        <div class="text-center mb-24" data-aos="fade-up" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full 
                        bg-accent/10 border border-accent/20 text-accent font-semibold text-sm">
                Tentang UKM
            </div>

            <h1 class="text-4xl md:text-6xl font-display font-bold text-primary mb-6 leading-[1.1]">
                Unit Kegiatan Mahasiswa
            </h1>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-muted-foreground leading-relaxed">
                Wadah pengembangan karakter, bakat, kepemimpinan, dan prestasi mahasiswa
                <span class="font-semibold text-primary">Bina Insani University</span>
            </p>
        </div>

        <!-- Main Content - Enhanced typography -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">

            <!-- Text Content - Better readability -->
            <div class="space-y-6 text-muted-foreground text-lg leading-relaxed" data-aos="fade-right"
                data-aos-duration="800">
                <p class="text-[17px]">
                    Unit Kegiatan Mahasiswa (UKM) bukan sekadar tempat berkumpul,
                    melainkan ruang tumbuh bagi mahasiswa untuk mengasah potensi diri
                    di luar kegiatan akademik.
                </p>
                <p class="text-[17px]">
                    Melalui UKM, mahasiswa belajar berorganisasi, berkolaborasi,
                    serta membangun karakter kepemimpinan yang kuat sebagai bekal
                    menghadapi dunia profesional.
                </p>
                <p class="text-[17px]">
                    Setiap UKM didampingi oleh dosen pembina dan difasilitasi penuh
                    oleh kampus agar setiap kegiatan berjalan positif, produktif,
                    dan berkelanjutan.
                </p>
            </div>

            <!-- Highlight Card - Enhanced visual -->
            <div class="relative bg-white/90 backdrop-blur rounded-[2.5rem]
                       border border-primary/10 p-10
                       shadow-xl shadow-primary/10
                       hover:shadow-2xl hover:shadow-primary/20
                       transition-all duration-500" data-aos="fade-left" data-aos-duration="800">

                <div class="absolute inset-0 bg-linear-to-br from-accent/5 to-primary/5 rounded-[2.5rem] -z-10"></div>
                <div class="absolute -top-6 -right-6 w-28 h-28 bg-accent/20 rounded-full blur-2xl animate-pulse"></div>

                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-linear-to-br from-accent/20 to-primary/20 
                                flex items-center justify-center">
                        <i class="fa-solid fa-question text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary">
                        Mengapa Bergabung dengan UKM?
                    </h3>
                </div>

                <ul class="space-y-4 text-muted-foreground">
                    <li class="flex items-start gap-3 group">
                        <span class="mt-1.5 w-2 h-2 bg-accent rounded-full 
                                     group-hover:scale-150 transition-transform duration-300"></span>
                        <span class="text-[15px] leading-relaxed">Mengembangkan soft skill & hard skill</span>
                    </li>
                    <li class="flex items-start gap-3 group">
                        <span class="mt-1.5 w-2 h-2 bg-accent rounded-full 
                                     group-hover:scale-150 transition-transform duration-300"></span>
                        <span class="text-[15px] leading-relaxed">Memperluas relasi dan pengalaman organisasi</span>
                    </li>
                    <li class="flex items-start gap-3 group">
                        <span class="mt-1.5 w-2 h-2 bg-accent rounded-full 
                                     group-hover:scale-150 transition-transform duration-300"></span>
                        <span class="text-[15px] leading-relaxed">Menyalurkan minat dan bakat secara positif</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Feature Cards - Enhanced with better icons and animations -->
        <div class="grid md:grid-cols-3 gap-8 ">

            <!-- Komunitas -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-primary/10 shadow-md hover:shadow-2xl hover:-translate-y-3 hover:border-accent/30 hover:bg-white transition-all duration-300"
                data-aos="fade-up" data-aos-delay="0">
                <div
                    class="w-14 h-14 rounded-2xl bg-linear-to-br from-accent/20 to-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                    <i class="fa-solid fa-people-group text-xl"></i>
                </div>
                <h3
                    class="text-xl font-bold text-foreground mb-3 group-hover:text-accent transition-colors duration-300">
                    Komunitas Solid
                </h3>
                <p class="text-muted-foreground leading-relaxed text-[15px]">
                    Membangun relasi kuat lintas jurusan dan angkatan
                    dalam lingkungan yang positif dan suportif.
                </p>
            </div>

            <!-- Pengembangan -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-primary/10 shadow-md hover:shadow-2xl hover:-translate-y-3 hover:border-accent/30 hover:bg-white transition-all duration-500"
                data-aos="fade-up" data-aos-delay="150">
                <div
                    class="w-14 h-14 rounded-2xl bg-linear-to-br from-accent/20 to-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-sm">
                    <i class="fa-solid fa-chart-line text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-3
                           group-hover:text-accent transition-colors duration-300">
                    Pengembangan Diri
                </h3>
                <p class="text-muted-foreground leading-relaxed text-[15px]">
                    Melatih leadership, teamwork, dan manajemen waktu
                    sebagai bekal karier masa depan.
                </p>
            </div>

            <!-- Prestasi -->
            <div class="group bg-white/80 backdrop-blur-sm p-8 rounded-3xl
                       border border-primary/10 shadow-md
                       hover:shadow-2xl hover:-translate-y-3 hover:border-accent/30
                       hover:bg-white transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-2xl
                           bg-linear-to-br from-accent/20 to-primary/10
                           flex items-center justify-center text-primary mb-6
                           group-hover:scale-110 group-hover:rotate-6 
                           transition-all duration-500 shadow-sm">
                    <i class="fa-solid fa-trophy text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-3
                           group-hover:text-accent transition-colors duration-300">
                    Berprestasi
                </h3>
                <p class="text-muted-foreground leading-relaxed text-[15px]">
                    Mendorong mahasiswa meraih prestasi dari tingkat kampus
                    hingga nasional dan internasional.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection