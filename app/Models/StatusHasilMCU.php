<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusHasilMCU extends Model
{
    use HasFactory;
    protected $table = 'tbl_status_hasil_mcu';
    protected $guarded = ['id'];
}
