<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;

    public $table = 'medias';

    protected $fillable = [
        'title',
        'path',
        'content_type',
        'hash',
        'order',
        'object_type',
        'object_id',
    ];

    public function object(): MorphTo
    {
        return $this->morphTo();
    }

}
