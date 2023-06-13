@extends('layouts.base')

@section('content')
<div class="row mt-4">
    @foreach($results as $result)
    <div class="col-md-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ $result->hinhanh}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tên bài hát :{{$result->ten_bhat}}</h5>
                <p class="card-text ">Mã: {{$result->ma_bviet}}</p>
                <p class="card-text ">Tên tác giả:{{$result->ten_tgia}}</p>
                <p class="card-text ">Tên thể loại:{{$result->ten_tloai}}</p>
                <p class="card-text ">Ngày {{$result->ngayviet}}</p>
                <p class="card-text text-truncate">Tóm tắt: {{$result->tomtat}}</p>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection