<?php

namespace App\Livewire\User;

use App\Enums\country;
use App\Http\Middleware\User;
use App\Models\UserClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Ramsey\Uuid\Type\Integer;

class ClientPg extends Component
{

    /** Public Counter */
    public $count;

    /** Public Function To Handle Database */
    public $client;

    /** Public Function To Handle Database */
    public $clint;

    /** Start Wire Form Data Collector */
    #[Validate('required')]
    public $county = '';

    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:10|max:10')]
    public int $phone;

    #[Validate('required')]
    public $address = '';

    #[Validate('required')]
    public $city = '';

    #[Validate('required|min:6|max:6')]
    public $pincode = '';

    #[Validate('required')]
    public $state = '';
    /** End Wire Form Data Collector */


    #[Title('Client')]
    public function render()
    {   
        //returning client list to view with pagination
        return view('livewire.user.client-pg', [
            'clinli' => UserClient::where('user_id', auth()->user()->id)->paginate(9),
        ]);
    }

    public function saveclnt()
    {

        // to run the validation
        $this->validate();

        //contion for save and edit
        if ($this->count == 2) {

            //this is for save
            $data = json_encode([
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'pincode' => $this->pincode,
                'country' => $this->county,
            ]);
    
            $ud = UserClient::create([
                'user_id' => auth()->user()->id,
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'add_data' => $data,
            ]);
    
            $this->reset();

            $this->dispatch('success', title: 'Client Added Successfull');
    
            $this->count = 1;

        } else {

            //this is for edit
            $data = json_encode([
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'pincode' => $this->pincode,
                'country' => $this->county,
            ]);

            $this->client->update([
                'user_id' => auth()->user()->id,
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'add_data' => $data,
            ]);

            $this->reset();
    
            $this->count = 1;
        }
    }

    public function mount()
    {
        //mountion default count to 1
        $this->count = 1;

        //getting the clien id and find the db
        $this->client = UserClient::Where('id', $this->clint)->latest()->first();

        //if the db table is not null
        if ($this->client != null) {

            //assign the db values to wire public value
            $this->name = $this->client->name;
            $this->phone = $this->client->phone;
            $this->email = $this->client->email;

            $option = json_decode($this->client->add_data);

            $this->address = $option->address;
            $this->city = $option->city;
            $this->state = $option->state;
            $this->pincode = $option->pincode;
            $this->county = $option->country;
        }
    }

    //for add client button
    public function addclnt()
    {
        $this->count = 2;
    }

    //for back button
    public function back()
    {
        $this->count = 1;
    }

    //for the active button
    public function clntact($id)
    {
        //getting id of the client and db
        $cid = UserClient::where('id', $id)->latest()->first();

        //checking the client admin is current user
        if ($cid->user_id == auth()->user()->id) {

            //if client status is inactive this will activate
            if ($cid->active == false) {

                $cid->update([
                    'active' => true,
                ]);

                $this->dispatch('success', title: 'Updated Client Info!');
            
            //if client status is active this will deactivate
            } else {

                $cid->update([
                    'active' => false,
                ]);

                $this->dispatch('success', title: 'Updated Client Info!');
            }
        
        //if the client not found
        } else {
            $this->dispatch('error', title: 'Client Not Found!');
        }
    }

    //for the edit button
    public function edit($id)
    {
        //getting the cliend id and mount it
        $this->clint = $id;
        
        $this->mount();

        //changing the count to edit tab
        $this->count = 3;
    }

    //custom livewire pagination
    public function paginationView()
    {
        return 'livewire.user.comp.pagination-user';
    }
}
