<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'proj_title',
        'proj_desc',
        'proj_total_score',
        'proj_current_score',
        'project_start_date',
        'project_comp_date',
        'report',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }
}
