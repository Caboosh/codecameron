<div class="search-widget">
    <form class="search-form" action="/blog/search" method="get">
        <input type="text" name="query" class="form-text" id="form-search-box" placeholder="Search for...">
            <button class="form-search-btn" type="submit">
                <i class="text-white fa fa-search"></i>
            </button>
    </form>
</div>

<div class="widget">
    <div class="widget-heading">
        <h4>Categories</h4>
    </div>
    <div class="widget-body">
        <ul class="categories">
            {{-- @foreach ($categories as $category)
                <a href="{{ route('category', $category->slug) }}">
                    <li class="category">
                        <i class="fa fa-angle-right"></i> {{ $category->title }}
                        <span class="badge" style="float: right; position: relative; bottom:3px;">{{ $category->posts->count() }}</span>
                    </li>
                </a>
            @endforeach --}}
        </ul>
    </div>
</div>

<div class="widget">
    <div class="widget-heading">
        <h4>Tags</h4>
    </div>
    <div class="widget-body">
        <ul class="categories">
            {{-- @foreach ($tags as $tag)
               <a href="/tags/{{ $tag }}">
                    <li class="category">
                        <i class="fa fa-angle-right"></i> {{ $tag }}
                    </li>
                </a>
            @endforeach --}}
        </ul>
    </div>
</div>

{{-- <div class="widget">
    <div class="widget-heading">
        <h4>Popular Posts</h4>
    </div>
    <div class="widget-body">
        <ul class="popular-posts">
           @foreach ($popularPosts as $post)
            <li>
                <div class="post-body">
                    <h4><a href="{{ route('news-post', $post->slug) }}">{{ $post->title }}</a></h4>
                    <div class="post-meta">
                        <span> {{ $post->date }} </span>
                    </div>
                </div>
            </li>
           @endforeach
        </ul>
    </div>
</div> --}}
