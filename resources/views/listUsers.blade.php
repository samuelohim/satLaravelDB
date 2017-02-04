@extends('layouts.main')

@section('listall')

 		<ul>

 			@foreach ($users as $user)
 				<li>{{$user->name}}</li>
			@endforeach
 		</ul>
@endsection