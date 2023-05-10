<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
  use HasFactory;

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function event()
  {
    return $this->belongsTo(Event::class);
  }

  public function paperFiles()
  {
    return $this->hasMany(PaperFile::class);
  }

  public function apareces()
  {
    return $this->hasMany(Aparece::class);
  }
}
