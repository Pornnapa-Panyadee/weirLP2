<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Weir Report</title>
    <style>
        @font-face{
        font-family:  'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        body{
        font-family: "THSarabunNew";
        font-size: 14px;
        line-height:1;
        }
        @page {
            size: A4 portrait;
            margin: 5px;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 300mm;
                /*font-size : 16px;*/
            }
        }html, body {
			background-color: #fff;
			color: #000000;
			font-family: "THSarabunNew";
		}.position-ref {
		position: relative;
		}
		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}
		.content {
			text-align: left;
			
		}
		.title {
			font-size:15px;
		}
		.m-b-md {
			/* margin-bottom: 2px; */
        }  
        .table{
            width:100%;
            /* margin-bottom:1rem; */
            background-color:transparent;
            border-collapse: collapse;
        }
        td {
            border: 1px black solid;
            text-align: center;
        }
        .rotatehead {
            transform: rotate(-90deg);
            /* padding-left: -20px; */
        }
        .rotate {
            font-size: 12px;
            transform: rotate(-90deg);
            /* padding-left: -20px; */
        }
        .text_rote{
            width: 50px;
            height: 40px;
        }
        
        .checkmark{
            display:inline-block;
            content: '';
            width: 3px;
            height: 10px;
            border: solid #000;
            border-width: 0 1px 1px 0;
            transform: rotate(40deg);
            margin-left: 10px;
        }
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 0.4cm;
            color:#000;
            /* text-align: right; */
            /* line-height: 1.5cm; */
            content: counter(page);
        }
        .fleft {
            text-align: left;
        }

        .fright { 
            text-align: right;
        }
        #footer {
            max-width: 980px;
            text-align: center;
            margin: auto;
        }

        h3 {

        font-family: 'Source Sans Pro', sans-serif;
                    text-transform:uppercase;
                    font-weight : 300;
                    font-size : 14px;
                    color : #000;

        }

        .copyright {
            float: left;
        }

        .social {
            float: right;
        }
        .customers {
            border-collapse: collapse;
            border: 4px solid #fff;
            border-color: #fff;
        }
    </style>
 </head>
    <body>
        <div class="row" align="center" style="page-break-after:always; margin-top:60px;"> 
            <table align="center" class="customers" width="80%">
                <tr >
                    <td width="30%" class="customers"><img src="images/footer/lampang.png" width="100px"></td>
                    <td width="30%" class="customers"><img src="images/footer/egat.jpg" width="200px"></td>
                    <td width="30%" class="customers"><img src="images/footer/cmu.png" width="100px"></td>
                </tr>
                <tr>
                    <td colspan="4" class="customers"><font style="font-size:70px;"><b>รายงานสรุป</b></font></td>
                </tr>
                <tr>
                    <td colspan="4" height=200px; class="customers"> <font style="font-size:50px;"><b>ข้อมูลปริมาณตะกอนหน้าฝาย</b></td>
                </tr>
                <tr>
                    <td colspan="4" height=200px; class="customers"> <font style="font-size:42px;"><b><?php echo($text_amp); ?>  จังหวัดลำปาง</b></td>
                </tr>
                <tr>
                    <td colspan="4" height=200px; class="customers"> <font style="font-size:32px;"><b>โครงการพัฒนาระบบสารสนเทศการตรวจประเมินสภาพฝายและการบริหารจัดการพื้นที่เสี่ยงภัยแล้งและน้ำท่วมในจังหวัดลำปาง<b></td>
                </tr>
                <tr>
                    <td colspan="4" height=100px;> <font style="font-size:26px;"><b>โดย องค์การบริหารส่วนจังหวัดลำปาง ร่วมกับมหาวิทยาลัยเชียงใหม่<b></td>
                </tr>
            </table>
            <!-- <img src="{{ asset('images/header_pages/'.$amp.'.jpg') }}" width="105%">  -->

        </div>
        <footer>
            <div class="social"><u>หมายเหตุ</u> ข้อมูลใช้เพื่อการศึกษาวางแผน ไม่สามารถใช้อ้างอิงทางกฎหมายและคดีความ </div>
            <div style="clear: both"></div>
        </footer>
               
        <div class="text1" style="margin:10px;">
            <?php 
                function score($t, $s){
                    if ($t == $s){  echo "<div class=\"checkmark\"></div>";}
                }
            ?>
            <table class="table table-bordered">
                <thead align="center" >
                    <tr style="background-color:#C0C0C0">
                        <td rowspan="2" class="text-center">#</td>
                        <td rowspan="2" class="text-center">รหัส</td>
                        <td rowspan="2"> ชื่อฝาย <br> (ชื่อลำน้ำ) </td>
                        <td rowspan="2"> หมู่บ้าน <br> ตำบล</td>
                        <td colspan="2"> พิกัด</td>
                        <td colspan="3">ตะกอนหน้าฝาย</td>
                        <td rowspan="2">หน่วยงาน<br>รับผิดชอบ</td>
                        <td rowspan="2">รับโอน<br>ถ่ายจาก</td>
                    </tr>
                    <tr>
                        <td>ละติจูด </td>      
                        <td> ลองจิจูด </div></td>     
                        <td class="text_rote"> <div class='rotate'> น้อย </div></td>
                        <td class="text_rote"><div class='rotate'> ปานกลาง </div></td>
                        <td class="text_rote"><div class='rotate'>มาก </div> </td>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if($dataNo==1){ ?>
                        <tr>
                            <td colspan="11">------- ไม่มีข้อมูล -------</td>
                        </tr> 
                    <?php }
                    else{
                        $num =count($result);
                        for($i=0;$i<$num;$i++){?>
                        <tr>
                            <td ><?php echo($i+1); ?></td>
                            <td><?php echo ($result[$i]['weir_code']); ?></td>
                            <td><?php echo ($result[$i]['weir_name']); ?> <br> (<?php echo($result[$i]['river']); ?>) </td>
                            <td><?php echo($result[$i]['weir_village']); ?> <br> <?php echo($result[$i]['weir_tumbol']); ?></td>
                            <td><?php echo($result[$i]['lat']);?></td>
                            <td><?php echo($result[$i]['long']); ?></td>
                            <td><?php echo(score($result[$i]['sediment_level'],2));?></td>
                            <td><?php echo(score($result[$i]['sediment_level'],3));?></td>
                            <td><?php echo(score($result[$i]['sediment_level'],4));?></td>
                            <td><?php echo($result[$i]['resp_name']); ?></td>
                            <td><?php echo($result[$i]['transfer']); ?></td>
                            
                        </tr>

                        <?php }
                    } ?>

                </tbody>
            </table>
        </div>
    </body>
</html>
