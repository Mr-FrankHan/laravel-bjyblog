@extends('layouts.admin')

@section('title', '编辑随言碎语')

@section('nav', '编辑随言碎语')

@section('description', '编辑随言碎语')

@section('css')
    <link href="{{ asset('statics/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <form class="form-inline" action="{{ url('admin/chat/update', [$data->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>内容</th>
                <td>
                    <textarea class="form-control modal-sm" name="content" cols="40" rows="10" placeholder="随言碎语内容">{{ $data['content'] }}</textarea>
                </td>
            </tr>
            <tr>
                <th>配图</th>
                <td>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 320px; height: 180px;">
                            <img src="{{ asset($data->image) }}" alt="配图">
                            <input type="hidden" name="image" value="{{ $data->image }}">
                        </div>
                        <div>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">选择图片</span>
                                <span class="fileinput-exists">更改</span>
                                <input type="file" name="cover">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">删除</a>
                        </div>
                    </div>
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
    <script src="{{ asset('statics/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
@endsection
