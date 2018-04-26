
@extends('layouts.app')


@section('content')
    <h1>Contact Page</h1>


    @if(count($people > 0))
       
        @foreach($people as $person)
        


    
    @endif


@endsection {{-- or @stop --}}


@section('footer')

    <script>alert('Hello vistor')</script>

@stop