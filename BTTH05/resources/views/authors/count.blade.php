@extends('layouts.base')

@section('content')
<h1>Tác giả có nhiều bài hát nhất là : {{$result[0]->ten_tgia}}</h1>
@endsection