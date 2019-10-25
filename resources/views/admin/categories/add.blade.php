<div class="white-box p-2">
    <form id="add_category_form" class="form-horizontal form-material" method="post" action="{{url('/admin/save_category')}}">
       @csrf
        <div class="form-group">
            <label class="col-md-12">ID</label>
            <div class="col-md-12">
                <input type="text" placeholder="ID" class="form-control form-control-line" name="category_id" value="{{$category_id}}">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Name</label>
            <div class="col-md-12">
                <input type="text" placeholder="Category Name" class="form-control form-control-line" name="category_name">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Icon</label>
            <div class="col-md-12">
                <input type="file" placeholder="Icon" class="form-control form-control-line" name="file">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Description</label>
            <div class="col-md-12">
                <textarea rows="5" cols="75" name="description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Status</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="status">
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-7">
                <button type="submit" class="btn btn-success">Add Category</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </form>
</div>
<script type="text/javascript">
    $('#add_category_form').submit(function () {
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
                    var html = '<tr id="row'+item.id+'"><td>'+item.id+'</td><td>'+item.name+'</td><td>'+dbtn+'</td><td><a class="btn btn-success" href="/admin/edit_category/'+item.id+'" data-toggle="edit_category">\n' +
                        '                                                <span class="fa fa-pencil"></span>\n' +
                        '                                            </a>\n' +
                        '                                            <a class="btn btn-danger" href="/admin/delete_category/'+item.id+'" data-toggle="delete_category">\n' +
                        '                                                <span class="fa fa-trash"></span>\n' +
                        '                                            </a></td></tr>';
                    str +=html;
                });
                $('#termsrow').html(str);
                $('#add_modal').modal('toggle');
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
