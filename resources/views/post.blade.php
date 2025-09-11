<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto px-4 py-12">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ url()->previous() }}"
               class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-blue-600 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>

        <!-- Post Card -->
        <article class="bg-white rounded-2xl shadow-md border border-gray-100 p-8">
            <!-- Title -->
            <h1 class="text-3xl font-bold mb-6 leading-tight text-gray-900">{{ $post->title }}</h1>

            <!-- Author info -->
            <div class="flex items-center mb-8">
                <img class="w-12 h-12 rounded-full object-cover mr-4 border"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="Author avatar">
                <div>
                    <p class="font-medium text-gray-900">{{ $post->author->name }}</p>
                    <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }} · 5 min read</p>
                </div>
            </div>

            <!-- Content -->
            <div class="prose prose-lg max-w-none text-gray-700 mb-10 leading-relaxed">
                {{ $post->body }}
            </div>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-8">
                <a href="#"
                   class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700 hover:bg-blue-600 hover:text-white transition">
                    #Technology</a>
                <a href="#"
                   class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700 hover:bg-green-600 hover:text-white transition">
                    #Programming</a>
                <a href="#"
                   class="px-3 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-700 hover:bg-purple-600 hover:text-white transition">
                    #WebDevelopment</a>
            </div>

            <!-- Interactions -->
            <div class="pt-6 border-t border-gray-200 flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <button class="flex items-center text-gray-500 hover:text-blue-600 transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        42
                    </button>
                    <button class="flex items-center text-gray-500 hover:text-blue-600 transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        18
                    </button>
                </div>
                <button class="flex items-center text-gray-500 hover:text-blue-600 transition">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                        </path>
                    </svg>
                    Share
                </button>
            </div>
        </article>
    </div>

</x-layout>
