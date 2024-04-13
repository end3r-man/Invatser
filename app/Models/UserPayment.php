<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'amount',
        'date',
        'note',
        'invoice_id',
        'status',
        'mode',
    ];

    public function invoice()
    {
        return $this->belongsTo(UserInvoice::class);
    }

    public function client()
    {
        return $this->belongsTo(UserClient::class);
    }
}
