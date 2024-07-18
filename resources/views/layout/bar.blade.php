@php
    $navitem = [
            ['name' => 'Dashboard',
            'url' => '/guru'],

            ['name' => 'Tujuan Kompetensi',
            'url' => '/guru/tkompetensi'],

            ['name' => 'Nilai Akademik',
            'url' => '/guru/nakademik'],

            ['name' => 'Raport Siswa',
            'url' => '/guru/raport'],
        ];
@endphp
<div class="relative">
    <div class="">
        <nav class="flex items-center justify-between bg-white py-3 px-4 text-blue drop-shadow-md">
            <div class=""></div>
            <div class="flex items-center -space-y-1 grid text-right">
                <span class="text-xl font-bold">Nama Siswa</span>
                <span class="text-sm font-light">Kelas</span>
            </div>
        </nav>
    </div>
    <div class="w-64 bg-blue-700 text-white min-h-screen fixed left-0 top-0 z-50">
        <div class="p-5 text-center">
            <h1 class="text-xl font-bold">E<span class="font-normal">-Raportku.</span></h1>
        </div>
        <hr class="w-4/5 mx-auto border-gray-300">
        <nav class="mt-6 pr-10 space-y-2 grid">
            @foreach ($navitem as $item)
                <a @class(['font-semibold', 'rounded-r-full', 'text-sm', 'py-2.5', 'px-6 transition', 'duration-300', 'ease-in-out', 'hover:bg-slate-50', 'hover:text-blue-700', 'bg-slate-50 text-blue-700' => request()->route()->getName() == Str::lower( $item['name']) ]) href="{{ $item['url'] }}">
                    {{ $item['name'] }}  
                </a>
            @endforeach
        </nav>
        <hr class="mt-6 w-4/5 mx-auto border-gray-300">
        <div class="mt-6 text-center">
            <a href="/logout" class="text-sm border font-semibold rounded-full py-2.5 px-8 transition duration-200 ease-in-out hover:border-0 hover:bg-slate-50 hover:text-blue-700">Logout</a>
        </div>
    </div>
</div>