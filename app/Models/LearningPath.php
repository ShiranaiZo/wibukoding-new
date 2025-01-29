<?php

namespace App\Models;

use App\Concerns\ModelHasIsActive;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    use HasFactory, HasUlids, ModelHasIsActive;

    protected $fillable = [
        'learning_path_category_id',
        'title',
        'links',
        'is_active',
        'order',
    ];

    protected $casts = [
        'links' => 'json',
    ];

    public const PLATFORMS = [
        'instagram' => 'Instagram',
        'tiktok' => 'Tiktok',
        'youtube' => 'Youtube',
    ];

    public function learningPathCategory()
    {
        return $this->belongsTo(LearningPathCategory::class);
    }
}
