<?php

namespace Modules\Hospital\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Hospital\Enums\RoomSize;
use Modules\Hospital\Enums\RoomStatus;
use Modules\Hospital\Enums\RoomType;

// use Modules\Hospital\Database\Factories\RoomFactory;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['number','type','size','status','departmrnt_id'];

    protected function casts(): array
    {
        return [
            'status' => RoomStatus::class,
            'type' => RoomType::class,
            'size' => RoomSize::class
        ];

    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // protected static function newFactory(): RoomFactory
    // {
    //     // return RoomFactory::new();
    // }
}
