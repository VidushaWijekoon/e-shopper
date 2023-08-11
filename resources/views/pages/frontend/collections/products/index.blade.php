@extends('layouts.frontend.app')
@section('content')
    <livewire:frontend.products.index :category="$category" />
@endsection
