<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public function render(): View
    {
        return view('livewire.create-post');
    }
}
