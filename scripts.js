$(document).ready(function () {
    $("#adForm").submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "save_data.php",
            data: formData,
            success: function (data) {
                alert("Thông tin đã được gửi thành công!");
                // Có thể thêm xử lý khác sau khi gửi thành công
            },
            error: function () {
                alert("Có lỗi xảy ra, vui lòng thử lại sau.");
            }
        });
    });
});
