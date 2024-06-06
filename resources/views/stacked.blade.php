@extends('layout.main')
@section('menu')
    <li><a href="/">home Page 15</a></li>
@endsection
<!-- yeild & section do not support loop -->
@push('submenu')
    <li><a href="/">Page1</a></li>
@endpush

@push('submenu')
    <li><a href="/">Page2</a></li>
@endpush
<!-- stack & push support loop -->
