<script src="{{asset('Backend/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('Backend/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('Backend/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{asset('Backend/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('Backend/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('Backend/vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('Backend/vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{asset('Backend/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('Backend/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{asset('Backend/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('Backend/vendors/datatable/js/buttons.print.min.js')}}"></script>


<script src="{{asset('Backend/js/chart.min.js')}}"></script>
<!-- progressbar js -->
<script src="{{asset('Backend/vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{asset('Backend/vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{asset('Backend/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('Backend/vendors/am_chart/amcharts.js')}}"></script>

<!-- scrollabe  -->
<script src="{{asset('Backend/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('Backend/vendors/scroll/scrollable-custom.js')}}"></script>


<script src="{{asset('Backend/vendors/chart_am/core.js')}}"></script>
<script src="{{asset('Backend/vendors/chart_am/charts.js')}}"></script>
<script src="{{asset('Backend/vendors/chart_am/animated.js')}}"></script>
<script src="{{asset('Backend/vendors/chart_am/kelly.js')}}"></script>
<script src="{{asset('Backend/vendors/chart_am/chart-custom.js')}}"></script>
<!-- custom js -->
<script src="{{asset('Backend/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js" integrity="sha512-QMUqEPmhXq1f3DnAVdXvu40C8nbTgxvBGvNruP6RFacy3zWKbNTmx7rdQVVM2gkd2auCWhlPYtcW2tHwzso4SA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	CKEDITOR.replaceClass = 'textareaEditor';
$(document).ready(function() {
} );
</script>
@stack('scripts')

@toastr_js
@toastr_render