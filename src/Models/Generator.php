<?php

namespace Hafijul233\Generator\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Generator
 */
class Generator extends Model
{
    protected $table = 'crud_generators';

    protected $fillable = ['model', 'pagination', 'type', 'pattern', 'options', 'fields'];

    protected $casts = [
        'options' => 'array',
        'fields' => 'array',
    ];
}
