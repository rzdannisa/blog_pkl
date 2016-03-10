<nav>
<!-- <div class="nav-wrapper" style="background-color:#64b5f6 !important;height:35px;">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
  </div> -->

@if (Auth::guest())
<div class="nav-wrapper" style="background-color:#64b5f6 !important;height:35px;">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
  </div>
  <div class="nav-wrapper" style="background-color: #2196f3 !important;height:75px;padding-top:5px;">
      <a href="#" style="margin-left:15px;font-weight:bold;font-size:55px;" class="brand-logo"><i class="fa fa-cubes"></i> BLOG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
      </div>
@elseif (Auth::user()->email == "adminblog@gmail.com")
<div class="nav-wrapper" style="background-color:#64b5f6 !important;height:35px;">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    <li><a style="color:#fff;font-size: 13px;margin-top:-15px;margin-left:92%;" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
    <li><a style="color:#fff;font-size: 13px;margin-top:-15px;margin-left:20px;" href="{{ url('auth/register') }}"><i class="fa fa-user-plus"></i> Make New User</a></li>
    <li><a style="color:#fff;font-size: 13px;margin-top:-15px;margin-left:20px;" href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
    
    </ul>
  </div>

    <div class="nav-wrapper" style="background-color: #2196f3 !important;height:75px;padding-top:5px;">
      <a href="#" style="margin-left:-92%;font-weight:bold;font-size:55px;" class="brand-logo"><i class="fa fa-cubes"></i> BLOG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
				</ul>
			</div>
@else
<div class="nav-wrapper" style="background-color:#64b5f6 !important;height:35px;">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    <li><a style="color:#fff;font-size: 13px;margin-top:-15px;" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
    <li><a style="color:#fff;font-size: 13px;margin-top:-15px;margin-left:20px;" href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </div>

    <div class="nav-wrapper" style="background-color: #2196f3 !important;height:75px;padding-top:5px;text-align:left">
      <a href="#" style="font-size:50px;font-weight:bold;margin-left:-150px;" class="brand-logo"><i class="fa fa-cubes"></i> BLOG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
      </div>
@endif
</nav><br><br><br>
<br>
<ul style="margin-top:65px;color:black" id="dropdown1" class="dropdown-content">
  <li><a id="menu1-1" style="color:#777;font-size: 12px;" href="#!">Sejarah Pagesti</a></li>
  <li class="divider"></li>
  <li><a id="menu1-2" style="color:#777;font-size: 12px;" href="#!">Makna Logo</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown2" class="dropdown-content">
  <li><a id="menu2-1" style="color:#777;font-size: 12px;" href="#!">Pengurus</a></li>
  <li class="divider"></li>
  <li><a id="menu2-2" style="color:#777;font-size: 12px;" href="#!">Wewenang</a></li>
  <li class="divider"></li>
  <li><a id="menu2-3" style="color:#777;font-size: 12px;" href="#!">Visi dan Misi</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown3" class="dropdown-content">
  <li><a id="menu3-1" style="color:#777;font-size: 12px;" href="#!">Program Kerja</a></li>
  <li class="divider"></li>
  <li><a id="menu3-2" style="color:#777;font-size: 12px;" href="#!">Jadwal Kegiatan</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown4" class="dropdown-content">
  <li><a id="menu4-1" style="color:#777;font-size: 12px;" href="#!">Pendaftaran</a></li>
  <li class="divider"></li>
  <li><a id="menu4-2" style="color:#777;font-size: 12px;" href="#!">Data Anggota</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown5" class="dropdown-content">
  <li><a id="menu5-1" style="color:#777;font-size: 12px;" href="#!">Foto</a></li>
  <li class="divider"></li>
  <li><a id="menu5-2" style="color:#777;font-size: 12px;" href="#!">Video</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown6" class="dropdown-content">
  <li><a id="menu6-1" style="color:#777;font-size: 12px;" href="#!">Budaya Desa</a></li>
  <li class="divider"></li>
  <li><a id="menu6-2" style="color:#777;font-size: 12px;" href="#!">Makanan Khas</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown7" class="dropdown-content">
  <li><a id="menu7-1" style="color:#777;font-size: 12px;" href="{{url('create_new_artikel') }}">Add Artikel</a></li>
  <li class="divider"></li>
  <li><a id="menu7-2" style="color:#777;font-size: 12px;" href="{{url('menu1') }}">Menu 1</a></li>
