<?php

namespace App\Domain\Convert\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocLists extends Model
{
    use HasFactory;

    protected $table = 'doc_lists';

    protected $fillable = ['name', 'source_file'];
}
