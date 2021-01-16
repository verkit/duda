<header id="header" class="page-header bg-white box-shadow animate fadeInDown">
    <div class="navbar navbar-expand-lg">
        <!-- btn to toggle sidenav on small screen -->
        <a class="d-lg-none i-con-h-a px-1" data-toggle="modal" data-target="#aside">
            <i class="i-con i-con-menu text-muted"></i>
        </a>
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
            <svg fill="#a9a9a9" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path class="fill"
                    d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z" />
                <path d="M0 0h24v24H0z" fill="none" />
            </svg>
            <!-- <img src="assets/img/logo.png" alt="..."> -->
            <span class="hidden-folded d-inline l-s-n-1x ">Agile</span>
        </a>
        <!-- / brand -->

        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
            <form class="input-group m-2 my-lg-0 i-con-h-a ">
                <span class="input-group-prepend">
                    <button type="button" class="btn no-shadow no-bg px-0"><i
                            class="i-con i-con-search text-fade w-16"></i></button>
                </span>
                <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search..."
                    data-plugin="typeahead">
            </form>
        </div>

        <ul class="nav navbar-menu order-1 order-lg-2">

            <li class="nav-item d-none d-sm-block">
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link px-2 i-con-h-a" data-toggle="dropdown">
                    <i class="i-con i-con-droplet solid text-success"></i>
                </a>
                <!-- ############ Setting START-->
                <div class="dropdown-menu dropdown-menu-center mt-3 w animate fadeIn">
                    <div class="setting px-3">
                        <div class="mb-2">
                            <strong>Setting:</strong>
                        </div>
                        <div class="mb-3" id="settingLayout">
                            <label class="ui-check my-1 d-block">
                                <input type="checkbox" name="stickyHeader">
                                <i></i>
                                <small>Sticky header</small>
                            </label>
                            <label class="ui-check my-1 d-block">
                                <input type="checkbox" name="stickyAside">
                                <i></i>
                                <small>Sticky aside</small>
                            </label>
                            <label class="ui-check my-1 d-block">
                                <input type="checkbox" name="foldedAside">
                                <i></i>
                                <small>Folded Aside</small>
                            </label>
                            <label class="ui-check my-1 d-block">
                                <input type="checkbox" name="hideAside">
                                <i></i>
                                <small>Hide Aside</small>
                            </label>
                        </div>
                        <div class="mb-2">
                            <strong>Color:</strong>
                        </div>
                        <div>
                            <label class="radio radio-inline ui-check ui-check-md">
                                <input type="radio" name="bg" value="">
                                <i></i>
                            </label>
                            <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                                <input type="radio" name="bg" value="bg-dark">
                                <i class="bg-dark"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- ############ Setting END-->
            </li>
            <!-- Notification -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link px-2 i-con-h-a mr-lg-2" data-toggle="dropdown">
                    <i class="i-con i-con-bell"><i></i></i>
                    <span class="badge badge-pill badge-up bg-primary">5</span>
                </a>
                <!-- dropdown -->
                <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                    <div class="scrollable hover" style="max-height: 250px">
                        <div class="list list-row animates animates-fadeInUp">
                            <div class="list-item " data-id="1">
                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-primary-lt">
                                            <img src="{{ asset('assets/img/a1.jpg')}}" alt=".">
                                        </span>
                                    </a>
                                </div>

                                <div class="flex">
                                    <div class="item-feed h-2x">
                                        <a href='#'>@Mike</a> Send you a message
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="11">

                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-info-lt">
                                            K
                                        </span>
                                    </a>
                                </div>

                                <div class="flex">

                                    <div class="item-feed h-2x">
                                        Prepare the documentation for the <a href='#'>Fitness app</a>
                                    </div>

                                </div>
                            </div>
                            <div class="list-item " data-id="2">
                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-primary-lt">
                                            <img src="{{ asset('assets/img/a2.jpg')}}" alt=".">
                                        </span>
                                    </a>
                                </div>
                                <div class="flex">
                                    <div class="item-feed h-2x">
                                        What's the project progress now
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="12">
                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-info-lt">
                                            D
                                        </span>
                                    </a>
                                </div>
                                <div class="flex">
                                    <div class="item-feed h-2x">
                                        <a href='#'>Mike</a> upload last week lessons summary
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="9">
                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-info-lt">
                                            <img src="{{ asset('assets/img/a9.jpg')}}" alt=".">
                                        </span>
                                    </a>
                                </div>
                                <div class="flex">
                                    <div class="item-feed h-2x">
                                        Added to <a href='#'>GameTime</a> team
                                    </div>
                                </div>
                            </div>
                            <div class="list-item " data-id="6">
                                <div>
                                    <a href="#">
                                        <span class="w-32 avatar circle bg-danger-lt">
                                            <img src="{{ asset('assets/img/a6.jpg')}}" alt=".">
                                        </span>
                                    </a>
                                </div>

                                <div class="flex">
                                    <div class="item-feed h-2x">
                                        Homepage mockup design
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex px-3 py-2 b-t">
                        <div class="flex">
                            <span>6 Notifications</span>
                        </div>
                        <a href="setting.html">See all <i class="fa fa-angle-right text-muted"></i></a>
                    </div>
                </div>
                <!-- / dropdown -->
            </li> --}}

            <!-- User dropdown menu -->
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown"
                    class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color">
                    <span class=" mx-2 d-none l-h-1x d-lg-block text-right">
                        <small class='text-fade d-block mb-1'>Hello, Welcome</small>
                        <span>{{auth()->user()->name}}</span>
                    </span>
                    <span class="avatar w-36">
                        <img src="{{ asset('assets/img/a0.jpg')}}" alt="...">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right w pt-0 mt-3 animate fadeIn">
                    <div class="row no-gutters mb-2 text-center r-t b-b">
                        <!-- <div class="col-4 b-r">
                            <a href="app.user.html" class="py-3 d-block i-con-h-a">
                                <i class="i-con i-con-users"><i></i></i>
                            </a>
                        </div>
                        <div class="col-4 b-r">
                            <a href="app.mail.html" class="py-3 d-block i-con-h-a">
                                <i class="i-con i-con-mail"><i></i></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="app.message.html" class="py-3 d-block i-con-h-a">
                                <i class="i-con i-con-comment"><i></i></i>
                            </a>
                        </div> -->
                    </div>
                    <a class="dropdown-item" href="page.setting.html">
                        <span>Account Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- Navarbar toggle btn -->
            <li class="nav-item d-lg-none">
                <a href="#" class="nav-link i-con-h-a px-1" data-toggle="collapse" data-toggle-class
                    data-target="#navbarToggler">
                    <i class="i-con i-con-nav text-muted"><i></i></i>
                </a>
            </li>
        </ul>

    </div>
</header>
