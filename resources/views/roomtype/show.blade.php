@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add RoomTypes

        <a href="{{url('/admin/roomtype')}}" class="float-right btn-primary btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="{{url('admin/roomtype')}}" method="post">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
                    </tr>

                    <tr>
                        <th>Detail</th>
                        <td>{{$data->price}}</td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td>{{$data->detail}}</td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@section('script')
<!-- Custom styles for this page -->
<link href="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="{{asset('public')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public')}}/js/demo/datatables-demo.js"></script>
    @endsection
@endsection