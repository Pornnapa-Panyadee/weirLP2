<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">ข้อมูลฝาย</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">ข้อมูลฝาย</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ url('/list') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">ข้อมูลการตรวจสอบสภาพฝาย</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                <span class="pcoded-mtext">ผู้เชี่ยวชาญ</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ url('/list/expert') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">ข้อเสนอแนะโดยผู้เชี่ยวชาญ</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="pcoded-hasmenu">
                            <a href="{{ url('/admin/list') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                <span class="pcoded-mtext">การจัดการผู้ใช้งาน</span>
                            </a>
                            
                        </li>
                        
                   </ul>
                            
        </div>
    </div>
</nav>