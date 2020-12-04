<script src="/js/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
      selector: '#postBody'
    });
    </script>
<div>
 <x-form method="POST" action="{{ route('admin.posts.store') }}">

    <label>Post Title</label>
    <input type="text" name="postTitle" id="postTitle">

    <label >Post Body</label>
    <textarea name="postBody" id="postBody"></textarea>

    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Create Post
    </button>
 </x-form>
</div>
