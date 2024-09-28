<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $table = "links";
    protected $primaryKey = "id"; // Correct spelling
    protected $fillable = ['url']; // Make sure this matches your form input field
}
