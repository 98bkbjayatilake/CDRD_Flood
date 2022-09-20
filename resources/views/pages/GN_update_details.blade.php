@extends('layouts.poc_navbar')

@section('content')
<style>
.containner{

margin-left:250px;
margin-right:250px;
margin-top:150px;
}
</style>

<div class="containner">
    <form method="POST" id="grama_niladari_update_form" class="form-group" action="/update_gn">
        @csrf
        <div class="row">
                <div class="col-md-6">
                   <label id="gn_nic">NIC</label>
                   <input type="text" id="gn_nic" name="gn_nic" class="form-control" placeholder="NIC number of grama niladari">
                </div>

                <div class="col-md-6">
                    <label id="gn_id">Email</label>
                    <input type="text" id="gn_email" name="gn_email" class="form-control" placeholder="email address of grama niladari">
                 </div>

                <div class="col-md-6">
                   <label id="gn_first_name">First Name</label>
                   <input type="text" id="gn_first_name" name="gn_first_name" class="form-control" placeholder="first name">
                </div>

                <div class="col-md-6">
                    <label id="gn_last_name">Last Name</label>
                    <input type="text" id="gn_last_name" name="gn_last_name"class="form-control" placeholder="last name">
                </div>

                <div class="col-md-6">
                    <label id="gn_office_number"> Office Number</label>
                    <input type="text" id="gn_office_number" name="gn_office_number" class="form-control"
                    placeholder="office number">
                </div>

                <div class="col-md-6">
                    <label id="gn_personal_number"> Personal Number</label>
                    <input type="text" id="gn_personal_number" name="gn_personal_number" class="form-control"
                    placeholder="personal number">
                </div>

                <div class="col-md-6">
                    <label id="gn_area_name">Grama Niladari Division Name</label>
                    <input type="text" id="gn__area_name" name="gn__area_name" class="form-control"
                    placeholder="grama niladari division name">
                </div>

                <div class="col-md-6">
                    <label id="gn__area_code">Geographical Grama Niladari Division Code</label>
                    <input type="text" id="gn_area_code" name="gn_area_code" class="form-control"
                    placeholder="Geographical division code">

                </div>

                <div class="col-md-6">
                    <label id="gn_longitude">Longitude of Grama Niladari Division </label>
                    <input type="text" id="gn_longitude"class="form-control" name="gn_longitude"
                    placeholder="longitude of grama niladari division">
                </div>

                <div class="col-md-6">
                    <label id="gn_latitude">Latitude of Grama Niladari Division </label>
                    <input type="text" id="gn_latitude"class="form-control" name="gn_latitude"
                    placeholder="latitude of grama niladari division">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                    <button type="submit" class="btn btn-danger">Reset</button>
               </div>


        </div>
    </form>
</div>
@endsection
