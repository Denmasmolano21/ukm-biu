<div class="group h-full bg-white rounded-3xl border border-border/50 p-6 
            shadow-sm hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 
            transition-all duration-300 cursor-pointer flex flex-col relative overflow-hidden" data-aos="fade-up"
    data-aos-duration="900">

    <!-- Decorative background shape - Enhanced -->
    <div class="absolute -top-10 -right-10 w-32 h-32 bg-accent/5 rounded-full blur-3xl 
                group-hover:bg-accent/15 group-hover:scale-150 transition-all duration-500"></div>

    <a href="{{ route('ukm.show', $ukm->slug) }}" class="grow flex flex-col">
        <div class="flex items-start justify-between mb-6">
            <div class="relative w-16 h-16 rounded-2xl bg-linear-to-br from-accent/10 to-primary/10 
                        flex items-center justify-center overflow-hidden 
                        border border-border/30 
                        group-hover:border-accent/50 group-hover:scale-110 group-hover:rotate-3
                        transition-all duration-300 shadow-sm">
                @if ($ukm->logo_url)
                <img src="{{ $ukm->logo_url }}" alt="{{ $ukm->name }}" class="w-full h-full object-cover">
                @else
                <svg class="text-muted-foreground w-8 h-8 group-hover:text-accent transition-colors" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                @endif
            </div>

            <span class="px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider
                         bg-emerald-50 text-emerald-700 border border-emerald-200/70 
                         backdrop-blur-sm group-hover:bg-emerald-100 transition-colors">
                {{ $ukm->category }}
            </span>
        </div>

        <h3 class="text-lg font-bold text-foreground mb-2 
                   group-hover:text-accent transition-colors duration-300 
                   line-clamp-2 leading-tight">
            {{ $ukm->name }}
        </h3>

        <p class="text-muted-foreground text-sm line-clamp-3 mb-6 grow leading-relaxed">
            {{ $ukm->short_description }}
        </p>

        <div class="mt-auto pt-4 border-t border-border/30 flex items-center justify-between text-sm font-medium">
            <span class="text-primary group-hover:text-accent transition-colors duration-300 
                         flex items-center gap-2">
                Detail UKM
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </span>

            @if($ukm->is_open_recruitment)
            <span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Open Recruitment
            </span>
            @endif
        </div>
    </a>
</div>