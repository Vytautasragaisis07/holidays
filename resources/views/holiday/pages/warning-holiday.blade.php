@extends('holiday.main')
@section('content')

<div class="warningProduct py-3 m-2">
    <p>Ar tikrai norite pasalinti sia kelione?</p>
    <div class="warningProduct">
        <a class="btn btn-primary" href="/delete-holiday/ {{$holiday->id}}" role="button">trinti</a>
    </div>
</div>
@stop
