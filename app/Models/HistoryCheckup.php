<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryCheckup extends Model
{
    use HasFactory;

    protected $table = 'tbl_history_checkup';
    protected $guarded = ['id'];
}
