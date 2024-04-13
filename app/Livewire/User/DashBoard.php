<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserInvoice;
use Livewire\Component;

class DashBoard extends Component
{

    public $sales = [];

    public $tsales;
    
    public $msales;

    public $code;

    public $mtotal = 0;

    public function render()
    {
        return view('livewire.user.dash-board');
    }

    public function  mount()
    {

        $ucom = User::where('id', auth()->user()->id)->first();

        $this->code = $ucom->currency;

        // $invo = UserInvoice::whereMonth('created_at', date('m'))
        // ->whereYear('created_at', date('Y'))
        // ->where('user_id', auth()->user()->id)
        // ->get();

        // $ytrm = 0;

        // $tmas = 0;

        // foreach ($invo as $key => $value) {
        //     $js = json_decode($value->product);

        //     foreach ($js as $item) {
                
        //         $this->mtotal += $item->total;
        //         $ytrm += $item->quantity;
        //         $tmas += $item->total;
                
        //         $this->tsales = [
        //             'name' => $item->product,
        //             'qty' => $ytrm,
        //             'total' => $tmas,
        //         ];
        //     }
        // }


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

      //  dd($this->msales);

        $this->tsales = $this->mtotal;
    }
}
