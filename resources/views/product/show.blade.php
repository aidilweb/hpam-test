<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    @if ($product->image == '')
                        <img src="{{ asset('storage/products/no-image.jpg') }}" class="card-img-top detail"
                            alt="{{ $product->name }}" data-href="{{ url('product/' . $product->id) }}">
                    @else
                        <img src="{{ asset('storage/products/' . $product->image) }}" class="card-img-top detail"
                            alt="{{ $product->name }}" data-href="{{ url('product/' . $product->id) }}">
                    @endif

                    <div class="card p-2 m-2">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                Stok : {{ $product->stock }} <br>
                                <input type="number" class="form-control" value="0">
                                <button class="btn btn-success">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 py-4 pe-4">
                    <h5 class="modal-title">{{ $product->name }}</h5>
                    <div>
                        Terjual <span style="color: rgba(0,0,0,.54);">0</span> -
                        Dilihat <span style="color: rgba(0,0,0,.54);">{{ $product->view }}x</span>
                    </div>
                    <div class="modal-price my-3">
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="detail-tab" data-bs-toggle="tab"
                                data-bs-target="#detail-tab-pane" type="button" role="tab"
                                aria-controls="detail-tab-pane" aria-selected="true">Detail</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="detail-tab-pane" role="tabpanel"
                            aria-labelledby="detail-tab" tabindex="0">
                            Weight : {{ $product->weight }} <br>
                            Color : {{ $product->warna }} <br>
                            Category : <a
                                href="{{ url('category/' . $product->category->slug) }}">{{ $product->category->name }}
                            </a><br>
                            Merk : <a href="{{ url('merk/' . $product->merk->slug) }}">{{ $product->merk->name }}
                            </a><br>
                            Type : <a href="{{ url('type/' . $product->type->slug) }}">{{ $product->type->name }}</a>
                            <br>
                            {!! $product->description2 !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
