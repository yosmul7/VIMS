<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }

    #login{
      flex-direction:column !important
    }
    #login .col-7,#login .col-5{
      width: 100% !important;
      max-width:unset !important
    }
  </style>
  <div class="h-100 d-flex align-items-center w-100" id="login">
    <div class="col-2 h-100 d-flex align-items-center justify-content-center">
    </div>
    <div class="col-5 h-100 bg-gradient">
      <div class="d-flex w-100 h-100 justify-content-center align-items-center">
        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline card-primary rounded-0 shadow">
          <div class="card-header rounded-0">
            <h4 class="text-purle text-center"><b>Sign Up</b></h4>
          </div>
          <div class="card-body rounded-0">
      <form action="" id="manage-user"> 
        <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
        <div class="form-group col-12">
          <label for="name">First Name</label>
          <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>" required>
        </div>
        <div class="form-group col-12">
          <label for="name">Last Name</label>
          <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?>" required>
        </div>
        <div class="form-group col-12">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required  autocomplete="off">
        </div>
        <div class="form-group col-12">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off" <?php echo isset($meta['id']) ? "": 'required' ?>>
                    <?php if(isset($_GET['id'])): ?>
          <small class="text-info"><i>Leave this blank if you dont want to change the password.</i></small>
                    <?php endif; ?>
        </div>
        <div class="form-group col-12">
          <select name="type" id="type" class="custom-select"  required hidden>
            <option value="3" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>User Type</option>
          </select>
        </div>
        <div class="row">    
          <div class="col-3"></div>
            <div class="col-6">
              <button class="btn btn-sm btn-primary mr-2" form="manage-user">Save</button>
              <a class="btn btn-sm btn-secondary" href="./?page=user/list">Cancel</a>
            </div>
          <div class="col-3"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
            <div class="col-10">
              <a href="login.php">Already have account?</a>
            </div>
          <div class="col-2"></div>
        </div>
      </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(function(){
    $('.select2').select2({
      width:'resolve'
    })
  })
  $('#manage-user').submit(function(e){
    e.preventDefault();
    var _this = $(this)
    start_loader()
    $.ajax({
      url:_base_url_+'classes/Users.php?f=save',
      data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
      success:function(resp){
        if(resp ==1){
          location.href = './?page=user/list';
        }else{
          $('#msg').html('<div class="alert alert-danger">Username already exist</div>')
          $("html, body").animate({ scrollTop: 0 }, "fast");
        }
                end_loader()
      }
    })
  })

</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>