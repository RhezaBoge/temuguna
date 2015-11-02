@extends('/admin/include/admin-header-footer')

@section('content')


<!-- Custom styling plus plugins -->
<link href="{{ URL::asset('public/admin-template/css/datatables/tools/css/dataTables.tableTools.css')}}" rel="stylesheet">

<!-- ckeditor -->
<script src="{{ URL::asset('public/ckeditor/ckeditor.js') }}"></script>

<!-- page content -->


<div class="clearfix"></div>

<div class="row">

    <!-- alert session -->
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Well done!</strong> {{ Session::get('success') }}
    </div>
    @elseif(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Hi!</strong> {{ Session::get('info') }} 
    </div>
    @elseif(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Done!</strong> {{ Session::get('warning') }}
    </div>
    @elseif(Session::has('failed'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Oh snap!</strong> {{ Session::get('failed') }} 
    </div>
    @endif
    <!-- end alert session -->

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form<small>Show Data Media Manager</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                 @foreach($data['media-manager'] as $agen => $value )

                {!! Form::open(array('url' => 'admin/media-manager/'.$value->media_manager_id, 'files' => false, 'class' => 'form-horizontal form-label-left')) !!}
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name" >Media Manager file Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" disabled="disabled" name="media_manager_filename" class="form-control col-md-7 col-xs-12" value="{{ $value->media_manager_filename }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Media Manager Type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" disabled="disabled" type="text" name="media_manager_type" value="{{ $value->media_manager_type }}">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a href="{{ url('admin/media-manager') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>

                {!! Form::close() !!}
                @endforeach


            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

</div>



<!-- Datatables -->
<script src="{{ URL::asset('public/admin-template/js/datatables/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('public/admin-template/js/datatables/tools/js/dataTables.tableTools.js') }}"></script>




<script>
    $(document).ready(function () {
        $('input.tableflat').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });

    function reset(){
         $('#myform').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
         CKEDITOR.instances.descr.setData('');
         document.getElementById("myform").reset();
    }
       

    var asInitVals = new Array();
    $(document).ready(function () {
        var oTable = $('#example').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            },
            
            'iDisplayLength': 12,
            "sPaginationType": "full_numbers",
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "<?php echo url::asset('public/admin-template/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
            }
        });
        $("tfoot input").keyup(function () {
            /* Filter on the column based on the index of this element's parent <th> */
            oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
        });
        $("tfoot input").each(function (i) {
            asInitVals[i] = this.value;
        });
        $("tfoot input").focus(function () {
            if (this.className == "search_init") {
                this.className = "";
                this.value = "";
            }
        });
        $("tfoot input").blur(function (i) {
            if (this.value == "") {
                this.className = "search_init";
                this.value = asInitVals[$("tfoot input").index(this)];
            }
        });
    });
</script>

        



@endsection