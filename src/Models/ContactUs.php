<?php

namespace ContactUs\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($ContactUs)
 */
class ContactUs extends Model
{
    protected $fillable = ['title', 'body'];
}