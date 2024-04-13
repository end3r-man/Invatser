<?php

namespace App\Livewire;

use App\Http\Middleware\User;
use App\Models\User as ModelsUser;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Test extends Component
{

    public $data = [];

    public function submit()
    {
        $this->sendDataToExpress();
    }

    private function sendDataToExpress()
    {
        // Use GuzzleHttp to send a POST request to your Express server
       
        $client = new Client();
        $response = $client->request('POST', 'http://localhost:3000/publish', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'clientId' => '123123',
                'command' => ['cmd' => 'start'],
            ],
        ]);

        dd($response);

    }

    public function render()
    {
        return view('livewire.test');
    }

}
