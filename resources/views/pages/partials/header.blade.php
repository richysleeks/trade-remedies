<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
	<div class="kt-header__top">
		<div class="kt-container">
			<div class="kt-header__brand  kt-aside__brand--skin-light   kt-grid__item" id="kt_header_brand">
				<div class="kt-header__brand-logo">
					<a href="index.html">
						<img alt="Logo" src="{{asset('assets/media/logos/logo-5.png')}}" />
						Some text here
					</a>
				</div>
			</div>

			<div class="kt-header__topbar">
				<!--begin: Search -->
				<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop" id="kt_quick_search_toggle">
					<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
						<span class="kt-header__topbar-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24" />
									<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>

							<!--<i class="flaticon2-search-1"></i>-->
						</span>
					</div>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
						<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
							<form method="get" class="kt-quick-search__form">
								<div class="input-group">
									<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
									<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
									<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
								</div>
							</form>
							<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
							</div>
						</div>
					</div>
				</div>
				<!--end: Search -->

				<!--begin: Quick panel toggler -->
				<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">
					<div class="kt-header__topbar-wrapper">
						<span class="kt-header__topbar-icon kt-header__topbar-icon--danger" id="kt_quick_panel_toggler_btn">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24" />
									<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
									<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--<i class="flaticon2-menu-2"></i>-->
						</span>
					</div>
				</div>
				<!--end: Quick panel toggler -->

				<!--begin: User bar -->
				<div class="kt-header__topbar-item kt-header__topbar-item--user">
					<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
						<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
						<span class="kt-hidden kt-header__topbar-username">Nick</span>
						<img class="kt-hidden-" alt="Pic" src="{{asset('assets/media/users/300_21.jpg')}}" />
						<span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden">
							<b>S</b>
						</span>
					</div>

					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

						<!--begin: Head -->
						<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
							<div class="kt-user-card__avatar">
								<img class="kt-hidden-" alt="Pic" src="{{asset('assets/media/users/300_25.jpg')}}" />

								<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
								<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
							</div>
							<div class="kt-user-card__name">
								Sean Stone
							</div>
							<div class="kt-user-card__badge">
								<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
							</div>
						</div>
						<!--end: Head -->

						<!--begin: Navigation -->
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-calendar-3 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title kt-font-bold">
										My Profile
									</div>
									<div class="kt-notification__item-time">
										Account settings and more
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-mail kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title kt-font-bold">
										My Messages
									</div>
									<div class="kt-notification__item-time">
										Inbox and tasks
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-rocket-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title kt-font-bold">
										My Activities
									</div>
									<div class="kt-notification__item-time">
										Logs and notifications
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-hourglass kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title kt-font-bold">
										My Tasks
									</div>
									<div class="kt-notification__item-time">
										latest tasks and projects
									</div>
								</div>
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        @csrf
		                    </form>

							<div class="kt-notification__custom">
								<a class="btn btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									Sign Out
		                        </a>
							</div>
						</div>
						<!--end: Navigation -->
					</div>
				</div>
				<!--end: User bar -->
			</div>
			<!-- end:: Header Topbar -->
		</div>
	</div>
</div>