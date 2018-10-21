<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{getUrl('public/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{getUrl('public/css/main.css')}}">
</head>
<body>
    <div class="site"> 
        <nav class="navbar navbar-inverse">
            <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" style="color: #fff">Dashboard</a>
                </div>
                
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-4">
                    <ul class="nav navbar-nav navbar-right ">
                         <li><a href='{{getUrl("admin")}}'>Home</a></li>
                        <li><a href='{{getUrl("user")}}'>User</a></li>
                        <li><a href='{{getUrl("product")}}'>Product</a></li>
                        <li><a href='{{getUrl("category")}}'>Category</a></li>
                        <li>
                          <a class="btn btn-default btn-outline btn-circle" href='{{getUrl("logout")}}' >Logout <i class=""></i> </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <div class="container text-right">
        </div>

        <div class="container">
            @yield('content')
        </div>  
        
    </div>
</body>


    <script src="{{getUrl('public/plugins/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    {{-- Validate form --}}
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    {{-- Bộ lọc form --}}
    <script src="{{getUrl('public/plugins/datatables.net/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{getUrl('public/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
    
    <script src="{{getUrl('public/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>


    
    <script src="{{getUrl('public/js/main.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
         $(function () {
            CKEDITOR.replace('detail')
          })
    </script>
</html>
