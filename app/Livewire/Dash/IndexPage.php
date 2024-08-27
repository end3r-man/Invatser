<?php

namespace App\Livewire\Dash;

use Livewire\Attributes\Title;
use Livewire\Component;

class IndexPage extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.dash.index-page');
    }
}
