<div class="white-box p-2">
    <form id="add_package_form" class="form-horizontal form-material" method="post" action="{{url('/admin/save_package')}}">
       @csrf
        <div class="form-group">
            <label for="example-email" class="col-md-12">Name</label>
            <div class="col-md-12">
                <input type="text" placeholder="Package Name" class="form-control form-control-line" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Total Ads</label>
            <div class="col-md-12">
                <input type="text" placeholder="Total Ads" class="form-control form-control-line" name="ads">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Featured Ads</label>
            <div class="col-md-12">
                <input type="text" placeholder="Featured Ads" class="form-control form-control-line" name="featured_ads">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Price</label>
            <div class="col-md-12">
                <input type="text" placeholder="Package Price" class="form-control form-control-line" name="price">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Ads Per</label>
            <div class="col-sm-12">
                <select class="form-control form-control-line" name="recurring" required>
                    <option value="0">Day</option>
                    <option value="1">Week</option>
                    <option value="2">Month</option>
                    <option value="3">Year</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-7">
                <button type="submit" class="btn btn-success">Add package</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </form>
</div>
<script type="text/javascript">
    $('#add_package_form').submit(function () {
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
                    var html = '<tr id="row'+item.id+'"><td>'+item.id+'</td><td>'+item.name+'</td><td>'+item.ads+'</td><td>'+item.featured_ads+'</td><td>'+item.price+'</td><td><a class="btn btn-success" href="/admin/edit_package/'+item.id+'" data-toggle="edit_package">\n' +
                        '                                                <span class="fa fa-pencil"></span>\n' +
                        '                                            </a>\n' +
                        '                                            <a class="btn btn-danger" href="/admin/delete_package/'+item.id+'" data-toggle="delete_package">\n' +
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
