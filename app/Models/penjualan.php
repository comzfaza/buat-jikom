<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected$table = "pelanggan";

    protected $fillable = ['Tanggalpenjualan', 'Totalharga', 'pelangganID'];
}


