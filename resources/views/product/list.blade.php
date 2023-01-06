@extends('app')
@section('title', $title)
@section('content')
    <h3>{{ $title }}</h3>
    <div class="row">
        @foreach ($product as $item)
            <div class="col-product ">
                <div class="card">
                    @if ($item->image == '')
                        <img src="{{ asset('storage/products/no-image.jpg') }}" class="card-img-top detail"
                            alt="{{ $item->name }}" data-href="{{ url('product/' . $item->id) }}">
                    @else
                        <img src="{{ asset('storage/products/' . $item->image) }}" class="card-img-top detail"
                            alt="{{ $item->name }}" data-href="{{ url('product/' . $item->id) }}">
                    @endif
                    <div class="card-body">
                        <div class="title">{{ $item->name }}</div>
                        <div class="price">Rp{{ number_format($item->price, 0, ',', '.') }}</div>
                        <div class="city"><a href="{{ url('merk/' . $item->merk->slug) }}">{{ $item->merk->name }}</a>
                        </div>
                        <div class="ratings">
                            <i class="fa fa-star rating-color"></i>
                            <i class="fa fa-star rating-color"></i>
                            <i class="fa fa-star rating-color"></i>
                            <i class="fa fa-star rating-color"></i>
                            <i class="fa fa-star rating-color-disabled "></i>
                            <span class="reviews">(2184)</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @if (count($product) == 0)
            <h2>Product not found</h2>
        @endif
    </div>
    <div class="row justify-content-center">
        {{ $product->links() }}
    </div>

    <div class="modal fade product_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    </div>
@endsection


@push('js')
    <script>
        $(".detail").on('click', function(event) {
            $('.product_modal').load($(this).data('href'), function() {
                $(this).modal('show');
            });
        });
    </script>
@endpush
