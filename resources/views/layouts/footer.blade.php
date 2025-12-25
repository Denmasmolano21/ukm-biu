<footer class="bg-primary text-primary-foreground pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center mb-4">
                    <div class="w-44">
                        <img src="https://i.postimg.cc/y6Dv0c5H/logo_text_biu.png" alt="Bina Insani University"
                            class="w-full h-auto object-contain" />
                    </div>
                </div>

                <p class="text-white/60 text-sm leading-relaxed mb-6">
                    Wadah kreativitas dan pengembangan diri mahasiswa melalui Unit
                    Kegiatan Mahasiswa yang beragam dan berprestasi.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-lg">Menu Utama</h4>
                <ul class="space-y-3 text-sm text-white/70">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-accent transition-colors">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('ukm.index') }}" class="hover:text-accent transition-colors">Daftar UKM</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-accent transition-colors">Tentang Kami</a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-lg">Hubungi Kami</h4>
                <ul class="space-y-3 text-sm text-white/70">
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope"></i>
                        <span>kemahasiswaan@binainsani.ac.id</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="opacity-70">
                            Kampus Bekasi: Jl. Siliwangi No. 6, Rawa Panjang, Bekasi Timur
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="text-white font-semibold mb-4 text-lg">Ikuti Kami</h4>
                <div class="flex gap-4">
                    <!-- Instagram -->
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:text-purple-500 hover:bg-white transition-all duration-300">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <!-- Facebook -->
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:text-blue-500 hover:bg-white transition-all duration-300">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:text-blue-300 hover:bg-white transition-all duration-300">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <!-- Youtube -->
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:text-red-500 hover:bg-white transition-all duration-300">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-white/40">
            <p>
                © {{ date('Y') }} Bina Insani University. All rights reserved.
            </p>
            <p class="mt-2 md:mt-0">
                Dibuat oleh Denmasmolano | Sistem Informasi
            </p>
        </div>
    </div>
</footer>