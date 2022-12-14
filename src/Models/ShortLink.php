<?php

namespace Packafa\ShortLink\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    use HasFactory;

    protected $table = "short_links";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'link'
    ];
}
