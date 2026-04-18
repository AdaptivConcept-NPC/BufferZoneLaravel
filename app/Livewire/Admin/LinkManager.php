<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class LinkManager extends Component
{
    public function render()
    {
        return view('livewire.admin.link-manager')
            ->layout('layouts.admin');
    }
}