</ul>
<nav>
    				@if (Auth::guest())
    					<div style="background-color:#fff;height:65px;margin-top:20px;text-align:center;border-bottom:2px solid #E9EDF1;padding-right:11px;" class="nav-wrapper">
    					<ul class="right hide-on-med-and-down">
						<li><a class="a-m" href="{{ url('/') }}">HOME</a></li>
						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu1" data-activates="dropdown1" href="{{ url('/') }}">PAGESTI <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu2" data-activates="dropdown2" href="{{ url('/') }}">PROFILE <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777;font-size: 13px;width:162px;" class="dropdown-button" id="menu3" data-activates="dropdown3" href="{{ url('/') }}">AGENDA KEGIATAN <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu4" data-activates="dropdown4" href="{{ url('/') }}">INFO <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu5" data-activates="dropdown5" href="{{ url('/') }}">GALERI <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu6" data-activates="dropdown6" href="{{ url('/') }}">CERITA DESA <i class="fa fa-angle-double-down"></i></a></li>
						<li><a id="menu7" style="width:140px !important" class="a-m" href="{{ url('/') }}">KRITIK DAN SARAN</a></li>
						<li><a id="menu8" class="a-m" href="{{ url('/') }}">CONTACT</a></li>

						<li><a style="margin-right:200"  class="a-m" href="/auth/login"><i class="fa fa-sign-in"></i> LOGIN</a></li>
						<!-- <li><a class="a-m" href="/auth/register"><i class="fa fa-user-plus"></i> Make New User</a></li> -->
						</ul>
  						</div>
					@else
					<div style="background-color:#fff;height:65px;margin-top:20px;text-align:center;border-bottom:2px solid #E9EDF1;padding-right:11px;" class="nav-wrapper">
    					<ul class="right hide-on-med-and-down">
								<li><a class="a-m" href="{{ url('all_artikel') }}">HOME</a></li>
								<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu1" data-activates="dropdown1" href="{{ url('/') }}">PAGESTI <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu2" data-activates="dropdown2" href="{{ url('/') }}">PROFILE <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777;font-size: 13px;width:162px;" class="dropdown-button" id="menu3" data-activates="dropdown3" href="{{ url('/') }}">AGENDA KEGIATAN <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu4" data-activates="dropdown4" href="{{ url('/') }}">INFO <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu5" data-activates="dropdown5" href="{{ url('/') }}">GALERI <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" id="menu6" data-activates="dropdown6" href="{{ url('/') }}">CERITA DESA <i class="fa fa-angle-double-down"></i></a></li>
								<li><a id="menu7" style="width:140px !important" class="a-m" href="{{ url('/') }}">KRITIK DAN SARAN</a></li>
								<li><a id="menu8" class="a-m" href="{{ url('/') }}">CONTACT</a></li>
        						<li><a style="color:#777;font-size: 13px;width:123px;" class="dropdown-button" data-activates="dropdown7" href="{{ url('create_new_artikel') }}">CREATE <i class="fa fa-angle-double-down"></i></a></li>
        						<!-- <li><a class="a-m" href="{{url('menu1') }}"><i class="fa fa-cubes"></i> Menu 1</a></li> -->
								<!-- <li><a style="color:#777;font-size: 13px;" class="dropdown-button" data-activates="dropdown8" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i class="fa fa-angle-double-down"></i></a></li> -->
								<!-- <li><a class="a-m" href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a></li> -->
					 </ul>
  						</div>
					@endif
      <!-- Dropdown Trigger -->

</nav><br><br><br>
