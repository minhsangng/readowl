<title>Thư viện</title>

<style>
    .book-card {
        text-align: center;
    }

    .book {
        position: relative;
        border-radius: 10px 10px 4px 4px;
        background-color: #1e3d58;
        padding-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .book img {
        border-radius: 10px 10px 0 0;
    }

    .bookmark {
        position: absolute;
        bottom: 0;
        right: 10px;
        width: 15px;
        height: 30px;
        background-color: #f4be4f;
        border-radius: 3px 3px 0 0;
    }

    .title {
        font-weight: bold;
        margin-top: 8px;
        font-size: 14px;
        color: #333;
    }

    .author {
        font-size: 12px;
        color: #c94f4f;
        margin-top: 2px;
    }
</style>
<div class="flex flex-col w-full">
    <!-- Categories -->
    <div class="flex items-center justify-between bg-white p-4 shadow mt-4">
        <div class="flex space-x-4">
            <button class="text-gray-600 hover:text-gray-800">
                Tất cả
            </button>
            <button class="text-gray-600 hover:text-gray-800">
                Viễn tưởng
            </button>
            <button class="text-gray-600 hover:text-gray-800">
                Phi hư cấu
            </button>
            <button class="text-gray-600 hover:text-gray-800">
                Giáo dục
            </button>
            <button class="text-gray-600 hover:text-gray-800">
                Sách trẻ em
            </button>
            <button class="text-gray-600 hover:text-gray-800">
                Công nghệ & khoa học
            </button>
        </div>
    </div>
    <!-- Popular Books -->
    <div class="p-4">
        <h2 class="text-xl font-bold mb-4">
            Sách phổ biến
        </h2>
        <div class="grid grid-cols-6 gap-8">
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/c9/1b/57/644b363c4796a664320937fb15e45b8c.jpg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Mục Tiêu Giáo Dục</div>
                    <div class="author">Alfred North Whitehead</div>
                </div>
            </div>
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/1f/fe/b6/68caf286747d617fd65de276ce036f28.jpg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Khoa Học - Khái Lược Những Tư Tưởng Lớn</div>
                    <div class="author">DK</div>
                </div>
            </div>
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/97/43/a1/e850a59000750c10ff9baf8b9ff7331d.jpg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Bách Khoa Cho Trẻ Em - Bách Khoa Công Nghệ</div>
                    <div class="author">DK</div>
                </div>
            </div>
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/3b/57/46/5a1df26f22d74298a969f4b97d7dfd25.jpeg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Chiến Thắng Con Quỷ Trong Bạn (Tái Bản 2023)</div>
                    <div class="author">Napoleon Hill</div>
                </div>
            </div>
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/70/b4/b8/58e418716b9288132b298576ca7ed63b.jpg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Giáo Dục Vì Giáo Dục</div>
                    <div class="author">Thái Hà</div>
                </div>
            </div>
            <div class="bg-white rounded flex justify-center">
                <div class="book-card">
                    <div class="book">
                        <img class="h-60"
                            src="https://salt.tikicdn.com/cache/750x750/ts/product/99/7f/c5/a1a376622671cb2083397904c7b0159e.jpg.webp"
                            alt="Fairy Tale">
                        <div class="bookmark"></div>
                    </div>
                    <div class="title">Cẩm Nang Nghiên Cứu Khoa Học Từ Ý Tưởng Đến Công Bố</div>
                    <div class="author">Nguyễn Văn Tuấn</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestsellers -->
    <div class="p-4">
        <div class="bg-white p-4 rounded shadow flex items-center">
            <img alt="Stack of books" class="w-1/4"
                src="https://salt.tikicdn.com/cache/750x750/ts/product/c0/d2/96/55f24a1bd49b79019fcd5c029ef21daf.jpg.webp" />
            <div class="ml-4">
                <h2 class="text-xl font-bold">
                    Thiên Văn Học - Khái Lược Những Tư Tưởng Lớn
                </h2>
                <p class="text-gray-600">
                    Xuyên suốt lịch sử, ngành thiên văn học luôn hướng đến mục tiêu lý giải vũ trụ. Thời cổ đại, các nhà
                    thiên văn học từng vò đầu bứt tai nghiên cứu về cách thức và nguyên nhân các hành tinh chuyển động
                    trên nền trời đầy sao, ý nghĩa đằng sau sự xuất hiện đầy bí ẩn của sao chổi, cũng như khoảng cách xa
                    xôi của Mặt Trời và các vì sao. Ngày nay, trọng tâm của ngành khoa học này đã chuyển sang các câu
                    hỏi mới liên quan đến sự hình thành, cấu tạo và biến đổi của vũ trụ. Cách các cấu phần của vũ trụ
                    như thiên hà, ngôi sao và hành tinh khớp lại với nhau tạo thành một bức tranh tổng thể, hay việc có
                    hay không sự sống ngoài Trái Đất, là một số câu hỏi mà con người vẫn đang nỗ lực giải đáp. Biết bao
                    thế kỷ trôi qua, thiên văn học đã mở rộng ranh giới tri thức của con người trong nỗ lực tìm hiểu vũ
                    trụ và vị trí của chúng ta trong đó.
                </p>
                <button class="bg-red-500 text-white px-4 py-2 rounded-full mt-2">
                    Xem chi tiết
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mt-4">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-bold">
                    Top 50 sách hay cho trẻ em
                </h3>
                <p class="text-gray-600">
                    Tìm kiếm sách hay nhất cho trẻ em.
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-bold">
                    Top 50 sách khoa học
                </h3>
                <p class="text-gray-600">
                    Tìm kiếm sách hay nhất cho người thích khoa học.
                </p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-bold">
                    Top 50 tiểu thuyết
                </h3>
                <p class="text-gray-600">
                    Tìm kiếm sách hay nhất cho người thích tiểu thích.
                </p>
            </div>
        </div>
    </div>
</div>

</div>