<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\grama_niladari_area;

class grama_niladari extends Model
{
    use HasFactory;

    protected $tabel='grama_niladaris';
    protected $primaryKey='NIC';

    public $timestamps=true;

    public $incrementing=false;
    /* fields of grama-niladari table*/
     protected $fillable=[
        'NIC',
        'Name',
        'Office_number',
        'Personal_number',
        'Email',
    ];

// relationship connection with grama_niladari_area

  public function grama_niladari_areas()
  {
    return $this->has_many(grama_niladari_area::class,'GN_Id','GN_Id');
  }


/*public function _construct($attributes)
  {
   $fillable[0]=$attributes[0];
   $fillable[1]=$attributes[1].[2];
   $fillable[2]=$Office_no;
   $fillable[3]=$Personal_no;
  }*/
}
