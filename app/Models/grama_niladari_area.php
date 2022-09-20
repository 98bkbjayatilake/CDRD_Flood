<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\grama_niladari;

class grama_niladari_area extends Model
{
    use HasFactory;

    protected $table='grama_niladari_areas';
    protected $primaryKey='Area_code';

   public $incrementing=false;
   public $timestamps=true;

    //fields of relative table
    protected $fillable=[
        'NIC',
         'Area_code',
         'Area_name',
         'Longitude',
         'Latitude',
    ];
    // relationship with another model(table)

    public function grama_niladari()
    {
     return $this->belongsTo(grama_niladari::class);
    }

    /*public function _construct($attributes2)
    {
     $fillable[0]=$attributes2[0];
     $fillable[1]=$attributes2[1];
     $fillable[2]=$attributes2[2];
     $fillable[3]=$attributes2[3];
     $fillable[4]=$attributes2[4];
    }*/

}
