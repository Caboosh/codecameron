@extends('blog.layouts.main')

@section('hero')
<div class="bg-hero-image hero-parallax hero-medium">
  <x-navigation />
    <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-300 sm:text-5xl sm:leading-none md:text-6xl">
            The Blog Part
          </h2>
          <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            I Chat Shit about coding and tech here or something
          </p>
          {{-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
          </div> --}}
        </div>
      </main>
</div>
@endsection


@section('content')
<div class="news">
  <div class="container leftside">
      @if (! $posts->count())
          <div class="alert info-alert">
              <p>No Posts Found..</p>
          </div>
      @else
      {{-- @if (isset($categoryName))
          <div class="alert info-alert">
              <p>Category: <strong>{{ $categoryName }}</strong><p>
          </div>
      @endif
      @if (isset($authorName))
          <div class="alert info-alert">
              <p>Author: <strong>{{ $authorName }}</strong><p>
          </div>
      @endif
      @if (isset($tagName))
      <div class="alert info-alert">
          <p>Tag: <strong>{{ $tagName }}</strong><p>
      </div>
      @endif
      @if (isset($searchText))
      <div class="alert info-alert">
          <p>Search Query: <strong>{{ $searchText }}</strong><p>
      </div>
      @endif --}}
      <div class="w-full mx-auto px-8 mb-8">
        <h2 class=" text-4xl font-bold text-gray-300">Recent Blog Posts</h2>
    </div>
      @foreach ($posts as $post)
          @include('components.blog.post-partial')
      @endforeach
      {{ $posts->links() }}
      @endif
  </div>
  <aside class="rightside">
      @include('blog.layouts.partials.sidebar')
  </aside>
</div>
 {{-- @if ($postCount > 0)
 <div class="w-full mx-auto px-8 mb-8">
    <h2 class=" text-4xl font-bold text-gray-300">Recent Blog Posts</h2>
</div>
 <div class="px-8 mb-4">
    @foreach ($posts as $post)
        <div class="w-1/2 h-full">
            @include('components.blog.post-partial')
        </div>
    @endforeach
    
 </div>
 <div class="w-full py-4 px-8 mx-auto">
  {{ $posts->links() }}
</div> --}}
 {{-- @else
 <h2 class="text-gray-500">No Posts Found...</h2>
@endif --}}
@endsection