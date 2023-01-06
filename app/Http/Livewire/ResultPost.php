<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ResultPost extends Component
{
    public $amount = 5;

    public function render()
    {
        return view('livewire.result-post', [
            'title' => 'Search',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->take($this->amount)->get(),
            'totalPosts' => Post::latest()->filter(request(['search', 'category', 'author']))->count(),
        ]);
    }

    public function load()
    {
        $this->amount += 2;
    }
}
