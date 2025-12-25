@extends('layouts.app')

@section('title', 'UKM | Bina Insani University')
@section('description', 'Jelajahi Unit Kegiatan Mahasiswa (UKM) Bina Insani University. Dari teknologi hingga olahraga,
temukan komunitas yang sesuai dengan minatmu.')

@section('content')

<section class="relative min-h-screen overflow-hidden bg-linear-to-br from-background via-background to-primary/5">

    <!-- Decorative Blur -->
    <div class="absolute top-32 right-0 w-96 h-96 bg-accent/40 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-primary/40 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
               pt-40 md:pt-48 lg:pt-56 pb-16 text-center">

        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 rounded-full bg-emerald-100 text-emerald-700 border border-emerald-200 backdrop-blur-sm animate-pulse"
            data-aos="zoom-in">
            <i class="fa-solid fa-hand-sparkles"></i>
            <span class="text-xs font-semibold uppercase tracking-wide ">
                Selamat Datang Mahasiswa Baru
            </span>
        </div>

        <!-- Heading -->
        <h1 class="font-display font-bold leading-tight mb-6
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-[4.5rem]" data-aos="fade-up"
            data-aos-delay="100">
            Tingkatkan Keahlianmu di UKM <br>
            <span class="text-transparent bg-clip-text bg-linear-to-r from-primary to-accent">
                Bina Insani University
            </span>
        </h1>

        <!-- Description -->
        <p class="max-w-3xl mx-auto mb-12
                   text-muted-foreground leading-relaxed
                   text-base sm:text-lg md:text-xl" data-aos="fade-up" data-aos-delay="200">
            Jelajahi Unit Kegiatan Mahasiswa yang siap mengembangkan bakat,
            minat, dan potensi terbaikmu selama masa perkuliahan.
        </p>

        <!-- CTA -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-28" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('ukm.index') }}" class="px-8 py-4 rounded-full bg-accent text-accent-foreground font-semibold
                      shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                Jelajahi UKM
            </a>
            <a href="{{ route('about') }}" class="px-8 py-4 rounded-full bg-white border border-border font-semibold
                      hover:bg-muted/50 hover:border-accent/50 transition-all duration-300">
                Tentang Kami
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="flex justify-center opacity-40 animate-bounce hover:text-accent transition-colors duration-300"
            data-aos="fade-up" data-aos-delay="400">
            <i class="fa-solid fa-arrow-down text-4xl"></i>
        </div>

    </div>
</section>

<!-- ================= PREVIEW UKM ================= -->
<section class="py-24 bg-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                UKM Pilihan
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                Preview beberapa UKM unggulan Bina Insani University sebelum melihat daftar lengkapnya.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($data_ukms->take(3) as $ukm)
            <div data-aos="fade-up">
                <x-ukm-showcase :ukm="$ukm" />
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <p class="text-muted-foreground text-lg">
                    Data UKM belum tersedia
                </p>
            </div>
            @endforelse
        </div>

        <!-- View All -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('ukm.index') }}"
                class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-primary text-white font-semibold hover:bg-primary/90 hover:shadow-lg hover:shadow-primary/30 transition-all">
                Lihat Semua UKM
            </a>
        </div>

    </div>
</section>

@endsection