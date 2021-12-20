<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function User()
    {
        return $this->BelongsTo(User::class);
    }
}
