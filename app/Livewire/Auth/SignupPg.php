<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.dash')]
class SignupPg extends Component
{
    #[Rule('required')]
    public $name = '';

    #[Rule('email|required')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    #[Rule('required')]
    public $passwordc = '';

    #[Rule('required')]
    public $checkbox;

    public $evcode = '';

    public $counter = 1;

    public array $userdb;

    #[Title('SignUp')]
    public function render()
    {
        return view('livewire.auth.signup-pg');
    }

    public function getValueFromDb($key)
    {
        return $this->userdb[$key];
    }

    public function save()
    {
        // $validate = $this->validate();
        $email = User::where('email', $this->email)->latest()->first();

        if ($email == null) {
            if ($this->password == $this->passwordc && $this->counter == 1) {

                #validate input form
                $this->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|min:7',
                    'passwordc' => 'required|min:7',
                    'checkbox' => 'required',
                ]);

                $emailstr = random_int(100000, 999999);
                $timeuc = Carbon::now()->subMinutes();

                #creating user in db
                $this->userdb = ([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'email_vcode' => $emailstr,
                    'time' => $timeuc,
                ]);

                Mail::send('emails.welcome', ['name' => $this->name, 'email' => $this->email, 'welcomecode' => $emailstr], function ($message) {
                    $message->to($this->email)->subject('Welcome To Invatser');
                });

                $this->dispatch('success', title: 'Verification code sended!');

                $this->counter++;

                #return the user to login view
            } elseif ($this->counter == 2) {

                $this->validate([
                    'evcode' => 'required|min:6|max:6'
                ]);

                if ($this->evcode == $this->getValueFromDb('email_vcode')) {

                    $time = $this->getValueFromDb('time');

                    $time2 = Carbon::now();

                    $difftm = $time2->diffInMinutes($time);

                    if ($difftm <= 10) {

                        User::create([
                            'email' => $this->userdb['email'],
                            'name' => $this->userdb['name'],
                            'password' => $this->userdb['password'],
                            'email_verified' => true,
                        ]);
                    } else {

                        $this->dispatch('error', title: 'Verification code expired!');
                        return;
                    }
                } else {

                    $this->dispatch('error', title: 'Verification not match!');
                    return;
                }

                $this->dispatch('success', title: 'Account created success!');

                return redirect(route('login'));
            } else {

                $this->dispatch('error', title: 'Unexpeted error!');
            }
        } else {
            $this->dispatch('warning', title: 'Email already registered!');
        }
    }

    public function resendotp()
    {
        $time = $this->getValueFromDb('time');

        $time2 = Carbon::now();

        $difftm = $time2->diffInMinutes($time);

        if ($difftm >= 10) {

            $emailstr = random_int(100000, 999999);

            Mail::send('emails.welcome', ['name' => $this->name, 'email' => $this->email, 'welcomecode' => $emailstr], function ($message) {
                $message->to($this->email)->subject('Welcome To Invatser');
            });

            $timeuc = Carbon::now()->subMinutes();

            $this->userdb = ([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'email_vcode' => $emailstr,
                'time' => $timeuc,
            ]);
        } else {

            $this->dispatch('warning', title: 'Try 10mins Later!');
        }
    }

    public function mount()
    {
        $this->counter;
    }
}
