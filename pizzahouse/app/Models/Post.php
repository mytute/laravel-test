<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // only following columns are available to update after insert
    protected $fillable = [
        'title', 'excerpt', 'body', 'min_to_read', 'is_published'
    ];
    // protected $table = "posts"; // define table of automatically not got by model name
    // protected $primaryKey = "title"; // to change migration primary key
    // protected $timestamps = false; // disable timestamps
    // protected $dataTime = 'U' // override data time format
    // protected $connection = 'sqlite'; // specify connection to this model when have multiple connections
    // protected $attributes = [ 'is_published' => true ];
}
