<?php

namespace App\Models;

use App\Concerns\ModelHasIsActive;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPathCategory extends Model
{
    use HasFactory, HasUlids, ModelHasIsActive;

    protected $fillable = [
        'name',
        'is_active',
        'order',
    ];

    public function learningPaths()
    {
        return $this->hasMany(LearningPath::class);
    }
}
