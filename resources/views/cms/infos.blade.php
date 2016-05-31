@extends('layouts.cms')

@section('content')
    <div class="page-content sidebar-page right-sidebar-page clearfix">
        <!-- .page-content-wrapper -->
        <div class="page-content-wrapper">
            <div class="page-content-inner">
                <!-- Start .page-content-inner -->
                <div id="page-header" class="clearfix">
                    <div class="page-header">
                        <h2>授权用户</h2>
                        <span class="txt"></span>
                    </div>

                </div>
                <!-- Start .row -->
                <div class="row">

                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="panel panel-default">
                            <!-- Start .panel -->
                            <div class="panel-body">
                                <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>缩略图</th>
                                        <th>类别</th>
                                        <th>姓名</th>
                                        <th>手机</th>
                                        <th>地址</th>
                                        <th>创建时间</th>
                                        <th>创建IP</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($infos as $info)
                                    <tr>
                                        <td>{{ $info->id }}</td>
                                        <td><a href="{{ $info->thumb }}"><img src="{{ $info->thumb }}" width="100" height="100" /></a></td>
                                        <td>{{ $info->file_type == 0 ? '图片' : '视频' }}</td>
                                        <td>{{ $info->name }}</td>
                                        <td>{{ $info->mobile }}</td>
                                        <td>{{ $info->address }}</td>
                                        <td>{{ $info->created_time }}</td>
                                        <td>{{ $info->created_ip }}</td>
                                        <td><a href="{{ url('cms/info/update/status/'.$info->id) }}" title="点击更改" class="label label-info update">{{ $info->status == 0 ? '隐藏' : '正常' }}</a></td>
                                        <td><a href="{{ url('cms/info/delete/'.$info->id) }}" class="label label-info delete">删除</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="dataTables_paginate paging_bootstrap" id="basic-datatables_paginate">
                                            {!! $infos->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .panel -->
                    </div>
                </div>
                <!-- End .row -->
            </div>
            <!-- End .page-content-inner -->
        </div>
        <!-- / page-content-wrapper -->
    </div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('.delete').click(function(){
        var url = $(this).attr('href');
        var obj = $(this).parents('td').parent('tr');
        if( confirm('该操作无法返回,是否继续?')){
            $.ajax(url, {
                dataType: 'json',
                success: function(json){
                    if(json.ret == 0){
                        obj.remove();
                    }
                },
                error: function(){
                    alert('请求失败~');
                }
            });
        }
        return false;
    })
    $('.update').click(function(){
        var url = $(this).attr('href');
        var obj = $(this);
        $.ajax(url, {
            dataType: 'json',
            success: function(json){
                if(json.ret == 0){
                    location.reload();
                }
            },
            error: function(){
                alert('请求失败~');
            }
        });
        return false;
    })
});
</script>
@endsection
