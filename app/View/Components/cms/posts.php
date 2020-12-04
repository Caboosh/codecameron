<?php

namespace App\View\Components\cms;

use Illuminate\View\Component;

class posts extends Component
{
    /**
     * Represents a set of Posts
     */
    public $posts;

    /**
     * Represents a Count of the Current Posts
     */
    public $postCount;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postCount, $posts)
    {
        $this->posts = $posts;
        $this->postCount = $postCount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cms.posts');
    }
}
