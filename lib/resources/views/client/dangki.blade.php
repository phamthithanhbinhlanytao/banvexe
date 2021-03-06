<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng kí</title>
<base href="{{asset('public/backend')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Đăng kí</div>
        <div class="panel-body">
          <form role="form" method="post">
            <fieldset>
              @include('error.note')
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Name" name="name" type="text" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Phone" name="phone" type="number" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="address" name="add" type="text" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" name="level" type="text" value="2" readonly="readonly">
              </div>
              
              <input type="submit" name="submit" value="Đăng kí" class="btn btn-primary">
&nbsp;
<button class="btn btn-danger"><a href="{{asset('dangnhap')}}">Đăng nhập</a></button> 
            </fieldset>
            {{csrf_field()}}
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  
    

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){      
        $(this).find('em:first').toggleClass("glyphicon-minus");    
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
</body>

</html>