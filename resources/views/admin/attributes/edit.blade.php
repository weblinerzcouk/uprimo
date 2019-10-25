<div class="white-box p-2">
    <form id="edit_attribute_form" class="form-horizontal form-material" method="post" action="{{url('/admin/update_attribute')}}">
        @csrf
        <div class="form-group">
            <label class="col-md-12">ID</label>
            <div class="col-md-12">
                <input type="text" placeholder="ID" class="form-control form-control-line" name="attribute_id" value="{{$attribute->id}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Category</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="category" id="category">
                    @foreach($categories as $categories_row)
                        <option value="{{$categories_row->id}}">{{$categories_row->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Sub-Category</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="sub_category" id="sub_category">
                    <option value="0">Select</option>
                   <option value="{{$attribute->sub_category}}">{{$attribute->sub_category}}</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Name</label>
            <div class="col-md-12">
                <input type="text" placeholder="attribute Name" class="form-control form-control-line" name="attribute_name" value="{{$attribute->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Status</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="status">
                    @if($attribute->status==1)
                    <option value="1" selected>Active</option>
                    <option value="0">InActive</option>
                        @else
                        <option value="0" selected>InActive</option>
                        <option value="1">Active</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-7">
                <button type="submit" class="btn btn-success">Update attribute</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </form>
</div>
<script type="text/javascript">
    $('#edit_attribute_form').submit(function () {
        event.preventDefault();
        var str = '';
        $.ajax({
            url         : $(this).attr('action'),
            type        : 'post',
            data        : new FormData(this),
            processData : false,
            contentType : false,
            success     : function ($result) {
                console.log($result);
                $.each($result,function (i,item) {
                    if (item.status==1)
                    {
                        var dbtn = '<label class="label label-success">Active</label>';
                    }
                    else
                    {
                        var dbtn = '<label class="label label-danger">InActive</label>';
                    }
                    var html = '<tr id="row'+item.id+'"><td>'+item.id+'</td><td>'+item.name+'</td><td>'+dbtn+'</td><td><a class="btn btn-success" href="/admin/edit_attribute/'+item.id+'" data-toggle="edit_attribute">\n' +
                        '                                                <span class="fa fa-pencil"></span>\n' +
                        '                                            </a>\n' +
                        '                                            <a class="btn btn-danger" href="/admin/delete_attribute/'+item.id+'" data-toggle="delete_attribute">\n' +
                        '                                                <span class="fa fa-trash"></span>\n' +
                        '                                            </a></td></tr>';
                    str +=html;
                });
                $('#termsrow').html(str);
                $('#edit_modal').modal('toggle');
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
    $('#category').on('change', function () {
        event.preventDefault();
        var selected_value = $('#category :selected').val();
        var str =  '<option value="">Select</option>';
        $.ajax({
            url    : '/admin/sub_categories/'+selected_value,
            type   : 'get',
            dataType : 'json',
            success  : function ($data) {
                $.each($data,function (i,item) {
                    str += '<option value="'+item.id+'">'+item.name+'</option>'
                });
                $('#sub_category').html(str);
            } ,
            error  : function () {
                console.log('in error');
            }
        });
    });
</script>
