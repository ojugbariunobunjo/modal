@extends('layouts.app') 
@section('content')
<style>
    .container {
        overflow-y: auto;
    }
</style>
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Student</div>

                <div class="panel-body">

                    <!-- <div class="modal fade bs-example-modal-sm" id="registry" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"> -->
                    <div class="modal" id="registry" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">

                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!-- Modal Start here-->
                                <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">
                                                    <span class="glyphicon glyphicon-time">
                                                    </span>Please Wait
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info 
                                progress-bar-striped active" style="width: 100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal ends Here -->






                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="studentForm" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">

                                            <img src="#" id="imgshow" align="left" height="100" width="100" class="col-md-4">
                                            <div class="col-md-6">
                                                Upload Passport
                                                <input type="file" id="passport" name="passport">
                                            </div>
                                        </div>
                                        <input type="hidden" name="path" id="path">
                                        <div class="form-group{{ $errors->has('rollNum') ? ' has-error' : '' }}">
                                            <label for="rollNumber" class="col-md-4 control-label">Roll Number</label>

                                            <div class="col-md-6">
                                                <input id="rollNum" type="text" class="form-control" name="rollNum" value="{{ old('rollNum') }}" required>
                                                <span class="help-block rollNum-error disperror">

                                                </span>

                                            </div>
                                        </div>


                                        <div class="form-group{{ $errors->has('fullnames') ? ' has-error' : '' }}">
                                            <label for="fullName" class="col-md-4 control-label">Full Names</label>

                                            <div class="col-md-6">
                                                <input id="fullnames" type="text" class="form-control" name="fullnames" value="{{ old('fullnames') }}" required>
                                                <span class="help-block fullnames-error disperror">

                                                </span>

                                            </div>
                                        </div>



                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                <span class="help-block email-error disperror">

                                                </span>

                                            </div>
                                        </div>



                                        <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">

                                            <label for="state" class="col-md-4 control-label">State</label>
                                            <div class="col-md-6">
                                                <select name="state" id="state" class="form-control" data-dependent="LG" required>
                                                    <option value="">---Select State---</option>
                                                    @foreach($state_list as $state)
                                                    <option value="{{ $state->State}}">{{ $state->State }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block state-error">

                                                </span>
                                            </div>

                                        </div>

                                        <div class="form-group {{ $errors->has('lga') ? ' has-error' : '' }}">

                                            <label for="lga" class="col-md-4 control-label">LG</label>
                                            <div class="col-md-6">
                                                <select name="lga" id="lga" class="form-control" required>
                                                    <option value="">---Select LG---</option>
                                                </select>
                                                <span class="help-block lga-error">

                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                                            <label for="clas" class="col-md-4 control-label">Class</label>

                                            <div class="col-md-6">
                                                <input id="class" type="text" class="form-control" name="class" value="{{ old('class') }}" required>
                                                <span class="help-block class-error">
                                                    <strong>

                                                    </strong>
                                                </span>

                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                            <label for="dob" class="col-md-4 control-label">Date Of Birth(MM/DD/YYYY</label>

                                            <div class="col-md-6">
                                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>
                                                <span class="help-block dob-error">

                                                </span>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="button" class="btn btn-primary" id="save">
                                                    Save
                                                </button>
                                                <button type="reset" class="btn btn-primary" id="reset">
                                                    Cancel
                                                </button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('script')
<script>
    $(document).ready(function () {


        $('#registry').modal('show');

        // $('#dob').datepicker();

        $("#passport").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $("#state").change(function () {

            var state = $(this).val();
            if (state != '') {
                $('#myPleaseWait').modal('show');
                //console.log(state);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('lg.fetch') }}",
                    method: 'post',
                    data: {
                        state: state
                    },
                    error: function (result) {
                        //console.log(JSON.stringify(result));
                        alert('error');
                        console.log("error");
                    },
                    success: function (result) {
                        //console.log(result);
                        $('#myPleaseWait').modal('hide');
                        if (result) {
                            var mylgs = result
                            console.log(mylgs);
                            $('#lga').empty();
                            $('#lga').append('<option value = "">----Select LGA----</option>');
                            $.each(mylgs, function (key, value) {
                                $('#lga').append('<option value="' + value.LGA + '">' + value.LGA + '</option>');
                                console.log(key);
                                console.log(value.LGA);

                            }
                                //$('#myPleaseWait').modal('hide');
                            );

                        }

                    }
                });
            }
            else {
                $('#lga').empty();

            }
        });
        $('#reset').click(function () {
            $('#imgshow').attr("src", "#");
        });
        //$('#dob').datepicker();
        $('#dob').datepicker({ dateFormat: "yy-mm-dd" });


        jQuery('#save').click(function (e) {
            e.preventDefault();
            $('.help-block').text('');
            // alert('before ajax setup call');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // alert('before ajax call');
            // var passportFile = $('#passport')[0];
            var passportFile = $('#passport').prop('files')[0];
            //alert('before ajax call');
            var formData = new FormData();
            formData.append('rollNum', jQuery('#rollNum').val());
            formData.append('fullnames', jQuery('#fullnames').val());
            formData.append('email', jQuery('#email').val());
            formData.append('state', jQuery('#state').val());
            formData.append('lga', jQuery('#lga').val());
            formData.append('class', jQuery('#class').val());
            formData.append('dob', jQuery('#dob').val());
            formData.append('path', jQuery('#passport').val());
            formData.append('passportFile', passportFile);
            //formData.append('passportFile[]',passport.files[0]);

            alert(passportFile);
            jQuery.ajax({
                dataType: 'text',
                url: "{{ url('/student') }}",
                contentType: false,
                processData: false,
                method: 'post',
                data: formData,
                /* data: {
                    rollNum: jQuery('#rollNum').val(),
                    fullnames: jQuery('#fullnames').val(),
                    email: jQuery('#email').val(),
                    state: jQuery('#state').val(),
                    lga: jQuery('#lga').val(),
                    class: jQuery('#class').val(),
                    dob: jQuery('#dob').val(),
                    path:jQuery('#rollNum').val()
                 },*/
                error: function (result) {
                    alert(JSON.stringify(result));
                    /*$.each(result,function(key,element){
                        alert('key: ' + key + '\n' +'value: '+ element);
                    });*/

                    if (result.status === 422) {
                        var errors = result.responseJSON.errors;
                        var errors = result.responseText.errors;
                        $.each(errors, function (key, element) {
                            $('.' + key + '-error').html(element);
                            //alert('key: ' + key + '\n' +'value: '+ element);
                        });
                    }

                },
                success: function (result) {
                    //jQuery('.alert').show();
                    //jQuery('.alert').html(result.success);
                    jQuery('#rollNum').val("");
                    jQuery('#fullnames').val("");
                    jQuery('#email').val("");
                    jQuery('#state').val("");
                    jQuery('#lga').val("");
                    jQuery('#class').val("");
                    jQuery('#dob').val("");
                    // jQuery('#imgshow').attr("src","#");
                    $('#imgshow').attr("src", "#");
                    // jQuery('#passport').val("");

                    jQuery('#rollNumber').focus();
                    //alert('sucess');

                    //console.log("sucess");
                    //jQuery('#studentForm').trigger('reset');
                }
            });
        });



    }); 
</script> 
@endsection