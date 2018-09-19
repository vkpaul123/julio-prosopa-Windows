{{-- Vue.js --}}
<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery 3 -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/jquery/dist/jquery.min.js') }}"></script>


<!-- jQuery UI 1.11.4 -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ @asset('rawThemes/adminLTE/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ @asset('rawThemes/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ @asset('rawThemes/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker') }}.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ @asset('rawThemes/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ @asset('rawThemes/adminLTE/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ @asset('rawThemes/adminLTE/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ @asset('rawThemes/adminLTE/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ @asset('rawThemes/adminLTE/dist/js/demo.js') }}"></script>

<!--Back To Top-->
<script src="{{ asset('rawThemes/greenFair/js/backtotop.js') }}"></script>

<script src="{{asset('rawThemes/adminLTE/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
      increaseArea: '20%' // optional
    });
  });
</script>


@section('pageSpecificLoadScripts')
	@show