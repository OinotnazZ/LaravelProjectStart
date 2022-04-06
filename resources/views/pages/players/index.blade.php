@extends('master.main')

@section('content')


@component('components.table.table',['players'=>$players])
@endcomponent

@endsection
