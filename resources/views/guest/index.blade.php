<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>Lampang Weir </title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/feather/feather.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/form/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/icofont.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">

    <!-- leaflet -->
    
    <link rel="stylesheet" href="{{ asset('css/form/leaflet.css')}}" crossorigin=""/>
    <!-- <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script> -->
    <script src="{{ asset('js/leaflet-omnivore.min.js')}}"  crossorigin=""></script>
    <script src="{{ asset('js/leaflet-src.js')}}"  crossorigin=""></script>

    <style type="text/css">
      #map{

			  font-family: Mitr, sans-serif;
			  height: 620px;
			  display: block;
        margin: auto;
        text-align: left;
        font-size: 14px;
			}
		  #map.table {
		    font-family: 'Mitr', sans-serif;
		    width: 100%;
		  }#map.tr {
		    padding: 15px;
		    text-align: right;
		  }#map.td {
		    padding: 15px;
		    text-align: right;
        }
        select{
            width: 100%;
            height: 40px;
        }
        button.btn {
            width: 100%;
        }
        @media only screen and (max-width:480px) {
            #map{
                height: 450px;
                font-size: 14px;
            }
            table{
                font-size: 2vw;
            }
            select{
            width: 100%;
            height: 40px;
            }
            button.btn{
            width: 100%;
            }
            .btn-sm{
                font-size: 2vw;
            }
        }
      #fix-header{
        font-size:16px;
      }
      th{
        text-align:center;
      }
      .btn{
        padding:2px 12px;
      }
      @media screen and (max-width: 600px) {
          div.find {
            width: 80%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
          }
      }
     </style>

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
              <div class="card"><h3></h3></div>
              <div class="pcoded-inner-content">
                <div class="main-body">
                  <div class="page-wrapper">
                    <div class="page-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card table-card">
                            <div class="card-header">
                              <h5>โครงการพัฒนาระบบสารสนเทศการตรวจประเมินสภาพฝายและวางแผนปรับปรุงเพิ่มประสิทธิภาพฝายในพื้นที่จังหวัดลำปาง</h5>
                              <br>โดย องค์การบริหารส่วนจังหวัดลำปาง ร่วมกับมหาวิทยาลัยเชียงใหม่                            
                              
                              <!-- Map Show -->
                              <div class="card-block p-b-0">
                                <div id="map"></div>
                                <br>
                                <center><img  src="{{ asset('images/icon/refmap1.png') }}" width=85% ></center>
                              </div>
                               <!-- End Map show --> 
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- banner -->
                      <div class="card">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-lg-12 col-xl-12">
                              <div class="sub-title"><h4>ข้อมูลการตรวจสอบประเมินสภาพฝาย</h4> </div>
                            </div>
                          </div>
                              <div class="card-block p-b-0">
                                <div class="row justify-content-md-center">
                                  <div class="col-3 col-md-6 col-lg-3">
                                    <a href="{{ asset('/report/map') }}" target="_blank">
                                      <button class="btn">
                                        <center><img src="{{ asset('images/banner/map.png') }}" width=100% /> </center>
                                      </button>
                                    </a>
                                    <!-- <center><img  src="{{ asset('images/banner/map.png') }}" width=100% ></center> -->
                                  </div>
                                  <div class="col-3 col-md-6 col-lg-3">
                                    <a href="{{ asset('report/chart?amp=sum') }}" target="_blank">
                                      <button class="btn">
                                        <center><img src="{{ asset('images/banner/graph.png') }}" width=100% /> </center>
                                      </button>
                                    </a>
                                    <!-- <center><img  src="{{ asset('images/banner/graph.png') }}" width=100% ></center> -->
                                  </div>
                                  <div class="col-3 col-md-6 col-lg-3">
                                    <a href="{{ asset('report/scoreComposition') }}" target="_blank">
                                      <button class="btn">
                                        <center><img src="{{ asset('images/banner/table.png') }}" width=100% /> </center>
                                      </button>
                                    </a>
                                    <!-- <center><img  src="{{ asset('images/banner/table.png') }}" width=100% ></center> -->
                                  </div>
                                  <div class="col-3 col-md-6 col-lg-3">
                                    <a href="{{ asset('/report/problem') }}" target="_blank">
                                      <button class="btn">
                                        <center><img src="{{ asset('images/banner/report.png') }}" width=100% /> </center>
                                      </button>
                                    </a>
                                    <!-- <center><img  src="{{ asset('images/banner/report.png') }}" width=100% ></center> -->
                                  </div>
                                </div>                               
                              </div>
                        </div>
                      </div>
                      <!-- table -->
                      <div class="card">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-lg-12 col-xl-12">
                              <div class="sub-title"><h4>ตารางแสดงรายละเอียดการตรวจสอบฝาย</h4> </div>
                              <!-- choose Amp -->
                                <!-- <form id="amp" name="amp" action="/weir/lampang/#tableData" method="get">  -->
                                <form id="amp" name="amp" action="#tableData" method="get"> 
                                <div class="find">
                                  <div class="row justify-content-center" >
                                    <div class="col-md-8 col-xl-6"></div>
                                    <div class="col-md-8 col-xl-2">
                                      <h5 class="card-title">
                                        <div id="selectContainer"></div>
                                      </h5>
                                    </div>
                                    <div class="col-md-8 col-xl-2">
                                      <h5 class="card-title">
                                        <select id="weir_tumbol" name="tumbol" >
                                            <option value=''>-- เลือกตำบล --</option>
                                            </select>
                                      </h5>
                                    </div>
                                    <div class="col-md-8 col-xl-1">
                                      <button type="submit" class="btn btn-outline-dark "  style="float: right; padding:8px;"> ค้นหา </button>
                                    </div>
                                                                  
                                  </div>
                                </div>
                                </form>
                                <hr>
                              <br>
                                <!-- table -->
                                <div id="tableData">
                                  <div class="dt-responsive table-responsive">
                                    <table id="fix-header" class="table table-striped table-bordered nowrap" width=80% align="center">
                                      <thead>
                                        <tr>
                                          <th width=5%>#</th>
                                          <th width=10%>รหัส</th>
                                          <th width=20%>ชื่อฝาย/ลำน้ำ</th>
                                          <th width=15%>หมู่บ้าน</th>
                                          <th width=15%>ตำบล</th>
                                          <th width=15%>อำเภอ</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>     
                                      <?php for($i = 0;$i < count($data); $i++){  ?>
                                        <tr>
                                          <td align="center">{{$i+1}} </td>
                                          <td><a href='{{ asset('/report/pdf') }}/{{$data[$i]['weir_code']}}' target="_blank"> {{$data[$i]['weir_code']}} </a></td>
                                          <td>{{$data[$i]['weir_name']}}/{{$data[$i]['river']}} </td>
                                          <td>{{$data[$i]['weir_village']}}</td>
                                          <td>{{$data[$i]['weir_tumbol']}}  </td>
                                          <td>{{$data[$i]['weir_district']}}</td>
                                          <td align="center" > 
                                            <a href='{{ asset('/report/pdf') }}/{{$data[$i]['weir_code']}}' class="btn waves-effect waves-light btn-facebook" target="_blank"><i class="feather icon-sidebar"></i>รายงาน</a>
                                            <a href='{{ asset('/pdf') }}/{{$data[$i]['weir_code']}}' class="btn waves-effect waves-light btn-dropbox" target="_blank"><i class="feather icon-eye"></i>แบบสำรวจ</a>
                                            <a href='{{ asset('/photo') }}/{{$data[$i]['weir_code']}}' class="btn waves-effect waves-light btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>
                                            <a href='{{ asset('/map') }}/{{$data[$i]['weir_code']}}' class="btn waves-effect waves-light btn-instagram" target="_blank"><i class="feather icon-map-pin"></i>แผนที่</a>
                                          </td>
                                        </tr>
                                      <?php }?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>    
                            </div>
                                                                                    
                          </div>
                        </div>
                      </div>
                      <!-- table end -->
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
    <script async  src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    
    <script src= "{{ asset('js/chooselocationReport.js') }}"></script>
    <script src="{{ asset('js/form/rocket-loader.min.js')}}"></script>
  
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

    <script src= "{{ asset('js/form/script.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" ></script>
  
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>
    
    <!-- Map script -->
    <link rel="stylesheet" href="{{ asset('css/L.Control.Layers.Tree.css')}}" crossorigin=""/>
    <script src="{{ asset('/js/L.Control.Layers.Tree.js')}}"></script>

    <script type="text/javascript">
      
      var station1 = new L.LayerGroup();
      var station2 = new L.LayerGroup();
      var station3 = new L.LayerGroup();
      var station4 = new L.LayerGroup();
      var station5 = new L.LayerGroup();
      var station6 = new L.LayerGroup();
      var station7 = new L.LayerGroup();
      var station8 = new L.LayerGroup();
      var station9 = new L.LayerGroup();
      var station10 = new L.LayerGroup();
      var station11 = new L.LayerGroup();
      var station12 = new L.LayerGroup();
      var station13 = new L.LayerGroup();
      var station14 = new L.LayerGroup();

      var rid = new L.LayerGroup();
      var ridNo = new L.LayerGroup();
      var dwr = new L.LayerGroup();
      var loyal = new L.LayerGroup();
      var borders= new L.LayerGroup();
      var x = 18.290015 ; 
      var y = 99.656525;
      var mbAttr = 'Mae Jang Basin ',
          mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidmFucGFueWEiLCJhIjoiY2loZWl5ZnJ4MGxnNHRwbHp5bmY4ZnNxOCJ9.IooQB0jYS_4QZvIq7gkjeQ';
          osm = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
              maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
          osmBw = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
      var map = L.map('map', {
          layers: [osm,station1,station2,station3,station4,station5,station6,station8,station9,station10,station11,station12,station13,station14,borders],
          center: [x,y],
          zoom: 8,
        });
      
      var runLayer = omnivore.kml('{{ asset('kml/bound_amphoe_lampang.kml') }}')
						.on('ready', function() {
						this.setStyle({
            fillOpacity: 0,
						color: "#466DF3",
						weight: 3
						});
			}).addTo(borders); 
      
      var pin = L.icon({
          iconUrl: '{{ asset('images/icon/pin19.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/pin19.png') }}',
          iconSize: [30, 40],
          iconAnchor: [20, 40],
          popupAnchor: [0, 0]
        });

      var pinMO = L.icon({
          iconUrl: '{{ asset('images/icon/pin19.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/pin19.png') }}',
          iconSize: [25, 34],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
           
     var amp=["ห้างฉัตร", "เกาะคา", "สบปราบ","เถิน","แจ้ห่ม","งาว","เกาะคา","แม่ทะ","แม่เมาะ","แม่พริก","เมืองปาน","เมืองลำปาง","วังเหนือ","เสริมงาม"];    
      
      function checkname(name){
        if(name!=null){
          return name;
        }else{
          return "- ";
        }
      }
      function addPin(ampName,i,mo){

        if(i<6 || i>8){
          $.getJSON("{{ asset('form/getDataSurvey') }}/"+amp[i], 
          function (data){
            // alert (data[0].lat);
            for (i=0;i<data.length;i++){
              // var lo =data[i].geometry.coordinates+ '';;
              var x=data[i].lat;
              var y=data[i].long;
              // alert (x);
              var text ="<font style=\"font-family: 'Mitr';\" size=\"3\"COLOR=#1AA90A > รหัส :" + data[i].weir_code + "</font><br>";
                  text1 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > ฝาย : "+ checkname(data[i].weir_name)+ " (ลำน้ำ : "+ data[i].river+")</font><br>";
                  text2 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 >ที่ตั้ง : "+ data[i].weir_village +" ต."+ data[i].weir_tumbol +" อ."+ data[i].weir_district +"</font><br>";
                  text3 ="<br><table align=\"center\"><tr><td >" + "<a href='{{ asset('report/pdf') }}/"+data[i].weir_code+"' target=\"_blank\"><button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-sidebar\"></i> รายงาน</button> </a></td> <td> <a href='{{ asset('/pdf') }}/"+data[i].weir_code+"' target=\"_blank\">  "+"<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-eye\"></i> แบบสำรวจ</button> </a>" +"</td><td > <a href='{{ asset('/photo') }}/"+data[i].weir_code+"' target=\"_blank\">  " + "<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-image\"></i> ภาพประกอบ</button> </a></td></tr></table>";
              if(mo==0){
                L.marker([x,y],{icon: pinMO}).addTo(ampName).bindPopup(text+text1+text2+text3);  
              }else{
                L.marker([x,y],{icon: pin}).addTo(ampName).bindPopup(text+text1+text2+text3);  
              }
            }//end for
          });
        }else{
          $.getJSON("https://watercenter.scmc.cmu.ac.th/weir/jang_basin/form/getDataSurvey/"+amp[i], 
          function (data){
            for (i=0;i<data.length;i++){
              var x=data[i].lat;
              var y=data[i].long;
              var text ="<font style=\"font-family: 'Mitr';\" size=\"3\"COLOR=#1AA90A > รหัส :" + data[i].weir_code + "</font><br>";
                  text1 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > ฝาย : "+ checkname(data[i].weir_name)+ " (ลำน้ำ : "+ data[i].river+")</font><br>";
                  text2 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 >ที่ตั้ง : "+ data[i].weir_village +" ต."+ data[i].weir_tumbol +" อ."+ data[i].weir_district +"</font><br>";
                  
                  text3 ="<br><table align=\"center\"><tr><td >" + "<a href='{{ asset('/report/pdf') }}/"+data[i].weir_code+"' target=\"_blank\"><button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-sidebar\"></i> รายงาน</button> </a></td> <td> <a href='{{ asset('/pdf') }}/"+data[i].weir_code+"' target=\"_blank\">  "+"<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-eye\"></i> แบบสำรวจ</button> </a>" +"</td><td > <a href='{{ asset('/photo') }}/"+data[i].weir_code+"' target=\"_blank\">  " + "<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-image\"></i> ภาพประกอบ</button> </a></td></tr></table>";
                  // text3 ="<br><table align=\"center\"><tr><td >" + "<a href='{{ asset('report/pdf') }}/"+data[i].weir_code+"' target=\"_blank\"><button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-sidebar\"></i> รายงาน</button> </a></td> <td> <a href='{{ asset('/pdf') }}/"+data[i].weir_code+"' target=\"_blank\">  "+"<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-eye\"></i> แบบสำรวจ</button> </a>" +"</td><td > <a href='{{ asset('/photo') }}/"+data[i].weir_code+"' target=\"_blank\">  " + "<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-image\"></i> ภาพประกอบ</button> </a></td></tr></table>";
              if(mo==0){
                L.marker([x,y],{icon: pinMO}).addTo(ampName).bindPopup(text+text1+text2+text3);  
              }else{
                L.marker([x,y],{icon: pin}).addTo(ampName).bindPopup(text+text1+text2+text3);  
              }
            }//end for
          });
        }
                
      }

      
      var mx = window.matchMedia("(max-width: 700px)");
      if(mx.matches){
        mo=0;
        // alert(x.matches);
      }else{
        mo=1;
      }
      
      
      addPin(station1,0,mo);
      addPin(station2,1,mo);
      addPin(station3,2,mo);
      addPin(station4,3,mo);
      addPin(station5,4,mo);
      addPin(station6,5,mo);
      //addPin(station7,6,mo);
      addPin(station2,7,mo);
      addPin(station9,8,mo);
      addPin(station10,9,mo);
      addPin(station11,10,mo);
      addPin(station12,11,mo);
      addPin(station13,12,mo);
      addPin(station14,13,mo);

      var baseTree = {
          label: 'BaseLayers',
          noShow: true,
          children: [  {label: ' แผนที่ภูมิประเทศ (Streets)', layer: osm},
                       {label: ' แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw},
          ]
        };


        var ctl = L.control.layers.tree(baseTree, null);
        ctl.addTo(map).collapseTree().expandSelected();

    
      var overlays = [{
          label: ' ข้อมูลฝายรายอำเภอ',
          selectAllCheckbox: true,
          children: [
                { label:" "+amp[0],layer: station1},
                { label:" "+amp[1],layer: station2},
                { label:" "+amp[2],layer: station3},
                { label:" "+amp[3],layer: station4},
                { label:" "+amp[4],layer: station5},
                { label:" "+amp[5],layer: station6},
                { label:" "+amp[7],layer: station8},
                { label:" "+amp[8],layer: station9},
                { label:" "+amp[9],layer: station10},
                { label:" "+amp[10],layer: station11},
                { label:" "+amp[11],layer: station12},
                { label:" "+amp[12],layer: station13},
                { label:" "+amp[13],layer: station14}
          ]
        }];
        
        ctl.setOverlayTree(overlays).collapseTree(true).expandSelected(true);
    </script>

    <script>
        function createSelect() {
          const container = document.getElementById('selectContainer');
          container.innerHTML = ''; // ล้างเนื้อหาก่อนหน้า

          const isMobile = window.innerWidth <= 768; // เช็คว่าขนาดหน้าจอเป็นมือถือหรือไม่
          const select = document.createElement('select');
          select.id = 'weir_district';
          select.name = 'amp';

          // รายการอำเภอทั้งหมด
          const districtList = [
              "ห้างฉัตร", "เกาะคา", "สบปราบ", "เถิน", "แจ้ห่ม",
              "งาว", "แม่เมาะ", "แม่ทะ", "แม่พริก", "เมืองปาน",
              "เมืองลำปาง", "วังเหนือ", "เสริมงาม"
          ];

          let options = '';

          // เช็คว่าถ้าเป็นมือถือให้แสดงรายการอำเภอทั้งหมดโดยเลือก 'ห้างฉัตร' เป็นค่าเริ่มต้น
          if (isMobile) {
              districtList.forEach(district => {
                  options += `<option value="${district}">${district}</option>`;
              });
              options += '<option value="sum">ทั้งหมด</option>';
              select.value = 'ห้างฉัตร'; // ตั้งค่าเริ่มต้นเป็น "ห้างฉัตร"
          } else {
              // ถ้าไม่ใช่มือถือให้มีค่า "- - เลือกอำเภอ - -" เป็นค่าเริ่มต้น
              options += '<option value="sum">- - เลือกอำเภอ - -</option>';
              districtList.forEach(district => {
                  options += `<option value="${district}">${district}</option>`;
              });
              select.value = ''; // ตั้งค่าเริ่มต้นเป็นว่างเปล่า
          }

          select.innerHTML = options; // เพิ่มตัวเลือกลงใน select
          container.appendChild(select); // เพิ่ม select ลงใน container

          // ตรวจสอบว่าเคยเลือกอำเภอมาก่อนหรือไม่ (เช่นจากการรีเฟรชหน้าเว็บ)
          if (sessionStorage.getItem("selectedDistrict")) {
              select.value = sessionStorage.getItem("selectedDistrict");
          }

          // บันทึกค่าอำเภอที่เลือกไว้ใน sessionStorage
          select.addEventListener("change", function() {
              sessionStorage.setItem("selectedDistrict", select.value);
          });
      }

      window.addEventListener('resize', createSelect); // เรียกฟังก์ชันเมื่อเปลี่ยนขนาดหน้าจอ
      window.addEventListener('DOMContentLoaded', createSelect); // เรียกฟังก์ชันเมื่อโหลดหน้าเว็บ

    </script>

  
    <!-- End Map  -->
  </body>

</html>
