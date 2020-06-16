@extends('layouts.app')
<head>

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
</head>
@section('content')

<div class="wrapper">
  @include('layouts.navbar')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add Employee</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        {{ Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) }}
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">Add Employee Form</h3>

            @include('layouts.message')
            
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="remove"></button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body bg-dark">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('name', 'Full Name') }}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                    </div>
                    {{-- <input type="text" class="form-control is-warning"> --}}
                    {{Form::text('name', '', ['class' => 'form-control is-warning', 'required' => 'true']) }}

                  </div>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('ic', 'Identification Number (000000-00-0000)') }}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-id-card"></i></span>
                    </div>
                    {{Form::text('ic', '', ['class' => 'form-control is-warning', 'required' => 'true', 'maxlength' => '14']) }}
                    {{-- <input type="text" class="form-control is-warning" data-inputmask='"mask": "999999-99-9999"' data-mask> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('phone', 'Phone Number') }}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    {{Form::text('phone', '', ['class' => 'form-control is-warning', 'required' => 'true', 'maxlength' => '11']) }}
                    {{-- <input type="text" class="form-control is-warning" data-inputmask='"mask": "999-9999-9999"' data-mask> --}}
                  </div>
                </div>
              </div>   

              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('address', 'Address') }}
                  <div class="input-group">
                    {{Form::textarea('address', '', ['class' => 'form-control is-warning', 'rows' => '3', 'required' => 'true']) }}
                    {{-- <textarea class="form-control is-warning" rows="3"></textarea> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  {{Form::label('leave', 'Leave (Days)') }}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-times"></i></span>
                    </div>
                    {{Form::number('leave', '', ['class' => 'form-control is-warning', 'required' => 'true']) }}
                    {{-- <input type="text" class="form-control is-warning"> --}}
                  </div>
                </div>
              </div>
            </div>

            <hr>
            <label>Login Info</label>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('email', 'Email Address') }}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    {{Form::text('email', '', ['class' => 'form-control is-warning', 'required' => 'true']) }}
                    {{-- <input type="text" class="form-control is-warning"> --}}
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  {{Form::label('password', 'Password') }}
                  {{-- <label>Password</label> --}}
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    {{Form::text('password', '', ['class' => 'form-control is-warning', 'required' => 'true']) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-dark">
            {{ Form::submit('Submit', ['class' => 'btn btn-success float-right']) }}
            {{-- <div class="btn btn-success float-right">Submit</div> --}}
          </div>
        </div>
        {{ Form::close() }}


      </div>
    </section>
  </div>

  @include('layouts.footer')

</div>
@endsection

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
