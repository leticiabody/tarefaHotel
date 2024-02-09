<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedes extends Model
{
    use HasFactory;
    protected $fillable = ['nomeHosp','foneHosp','emailHosp','quartosHosp','qtdHosp'];
}
