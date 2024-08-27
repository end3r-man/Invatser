<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email|exists:users,email')]
    public $email = '';

    #[Validate('required|max:250')]
    public $pass = '';

    public bool $check = false;

    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    /**
     * 
     * HandleLogin Form
     * 
     * @param email $this->email
     * @param password $this->pass
     * @return Redirect to dashboard
     * @throws Credential mismatch error
     */
    public function HandleLogin()
    {
        $this->validate();

        Auth::attempt(['email' => $this->email, 'password' => $this->pass], $this->check)
            ? $this->redirect(route('auth.dash'))
            : $this->addError('email', 'Password Not Match');
    }

    // public function boot()
    // {
    //     User::create([
    //         'email' => 'enderman@mail.com',
    //         'name' => 'endermabn',
    //         'password' => 'enderman123'
    //     ]);
    // }
}
