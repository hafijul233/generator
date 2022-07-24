<?php

namespace Hafijul233\Generator\Models;

use Hafijul233\Generator\Database\Factories\GeneratorFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Generator
 */
class Generator extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory()
    {
        return GeneratorFactory::new();
    }
}
