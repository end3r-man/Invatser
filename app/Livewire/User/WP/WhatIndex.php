<?php

namespace App\Livewire\User\WP;

use chillerlan\QRCode\QRCode;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Symfony\Component\ErrorHandler\ThrowableUtils;

class WhatIndex extends Component
{

    public $qrc;

    public $count = '';

    public $luser;

    public function render()
    {
        return view('livewire.user.w-p.what-index');
    }

    public function mount()
    {

        $this->luser = 2;

        try {
            $client = Http::timeout(10)->get('http://localhost:3000/qr');
            $this->count = 2;
        } catch (\Throwable $th) {
            $this->count = 1;
        }

        if ($this->count != 1) {
            if ($client['status'] == false) {
                if (!is_null($client)) {
                    $this->qrc = (new QRCode())->render($client['qrs']);
                }
                $this->luser = 1;
            } elseif ($client['status'] == true) {
                $this->luser = 2;
                //dd($client);
            }
        }
    }

    public function codeg() 
    {
        // $dm = Http::post('http://localhost:3000/msg/enderman/number/9363551476');
        $this->mount();
    }

    public function waout()
    {
        $lg = Http::get('http://localhost:3000/logout');
        
        if ($lg->status() == 200) {
            $this->dispatch('success', title: 'Account Logout Successfully!');
        } else {
            $this->dispatch('warning', title: 'Account Not Found!');
        }
    }
}
