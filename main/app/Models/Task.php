<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_title',
        'task_desc',
        'task_start_date',
        'task_end_date',
        'task_comp_date',
        'report',
        'assigned_to',
        'assisted_by',
        'type_id',
        'priority_id',
    ];
}
