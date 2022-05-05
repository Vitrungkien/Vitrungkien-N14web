<?php
    include 'inc/header.php';
?>

<!-- ----------About--------- -->
<div class="about">
    <div class="ve-chung-toi">
    <h1>Về chúng tôi - LapStore</h1>
    <p>Công ty LapStore đã phát triển và vận hành nhiều cửa hàng lớn nhỏ bán lẻ máy tính và phụ kiện công nghệ trên miền đất nước dưới thương hiệu LapStore.</p>
    <p>LapStore là hệ thống bán lẻ máy tính và phụ kiện uy tín tại Việt Nam với chuỗi cửa hàng trải nghiệm độc đáo và đội ngũ tư vấn chuyên sâu, hình thức thanh toán đa dạng và bảo hành uy tín, tin cậy giúp khách hàng tự tin lựa chọn các sản phẩm công nghệ phù hợp nhất.</p>
    </div>

    <div class="tam-nhin">
    <h1>Tầm nhìn</h1>
    <p>Với hơn 100 thành viên (tiếp tục mở rộng) tại Hà Nội, Sài Gòn, Đà Nẵng và 200% tăng trưởng doanh thu trong suốt 3 năm liên tiếp, LapStore tự tin thực hiện tầm nhìn 2025 trở thành Top 5 nhà cung cấp máy tính tại thị trường Việt Nam.</p>
    </div>

    <div class="su-menh">
    <h1>Sứ mệnh</h1>
    <p>LapStore với sứ mệnh mang lại những giá trị tốt đẹp, luôn lấy khách hàng làm trung tâm, bằng kiến thức chuyên môn, sự chân thành và nhiệt huyết của tuổi trẻ, đồng thời ứng dụng công nghệ số để tối ưu và linh hoạt, mang lại trải nghiệm tốt nhất dành cho khách hàng qua từng dịch vụ mà công ty cung cấp.</p>
    </div>

    <div class="gia-tri-cot-loi">
    <h1>Giá trị cốt lõi</h1>
    <p><b>Chân thành- Chuyên môn - Linh hoạt</b> là những Giá trị cốt lõi mà LapStore sử dụng trong quá trình hình thành và phát triển:</p>
    <p><b>Chân thành:</b> LapStore luôn phục vụ khách hàng bằng tất cả sự chân thành và tin cậy. <br>
        <b>Chuyên môn:</b> LapStore luôn sẵn sàng phục vụ quý khách hàng với đội ngũ chuyên viên tư vấn có chuyên môn, được đào tạo bài bản, có kiến chuyên sâu về sản phẩm, thấu hiểu nhu cầu của khách hàng.<br>
        <b>Linh hoạt:</b> Linh hoạt là giá trị quan trọng mà LapStore mang đến để vận hành và phục vụ khách hàng tốt nhất trong bối cảnh xã hội liên tục vận động hiện nay.</p>
    </div>
</div>
<!-- ----------End About--------- -->

<?php
    include 'inc/footer.php';
?>

<!-- ------js for toggle menu -- -->
        <script>
            var MenuItems = document.getElementById("MenuItems")

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if (MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
<!-- ----End js for toggle menu- -->
</body>
</html>