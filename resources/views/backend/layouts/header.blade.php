<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="line_icon open_miniSide d-none d-lg-block">
                    <img src="{{asset('assets/img/line_img.png')}}" alt="">
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="profile_info">
                        <img src="{{asset('assets/img/client_img.png')}}" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <p>{{Auth::user()->user_nama}}</p>
                                <h5>{{Auth::user()->user_nip}}</h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="#">My Profile </a>
                                <a href="#">Settings</a>
                                <a href="{{route('logout')}}">Log Out</a>
                                {{--  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a><form action="#" method="POST" class="d-none" id="logout-form">@csrf</form>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>