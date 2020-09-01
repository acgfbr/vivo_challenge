<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use Uuids, SoftDeletes;

    protected $table = 'messages';

    public $incrementing = false;

    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'conversationId',
        'from',
        'to',
        'text'

    ];

    protected $hidden = ['deleted_at'];
}
