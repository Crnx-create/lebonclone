@extends('layouts.app')

@section('content')
    <section class="py-12 px-6 md:px-20">
        <h1 class="text-3xl font-bold mb-8">Toutes les annonces</h1>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($ads as $ad)
                <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition">
                    <img src="{{ $ad->image }}" class="rounded-lg mb-4" alt="{{ $ad->title }}">
                    <h3 class="text-lg font-bold">{{ $ad->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($ad->description, 100) }}</p>
                    <a href="#" class="btn-glow mt-3 inline-block px-4 py-2">Voir +</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
