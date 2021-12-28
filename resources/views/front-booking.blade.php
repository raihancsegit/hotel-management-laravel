@extends('frontlayout')
@section('content')
<div class="container my-4">
	<h3 class="mb-3">Room Booking</h3>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(Session::has('success'))
    <p class="text-success">{{session('success')}}</p>
    @endif
    <div class="table-responsive">
    <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
                                    @csrf
                                    <table class="table table-bordered" >
                                        <tr>
                                            <th>Select Customer <span class="text-danger">*</span></th>
                                            <td>
                                                <select class="form-control" name="customer_id">
                                                    <option>--- Select Customer ---</option>
                                                    @foreach($data as $customer)
                                                        <option value="{{$customer->id}}">{{$customer->full_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>CheckIn Date <span class="text-danger">*</span></th>
                                            <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                                        </tr>
                                        <tr>
                                            <th>CheckOut Date <span class="text-danger">*</span></th>
                                            <td><input name="checkout_date" type="date" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Avaiable Rooms <span class="text-danger">*</span></th>
                                            <td>
                                            <select class="form-control" name="room_id">
                                            <option>--- Select Room ---</option>
                                                    @foreach($rooms as $room)
                                                        <option value="{{$room->id}}">{{$room->title}}</option>
                                                    @endforeach
                                                <!-- <p>Price: <span class="show-room-price"></span></p> -->
                                            </td>
                                            </select>
                                        </tr>
                                        <tr>
                                            <th>Total Adults <span class="text-danger">*</span></th>
                                            <td><input name="total_adults" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <th>Total Children</th>
                                            <td><input name="total_children" type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="hidden" name="roomprice" class="room-price" value="" />
                                                <input type="submit" class="btn btn-primary" />
                                            </td> 
                                        </tr>
                                    </table>
                                </form>
    </div>               
</div>


@endsection