<?php
    namespace App\View\Composers;

    use Illuminate\View\View;
    // use App\Category;
    use App\Models\Post;

    class RecentPostsComposer
    {
        public function compose(View $view)
        {
            $this->composeRecentPosts($view);
        }

        //? Recent Posts Composer
        public function composeRecentPosts (View $view)
        {
            $recentPosts = Post::published()->latestFirst()->take(4)->get();
            $view->with('recentPosts', $recentPosts);
        }
    }