<title>
    Trang chủ
</title>

<style>
    .book {
        perspective: 1000px;
    }

    .page {
        background: white;
        border: 2px solid #ccc;
        box-shadow: inset 5px 0 10px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: serif;
    }

    .left {
        border-right: none;
        transform: rotateY(10deg);
        box-shadow: -5px 0 10px rgba(0, 0, 0, 0.2);
    }

    .right {
        border-left: none;
        transform: rotateY(-10deg);
        box-shadow: 5px 0 10px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Main Content -->
<div class="flex-1 p-6 h-full rounded-lg m-2" style="background-color: var(--primary-color);">
    <div class="flex items-center mb-8">
        <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-l-lg">
            Tìm
        </button>
        <input class="flex-grow px-4 py-2 border border-gray-200 rounded-r-lg" placeholder="Tìm kiếm...." type="text" />
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2">
            <h1 class="text-3xl font-bold mb-3">
                <i>Giới thiệu về ReadOwl </i>
            </h1>
            <p class="text-gray-600 mb-4 w-[500px]" style="padding-left: 10px; padding-right: 10px;">
                ReadOwl - nơi kết nối những người yêu sách với kho tàng tri thức vô tận. Với sứ mệnh giúp bạn dễ
                dàng tiếp cận những cuốn sách hay nhất,
                cá nhân hóa theo sở thích của từng độc giả. <br> <br>
                Hãy cùng ReadOwl khám phá thế giới qua từng trang sách và nâng cao trải nghiệm đọc của bạn! 📖
            </p> <br>
            <button class="bg-black text-white px-4 py-2 rounded-xl mb-6">
                Bắt đầu đọc &gt;&gt;
            </button>
            <h2 class="text-2xl font-semibold mt-12 mb-8">
                Phổ biến
            </h2>
            <div class="grid grid-cols-5 gap-x-8 gap-y-4 pb-4">
                <div class="hover:scale-110 transition ease">
                    <img alt="The World of Ice and Fire" class="w-full h-44" height="150"
                        src="https://storage.googleapis.com/a1aa/image/HYNZ6PmU3OFEO4epmhiEXAQjgz4rnWu9ti94B8uOGNI.jpg"
                        width="100" />
                    <p class="text-sm mt-2">
                        The World of Ice and Fire
                    </p>
                </div>
                <div class="hover:scale-110 transition ease">
                    <img alt="Fantastic Beasts Volume II"
                        class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm" height="150"
                        src="https://storage.googleapis.com/a1aa/image/PpRoWGmjTqzeJlPc1iPL-BWeLV8i1yN6EgeJlxT-91s.jpg"
                        width="100" />
                    <p class="text-sm mt-2">
                        Fantastic Beasts Volume II
                    </p>
                </div>
                <div class="hover:scale-110 transition ease">
                    <img alt="Đắc nhân tâm" class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm"
                        height="150" src="assets/img/images.jpg" width="100" />
                    <p class="text-sm mt-2">
                        Đắc nhân tâm
                    </p>
                </div>
                <div class="hover:scale-110 transition ease">
                    <img alt="The Wise Man's Fear" class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm"
                        height="150"
                        src="https://storage.googleapis.com/a1aa/image/w0Dua2HW4RW5IGfOXJBo1DyUoCe1EtAzWX2PeIH5QlI.jpg"
                        width="100" />
                    <p class="text-sm mt-2">
                        The Wise Man's Fear
                    </p>
                </div>
                <div class="hover:scale-110 transition ease">
                    <img alt="Một lít nước mắt" class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm"
                        height="150" src="assets/img/20240516_YdLlpfeTQU.jpeg" width="100" />
                    <p class="text-sm mt-2">
                        Một lít nước mắt
                    </p>
                </div>
            </div>
            <h2 class="text-2xl font-semibold my-4">
                Bộ sưu tập mới
            </h2>
            <div class="grid grid-cols-1 pb-4">
                <div class="flex">
                    <img alt="A Legend of Ice and Fire: The Ice Horse" class="w-52 h-44 rounded-md" height="150"
                        src="https://storage.googleapis.com/a1aa/image/hBlwWeGMPzLKu1FwdaZwTUW8fiSWRNOILVoT7x43e20.jpg"
                        width="100" />
                    <div class="flex flex-col ml-4">
                        <h3 class="text-2xl font-bold mt-2">
                            A Legend of Ice and Fire: The Ice Horse
                        </h3>
                        <p class="text-md italic text-gray-500">
                            8 tập mỗi chương
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Column -->
        <div class="bg-gray-500/25 p-6 rounded-lg relative">
            <div class="book absolute top-4 right-44 flex">
                <div class="page left w-52 h-72 bg-white rounded-lg">
                    <div class="paper text-[10px] relative">
                        <h4 class="text-center">"Hạt Giống Tâm Hồn"</h4>
                        <p class="px-4 text-justify">Đây là một tác phẩm nổi tiếng với những câu chuyện sâu sắc về
                            nghệ thuật sống và giá trị đạo đức.
                            Cuốn sách này không chỉ là nguồn cảm hứng mà còn là nguồn động viên giúp con người nâng
                            cao bản thân trong mọi tình huống,
                            vượt qua chính mình và sống đáng giá với phẩm chất của mình.

                            "Hạt Giống Tâm Hồn" mang đến cho độc giả những trải nghiệm đầy cảm xúc, với những nhân
                            vật đầy sức mạnh ý chí đối mặt với khó khăn.
                            Cuốn sách không chỉ là nguồn cảm hứng mà còn là sự kiên cường và quyết tâm để đối mặt
                            với thách thức.
                            Tôi đã tìm thấy những bài học quý giá cho bản thân từ cuốn sách này.</p>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full">
                        <div class="top-left absolute top-1 left-1 border-t-4 border-l-4 w-[25%] h-[15%]"></div>
                        <div class="top-right absolute top-1 right-1 border-t-4 border-r-4 w-[25%] h-[15%]"></div>
                        <div class="bottom-left absolute bottom-1 left-1 border-b-4 border-l-4 w-[25%] h-[15%]">
                        </div>
                        <div class="bottom-right absolute bottom-1 right-1 border-b-4 border-r-4 w-[25%] h-[15%]">
                        </div>
                    </div>
                </div>
                <div class="page right w-52 h-72 bg-white rounded-lg">
                    <img src="assets/img/2024_05_20_17_09_58_1-390x510.webp" alt="Solar Bones"
                        class="w-ful h-full p-2 rounded-xl">
                </div>
            </div>
            <div class="w-40 ml-48 bg-white p-4 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-2">
                    The Cambers of Secrets
                </h2>
                <p class="text-sm text-gray-500 mb-2">
                    154 / 300 trang
                </p>
                <p class="text-sm text-gray-600 mb-4">
                Harry khi anh trở lại trường đào tạo phù thủy và pháp sư Hogwarts để học năm thứ 2, chỉ để phát hiện ra rằng...
                </p>
                <p class="text-sm text-gray-500">
                    - JK Rowlings
                </p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-4">
                    Lịch
                </h2>
                <div class="grid grid-cols-7 gap-2 text-center">
                    <?php
                    error_reporting(1);
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $days = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
                    $todayIndex = date("w");
                    $todayDate = date("j");

                    $today = str_split(date("l"), 3)[0];

                    for ($i = 0; $i < 7; $i++) {
                        $date = date("j", strtotime("+" . ($i - $todayIndex) . " days"));

                        echo "<div class='py-2 px-1 rounded-2xl w-fit " . ($days[$i] == $today ? "border-2 border-red-300" : "") . " text-" . ($days[$i] == "Sun" ? "red" : "gray") . "-500'>
                        <p>" . $days[$i] . "</p>
                        <p>" . $date . "</p>                    
                    </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    Nhận xét của đọc giả
                </h2>
                <div class="flex items-center mb-4">
                    <img alt="Roberto Jordan" class="w-10 h-10 rounded-full mr-4" height="40"
                        src="https://storage.googleapis.com/a1aa/image/de_yL0E2K-Zi11ekooAa5YeK-x2PD59Ab4SYiu8S8Lk.jpg"
                        width="40" />
                    <div>
                        <p class="font-semibold">
                            Roberto Jordan
                        </p>
                        <p class="text-sm text-gray-600">
                            Thật là một chương thú vị và kỳ diệu! Nó thực sự đưa người đọc đến thế giới phù thủy.
                        </p>
                        <p class="text-sm text-red-500">
                            Chương 5: Diagon Alley
                        </p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img alt="Anna Henry" class="w-10 h-10 rounded-full mr-4" height="40"
                        src="https://storage.googleapis.com/a1aa/image/odxnD8KecqH4ayNxBV6KjLNtVj77Q8zclBmK1N1i-vk.jpg"
                        width="40" />
                    <div>
                        <p class="font-semibold">
                            Anna Henry
                        </p>
                        <p class="text-sm text-gray-600">
                            Tôi đã đọc xong cả chương này vào tối qua...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>