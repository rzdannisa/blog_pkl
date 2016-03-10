<nav>
<div class="nav-wrapper" style="background-color:#64b5f6 !important;height:35px;">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
    </ul>
  </div>
    <div class="nav-wrapper" style="background-color: #2196f3 !important;height:75px;padding-top:5px;">
      <a href="#" style="margin-left:10px;font-weight:bold;font-size:55px;" class="brand-logo"><i class="fa fa-cubes"></i> BLOG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
				</ul>
			</div>
  </div>
</nav><br><br><br>
<br>
<ul style="margin-top:65px;color:black" id="dropdown1" class="dropdown-content">
  <li><a class="a-m" href="#!">Sejarah Psgesti</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Makna Logo</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown2" class="dropdown-content">
  <li><a class="a-m" href="#!">Pengurus</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Wewenang</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Visi dan Misi</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown3" class="dropdown-content">
  <li><a class="a-m" href="#!">Program Kerja</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Jadwal Kegiatan</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown4" class="dropdown-content">
  <li><a class="a-m" href="#!">Pendaftaran</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Data Anggota</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown5" class="dropdown-content">
  <li><a class="a-m" href="#!">Foto</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Video</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown6" class="dropdown-content">
  <li><a class="a-m" href="#!">Budaya Desa</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="#!">Makanan Khas</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown7" class="dropdown-content">
  <li><a class="a-m" href="{{url('create_new_artikel') }}">Add Artikel</a></li>
  <li class="divider"></li>
  <li><a class="a-m" href="{{url('menu1') }}">Add at menu 1</a></li>
</ul>
<ul style="margin-top:65px;color:black" id="dropdown8" class="dropdown-content">
<li><a class="a-m" href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>
<nav>
  <div style="background-color:#fff;height:65px;margin-top:20px;text-align:center;border-bottom:2px solid #E9EDF1;padding-right:18px;" class="nav-wrapper">
    <ul class="right hide-on-med-and-down">
    				@if (Auth::guest())
						<li><a class="a-m" href="{{ url('/') }}">HOME</a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown1" href="{{ url('/') }}">PAGESTI <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown2" href="{{ url('/') }}">PROFILE <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown3" href="{{ url('/') }}">AGENDA KEGIATAN <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown4" href="{{ url('/') }}">INFO <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown5" href="{{ url('/') }}">GALERI <i class="fa fa-angle-double-down"></i></a></li>
						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown6" href="{{ url('/') }}">CERITA DESA <i class="fa fa-angle-double-down"></i></a></li>
						<li><a class="a-m" href="{{ url('/') }}">KRITIK DAN SARAN</a></li>
						<li><a class="a-m" href="{{ url('/') }}">CONTACT</a></li>

						<li><a class="a-m" href="/auth/login"><i class="fa fa-sign-in"></i> Login</a></li>
						<!-- <li><a class="a-m" href="/auth/register"><i class="fa fa-user-plus"></i> Make New User</a></li> -->
					@else
								<li><a class="a-m" href="{{ url('all_artikel') }}">HOME</a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown1" href="{{ url('/') }}">PAGESTI <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown2" href="{{ url('/') }}">PROFILE <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown3" href="{{ url('/') }}">AGENDA KEGIATAN <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown4" href="{{ url('/') }}">INFO <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown5" href="{{ url('/') }}">GALERI <i class="fa fa-angle-double-down"></i></a></li>
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown6" href="{{ url('/') }}">CERITA DESA <i class="fa fa-angle-double-down"></i></a></li>
								<li><a class="a-m" href="{{ url('/') }}">KRITIK DAN SARAN</a></li>
								<li><a class="a-m" href="{{ url('/') }}">CONTACT</a></li>
        						<li><a style="color:#777" class="dropdown-button" data-activates="dropdown7" href="{{ url('create_new_artikel') }}">Create New <i class="fa fa-angle-double-down"></i></a></li>
        						<!-- <li><a class="a-m" href="{{url('menu1') }}"><i class="fa fa-cubes"></i> Menu 1</a></li> -->
								<li><a style="color:#777" class="dropdown-button" data-activates="dropdown8" href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
								<!-- <li><a class="a-m" href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a></li> -->
					@endif
      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav><br><br><br>
