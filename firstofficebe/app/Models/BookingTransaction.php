<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingTransaction extends Model
{
    //
    protected $fillable = [
        'name',
        'phone_number',
        'booking_trx_id',
        'office_space_id',
        'total_amount',
        'duration',
        'start_at',
        'ended_at',
        'is_paid',
    ];

    public function officeSpace(): BelongsTo
    {
        return $this->belongsTo(OfficeSpace::class);
    }
}
