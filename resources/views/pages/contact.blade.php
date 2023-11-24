<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>Lampang Weir </title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">

    <style>
      .text{
        font-size: 18px;
        margin: 5px;
        margin-bottom: 20px;
        padding:10px;
        text-indent: 5em;
      }
      .text2{
        font-size: 18px;
        margin-left: 5em;
        padding:5px;
      }
      .text3{
        font-size: 18px;
        margin-left: 7em;
        padding:5px;
      }
    </style>
  </head>

  <body class="horizontal-icon-fixed" >
    @yield('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded" >
      <div class="pcoded-overlay-box"></div>
      
      <div class="pcoded-container navbar-wrapper">
        @include('menu.header')

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
             @include('menu.slidebar')
            <!-- Map -->
            <div class="pcoded-content">
              <div class="card"></div>
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header ">
                                        <h2>ติดต่อเรา</h2>     
                                        <hr>                         
                                        </div>
                                        <div class="card-block">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-10 col-lg-10">
                                                    <div class="card">
                                                        <div class="card-block">
                                                            <center><td> <a href="https://cendim.eng.cmu.ac.th/">  <img src="{{ asset('images/footer/cendim.jpg') }}" width="30%"></a></td> </center><br>
                                                            <div align="center" style="margin-left:30px;">
                                                                <h2 style="font-size:1.6vw"> ศูนย์ความเป็นเลิศด้านการจัดการภัยพิบัติทางธรรมชาติ คณะวิศวกรรมศาสตร์  มหาวิทยาลัยเชียงใหม่ </h2>
                                                            
                                                                <div  style="font-size:1.2vw">
                                                                    ที่อยู่ : 239 ถนนห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200<br>
                                                                    โทร : 053-942074<br>
                                                                    โทรสาร : 053-942074<br>
                                                                    Facebook:  <a href="https://www.facebook.com/CENDiMcmuCENDiMcmu" style="font-size:1.2vw"> CENDiMcmu </a><br>
                                                                    Website : <a href="https://cendim.eng.cmu.ac.th/" style="font-size:1.2vw">www.cendru.eng.cmu.ac.th </a><br>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            @include('menu.foot')
          </div>
          
        </div>

      </div>
    </div>
    
    
    <script src="{{ asset('js/form/jquery.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/form/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-i18next.min.js')}}" ></script>
    <script src="{{ asset('js/form/pcoded.min.js')}}" ></script>
    <script src="{{ asset('js/form/menu-hori-fixed.js')}}" ></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js')}}" ></script>
    <script src="{{ asset('js/form/script.js')}}"></script>
   
  
    <script src="{{ asset('js/form/jquery.datatables.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.buttons.min.js')}}" ></script>

    <script src="{{ asset('js/form/datatables.fixedheader.min.js')}}"></script>

    <script src="{{ asset('js/form/datatables.colreorder.min.js')}}" ></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.bootstrap4.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.responsive.min.js')}}" ></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>

    <script src= "{{ asset('js/form/fixed-header-custom.js') }}"></script>

    <script src= "{{ asset('js/form/pcoded.min.js') }}"></script>
    <script src= "{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>

  
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>

  
  </body>

</html>
