

<!DOCTYPE html>
<html lang="vi">
<head>
    
    <title>Trang Chủ Thư viện</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Thanh điều hướng */
        nav {
            background-color: #2196f3;
            color: white;
            padding: 1rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav .logo {
            font-size: 2rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        nav .links {
            display: flex;
            gap: 2rem;
        }

        nav .links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        nav .links a:hover {
            text-decoration: underline;
        }

        nav .user-info {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        nav .user-info a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        /* Phần nội dung chính */
        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2rem 5%;
        }

        /* Bố cục 2 cột */
        .left-column {
            flex: 1;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 2rem;
        }

        .right-column {
            flex: 2;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .left-column h3, .right-column h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }

        /* Dịch vụ thư viện */
        .services {
            list-style: none;
            padding: 0;
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column; /* Thay đổi từ row sang column để dịch vụ mỗi cái một dòng */
            gap: 1.5rem; 
        }

        .service-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 1.1rem;
            color: #333;
            
        }

        .service-item .icon {
            font-size: 1.5rem;
            color: #2196f3;
        }

        .service-item:hover {
            color: #2196f3;
        }

        /* Danh sách sách */
        .book-list {
            list-style: none;
            padding: 0;
        }

        .book-item {
            background-color: #f9f9f9;
            margin: 1rem 0;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .book-item h4 {
            font-size: 1.5rem;
            color: #333;
        }

        .book-actions {
            display: flex;
            gap: 1rem;
        }

        .book-actions button {
            background-color: #4caf50;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .book-actions button:hover {
            background-color: #388e3c;
        }

        /* Sách quá hạn bôi đỏ */
        .overdue {
            background-color: #f8d7da; /* Màu nền đỏ nhạt */
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Footer */
        footer {
            background-color: #2196f3;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>

    <!-- Thanh điều hướng -->
    <nav>
        <div class="logo">Thư Viện</div>
        <div class="links">
            <a href="#">Trang Chủ</a>
            <a href="#">Danh Mục Sách</a>
            <a href="#">Thông Tin Tài Khoản</a>
        </div>
        <div class="user-info">
            <span>Chào, <strong><?php echo $_SESSION['username']; ?></strong></span>
            <a href="logout.php">Đăng xuất</a>
        </div>
    </nav>

    <!-- Nội dung trang chủ -->
    <div class="main-content">
        <div style="display: flex; gap: 2rem;">

            <!-- Cột trái: Thông Tin Dịch Vụ -->
            <div class="left-column">
                <h3>Dịch Vụ Thư Viện</h3>
                <ul class="services">
                    <li class="service-item">
                        <span class="icon">📶</span>
                        WiFi miễn phí
                    </li>
                    <li class="service-item">
                        <span class="icon">📚</span>
                        Đa dạng đầu sách
                    </li>
                    <li class="service-item">
                        <span class="icon">📡</span>
                        Trang thiết bị đầy đủ
                    </li>
                    <li class="service-item">
                        <span class="icon">🏫</span>
                        Nhiều phòng đọc chuyên ngành
                    </li>
                    <li class="service-item">
                        <span class="icon">🔄</span>
                        Mượn trả dễ dàng
                    </li>
                    <li class="service-item">
                        <span class="icon">🔇</span>
                        Không gian yên tĩnh
                    </li>
                </ul>
            </div>

            <!-- Cột phải: Danh sách sách mượn và sách quá hạn -->
            <div class="right-column">
                <h3>Sách Mượn (4 sách)</h3>
                
                <div class="book-list">
                    <!-- Sách quá hạn -->
                    <div class="book-item overdue">
                        <div>
                            <h4>Sách A (Quá Hạn)</h4>
                            <p>Ngày mượn: 01/03/2025</p>
                            <p>Ngày trả: 15/03/2025</p>
                        </div>
                        <div class="book-actions">
                            <button>Trả Sách</button>
                        </div>
                    </div>

                    <div class="book-item overdue">
                        <div>
                            <h4>Sách B (Quá Hạn)</h4>
                            <p>Ngày mượn: 01/02/2025</p>
                            <p>Ngày trả: 15/02/2025</p>
                        </div>
                        <div class="book-actions">
                            <button>Trả Sách</button>
                        </div>
                    </div>

                    <!-- Sách chưa quá hạn -->
                    <div class="book-item">
                        <div>
                            <h4>Sách C</h4>
                            <p>Ngày mượn: 01/04/2025</p>
                            <p>Ngày trả: 15/04/2025</p>
                        </div>
                        <div class="book-actions">
                            <button>Trả Sách</button>
                        </div>
                    </div>

                    <div class="book-item">
                        <div>
                            <h4>Sách D</h4>
                            <p>Ngày mượn: 01/05/2025</p>
                            <p>Ngày trả: 15/05/2025</p>
                        </div>
                        <div class="book-actions">
                            <button>Trả Sách</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Thư Viện. All rights reserved.</p>
    </footer>

</body>
</html>
