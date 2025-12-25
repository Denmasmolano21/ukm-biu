@extends('layouts.app')

@section('title', $ukm->name)
@section('description', $ukm->short_description)

@section('content')
<div class="min-h-screen bg-background flex flex-col">
    <main class="grow pt-24 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Breadcrumb / Back -->
            <a href="{{ route('ukm.index') }}"
                class="inline-flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors mb-8 group"
                data-aos="fade-right">
                <div
                    class="w-8 h-8 rounded-full bg-white border border-border flex items-center justify-center group-hover:border-primary group-hover:bg-primary group-hover:text-white transition-all">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </div>
                <span class="font-medium text-sm">Kembali ke Daftar UKM</span>
            </a>

            <!-- Header Card -->
            <div class="bg-white rounded-4xl p-6 md:p-10 shadow-xl shadow-black/5 border border-border mb-12 relative overflow-hidden"
                data-aos="fade-up">

                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-accent/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                </div>

                <div class="relative z-10 flex flex-col md:flex-row gap-8 md:items-center">
                    <!-- Logo -->
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-3xl bg-muted flex items-center justify-center border-2 border-white shadow-lg overflow-hidden shrink-0"
                        data-aos="zoom-in">

                        @if($ukm->logo_url)
                        <img src="{{ $ukm->logo_url }}" alt="{{ $ukm->name }}" class="w-full h-full object-cover">
                        @else
                        <svg class="w-12 h-12 text-muted-foreground" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        @endif
                    </div>

                    <!-- Info -->
                    <div class="grow" data-aos="fade-left">
                        <div class="flex items-center gap-3 mb-2">
                            <span
                                class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-100 text-emerald-700">
                                {{ $ukm->category }}
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-display font-bold text-primary mb-4">
                            {{ $ukm->name }}
                        </h1>
                        <p class="text-lg text-muted-foreground max-w-2xl leading-relaxed">
                            {{ $ukm->short_description }}
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex md:flex-col gap-3 shrink-0" data-aos="fade-left" data-aos-delay="150">
                        @if($ukm->instagram)
                        <a href="https://instagram.com/{{ ltrim($ukm->instagram, '@') }}" target="_blank"
                            rel="noreferrer"
                            class="px-6 py-3 rounded-xl bg-linear-to-r from-purple-500 to-pink-500 text-white font-semibold shadow-lg shadow-pink-500/25 hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center gap-2 whitespace-nowrap text-sm">
                            <i class="fa-brands fa-instagram"></i>
                            <span>{{ $ukm->instagram }}</span>
                        </a>
                        @endif

                        @if($ukm->contact_info)
                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $ukm->contact_info) }}" target="_blank"
                            rel="noreferrer"
                            class="px-6 py-3 rounded-xl bg-green-500 text-white font-semibold shadow-lg shadow-green-500/25 hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center gap-2 whitespace-nowrap text-sm">
                            <i class="fa-brands fa-whatsapp"></i>
                            <span>Hubungi WA</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 space-y-8">
                    <section class="bg-white rounded-3xl p-8 border border-border shadow-md hover:shadow-xl transition"
                        data-aos="fade-up">
                        <h2 class="text-2xl font-bold mb-6 flex items-center gap-3">
                            <div class="w-2 h-8 bg-accent rounded-full"></div>
                            Tentang {{ $ukm->name }}
                        </h2>
                        <p class="text-muted-foreground leading-relaxed whitespace-pre-line">
                            {{ $ukm->full_description }}
                        </p>
                    </section>

                    <section
                        class="bg-white/80 backdrop-blur-xl rounded-3xl p-8 border border-border shadow-md hover:shadow-xl transition"
                        data-aos="fade-up" data-aos-delay="150">
                        <h2 class="text-2xl font-bold mb-6 flex items-center gap-3">
                            <span
                                class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center">
                                <i class="fa-regular fa-calendar-days"></i>
                            </span>
                            Kegiatan Rutin
                        </h2>

                        <div class="space-y-4">
                            @foreach($ukm->activities as $activity)
                            <div
                                class="group flex items-start gap-4 p-5 rounded-2xl bg-linear-to-r from-muted/30 to-muted/10 hover:from-emerald-50 hover:to-green-50 transition">
                                <span class="w-2.5 h-2.5 mt-2 rounded-full bg-emerald-500"></span>
                                <p class="font-medium group-hover:text-emerald-700 transition">
                                    {{ $activity }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>

                <div class="space-y-8" data-aos="fade-left">
                    <section
                        class="relative overflow-hidden rounded-3xl p-8 bg-linear-to-br from-emerald-600 to-green-500 text-white shadow-md hover:shadow-xl transition">
                        <h3 class="text-xl font-bold mb-6 text-white">Kenapa Harus Gabung?</h3>
                        <ul class="space-y-4">
                            @foreach($ukm->benefits as $benefit)
                            <li class="flex gap-3 text-sm font-medium">
                                <span class="text-emerald-200">✔</span>
                                {{ $benefit }}
                            </li>
                            @endforeach
                        </ul>
                    </section>

                    <div class="rounded-3xl p-0.5 bg-linear-to-br from-emerald-400 to-green-500">
                        <div class="bg-white rounded-[1.4rem] p-6 text-center">
                            <h4 class="font-bold text-lg mb-2">Tertarik Bergabung?</h4>
                            <p class="text-sm text-muted-foreground mb-4">
                                Kembangkan potensi dan relasi kamu bersama kami.
                            </p>
                            <a href="https://instagram.com/{{ ltrim($ukm->instagram, '@') }}" target="_blank"
                                class="block w-full py-3 rounded-xl bg-linear-to-r from-emerald-600 to-green-500 text-white font-bold hover:scale-[1.02] hover:shadow-lg transition">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
@endsection