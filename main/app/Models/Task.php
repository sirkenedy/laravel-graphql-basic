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

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'assigned_to', 'id');
    }

    public function assisted_by()
    {
        return $this->belongsTo(User::class, 'assisted_by', 'id');
    }
}
