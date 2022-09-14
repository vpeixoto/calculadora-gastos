<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    use HasFactory;

    protected $fillable = ['operator', 'valor_1', 'valor_2', 'valor_total'];

    public function rules() {
        return [
            'valor_1' => 'required|numeric',
            'valor_2' => 'required|numeric'
        ];
    }
}
