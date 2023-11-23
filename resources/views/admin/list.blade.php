<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>Weir | List Survey</title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/pages.css')}}">

    <style>
      #fix-header{
        font-size:16px;
      }
    </style>
  

</head>

<body >
    
    @yield('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
     <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
          <!-- nav -->
            @include('menu.headLogin')
          <!-- nav -->
            <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
              
                  @include('menu.menubar')
                <!--menubar  -->
                  <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                      <div class="main-body">
                        <div class="page-wrapper">
                          <div class="page-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="card">
                                  <!-- header -->
                                    <div class="card-header">
                                      <h3>การจัดการผู้ใช้งาน (User management)</h3>
                                    </div>
                                    <!-- form -->
                                    <div class="card-block">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div id="wizarda">
                                            <section>
                                              <div class="form-group row justify-content-md-end" >
                                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4" > 
                                                  <a href="{{ asset('/admin/register') }}" > <button class="btn waves-effect waves-light btn-primary btn-outline-primary btn-lg btn-block" ><i class="fa fa-plus-circle"></i>เพิ่มผู้ใช้งาน</button></a>
                                                </div>
                                                
                                              </div>
                                              <div class="card">
                                                <div class="card-block">
                                                  <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                     
                                                        <div class="tab-content tabs card-block">
                                                          <div class="tab-pane active" id="home1" role="tabpanel">
                                                            <div class="pcoded-inner-content">
                                                               <div class="main-body">
                                                                <div class="page-wrapper">
                                                                  <div class="page-body">
                                                                    <div class="dt-responsive table-responsive">
                                                                      <table id="fix-header" class="table table-striped table-bordered nowrap">
                                                                        <thead>
                                                                          <tr>
                                                                            <th></th>
                                                                            <th scope="col" width="15%;">ผู้ใช้</th>
                                                                            <th scope="col" width="25%;">email</th>
                                                                            <th scope="col" width="15%;">สถานะ</th>
                                                                            <th scope="col" width="15%;">วันที่สมัคร</th>
                                                                            <th scope="col" width="15%;"></th>
                                                                          </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                            <?php for($i = 0;$i < count($data);$i++){ 
                                                                              if($data[$i]->status!="surveyor"){?>
                                                                                <tr >
                                                                                    <td align="center"><img src="{{ asset('images/admin/survey.gif') }}" width=40% ></a></td>   
                                                                                    <td>{{$data[$i]->name}}</td>  
                                                                                    <td>{{$data[$i]->email}}	</td>  
                                                                                    <td>{{$data[$i]->status}}</td>  
                                                                                    <td align="center">{{$data[$i]->created_at}}</td>       
                                                                                    <td align="center"> 
                                                                                      <a href='{{ asset('/admin/edit') }}/{{$data[$i]->id}}' ><button class="btn waves-effect waves-dark btn-mini btn-warning btn-outline-warning" title="edit"><i class="icofont icofont-edit-alt"></i>แก้ไข</button> </a>
                                                                                        
                                                                                      <a href='{{ asset('/admin/delete') }}/{{$data[$i]->id}}'><button class="btn waves-effect waves-dark btn-mini btn-danger btn-outline-danger" onclick="myFunction()" title="delete"><i class="icofont icofont-delete-alt"></i>ลบข้อมูล</button></a>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php } }?>
                                                                            
                                                                        
                                                                        </tbody>
                                                                      </table>
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
                                            </section>
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
      </div>
    </div>


    <script>
      function myFunction() {
        confirm("คุณต้องการลบข้อมูลผู้ใช้ใช่ไหม?");
      }
    </script>

    <script src="{{ asset('js/form/jquery.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-ui.min.js')}}"></script>
    <!-- <script src="{{ asset('js/form/popper.min.js')}}"></script> -->
    <script src="{{ asset('js/form/bootstrap.min.js')}}"></script>

    <!-- <script src="{{ asset('js/form/waves.min.js')}}" ></script> -->

    <script src="{{ asset('js/form/jquery.slimscroll.js')}}"></script>

    <!-- <script src="{{ asset('js/form/modernizr.js')}}"></script> -->
    <!-- <script src="{{ asset('js/form/css-scrollbars.js')}}"></script> -->

    <script src="{{ asset('js/form/jquery.datatables.min.js')}}" ></script>
    <!-- <script src="{{ asset('js/form/datatables.buttons.min.js')}}" ></script> -->
    <!-- <script src="{{ asset('js/form/jszip.min.js')}}" ></script> -->
    <!-- <script src="{{ asset('js/form/pdfmake.min.js')}}" ></script> -->
    <!-- <script src="{{ asset('js/form/vfs_fonts.js')}}" ></script> -->
    <!-- <script src="{{ asset('js/form/datatables.fixedheader.min.js')}}"></script> -->

    <!-- <script src="{{ asset('js/form/datatables.colreorder.min.js')}}" ></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}" ></script> -->
    <script src="{{ asset('js/form/datatables.bootstrap4.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.responsive.min.js')}}" ></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>

    <script src= "{{ asset('js/form/fixed-header-custom.js') }}"></script>

    <script src= "{{ asset('js/form/pcoded.min.js') }}"></script>
    <script src= "{{ asset('js/form/vertical-layout.min.js') }}"></script>
    <script src= "{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>

    <script src= "{{ asset('js/form/script.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" ></script>
  
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>



    

</body>

</html>
