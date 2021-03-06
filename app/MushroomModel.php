<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MushroomModel extends Model
{
    protected $table = 'Mushrooms';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'mr_prgid', 'mr_size', 'mr_imgid', 'mr_status', 'mr_growthrate', 'mr_date', 'mr_metadata'
    ];

    public function programs() {
        return $this->belongsTo('App\ProgramModel', 'mr_prgid');
    }

    public function mushroom_images() {
        return $this->hasMany('App\MushRoomImageModel', 'mushimg_mrid');
    }
}
