<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SQL Editor</title>
    <!-- Bao gồm CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/monokai.min.css">
    <style>
        .CodeMirror {
            border: 1px solid #ddd;
            height: 400px;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        .messages {
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>SQL Editor</h1>

    <!-- Hiển thị thông báo thành công hoặc lỗi -->
    <div class="messages">
        @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form action="{{ route('database.executeSQL') }}" method="POST">
        @csrf
        <textarea id="sql-editor" name="sql">{{ old('sql') }}</textarea>
        <br>
        <button type="submit">Execute</button>
    </form>
</div>

<!-- Bao gồm CodeMirror JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.min.js"></script>
<!-- Bao gồm chế độ SQL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/sql/sql.min.js"></script>
<!-- Bao gồm addon cho tự động đóng dấu ngoặc nếu cần -->
<script>
    // Khởi tạo CodeMirror trên textarea
    var editor = CodeMirror.fromTextArea(document.getElementById("sql-editor"), {
        mode: "text/x-sql",
        theme: "monokai",
        lineNumbers: true,
        matchBrackets: true,
        autoCloseBrackets: true,
        tabSize: 4,
        indentWithTabs: true,
    });

    // Khi submit form, cập nhật nội dung từ editor vào textarea
    document.querySelector('form').addEventListener('submit', function (e) {
        var sqlContent = editor.getValue();
        document.getElementById('sql-editor').value = sqlContent;
    });
</script>
</body>
</html>
