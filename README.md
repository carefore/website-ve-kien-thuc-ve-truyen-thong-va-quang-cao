
# Truyền Thông và Quảng Cáo Website

Đây là một trang web đơn giản về kiến thức về truyền thông và quảng cáo. Người dùng có thể điền vào một biểu mẫu để gửi thông tin của họ, và dữ liệu này sẽ được lưu trữ trong một cơ sở dữ liệu MySQL.

## Nội dung

1. [Cài Đặt](#cài-đặt)
2. [Sử Dụng](#sử-dụng)
3. [Cấu Trúc Dự Án](#cấu-trúc-dự-án)
4. [Liên Hệ](#liên-hệ)

## Cài Đặt

1. Đầu tiên, tạo cơ sở dữ liệu MySQL với tên là `advertising_info`.
2. Tạo bảng `users` trong cơ sở dữ liệu với các trường `id`, `name`, `email`, `company`, và `message`. Chi tiết có trong [file SQL](./create_database.sql).
3. Thay đổi thông tin đăng nhập MySQL trong [save_data.php](./save_data.php) với thông tin của bạn.

## Sử Dụng

1. Mở trình duyệt và truy cập [index.html](./index.html) để xem trang web.
2. Nhập thông tin vào biểu mẫu và nhấn nút "Gửi thông tin".
3. Thông tin sẽ được gửi và lưu trong cơ sở dữ liệu.

## Cấu Trúc Dự Án

- `index.html`: File HTML chính của trang web.
- `style.css`: File CSS để thiết kế giao diện trang web.
- `script.js`: File JavaScript sử dụng jQuery để xử lý sự kiện và gửi dữ liệu.
- `save_data.php`: File PHP để lưu dữ liệu vào cơ sở dữ liệu MySQL.

## Liên Hệ

Nếu bạn có bất kỳ câu hỏi hoặc đề xuất nào, hãy liên hệ chúng tôi qua trang [https://suanon.com.vn/san-pham/colos-iggold](https://suanon.com.vn/san-pham/colos-iggold).

---
**Lưu ý:** Đây chỉ là một ví dụ cơ bản và bạn cần điều chỉnh nó phù hợp với dự án và thông tin liên hệ của bạn.
```

