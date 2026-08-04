<div class="form-group">
    <label for="input-{{$name}}">{{$label}}</label>
    <div class="input-group">
        <input readonly type="text" class="form-control ckfinder-input" name="{{ $name }}" id="input-{{ $name }}"
               required value="{{$value==""?old($name):$value}}">
        <span class="input-group-append">
            <button type="button" class="btn btn-secondary ckfinder-popup" id="button-popup-{{$name}}">
                Duyệt Ảnh
            </button>
        </span>
    </div>
    @error($name)
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@push("scripts")
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let button_popup_{{$name}} = document.getElementById("button-popup-{{$name}}");

            button_popup_{{$name}}.onclick = async () => {
                CKFinder.popup({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function (finder) {
                        finder.on('files:choose', function (evt) {
                            let file = evt.data.files.first();
                            let fullUrl = file.getUrl();

                            // Sử dụng URL để lấy phần pathname
                            let path;
                            try {
                                // Tạo đối tượng URL để phân tích
                                let urlObj = new URL(fullUrl);
                                path = urlObj.pathname;
                            } catch (e) {
                                // Nếu URL không hợp lệ hoặc là đường dẫn tương đối
                                // Trực tiếp sử dụng fullUrl
                                path = fullUrl;
                            }

                            let parentElement = button_popup_{{$name}}.closest(".input-group");
                            if (parentElement) {
                                let input = parentElement.querySelector(".ckfinder-input");
                                if (input) {
                                    input.value = path;
                                }
                            }
                        });

                        // Xử lý sự kiện khi người dùng hủy chọn file (optional)
                        finder.on('file:choose:resizedImage', function (evt) {
                            // Tùy chọn: bạn có thể xử lý thêm nếu cần
                        });
                    }
                });
            }
        });
    </script>
@endpush
