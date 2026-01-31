@extends('layouts.app')

@section('content')
    <x-hero :news="$heroNews" />
    
    <x-trending :articles="$trendingNews" />

    <x-latest :articles="$allNews" />
@endsection