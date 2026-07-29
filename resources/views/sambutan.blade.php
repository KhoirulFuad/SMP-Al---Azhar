{{-- resources/views/sambutan.blade.php --}}
@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah - SMP Islam Al-Azhar 17')

@section('content')

<div class="max-w-4xl mx-auto px-4 py-8">

  {{-- Tombol Kembali --}}
  <div class="mb-6">
    <a href="{{ route('beranda') }}"
      class="inline-flex items-center gap-2 border border-green-600 text-green-700 font-semibold px-5 py-2 rounded-lg hover:bg-green-600 hover:text-white transition-colors text-sm">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
      </svg>
      Kembali
    </a>
  </div>

  {{-- Hero + Strip Info Kepsek --}}
  <div class="rounded-xl overflow-hidden shadow-md">

    {{-- Banner foto sekolah --}}
    <img src="{{ asset('storage/beranda/gedungsmp2.png') }}"
      class="w-full h-64 object-cover object-top block"
      alt="SMP Islam Al-Azhar 17 Pontianak">

    {{-- Strip putih: foto kepsek pakai negative margin agar naik ke atas banner --}}
    <div class="bg-white px-6 pt-0 pb-4 flex items-center gap-4 border-b border-gray-100">
      <img
        src="{{ $principal && $principal->image ? asset('storage/' . $principal->image) : asset('storage/kepsek.jpg') }}"
        class="w-40 h-40 rounded-full object-cover border-4 border-white shadow-lg flex-shrink-0"
        style="margin-top: -2.5rem;"
        alt="Foto Kepala Sekolah">
      <div class="mt-1">
        <p class="font-bold text-gray-800 text-base leading-tight">Sambutan Kepala Sekolah</p>
        <p class="text-gray-500 text-sm">{{ optional($principal)->name ?? '-' }}</p>
      </div>
    </div>

  </div>

  {{-- Isi Sambutan --}}
  <div class="bg-white shadow-md rounded-b-xl px-8 pt-4 pb-8 mb-8 -mt-4">

    <div class="w-full h-[2px] bg-gray-300 mb-2"></div>

    @if($principal && $principal->message)
    <div class="text-gray-700 text-[14.5px] leading-relaxed space-y-4">
      {!! $principal->message !!}
    </div>
    @else
    <div class="text-center py-16 text-gray-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto mb-3 opacity-40" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
      </svg>
      <p class="text-sm">Sambutan belum tersedia.</p>
    </div>
    @endif

  </div>

</div>

@endsection