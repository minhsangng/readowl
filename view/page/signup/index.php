<title>Signup | ReadOwl</title>

<div class="flex-1 p-6 h-min-screen rounded-lg m-2" style="background-color: var(--primary-color);">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl mx-[auto] my-12">
        <div class="flex justify-center">
            <div class="bg-blue-500 text-white flex flex-col items-center justify-between p-4 rounded-l-lg">
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
            <div class="flex-1 p-8">
                <h2 class="text-blue-500 text-3xl font-semibold mb-6 tracking-[8px]">Sign up</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">First Name</label>
                        <input type="text" value=""
                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Last Name</label>
                        <input type="text" value=""
                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Email</label>
                        <div class="relative">
                            <input type="email" value=""
                                class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1 pr-8">
                            <i
                                class="fas fa-check text-green-500 absolute right-0 top-1/2 transform -translate-y-1/2"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Login Name</label>
                        <div class="relative">
                            <input type="text" value=""
                                class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1 pr-8">
                            <i
                                class="fas fa-lock text-gray-500 absolute right-0 top-1/2 transform -translate-y-1/2"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Country</label>
                        <select class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                            <option>Vietnam</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">City</label>
                        <select class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                            <option>Ho Chi Minh</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Phone Number</label>
                        <input type="text"
                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1">
                    </div>
                    <div>
                        <label class="block text-gray-500 text-sm mb-2">Sex</label>
                        <input type="radio"
                            class="border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1 mr-2">Nam
                            <input type="radio"
                            class="border-b-2 border-gray-300 focus:border-blue-500 outline-none py-1 ml-4 mr-2">Nữ
                    </div>
                </div>
                <div class="flex justify-between items-center mt-8">
                    <button class="text-gray-500">Reset All</button>
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-full">Sign up</button>
                </div>
            </div>
        </div>
    </div>
</div>