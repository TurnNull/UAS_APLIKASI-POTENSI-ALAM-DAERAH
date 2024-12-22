@extends('layouts.profil.app')

@section('nameNav')
    Potensi Alam Daerah
@endsection

@section('content')
<section id="gallery" class="bg-dark text-white my-36">
    <div class="container">
        @if ($profils->count() >= 2)
            <div class="w-full">
                <h2 class="text-2xl font-extrabold text-center hover:underline decoration-2 pt-16 mb-3">
                    <span class="text-white hover:bg-[url('/dist/img/gallery-title.png')] cursor-pointer hover:text-transparent bg-clip-text bg-[center_top_-76px] bg-cover transition-all duration-500 md:text-4xl lg:text-6xl">
                        Tim Kami
                    </span>
                </h2>
                <p class="max-w-xl mx-auto font-medium text-base text-center lg:text-lg">Pengerjaan web laravel filament sederhana ini dibuat oleh dua orang dibawah berikut.</p>
            </div>
            <div class="w-full py-12 grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4">
                <a href="{{ route('profil.show', $profils[0]->nim) }}" class="h-15 hover:border-l-8 border-double border-white aspect-[4/3] rounded-lg overflow-hidden aspect-[3/4] md:col-start-1 lg:col-start-1 group relative hover:scale-95 hover:rounded-[1rem] hover:drop-shadow-[5px_-4px_8px_rgba(147,51,234,0.75)] transition-all duration-700">
                    <div class="w-full h-full bg-[url('/public/assets/images/C050423030.JPG')] bg-cover bg-no-repeat bg-center absolute group-hover:scale-125 group-hover:rotate-6 transition-all duration-700"></div>
                    <div class="w-0 h-full overflow-hidden flex items-end opacity-[.78] group-hover:w-full transition-all duration-500">
                        <h4 class="p-2 font-extrabold text-3xl underline uppercase text-white">{{ $profils[0]->nama }}</h4>
                    </div>
                </a>
                <a href="{{ route('profil.show', $profils[1]->nim) }}" class="h-15 hover:border-l-8 border-double aspect-[4/3] rounded-lg overflow-hidden aspect-[3/4] md:col-start-3 lg:col-start-4 group relative hover:scale-95 hover:rounded-[1rem] hover:drop-shadow-[5px_-4px_8px_rgba(255,255,255,0.75)] transition-all duration-700">
                    <div class="w-full h-full bg-[url('/public/assets/images/C050423025.JPG')] bg-cover absolute group-hover:scale-125 group-hover:-rotate-3 transition-all duration-700 bg-no-repeat bg-center"></div>
                    <div class="w-0 h-full overflow-hidden flex items-end opacity-[.78] group-hover:w-full transition-all duration-500">
                        <h4 class="p-2 font-extrabold text-3xl underline uppercase text-white">{{ $profils[1]->nama }}</h4>
                    </div>
                </a>
            </div>
        @else
            <div class="w-full py-24">
                <p class="max-w-xl mx-auto font-medium text-base text-center lg:text-lg">Tim saat ini tidak tersedia</p>
            </div>
        @endif
    </div>
</section>
@endsection