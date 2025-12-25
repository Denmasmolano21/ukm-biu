<div class="group h-full bg-white rounded-3xl border border-border/50 p-6 shadow-sm hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 cursor-pointer flex flex-col relative overflow-hidden animate-fade-in"
    data-aos="fade-up" data-aos-duration="900">

    <!-- Decorative background shape -->
    <div
        class="absolute -top-10 -right-10 w-32 h-32 bg-accent/8 rounded-full blur-3xl group-hover:bg-accent/15 transition-colors duration-500">
    </div>

    <a href="{{ route('ukm.show', $ukm->slug) }}" class="grow flex flex-col">
        <div class="flex items-start justify-between mb-6">
            <div
                class="w-16 h-16 rounded-2xl bg-linear-to-br from-accent/10 to-primary/10 flex items-center justify-center overflow-hidden border border-border/30 group-hover:border-accent/50 group-hover:scale-110 transition-all duration-300">
                @if ($ukm->logo_url)
                <img src="{{ $ukm->logo_url }}" alt="{{ $ukm->name }}" class="w-full h-full object-cover">
                @else
                <svg class="text-muted-foreground w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m0 0h6">
                    </path>
                </svg>
                @endif
            </div>

            <span
                class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700 border border-emerald-200 backdrop-blur-sm">
                {{ $ukm->category }}
            </span>
        </div>

        <h3
            class="text-lg font-bold text-foreground mb-2 group-hover:text-accent transition-colors duration-300 line-clamp-2">
            {{ $ukm->name }}
        </h3>

        <p class="text-muted-foreground text-sm line-clamp-3 mb-6 grow leading-relaxed">
            {{ $ukm->short_description }}
        </p>

        <div class="mt-auto pt-4 border-t border-border/30 flex items-center justify-between text-sm font-medium">
            <span class="text-primary group-hover:text-accent transition-colors duration-300 flex items-center gap-2">
                Detail UKM
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
            </span>
        </div>
    </a>
</div>