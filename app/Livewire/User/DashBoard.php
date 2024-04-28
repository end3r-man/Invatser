<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserClient;
use App\Models\UserInvoice;
use Carbon\Carbon;
use Livewire\Component;

class DashBoard extends Component
{

    public $sales = [];

    public $tsales;
    
    public $msales;

    public $code;

    public $mtotal = 0;

    public $buyer = 0;

    public $percen;

    public $mlsale;

    public function render()
    {
        return view('livewire.user.dash-board');
    }

    public function  mount()
    {

        $ucom = User::where('id', auth()->user()->id)->first();

        $this->buyer = UserClient::where('active', true)->get();

        $today = Carbon::now()->startOfMonth();

        $pmonth = Carbon::now()->subMonth()->month;

        $bcont = 0;

        $ocont = 0;

        foreach ($this->buyer as $value) {
            if ($value->created_at->between($today, Carbon::now())) {
                $bcont++;
            } else {
                $ocont++;
            }
        }

        $this->percen['cont'] = $bcont;
        
        if ($ocont == 0 && $bcont != 0) {
            $this->percen['per'] = 100;
        } elseif ($bcont == 0) {
            $this->percen['per'] = 0;
        } else {
            $this->percen['per'] = round(($bcont / $ocont) * 100, 2);
        }

        $this->code = $ucom->currency;

        $invo = UserInvoice::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->where('user_id', auth()->user()->id)
            ->get();

        $productData = []; // Initialize an array to store aggregated data for each product

        foreach ($invo as $key => $value) {
            $js = json_decode($value->product);

            foreach ($js as $item) {
                $this->mtotal += $item->total;
                // Check if the product already exists in the aggregated data
                if (!isset($productData[$item->product])) {
                    // If not, add it with initial quantities and totals
                    $productData[$item->product] = [
                        'qty' => $item->quantity,
                        'total' => $item->total,
                    ];
                } else {
                    // If it exists, update its quantities and totals
                    $productData[$item->product]['qty'] += $item->quantity;
                    $productData[$item->product]['total'] += $item->total;
                }
            }
        }

        $this->msales = $productData;

        $this->tsales = $this->mtotal;

        $inv2 = UserInvoice::whereMonth('created_at', $today)
        ->where('user_id', auth()->user()->id)
        ->get();

        $inv3 = UserInvoice::whereMonth('created_at', $pmonth)
        ->where('user_id', auth()->user()->id)
        ->get();

        $pldata = 0;
        $mltsotal = 0;

        foreach ($inv2 as $key => $value) {
            $js = json_decode($value->product);

            foreach ($js as $item) {
                $mltsotal += $item->total;
            }
        }

        foreach ($inv3 as $key => $value) {
            $js = json_decode($value->product);

            foreach ($js as $item) {
                $pldata += $item->total;
            }
        }

        $this->mlsale['cont'] = $mltsotal;
        
        if ($pldata == 0 && $mltsotal != 0) {
            $this->mlsale['per'] = 100;
        } elseif ($mltsotal == 0) {
            $this->mlsale['per'] = 0;
        } else {
            $this->mlsale['per'] = round(($mltsotal / $pldata) * 100, 2);
        }
    }
}
