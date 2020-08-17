
@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách accounts</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <td>Gender</td>
                                <th>function</th>
                            </tr>
                        </thead>
                        @foreach($acc as $a)
                        <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->firstname}}</td>
                            <td>{{$a->lastname}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->phone}}</td>
                            <td>{{$a->gender}}</td>
                            <td><a href="{{url("product/delete/{$a->id }")}}">Delete</a></td>
                
                        
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection