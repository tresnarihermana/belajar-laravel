
<x-layout>


    <x-slot:title>{{$title}}</x-slot:title>
        <article class="py-8 max-w-screen-l">
        {{-- <div class="text-xl font-bold">{{ $post['title'] }}</div>
        <div class="text-base text-gray-500 mb-4">
             by <a class="hover:underline text-base text-gray-500" href="/author/{{ $post->author->username}}">{{ $post->author->name}}</a> in 
            <a href="/categories/{{ $post->category->slug}}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
            | {{ $post -> created_at->format('j F Y') }}
        </div>
        <p class="my-4 text-light">{{$post['body']}}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts &raquo;</a>
    </div> --}}
    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline">&laquo; Back to All Posts</a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                      <div>
                          <a href="/posts?author={{ $post->author->username}}" rel="author" class="text-xl font-bold text-gray-900">{{ $post->author->name }}</a>
                          <p class="text-base text-gray-500">{{ $post->created_at->format('j F Y') }}</p>
                          <a href="/posts?category={{ $post->category->slug }}"><p class="bg-{{ $post->category->color }}-100 text-base text-primary-80 px-2.5 py-0.5 rounded inline-c text-medium dark:bg-primary-200 dark:text-primary-800 items-center inline-flex">{{ $post->category->name }}</p></a>
                        </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $post['title'] }}</h1>
          </header>
         <p>{{ $post['body'] }}</p>
         
    </article>

</x-layout>
<x-footbar></x-footbar>