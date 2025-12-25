@extends('layouts.app')

@section('title', 'Daftar Lengkap UKM')
@section('description', 'Lihat daftar lengkap Unit Kegiatan Mahasiswa (UKM) Bina Insani University dengan kategori dan
fitur pencarian lengkap.')

@section('content')
<div class="min-h-screen bg-linear-to-b from-primary/5 via-white to-white">
    <main class="pt-36 pb-24">
        <div class="max-w-7xl mx-auto px-4">

            {{-- Header --}}
            <div class="text-center mb-20" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-extrabold text-primary mb-6 tracking-tight">
                    Daftar Lengkap UKM
                </h1>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Unit Kegiatan Mahasiswa Bina Insani University dengan nuansa hijau yang adem dan modern.
                </p>
            </div>

            {{-- Search --}}
            <div class="mb-14 flex justify-center" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full max-w-md">
                    <input id="searchInput" type="text" placeholder="Cari UKM..." class="w-full px-5 py-3.5 rounded-2xl bg-white border border-primary/20
                               focus:border-primary focus:ring-4 focus:ring-primary/15
                               shadow-sm hover:shadow-md transition">
                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/60" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M21 21l-6-6" />
                    </svg>
                </div>
            </div>

            {{-- Grid --}}
            <div id="ukmContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($data_ukms as $ukm)
                <div data-aos="fade-up">
                    <x-ukm-showcase :ukm="$ukm" />
                </div>
                @empty
                <div class="col-span-full text-center py-24 text-muted-foreground">
                    Data UKM belum tersedia.
                </div>
                @endforelse
            </div>

            {{-- No Result --}}
            <div id="noResults" class="hidden mt-24 text-center text-muted-foreground">
                Tidak ditemukan UKM yang sesuai.
            </div>

        </div>
    </main>
</div>
@endsection

@push('scripts')
<script>
    const cards = document.querySelectorAll('[data-ukm]');
    const input = document.getElementById('searchInput');
    const noResults = document.getElementById('noResults');

    input.addEventListener('input', () => {
        let keyword = input.value.toLowerCase();
        let visible = 0;

        cards.forEach(card => {
            let name = card.dataset.name;
            if (name.includes(keyword)) {
                card.classList.remove('hidden');
                visible++;
            } else {
                card.classList.add('hidden');
            }
        });

        noResults.classList.toggle('hidden', visible !== 0);
    });
</script>
@endpush