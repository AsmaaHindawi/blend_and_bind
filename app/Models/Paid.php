<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paid';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'serial_number';

    /**
     * Indicates if the primary key is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'book_id',
        'item_id',
        'purchased_date',
        'total_payment',
        'payment_method',
        'address',
        'phone_number',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'purchased_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'total_payment' => 'decimal:2',
    ];

    /**
     * Define relationships, if any.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function item()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
