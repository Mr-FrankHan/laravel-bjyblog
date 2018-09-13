@extends('layouts.admin')

@section('title', '配置项')

@section('css')
    <link href="{{ asset('statics/gentelella/vendors/iCheck/skins/square/blue.css') }}" rel="stylesheet">
    <link href="{{ asset('statics/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('nav', '配置项')

@section('description', '配置项')

@section('content')
    <form class="form-inline" enctype="multipart/form-data" action="{{ url('admin/config/update') }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>备案号：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="117" value="{{  $config['hzfblog.icp'] }}" >
                </td>
            </tr>
            <tr>
                <th>站长邮箱：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="118" value="{{  $config['hzfblog.admin_email'] }}" >
                </td>
            </tr>
            <tr>
                <th>网站名：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="101" value="{{  $config['hzfblog.web_name'] }}" >
                </td>
            </tr>
            <tr>
                <th>网站标题：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="149" value="{{  $config['hzfblog.head.title'] }}" >
                </td>
            </tr>
            <tr>
                <th>网站关键字：</th>
                <td>
                    <textarea class="form-control modal-sm" name="102" rows="5" placeholder="">{{  $config['hzfblog.head.keywords'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>网站描述：</th>
                <td>
                    <textarea class="form-control modal-sm" name="103" rows="5" placeholder="">{{  $config['hzfblog.head.description'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>默认作者：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="125" value="{{  $config['hzfblog.author'] }}" >
                </td>
            </tr>
            <tr>
                <th>文章保留版权提示：</th>
                <td>
                    <textarea class="form-control modal-sm" name="119" rows="5" placeholder="">{{  $config['hzfblog.copyright_word'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>文章图片title和alt内容：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="141" value="{{  $config['hzfblog.alt_word'] }}" >
                </td>
            </tr>
            <tr>
                <th>文字水印内容：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="107" value="{{  $config['hzfblog.water.text'] }}" >
                </td>
            </tr>
            <tr>
                <th>文字水印文字颜色：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="110" value="{{  $config['hzfblog.water.color'] }}" >
                </td>
            </tr>
            <tr>
                <th>百度推送site提交链接：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="128" value="{{  $config['hzfblog.baidu_site_url'] }}" >
                </td>
            </tr>
            <tr>
                <th>第三方统计代码：</th>
                <td>
                    <textarea class="form-control modal-sm" name="123" rows="5" placeholder="">{{  $config['hzfblog.statistics'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>用于接收通知的邮箱：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="148" value="{{  $config['hzfblog.notification_email'] }}" >
                </td>
            </tr>
            <tr>
                <th>QQ群说明文章id：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="150" value="{{  $config['hzfblog.qq_qun.article_id'] }}" >
                </td>
            </tr>
            <tr>
                <th>QQ群账号：</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="151" value="{{  $config['hzfblog.qq_qun.number'] }}" >如果群账号为空则前台不展示赞赏捐赠模块
                </td>
            </tr>
            <tr>
                <th>QQ群代码：</th>
                <td>
                    <textarea class="form-control modal-sm" name="152" rows="5" placeholder="">{{  $config['hzfblog.qq_qun.code'] }}</textarea><a href="http://qun.qq.com/join.html" target="_blank">http://qun.qq.com/join.html</a>
                </td>
            </tr>
            <tr>
                <th>QQ群二维码：</th>
                <td>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 180px; height: 180px;">
                            <img src="{{ asset($config['hzfblog.qq_qun.or_code']) }}" alt="群二维码">
                        </div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">选择图片</span>
                                <span class="fileinput-exists">更改</span>
                                <input type="file" name="153">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">删除</a>
                        </div>
                    </div>
                    <a href="http://qun.qq.com/join.html" target="_blank">http://qun.qq.com/join.html</a>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('js')
    <script src="{{ asset('statics/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('statics/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.bjy-icheck').iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection
