@extends("admin.layouts.main")
@section("title","Sửa đánh giá")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa đánh giá</h3>
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
            <form action="{{route('admin.reviews.update',$review->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-inputs.image-link label="Ảnh khách hàng" name="customer_thumbnail"
                               :value="$review->customer_thumbnail"></x-inputs.image-link>
                <x-inputs.text label="Tên khách hàng" name="customer_name"
                               :value="$review->customer_name"></x-inputs.text>
                <x-inputs.text label="Địa chỉ khách hàng" name="customer_address"
                               :value="$review->customer_address"></x-inputs.text>
                <x-inputs.text-area label="Nội dung đánh giá" name="customer_review"
                                    :value="$review->customer_review"></x-inputs.text-area>

                <x-inputs.number label="Số sao" name="customer_rating"
                                 :value="$review->customer_rating"></x-inputs.number>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
@push("scripts")
    <!-- Viết Javascript nếu cần -->
    <script>
    </script>
@endpush
