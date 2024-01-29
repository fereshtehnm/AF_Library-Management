<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reserve_data',
        'return_date',
        'book_id',
        'user_id',
    ];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
