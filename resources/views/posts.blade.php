<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto px-4 py-12">
        <div class="mb-8 md:flex md:justify-end">
            <form class="w-full md:w-auto flex items-center gap-2">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input
                    type="text"
                    name="search"
                    autocomplete="off"
                    placeholder="Search posts..."
                    class="w-full md:w-96 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                />
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 hover:cursor-pointer">
                    Search
                </button>
            </form>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card -->
            @foreach($posts as $post)
                <article class="bg-white border border-gray-200 rounded-2xl p-6 hover:border-blue-600 transition flex flex-col">
                    <div>
                        <div class="flex items-center gap-3 text-sm text-gray-500 mb-4 justify-between">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/40?img=1" alt="Author" class="w-8 h-8 rounded-full">
                                <a href="/author/{{ $post->author->username }}" class="font-medium text-gray-900 hover:text-blue-600">{{ $post->author->name }}</a>
                            </div>
                            <time class="">{{ $post->created_at->diffForHumans() }}</time>
                        </div>

                        <h2 class="text-xl font-semibold mb-3">
                            <a href="/post/{{ $post->slug }}" class="hover:text-blue-600">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-600">
                            {{ Str::words($post->body, 10) }}
                        </p>
                    </div>
                    <div class="mt-auto pt-4 flex flex-wrap gap-2">
                        <a href="/posts?category={{ $post->category->slug }}" class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700 hover:bg-blue-700 hover:text-white">{{ $post->category->name }}</a>
                    </div>
                </article>
            @endforeach

        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center space-x-2">
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">Prev</a>
            <a href="#" class="px-4 py-2 border rounded-lg bg-blue-600 text-white">1</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">2</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">3</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-100">Next</a>
        </div>
    </div>
</x-layout>
