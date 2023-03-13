<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoModel extends Model
{
    protected $table = 'todo';
    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'category_id', 'status_id', 'priority_id'];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CategoryModel::class,'category_id');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(StatusModel::class,'status_id');
    }

    public function priority(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PriorityModel::class,'priority_id');
    }

}
