@extends('layouts.app')

@section('title', 'UKM | Bina Insani University')
@section('description', 'Jelajahi Unit Kegiatan Mahasiswa (UKM) Bina Insani University. Dari teknologi hingga olahraga,
temukan komunitas yang sesuai dengan minatmu.')

@section('content')

<section class="relative min-h-screen overflow-hidden bg-linear-to-br from-background via-background to-primary/5">

    <!-- Decorative Blur - Enhanced -->
    <div class="absolute top-32 right-0 w-96 h-96 bg-accent/30 rounded-full blur-[120px] animate-blob"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-primary/20 rounded-full blur-[100px] animate-blob"
        style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
               pt-40 md:pt-48 lg:pt-56 pb-16 text-center">

        <!-- Badge - Enhanced with better animation -->
        <div class="inline-flex items-center gap-2 px-4 py-2.5 mb-8 rounded-full 
                    bg-linear-to-r from-emerald-50 to-green-50 
                    text-emerald-700 border border-emerald-200/70 
                    backdrop-blur-sm shadow-sm hover:shadow-md transition-all" data-aos="zoom-in">
            <span class="relative flex h-2 w-2">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wide">
                Selamat Datang Mahasiswa Baru
            </span>
        </div>

        <!-- Heading - Better spacing -->
        <h1 class="font-display font-bold leading-tight mb-6
                           text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-[4.5rem]" data-aos="fade-up"
            data-aos-delay="100">
            Tingkatkan Keahlianmu di UKM <br>
            <span class="text-transparent bg-clip-text bg-linear-to-r from-primary to-accent">
                Bina Insani University
            </span>
        </h1>

        <!-- Description - Better readability -->
        <p class="max-w-3xl mx-auto mb-12
                   text-muted-foreground leading-relaxed
                   text-base sm:text-lg md:text-xl" data-aos="fade-up" data-aos-delay="200">
            Jelajahi Unit Kegiatan Mahasiswa yang siap mengembangkan bakat,
            minat, dan potensi terbaikmu selama masa perkuliahan
        </p>

        <!-- CTA - Enhanced buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-28" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('ukm.index') }}" class="group px-8 py-4 rounded-2xl bg-linear-to-r from-accent to-emerald-500 
                      text-white font-semibold text-sm
                      shadow-lg shadow-accent/25 hover:shadow-xl hover:shadow-accent/40 
                      hover:-translate-y-1 active:translate-y-0
                      transition-all duration-300">
                <span class="flex items-center justify-center gap-2">
                    Jelajahi UKM
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
            <a href="{{ route('about') }}" class="px-8 py-4 rounded-2xl bg-white border-2 border-border 
                      text-primary font-semibold text-sm
                      hover:bg-accent/5 hover:border-accent/50 
                      transition-all duration-300">
                Tentang Kami
            </a>
        </div>

        <!-- Scroll Indicator - Smoother -->
        <div class="flex justify-center opacity-30 hover:opacity-60 transition-opacity" data-aos="fade-up"
            data-aos-delay="400">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>

    </div>
</section>

<!-- ================= PREVIEW UKM ================= -->
<section class="py-24 bg-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full 
                        bg-accent/10 border border-accent/20 text-accent font-semibold text-sm">
                Terfavorit
            </div>
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
                <div class="text-6xl mb-4">📦</div>
                <p class="text-muted-foreground text-lg">
                    Data UKM belum tersedia
                </p>
            </div>
            @endforelse
        </div>

        <!-- View All - Enhanced button -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('ukm.index') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl 
                       bg-primary text-primary-foreground font-semibold
                       hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/20 
                       hover:-translate-y-1 transition-all duration-300">
                Lihat Semua UKM
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6">
                    </path>
                </svg>
            </a>
        </div>

    </div>
</section>

@endsection