<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('h.php');?>
  <?php include('datatable.php');?>
   <?php include('menu.php');?>      
</head>
<body>
  <div class="container">
    <?php include('navbar.php');?>
    <div class="row">
    	
      <div class="col-md-10">
        <h3 align="center">  เพิ่ม  Admin </h3>
<div class="table">
        <form  name="register" action="add_admin_db.php" method="POST" id="register" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-2">  </div>
           <div class="col-sm-5" align="left">
             <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
           </div>
         </div>
         <div class="form-group">
          <div class="col-sm-2" align="right"> Username : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-2" align="right"> Password : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2" align="right"> ชื่อ-สกุล : </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-สกุล" />
          </div>
        </div>

         <div class="form-group">
        <div class="col-sm-2" align="right"> ที่อยู่ : </div>
        <div class="col-sm-5" align="left">
          <textarea name="admin_address" type="textarea" required class="form-control" id="admin_address" placeholder="ที่อยู่" ></textarea> 
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> เบอร์โทร : </div>
        <div class="col-sm-5" align="left">
          <input  name="admin_tel" type="text" required class="form-control" id="admin_tel" placeholder="0912345678" pattern="[0-9]{10}" minlength="2" title="เบอร์โทร 0-9" minlength="2"/>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> E-mail : </div>
        <div class="col-sm-5" align="left">
          <input  name="admin_email" type="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required class="form-control" id="admin_email" placeholder="E-mail" title="กรุณากรอก Email ให้ถูกต้อง" minlength="2"/>
        </div>
      </div>

        <div class="form-group">
          <div class="col-sm-2" align="right"> เลือกสถานะ : </div>
          <div class="col-sm-7" align="left">

            <select name="status">
             <option value="staff">staff</option>
             <option value="admin">admin</option>

           </select>
         </div>
       </div>



         <div class="form-group">
          <div class="col-sm-2"> </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" id="btn"> บันทึก  </button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div> 
</body>
</html>
<?php  include('f.php');?>