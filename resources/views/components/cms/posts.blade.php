@if ($postCount > 0)
<table class="table table-bordered table-condesed">
  <thead>
      <tr>
        <th>Action</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Date</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
        <td width="135" height="35">
            <a title="Edit Post" class="button-default" href="{{-- route('posts.edit', $post->slug) --}}">
                <i class="fa fa-edit"></i> 
            </a>
            <p style="display: inline;padding: 0;margin: 5px;">|</p>
            <form action="{{-- route('posts.destroy', $post->slug) --}}" method="POST" style="display: inline;position: relative;right: 3px;">
                @csrf
                @method('DELETE')
                <button type="submit" title="Trash Post" class="button-danger">
                    <i class="fa fa-times"></i>
                </button>
            </form>
        </td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->user->name }}</td>
        <td>{{-- $post->category->title --}}</td>
        <td>
            @if ($post->tags)
            {{-- @foreach ($post->tags as $tag)
                <span class="tag-badge">{{ $tag->title }}</span>
            @endforeach --}}
            @else
                None
            @endif

        </td>
        <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> | {!! $post->publicationlabel() !!}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="card-footer clearfix">
    <div class="pull-left">
        {{ $posts->links() }}
    </div>
    <div class="pull-right">
        <small>{{ $postCount }} {{ Str::plural('Item', $postCount) }} </small>
    </div>
</div>
@else
    <h3 style="text-align: center; position: relative; top: -45px; right: -660px; height: 70px; width: fit-content;">No Posts Yet</h3>
@endif