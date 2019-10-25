<!-- /.container-fluid -->
<footer class="footer text-center"> 2019 &copy; Uprimo Rights Reserved. </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/admin_assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/admin_assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('/admin_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('/admin_assets/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('/admin_assets/js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{asset('/admin_assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('/admin_assets/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!-- chartist chart -->
<script src="{{asset('/admin_assets/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{asset('/admin_assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('/admin_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('/admin_assets/js/custom.min.js')}}"></script>
<script src="{{asset('/admin_assets/js/dashboard1.js')}}"></script>
<script src="{{asset('/admin_assets/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('/admin_assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin_assets/js/dataTables.responsive.min.js')}}"></script>
<script>
    $('#zero_config').DataTable();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
