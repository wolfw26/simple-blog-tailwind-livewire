<?php

namespace App\Livewire;

use Livewire\Component;

class PostController extends Component
{
    public function render()
    {
        return view('livewire.post-controller')
            ->extends('layout')
            ->section('konten');
    }
}
