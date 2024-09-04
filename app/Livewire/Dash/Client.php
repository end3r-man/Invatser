<?php

namespace App\Livewire\Dash;

use Livewire\Attributes\Title;
use Livewire\Component;

class Client extends Component
{

    public int $filter_id = 1;

    #[Title('Client')]
    public function render()
    {
        return view('livewire.dash.client');
    }
}
