<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Role extends Model
{
  protected $guarded = ['id'];

  protected $fillables = ['label'];


  // Relationships

  public function users () : Relations\HasMany {
    return $this->hasMany(User::class);
  }

}
