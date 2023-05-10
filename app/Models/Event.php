<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ApiTrait;

class Event extends Model
{
    use HasFactory, ApiTrait;
    //asignacion masiva
    protected $fillable = ['id', 'titulo', 'descripcion', 'fecha', 'category_id', 'user_id'];
    //requisitos para la asignacion masiva
    static $rules = [
        'titulo' => 'required',
        // 'tipo' => 'required',
        'descripcion' => 'required',
        'fecha' => 'required',
        'category_id' => 'required',
        'files' => 'required'    
    ];
    //endpoints, para las relaciones
    protected $allowIncluded = ['categoria'];
    //para la api, por el cual se va poder filtrar
    protected $allowFilter = ['id', 'titulo', 'tipo', 'fecha'];
    //para la api, por el cual se va poder ordenar
    protected $allowSort = ['id', 'titulo', 'tipo', 'fecha'];

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // otra opcion
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    public function files()
    {
        return $this->hasMany(EventFile::class);
    }

    public function papers()
    {
        return $this->hasMany(Paper::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
