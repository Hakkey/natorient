@extends('layouts.app')

<head>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
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
            <h1>List of Employees</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @include('layouts.message')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-striped table-responsive">
                  <thead>
                  <tr>
                    <th># </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Home Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if (count($employees) > 0)
                        @foreach ($employees as $employee)
                        <tr>
                          <td width="5%">{{ $loop->iteration }}</td>
                          <td>{{ $employee->name }}</td>
                          <td>{{ $employee->email }}</td>
                          <td>{{ $employee->phone }}</td>
                          <td>{{ $employee->address }}</td>
                          <td align="center"><a class="btn btn-sm btn-warning" href="/listemployee/{{ $employee->id }}">View</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('employees.delete', $employee->id) }}">Delete</a>
                          </td>
                          {{-- <td><a class="btn btn-sm btn-danger" href="/listemployee/{{ $employee->id }}">Delete</a></td> --}}
                        </tr>
                        @endforeach
                    @else
                      <p>No employees found</p>
                    @endif
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('layouts.footer')

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@endsection

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
