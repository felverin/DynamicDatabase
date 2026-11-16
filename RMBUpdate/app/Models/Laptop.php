<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['brand', 'model', 'processor', 'ram'])]
class Laptop extends Model
{
    /** @use HasFactory<\Database\Factories\LaptopFactory> */
    use HasFactory;
}
