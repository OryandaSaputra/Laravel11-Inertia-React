<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->hasMany (Project::class);
    }
    public function createdBy()
    {
        return $this->belongsTo (User::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo (User::class, 'updated_by');
    }}