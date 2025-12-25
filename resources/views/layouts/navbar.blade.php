<nav class="fixed top-0 left-0 right-0 z-50 glass-nav shadow-sm shadow-primary/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group cursor-pointer">
                <!-- Mobile Logo -->
                <img src="https://i.postimg.cc/sfMw57Lt/logo_biu.png" alt="Logo Bina Insani"
                    class="w-10 h-10 object-contain md:hidden" />

                <!-- Desktop Logo -->
                <img src="https://i.postimg.cc/y6Dv0c5H/logo_text_biu.png" alt="Bina Insani University"
                    class="hidden md:block h-10 object-contain" />
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="relative text-sm font-semibold transition-colors duration-300
                          {{ request()->routeIs('home')
                                ? 'text-primary'
                                : 'text-muted-foreground hover:text-primary' }}
                          after:content-[''] after:absolute after:left-0 after:-bottom-1
                          after:h-0.5 after:w-full after:bg-accent after:rounded-full
                          after:scale-x-0 after:origin-center
                          after:transition-transform after:duration-300
                          hover:after:scale-x-100
                          {{ request()->routeIs('home') ? 'after:scale-x-100' : '' }}">
                    Beranda
                </a>

                <a href="{{ route('ukm.index') }}" class="relative text-sm font-semibold transition-colors duration-300
                          {{ request()->routeIs('ukm.*')
                                ? 'text-primary'
                                : 'text-muted-foreground hover:text-primary' }}
                          after:content-[''] after:absolute after:left-0 after:-bottom-1
                          after:h-0.5 after:w-full after:bg-accent after:rounded-full
                          after:scale-x-0 after:origin-center
                          after:transition-transform after:duration-300
                          hover:after:scale-x-100
                          {{ request()->routeIs('ukm.*') ? 'after:scale-x-100' : '' }}">
                    Daftar UKM
                </a>

                <a href="{{ route('about') }}" class="relative text-sm font-semibold transition-colors duration-300
                          {{ request()->routeIs('about')
                                ? 'text-primary'
                                : 'text-muted-foreground hover:text-primary' }}
                          after:content-[''] after:absolute after:left-0 after:-bottom-1
                          after:h-0.5 after:w-full after:bg-accent after:rounded-full
                          after:scale-x-0 after:origin-center
                          after:transition-transform after:duration-300
                          hover:after:scale-x-100
                          {{ request()->routeIs('about') ? 'after:scale-x-100' : '' }}">
                    Tentang
                </a>

                <a href="https://binainsani.ac.id" target="_blank" rel="noreferrer" class="px-5 py-2.5 rounded-full text-sm font-semibold
                        bg-primary text-primary-foreground
                        hover:bg-primary/90 hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5
                        transition-all duration-200">
                    Kampus Utama
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-gray-700 hover:text-primary">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block text-sm font-semibold py-2 transition-colors
                    {{ request()->routeIs('home') ? 'text-primary' : 'text-muted-foreground hover:text-primary' }}">
                Beranda
            </a>
            <a href="{{ route('ukm.index') }}" class="block text-sm font-semibold py-2 transition-colors
                    {{ request()->routeIs('ukm.*') ? 'text-primary' : 'text-muted-foreground hover:text-primary' }}">
                Daftar UKM
            </a>
            <a href="{{ route('about') }}" class="block text-sm font-semibold py-2 transition-colors
                    {{ request()->routeIs('about') ? 'text-primary' : 'text-muted-foreground hover:text-primary' }}">
                Tentang
            </a>
        </div>
    </div>
</nav>