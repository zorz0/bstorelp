@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1" >

    <div class="card" align="center">

    <!-- <h5>Title description, Dec 7, 2017</h5> -->
           
       
            <!DOCTYPE html>

<html lang="en" dir="rtl">
   

    <head>
        <meta charset="utf-8" />
        <title>{{$blog->title}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/blog-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <div class="blog-page blog-content-2">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-single-content bordered blog-container">
                    <div class="blog-single-head">
                        <h1 class="blog-single-head-title">{{$blog->title}}</h1>
                        <div class="blog-single-head-date">
                            <i class="icon-calendar font-blue"></i>
                            <a href="javascript:;">{{$blog->created_at}}</a>
                        </div>
                    </div>
                    <div class="blog-single-img">
                        <img src="/storage/imgs/{{$blog->image}}" /> </div>

                       

                    <div class="blog-single-desc">
                   <p>{{$blog->description}}<p>
                    </div>
              
                  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog-single-sidebar bordered blog-container">
                  
                    <div class="blog-single-sidebar-recent">
                        <h3 class="blog-sidebar-title uppercase">Recent Posts</h3>
                        <ul>
                            @foreach ($latestBlogs as $item)
                            <li>
                                <a href="{{route('news.details', ['id'=>$item->id])}}">{{ $item->title}}</a>

                            </li>
                        @endforeach
                        
                          
                        
                        </ul>
                    </div>
                
                   
                </div>
            </div>
        </div>
    </div>        <!-- BEGIN HEADER -->
     
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
    
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
        


</section>
@endsection
