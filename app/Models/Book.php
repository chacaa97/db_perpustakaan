<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publication_year',
        'category',
        'stock'
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function loanHistories()
    {
        return $this->hasMany(LoanHistory::class);
    }
}
