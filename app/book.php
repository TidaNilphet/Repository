<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'year', 'price', 'isbn', 'author_id', 'publisher_id', 'photo'];

    
}
