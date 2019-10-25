@include('admin.includes.header')
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Categories</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Categories</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-md-12 add-new-btn">
                    <a type="button" class="btn btn-success pull-right" href="{{url('/admin/add_city')}}" data-toggle="add_new" >
                        + Add New
                    </a>
                </div>
            </div>
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
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="termsrow">
                                    @foreach($city as $city_row)
                                    <tr id="row{{$city_row->id}}">
                                        <td>{{$city_row->id}}</td>
                                        <td>{{$city_row->name}}</td>
                                        <td>
                                            @if($city_row->status==1)
                                                <label class="label label-success">Active</label>
                                                @else
                                                <label class="label label-danger">InActive</label>
                                                @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{url('/admin/edit_city/'.$city_row->id)}}" data-toggle="edit_city">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger" href="{{url('/admin/delete_city/'.$city_row->id)}}" data-toggle="delete_city">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
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

<div class="modal" id="add_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add city</h4>
            </div>
            <div class="modal-body">

            </div>

        </div>
    </div>
</div>
<div class="modal" id="edit_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit city</h4>
            </div>
            <div class="modal-body">

            </div>

        </div>
    </div>
</div>
@include('admin.includes.footer')
<script>
    $(document).on('click','a[data-toggle=add_new]',function (e) {
        e.preventDefault();
        $('#add_modal').find('.modal-body').load($(this).attr('href'));
        $('#add_modal').modal('show');
    });
    $(document).on('click','a[data-toggle=edit_city]',function (e) {
        e.preventDefault();
        $('#edit_modal').find('.modal-body').load($(this).attr('href'));
        $('#edit_modal').modal('show');
    });
    //delete_country
    $(document).on('click','a[data-toggle=delete_city]',function (e) {
        e.preventDefault();
        var str = '';
        $.ajax({
            url         : $(this).attr('href'),
            type        : 'get',
            dataType    : 'json',
            success     : function ($result) {
                if ($result.length>0)
                {
                    $.each($result,function (i,item) {
                        if (item.status==1)
                        {
                            var dbtn = '<label class="label label-success">Active</label>';
                        }
                        else
                        {
                            var dbtn = '<label class="label label-danger">InActive</label>';
                        }
                        var html = '<tr id="row'+item.id+'"><td>'+item.id+'</td><td>'+item.name+'</td><td>'+dbtn+'</td><td><a class="btn btn-success" href="/admin/edit_city/'+item.id+'" data-toggle="edit_city">\n' +
                            '                                                <span class="fa fa-pencil"></span>\n' +
                            '                                            </a>\n' +
                            '                                            <a class="btn btn-danger" href="/admin/delete_city/'+item.id+'" data-toggle="delete_city">\n' +
                            '                                                <span class="fa fa-trash"></span>\n' +
                            '                                            </a></td></tr>';
                        str +=html;
                    });
                }
                else
                {
                    str = '<p align="center">No data available in table</p>';
                }

                $('#termsrow').html(str);
            },
            error        : function (result) {

            }
        })
    });
</script>
