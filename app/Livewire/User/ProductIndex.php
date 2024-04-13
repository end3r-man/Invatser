<?php

namespace App\Livewire\User;

use App\Models\UserCategories;
use App\Models\UserProduct;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $count;
    
    public $prodct;

    public $prodid;

    #[Rule('required')]
    public $pname = '';

    #[Rule('required')]
    public $pcode = '';

    #[Rule('required')]
    public $pdesc = '';

    #[Rule('required')]
    public $pstat;

    #[Rule('required')]
    public $pcate;

    #[Rule('nullable')]
    public $pvend;

    #[Rule('required')]
    public $ppric = '';

    public $pccode = '';

    // public $cateli;

    #[Title('Product')]
    public function render()
    {
        return view('livewire.user.product-index', [
            'prodli' => UserProduct::where('user_id', auth()->user()->id)->paginate(9),
            'cateli' => UserCategories::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function mount()
    {
        $this->count = 1;

        $this->pccode;

        // $this->cateli = UserCategories::where('user_id', $uid)->get();
        $this->prodct = UserProduct::Where('id', $this->prodid)->latest()->first();

        if ($this->prodid != null) {
            $this->pname = $this->prodct->name;
            $this->pcode = $this->prodct->code;

            $this->pccode = $this->prodct->code;
            
            $this->pdesc = $this->prodct->desc;
            $this->ppric = $this->prodct->price;

            $option = json_decode($this->prodct->detail);

            $this->pstat = $option->stat;
            $this->pcate = $option->cate;
            $this->pvend = $option->vend;
        }
    }

    public function addprod()
    {
        $this->count = 2;
    }

    public function back()
    {
        $this->count = 1;
    }

    public function prodsav()
    {
        $this->pcode = $this->pccode;;

        if ($this->count == 2) {
            $this->validate([
                'pname' => 'required',
                'pcode' => 'required|min:6|max:6',
                'pdesc' => 'required',
                'pcate' => 'required',
                'pstat' => 'required',
                'ppric' => 'required',
                'pvend' => 'required',
            ]);

            $dat['stat'] = $this->pstat;
            $dat['vend'] = $this->pvend;
            $dat['cate'] = $this->pcate;

            $det = json_encode($dat);

            UserProduct::create([
                'user_id' => auth()->user()->id,
                'name' => $this->pname,
                'code' => $this->pccode,
                'desc' => $this->pdesc,
                'price' => $this->ppric,
                'detail' => $det,
            ]);

            $this->dispatch('success', title: 'Product Created Successfull');

            $this->reset();

            $this->count = 1;
        } else {
            $this->validate([
                'pname' => 'required',
                'pcode' => 'required|min:6|max:6',
                'pdesc' => 'required',
                'pcate' => 'required',
                'pstat' => 'required',
                'ppric' => 'required',
                'pvend' => 'required',
            ]);

            $dat['stat'] = $this->pstat;
            $dat['vend'] = $this->pvend;
            $dat['cate'] = $this->pcate;

            $det = json_encode($dat);

            $this->prodct->update([
                'user_id' => auth()->user()->id,
                'name' => $this->pname,
                'code' => $this->pccode,
                'desc' => $this->pdesc,
                'price' => $this->ppric,
                'detail' => $det,
            ]);

            $this->dispatch('success', title: 'Product Created Successfull');

            $this->reset();

            $this->count = 1;
        }
    }

    public function pcde()
    {
        $ecode = Str::random(6);

        $this->pccode = $ecode;
    }

    public function delete($id)
    {
        $uid = auth()->user()->id;

        $prod = UserProduct::find($id);

        if ($uid == $prod->user_id) {

            $prod->delete();

            $this->dispatch('success', title: 'Product Deleted Successfull!');
        } else {
            $this->dispatch('warning', title: 'Unauthrized Request Found!');
        }
    }

    public function edit($id)
    {
        //getting the cliend id and mount it
        $this->prodid = $id;
        
        $this->mount();

        //changing the count to edit tab
        $this->count = 3;
    }

    public function paginationView()
    {
        return 'livewire.user.comp.pagination-user';
    }
}
