@extends('layouts.app')
@section('content')
<table class="table">
    <tr>
        <th>Sl.no</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th></th>
    </tr>
    @forelse($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->FirstName}}</td>
            <td>@if($record->MiddleName)
                {{$record->MiddleName}}
                @endif</td>
            <td>{{$record->LastName}}</td>
            <td>{{\Carbon\Carbon::parse($record->DateOfBirth)->format('d-m-Y')}}</td>
            <td><a href="{{route('ViewDetails',$record->id)}}" class="btn btn-secondary">View</a></td>
        </tr>
    @empty
        <p class="alert-danger">No data </p>
    @endforelse

</table>
@endsection
