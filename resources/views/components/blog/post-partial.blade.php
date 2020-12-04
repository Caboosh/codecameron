<div class="rounded-md overflow-hidden p-4 mb-4 bg-gray-800 shadow-lg">
    <img class="w-full rounded-lg" src="{{ $post->image }}" alt="{{ $post->title }}">
    <div class="px-6 py-4">
      <div class="font-bold text-xl text-gray-300 mb-2">{{ $post->title }}</div>
      <p class="text-gray-400 text-base">
        {{ $post->excerpt }}
      </p>
    </div>
        <div class="post-meta">
            <div class="float-left">
                <ul class="post-meta-group">
                    <li><i class="fas fa-user text-gray-300"></i><span class="post-author"><a class="text-gray-400" href="">{{ $post->user->name }}</a></span></li>
                    <li><i class="text-gray-300 far fa-clock"></i><span class="post-date"><time class="text-gray-400">{{ $post->date }}</time></span></li>
                    <li>
                      <i class="text-gray-300 fas fa-tags"></i>
                      {{-- @foreach ($post->tags as $tag)
                            <span class="post-tag"><a href="{{ route('tag', $tag->slug) }}">{!! $tag->title !!}</a></span>
                        @endforeach --}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="float-right ml-auto w-60 px-6 pt-4 pb-4">
          <a class="bg-gray-500 hover:bg-gray-600 text-gray-300 font-bold py-2 px-4 rounded" href="{{ route('posts.show', $post->id) }}">Continue Reading <i class="fas fa-long-arrow-alt-right fill-current h-4"></i></a>
        </div>
  </div>