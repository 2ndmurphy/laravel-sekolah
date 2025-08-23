<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="post max-w-3xl mx-auto px-4 py-8">
        <!-- Post Header -->
        <div class="mb-8">
            <div class="mb-6">
                <a href="{{ url()->previous() }}" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back
                </a>
            </div>
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

            <!-- Author info -->
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 rounded-full bg-gray-300 overflow-hidden mr-3">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Author avatar" class="w-full h-full object-cover">
                </div>
                <div>
                    <div class="font-medium">{{ $post->author }}</div>
                    <div class="text-gray-500 text-sm flex items-center">
                        <p class="text-xs text-gray-500">Mar 15, 2023 · 5 min read</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Content -->
        <div class="prose prose-lg max-w-none text-justify">
            <p class="leading-[1.5]">{{ $post->body }}</p>

        </div>

        <!-- Tags -->
        <div class="mt-8 flex flex-wrap">
            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm mr-2 mb-2">Technology</span>
            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm mr-2 mb-2">Programming</span>
            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm mr-2 mb-2">Web Development</span>
        </div>

        <!-- Interactions -->
        <div class="mt-10 pt-6 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button class="flex items-center text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        42
                    </button>
                    <button class="flex items-center text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        18
                    </button>
                </div>
                <button class="flex items-center text-gray-500 hover:text-gray-900">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                        </path>
                    </svg>
                    Share
                </button>
            </div>
        </div>
    </div>
</x-layout>
