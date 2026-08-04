<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đặt phòng</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
<div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
    <h2 style="margin-bottom: 20px;">Xin chào, {{ $mailData['fullName'] }}!</h2>
    <p style="margin-bottom: 15px;">Cảm ơn bạn đã đặt phòng tại Sapa Cosy Hotel. Dưới đây là thông tin đặt phòng
        của bạn:</p>

    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Ngày nhận phòng:</strong> {{ $mailData['checkInDate'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Ngày trả phòng:</strong> {{ $mailData['checkOutDate'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Họ tên người đặt
            phòng:</strong> {{ $mailData['fullName'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Số điện thoại:</strong> {{ $mailData['phoneNumber'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Email:</strong> {{ $mailData['email'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Số người lớn:</strong> {{ $mailData['adults'] }}
    </div>
    <div style="margin-bottom: 10px;">
        <strong style="font-weight: bold; margin-right: 5px;">Số trẻ em:</strong> {{ $mailData['children'] }}
    </div>

    <p style="margin-top: 20px;">Chúng tôi sẽ liên hệ lại với bạn để xác nhận chi tiết và các yêu cầu khác (nếu có). Xin
        chân thành cảm ơn.</p>

    <p style="margin-top: 20px;">Trân trọng,</p>
    <p>Sapa Cosy Hotel</p>
</div>
</body>
</html>
