<title>Create Book | ReadOwl</title>

<div id="layoutSidenav_content" class="w-full my-8">
    <main class="w-full">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full mx-auto max-w-3xl">
            <h1 class="text-2xl font-bold text-center mb-4">
                CREATE NEW BOOK
            </h1>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700">
                            Book Title
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                            Author
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                            Publisher
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                            Genre
                        </label>
                        <select class="w-full border border-gray-300 p-2 rounded mt-1">
                            <option>
                                Fiction
                            </option>
                            <option>
                                Non-Fiction
                            </option>
                            <option value="">
                                Education & Academic
                            </option>
                            <option value="">
                                Children's Books
                            </option>
                            <option value="">
                                Technology & Sciene
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                            ISBN
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                            Publication Date
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="date" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                        Number of Pages
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">
                        Edition 
                        </label>
                        <div class="relative">
                            <input class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                                type="text" />
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">
                        Description
                    </label>
                    <textarea class="w-full border border-gray-300 p-2 rounded mt-1" placeholder=""
                        rows="4"></textarea>
                    <p class="text-right text-gray-400">
                        0/1000
                    </p>
                </div>
                <div class="text-center">
                    <button class="bg-black text-white px-6 py-2 rounded-full" type="submit">
                        CREATE BOOK →
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
</div>