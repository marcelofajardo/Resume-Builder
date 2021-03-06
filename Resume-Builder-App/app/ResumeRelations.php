<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeRelations extends Model
{
    //use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resumeRelations';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'relId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'genId', 'itemId'
    ];

}