<nav>
    <div class="nav-wrapper" style="background-color: #1565c0 !important">
      <a href="#" style="margin-left:10px;font-weight:bold;font-size:55px;" class="brand-logo"> BLOG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">



					@if (Auth::guest())
						<li><a href="{{ url('/') }}"><i class="fa fa-eye"></i> All Artikel</a></li>
						<li><a href="/auth/login"><i class="fa fa-sign-in"></i> Login</a></li>
						<li><a href="/auth/register"><i class="fa fa-user-plus"></i> Register</a></li>

					@else
								<li><a href="{{ url('home') }}"><i class="fa fa-home"   ></i> HOME</a></li>
        						<li><a href="{{ url('create_new_artikel') }}"><i class="fa fa-pencil-square"></i> NEW</a></li>
        						<li><a href="{{ url('all_artikel') }}"><i class="fa fa-eye"></i> ALL</a></li>
								<li><a href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
								<li><a href="/auth/logout"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>