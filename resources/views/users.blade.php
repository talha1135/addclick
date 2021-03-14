@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Password</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $count=1;
                            @endphp
                            @foreach ($users as $item)
                                
                          
                          <tr>
                            <th scope="row">{{$count}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->mobile}}</td>
                            <td>{{$item->password_u}}</td>
                            @if ($item->status==1)
                            <td><a href="{{route('userBlock',$item->id)}}" class="btn btn-success"> To Block</a></td>
                            @else
                            <td><a href="{{route('userunBlock',$item->id)}}"  class="btn btn-danger"> To Unblock</a></td>
                            @endif
                            
                          </tr>
                          {{$count++}}
                          @endforeach
                          
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
</div>
@endsection
