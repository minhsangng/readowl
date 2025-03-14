<title>
    Home
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
            Search
        </button>
        <input class="flex-grow px-4 py-2 border border-gray-200 rounded-r-lg" placeholder="Search in My library"
            type="text" />
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2">
            <h1 class="text-3xl font-bold mb-2">
                Happy reading, <br>Harvey
            </h1>
            <p class="text-gray-600 mb-4 w-[550px]">
                Wow! you've delved deep into the wizarding world's secrets. Have Harry's parents died yet? Oops, looks
                like you're not there yet. Get reading now!
            </p>
            <button class="bg-black text-white px-4 py-2 rounded-xl mb-6">
                Start reading &gt;
            </button>
            <h2 class="text-2xl font-semibold mt-12 mb-8">
                Popular Now
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
                    <img alt="Game of Thrones Volume III"
                        class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm" height="150"
                        src="https://storage.googleapis.com/a1aa/image/YedN0eY8HWC_GV8SBo8UUVSW8u1mApxAnEpBzzwYr98.jpg"
                        width="100" />
                    <p class="text-sm mt-2">
                        Game of Thrones Volume III
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
                    <img alt="The Wise Man's Fear" class="w-full h-44 shadow -shadow-xl shadow-gray-500 rounded-sm"
                        height="150"
                        src="https://storage.googleapis.com/a1aa/image/w0Dua2HW4RW5IGfOXJBo1DyUoCe1EtAzWX2PeIH5QlI.jpg"
                        width="100" />
                    <p class="text-sm mt-2">
                        The Wise Man's Fear
                    </p>
                </div>
            </div>
            <h2 class="text-2xl font-semibold my-4">
                New Series Collection
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
                            8 chapters each vol
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
                        <h4 class="text-center">What is Lorem Ipsum?</h4>
                        <p class="px-4 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full">
                        <div class="top-left absolute top-1 left-1 border-t-4 border-l-4 w-[25%] h-[15%]"></div>
                        <div class="top-right absolute top-1 right-1 border-t-4 border-r-4 w-[25%] h-[15%]"></div>
                        <div class="bottom-left absolute bottom-1 left-1 border-b-4 border-l-4 w-[25%] h-[15%]"></div>
                        <div class="bottom-right absolute bottom-1 right-1 border-b-4 border-r-4 w-[25%] h-[15%]"></div>
                    </div>
                </div>
                <div class="page right w-52 h-72 bg-white rounded-lg">
                    <img src="assets/img/solar-bones.png" alt="Solar Bones" class="w-ful h-full p-2 rounded-xl">
                </div>
            </div>
            <div class="w-40 ml-48 bg-white p-4 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-2">
                    The Cambers of Secrets
                </h2>
                <p class="text-sm text-gray-500 mb-2">
                    154 / 300 pages
                </p>
                <p class="text-sm text-gray-600 mb-4">
                    Harry as he returns to Hogwarts school of witchcraft and wizardry for his 2nd year, only to discover
                    that...
                </p>
                <p class="text-sm text-gray-500">
                    - JK Rowlings
                </p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <h2 class="text-xl font-semibold mb-4">
                    Schedule Reading
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
                    Reader Friends
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
                            What a delightful and magical chapter it is! It indeed transports readers to the wizarding
                            world.
                        </p>
                        <p class="text-sm text-red-500">
                            Chapter Five: Diagon Alley
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
                            I finished reading the chapter last night and...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>