<section class="py-12 bg-gray-50">
    <h2 class="text-3xl font-bold text-center mb-10">Catégories populaires</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
        @foreach ($categories as $category)
            <div class="category-card bg-white p-6 rounded-xl shadow-md text-center cursor-pointer hover:shadow-xl transition">
                <i class="{{ $category->icon }} text-3xl text-orange-500 mb-3"></i>
                <h3 class="font-semibold">{{ $category->name }}</h3>
            </div>
        @endforeach
    </div>
</section>
