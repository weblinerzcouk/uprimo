@include('admin.includes.header')
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Ads</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Ads</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->

        <div class="row">
            <div class="col-12">
                <div class="material-card card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped border white-box">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="termsrow">
                                @foreach($users as $users_row)
                                    <tr id="row{{$users_row->id}}">
                                        <td>{{$users_row->id}}</td>
                                        <td>{{$users_row->name}}</td>
                                        <td>{{$users_row->email}}</td>
                                        <td>{{$users_row->phone_no}}</td>
                                        <td>
                                            @if($users_row->status==1)
                                                <label class="label label-success">Active</label><br>
                                                <a data-toggle="active_user" href="{{url('/admin/active_user/'.$users_row->id)}}">InActive</a>
                                            @else
                                                <label class="label label-danger">InActive</label><br>
                                                <a data-toggle="active_user" href="{{url('/admin/active_user/'.$users_row->id)}}">Active</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a data-toggle="view_user" href="{{url('/admin/view_user/'.$users_row->id)}}" class="btn btn-success">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Products</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

</div>
<!-- /#page-wrapper -->
</div>
<div class="modal fade" id="view_user" tabindex="-1" role="dialog" aria-labelledby="exampleModal-lgTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal-lgTitle">View Ad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
@include('admin.includes.footer')
<script type="text/javascript">
    $(document).on('click','a[data-toggle=view_user]',function (e) {
        e.preventDefault();
        $('#view_user').find('.modal-body').load($(this).attr('href'));
        $('#view_user').modal('show');
    });
</script>
<script type="text/javascript">
    $(document).on('click','a[data-toggle=active_user]',function (e) {
        e.preventDefault();
        var str = '';
        $.ajax({
            url         : $(this).attr('href'),
            type        : 'get',
            dataType    : 'json',
            success     : function (result) {
                $.each(result,function (i,item) {
                    if(item.status==1)
                    {
                        var dbtn = '<label class="label label-success">Active</label><br> <a data-toggle="active_user" href="/admin/active_user/'+item.id+'">InActive</a>'
                    }
                    else{
                        var dbtn = '<label class="label label-danger">Inactive</label><br> <a data-toggle="active_user" href="/admin/active_user/'+item.id+'">Active</a>'
                    }
                    var html = ' <tr id="row'+item.id+'">\n' +
                        '                                                <td>'+item.id+'</td>\n' +
                        '                                                <td>'+item.name+'</td>\n' +
                        '                                                <td>'+item.email+'</td>\n' +
                        '                                                <td>'+item.phone_no+'</td>\n' +
                        '                                                 <td>'+dbtn+'</td>\n' +
                        '                                                <td>\n' +
                        '                                                 <a data-toggle="view_user" href="/admin/view_user/'+item.id+'" class="btn btn-success">\n' +
                        '                                                    <span class="fa fa-eye"></span>\n' +
                        '                                                </a>\n' +
                        '                                                 <button class="btn btn-danger" data-toggle="modal" data-target="#">\n' +
                        '                                                    <span class="fa fa-trash"></span>\n' +
                        '                                                 </button>\n' +
                        '                                                </td>\n' +
                        '                                            </tr>';
                    str+=html;
                });
                $('#termsrow').html(str);
            },
            error        : function (data) {
                var response = JSON.parse(data.responseText);
                var str = '';
                $.each(response.errors,function (i,item) {
                    var html = '<p class="alert alert-danger alert-dismissible"><strong>Error!!</strong> &nbsp;&nbsp; '+item+'&nbsp;&nbsp;&nbsp; <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>';
                    str = str + html;
                });
                $('#alrtmsg1').html(str);
            }
        })
    });
</script>
