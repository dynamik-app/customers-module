<?php

namespace Modules\Customers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Customers\Database\Factories\CustomerFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    public $primaryKey = 'customer_id';

    public $timestamps = true;

    protected $fillable = [
        'customer_name',
        'customer_registration'
    ];

    protected $hidden = [
        'created_at',
        'modified_at'
    ];
    
    protected static function newFactory()
    {
        return CustomerFactory::new();
    }
}
