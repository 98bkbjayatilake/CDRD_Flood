<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grama_niladari;
use App\Models\grama_niladari_area;



class grama_niladariController extends Controller
{
    public function get_data(Request $req){
      $first_name=$req->gn_first_name;
      $last_name=$req->gn_last_name;

      $gn_nic=$req->gn_nic;



      $gn=new grama_niladari();

      $gn->NIC=$gn_nic;
      $gn->Name=$first_name.$last_name;
      $gn->Office_number=$req->gn_office_number;
      $gn->Personal_number=$req->gn_personal_number;
      $gn->Email=$req->gn_email;
      $gn->save();

      $gn_area=new grama_niladari_area();

      $gn_area->NIC=$gn_nic;
      $gn_area->Area_code=$req->gn_area_code;
      $gn_area->Area_name=$req->gn__area_name;
      $gn_area->Longitude=$req->gn_longitude;
      $gn_area->Latitude=$req->gn_latitude;
      $gn_area->save();
    }

    public function update_gn_button(){
        return view('.pages.GN_update_details');
    }
}
