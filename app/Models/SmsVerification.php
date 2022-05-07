<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $phone
 * @property string $verification_code
 */
class SmsVerification extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'verification_code'];
}
