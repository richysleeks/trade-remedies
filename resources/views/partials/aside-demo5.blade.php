	<!-- begin:: Aside -->
   <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
   <div class="kt-aside  kt-aside--skin-light  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

      <!-- begin:: Aside Menu -->
      <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
         <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--skin-light " data-ktmenu-vertical="1" data-ktmenu-scroll="0">
            <ul class="kt-menu__nav ">
               <li class="kt-menu__section ">
                  <h4 class="kt-menu__section-text">Components</h4>
                  <i class="kt-menu__section-icon flaticon-more-v2"></i>
               </li>

            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('department')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-fill"></i><span class="kt-menu__link-text">Departments</span></a></li>
              
               <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">Manage Admins</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                     <ul class="kt-menu__subnav">
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Administrators</span></a></li>
                        {{-- <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Asign Privileges</span></a></li> --}}
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create Privileges</span></a></li>
                     </ul>
                  </div>
               </li>

               <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">Manage Cases</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                     <ul class="kt-menu__subnav">
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('cases')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('asigned-case')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Asigned Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('due-case')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Due Asigned Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('finalized-case')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finalised Cases</span></a></li>
                     </ul>
                  </div>
               </li>

               <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">Documents</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                     <ul class="kt-menu__subnav">
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Documents</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Upload New </span></a></li>

                     </ul>
                  </div>
               </li>
               <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-fill"></i><span class="kt-menu__link-text">Exporters</span></a></li>
               <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">My Account</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                     <ul class="kt-menu__subnav">
                     <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('create-case')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">File New Case</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Initiated Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finalised Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pending Cases</span></a></li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text"> Inbox</span></a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </div>

      <!-- end:: Aside Menu -->
   </div>
   <!-- end:: Aside -->