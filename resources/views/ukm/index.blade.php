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
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full 
                            bg-accent/10 border border-accent/20 text-accent font-semibold text-sm">
                    Unit Kegiatan Mahasiswa
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-primary mb-6 tracking-tight">
                    Daftar Lengkap UKM
                </h1>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Unit Kegiatan Mahasiswa Bina Insani University dengan nuansa hijau yang adem dan modern 🌿
                </p>
            </div>

            {{-- Search --}}
            <div class="mb-14 flex justify-center" data-aos="fade-up" data-aos-delay="100">
                <div class="relative w-full max-w-md">
                    <input id="searchInput" type="text" placeholder="Cari UKM..." class="w-full px-5 py-4 pl-12 rounded-2xl bg-white border-2 border-primary/20
                                  focus:border-primary focus:ring-4 focus:ring-primary/15
                                  shadow-sm hover:shadow-md transition-all duration-300 outline-none
                                  text-sm font-medium placeholder:text-muted-foreground/60">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/60" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            {{-- Category Filter - New Feature --}}
            <div class="mb-12 flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
                <button class="category-pill active px-5 py-2.5 rounded-full text-sm font-semibold
                               bg-linear-to-r from-accent to-emerald-500 text-white
                               hover:shadow-lg transition-all duration-300" data-category="all">
                    Semua
                </button>
                @foreach($categories as $category)
                <button class="category-pill px-5 py-2.5 rounded-full text-sm font-semibold
                               bg-white border-2 border-primary/20 text-primary
                               hover:bg-accent/10 hover:border-accent transition-all duration-300"
                    data-category="{{ $category }}">
                    {{ $category }}
                </button>
                @endforeach
            </div>

            {{-- Grid --}}
            <div id="ukmContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($data_ukms as $ukm)
                <div class="ukm-item" data-aos="fade-up" data-name="{{ strtolower($ukm->name) }}"
                    data-category="{{ $ukm->category }}">
                    <x-ukm-showcase :ukm="$ukm" />
                </div>
                @empty
                <div class="col-span-full text-center py-24 text-muted-foreground">
                    <div class="text-6xl mb-4">📦</div>
                    Data UKM belum tersedia.
                </div>
                @endforelse
            </div>

            {{-- No Result --}}
            <div id="noResults" class="hidden mt-24 text-center">
                <div class="text-6xl mb-4">🔍</div>
                <h3 class="text-2xl font-bold text-foreground mb-2">
                    Tidak Ditemukan
                </h3>
                <p class="text-muted-foreground text-lg mb-6">
                    Coba kata kunci atau filter yang berbeda
                </p>
                <button onclick="resetFilters()" class="px-6 py-3 rounded-2xl bg-primary text-primary-foreground font-semibold
                               hover:bg-primary/90 transition-all duration-300">
                    Reset Pencarian
                </button>
            </div>

        </div>
    </main>
</div>
@endsection

@push('scripts')
<script>
    const searchInput = document.getElementById('searchInput');
    const categoryPills = document.querySelectorAll('.category-pill');
    const ukmItems = document.querySelectorAll('.ukm-item');
    const noResults = document.getElementById('noResults');
    const ukmContainer = document.getElementById('ukmContainer');
    
    let activeCategory = 'all';
    
    // Search functionality
    searchInput.addEventListener('input', filterUKMs);
    
    // Category filter
    categoryPills.forEach(pill => {
        pill.addEventListener('click', function() {
            // Remove active class from all pills
            categoryPills.forEach(p => {
                p.classList.remove('active', 'bg-linear-to-r', 'from-accent', 'to-emerald-500', 'text-white');
                p.classList.add('bg-white', 'border-2', 'border-primary/20', 'text-primary');
            });
            
            // Add active class to clicked pill
            this.classList.add('active', 'bg-linear-to-r', 'from-accent', 'to-emerald-500', 'text-white');
            this.classList.remove('bg-white', 'border-2', 'border-primary/20', 'text-primary');
            
            activeCategory = this.dataset.category;
            filterUKMs();
        });
    });
    
    function filterUKMs() {
        const keyword = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;
        
        ukmItems.forEach(item => {
            const name = item.dataset.name;
            const category = item.dataset.category;
            
            const matchesSearch = keyword === '' || name.includes(keyword);
            const matchesCategory = activeCategory === 'all' || category === activeCategory;
            
            if (matchesSearch && matchesCategory) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });
        
        // Toggle no results
        if (visibleCount === 0) {
            ukmContainer.classList.add('hidden');
            noResults.classList.remove('hidden');
        } else {
            ukmContainer.classList.remove('hidden');
            noResults.classList.add('hidden');
        }
    }
    
    function resetFilters() {
        searchInput.value = '';
        categoryPills[0].click(); // Click "Semua" button
    }
</script>
@endpush