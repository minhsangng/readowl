<title>Login | ReadOwl</title>
<div class="flex-1 p-6 h-min-screen rounded-lg m-2" style="background-color: var(--primary-color);">
    <div class="bg-white shadow-lg rounded-lg w-1/2 mx-[auto] h-[500px]">
        <div class="flex justify-center my-24">
            <div class="bg-blue-500 h-[500px] text-white flex flex-col items-center justify-between p-4 rounded-l-lg">
                <div class="mt-4">
                    <i class="fas fa-arrow-up text-2xl"></i>
                </div>
                <div class="my-4">
                    <i class="fas fa-ellipsis-vertical text-2xl"></i>
                </div>
                <div class="mb-4">
                    <i class="fas fa-arrow-down text-2xl"></i>
                </div>
            </div>
            <div class="p-8 w-full">
                <form action="" method="post">
                    <h2 class="text-blue-500 text-3xl font-semibold mb-6 tracking-[8px]">LOGIN</h2>
                    <div class="flex flex-col">
                        <div>
                            <label class="block text-gray-500 text-sm">Your Email</label>
                            <input type="email" name="email"
                                class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1 pr-8">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-500 text-sm">Password</label>
                        <input type="password" name="pass"
                                class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                    </div>
                    <div class="flex justify-between mt-14 text-gray-500">
                        <p>You don't have account? <a href="index.php?p=signup" class="text-blue-500">Sign up</a></p>
                        <a href="" class="text-[--third-color]">Forget password?</a>
                    </div>
                    <div class="flex justify-end items-center mt-8">
                        <button type="reset"
                            class="bg-gray-300 text-gray-400 px-6 py-2 rounded-full mr-4">Reset</button>
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-full"
                            name="btndn">Login</button>
                    </div>
                </form>
                <div>
                    <?php
                    if (isset($_POST["btndn"])) {
                        $email = $_POST["email"];
                        $pass = $_POST["pass"];

                        if ($email == "abc@gmail.com" && $pass == "123") {
                            echo "<script>window.location.href = 'view/page/admin/';</script>";
                        } else
                            echo "<p class='text-red-400 italic text-center mt-8'>Thông tin đăng nhập không hợp lệ!</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>