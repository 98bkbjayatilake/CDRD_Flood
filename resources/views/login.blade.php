<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<style>
.containner{
    margin-left: 250px;
    margin-right: 250px;
    margin-top:150px;
}
</style>
<body>


   <div class="containner d-flex justify-content-center  align-items-center" id="login_form" >
     <form id="login" class="border shadow p-3 rounded" method="">
      <div class="mb-3">
       <label id="lbl_username" class="form-label">Username</label>
       <input type="text" class="form-control" id="username" >
      </div>

      <div class="mb-3">
        <label id="lbl_password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
      </div>

      <div class="mb">
        <label id="lbl_usertype" class="foem-label"> Select user type:</label>
      </div>

      <select  class="form-select mb-3" id=usertype>
        <option selected>Open this selected menu</option>
        <option>Officer</option>
        <option>Public User</option>
      </select>

      <button type="submit" class="btn btn-primary" onclick="display_alert();">Submit</button>

      </form>
   </div>
</body>
