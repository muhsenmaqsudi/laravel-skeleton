<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *  @property string $id
 */
class Transaction extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'tracker',
        'amount',
    ];

    protected $casts = [
//        'id' => UlidCast::class
    ];

    public function status(): HasMany
    {
        return $this->hasMany(TransactionStatus::class);
    }
}
