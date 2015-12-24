@extends('layouts.dashboard')

@section('content')	
 <h1>Hey {{ $user->name }} this is your profile </h1>
 <h1>Name {{ $user->name }} </h1>
 <p>Email {{ $user->email }}  </p>
 <p>Birthday {{ $user->profile->birthday }}  </p>
 <p>{{ $user->profile->image }}  </p>
 <p>Address Line 2 {{ $user->profile->houseno }}   </p> 
 <p>Address Line 1 {{ $user->profile->addressline1 }}   </p> 
 <p>Address Line 2 {{ $user->profile->addressline2 }}   </p>
 <p>Address Line 2 {{ $user->profile->county}}   </p>  
 <p>Address Line 2 {{ $user->profile->postcode }}   </p> 
 <p>Country: {{ $user->profile->country }}  </p>

 <a href="{{ route('profile.edit') }}" class="button">Edit Profile</a>

@endsection
