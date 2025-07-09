<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{ $posts->links() }}
    {{-- <section class="bg-white dark:bg-gray-900"> --}}
    <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-9">
<x-search-bar> </x-search-bar>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                {{-- <article class="py-8 max-w-screen-md border-b border-grey-200">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl font-bold tracking-tight">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base">
            by <a class="hover:underline text-base text-gray-500" href="/author/{{ $post->author->username}}">{{ $post->author->name}}</a> in 
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
            | {{ $post ->created_at->format('j F Y') }}
        </div>
        <p class="my-4 text-light">{{ Str::limit($post['body'],190)}}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Baca Selengkapnya &raquo;</a>
    </article> --}}
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a>
                        </span>
                        <span class="text-sm">{{ $post->created_at->format('j F Y') }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 190) }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <span class="font-medium dark:text-white">
                                <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                            </span>
                        </div>
                        <a href="/posts/{{ $post['slug'] }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                @empty
                <div>
                <p class="font-semibold text-xl my-4">Article not found</p>
                <a href="/posts" class="block text-blue-600 hover:underline">&laquo; Back to all posts</a>    
            </div>
            @endforelse
        </div>
    </div>
        {{ $posts->links() }}
    {{-- </section> --}}
</x-layout>
