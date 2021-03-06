<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - 韩志飞Blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('') }}" class="site_title"><i class="fa fa-desktop"></i> <span style="margin-left: 30px">hzfblog</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{ session('user.avatar') }}" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>
                            @if(date('a') == 'am')
                                上午好
                                @else
                                下午好
                            @endif
                        </span>
                        <h2 style="font-size: 26px">{{ session('user.name') }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-book"></i> 文章管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/article/index') }}">文章列表</a></li>
                                    <li><a href="{{ url('admin/article/draft') }}">草稿列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-th"></i> 分类菜单 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/category/index') }}">分类管理</a></li>
                                    <li><a href="{{ url('admin/nav/index') }}">菜单管理</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-tags"></i> 标签管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/tag/index') }}">标签列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-comments"></i> 评论管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/comment/index') }}">评论列表</a></li>
                                </ul>
                            </li>
                            @if(session('user.is_admin') == '2')
                            <li>
                                <a><i class="fa fa-users"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/user/index') }}">管理员列表</a></li>
                                    <li><a href="{{ url('admin/oauthUser/index') }}">第三方用户列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-link"></i> 友情链接 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/friendshipLink/index') }}">友情链接</a></li>
                                    <li><a href="{{ url('admin/site/index') }}">推荐博客</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-commenting"></i> 随言碎语 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/chat/index') }}">随言碎语列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-cogs"></i> 系统设置 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/config/email') }}">邮箱配置</a></li>
                                    <li><a href="{{ url('admin/config/oauth') }}">第三方登录</a></li>
                                    <li><a href="{{ url('admin/config/edit') }}">其他配置</a></li>
                                    <li><a href="{{ url('admin/gitProject/index') }}">开源项目</a></li>
                                    <li><a href="{{ url('admin/config/clear') }}">清空缓存</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    @if(session('user.is_admin') == '2')
                    <a href="{{ url('admin/config/edit') }}" data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    @endif
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="{{ url('admin/login/logout') }}" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>


        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="nav toggle" style="margin-left: -14px">
                        <a href="{{ url('admin/index/index') }}"><i class="fa fa-home"></i></a>
                    </div>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset(session('user.avatar')) }}" alt="">{{ session('user.name') }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{ url('admin/login/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                        <h3>@yield('nav') <small>@yield('description')</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." name="wd" value="{{ request()->input('wd') }}">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- footer content -->
        <footer>
            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<script src="{{ mix('js/admin.js') }}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
@yield('js')
</body>
</html>
