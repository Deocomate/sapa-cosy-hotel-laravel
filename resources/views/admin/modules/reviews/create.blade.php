@extends("admin.layouts.main")
@section("title","Thêm đánh giá")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm đánh giá</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.reviews.store')}}" method="POST">
                @csrf
                <x-inputs.image-link label="Ảnh khách hàng" name="customer_thumbnail"
                                     value=""></x-inputs.image-link>
                <x-inputs.text label="Tên khách hàng" name="customer_name" value=""></x-inputs.text>
                <x-inputs.text label="Địa chỉ khách hàng" name="customer_address" value=""></x-inputs.text>
                <x-inputs.text-area label="Nội dung đánh giá" name="customer_review"
                                    value=""></x-inputs.text-area>
                <x-inputs.number label="Số sao" name="customer_rating" value=""></x-inputs.number>

                <button type="submit" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script>
    </script>
@endpush
