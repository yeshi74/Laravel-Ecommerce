@extends('styles')
@extends('header')

@section('content')
<div class="custom-product">
      <div class="col-sm-4">
          <a href="#">Filter</a>
      </div>
      <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Search Results</h4>
            @foreach ($products as $item)
            <div class="searched-item">
            <a href="product/detail/{{ $item['id'] }}">
                <img class="trending-image" src="{{ $item['gallery'] }}">
                <div class="">
                  <h2>{{ $item['name'] }}</h2>
                  <h5>{{ $item['description'] }}</h5>
                </div>
              </div>
            </a>
              @endforeach
          </div>
      </div>
</div>
@endsection

@extends('footer')