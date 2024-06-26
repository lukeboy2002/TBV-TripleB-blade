<footer>
    <livewire:sponsor.index />
    <div class="max-w-7xl mx-auto grid grid-cols-2 sm:grid-cols-4 py-6 px-4 sm:px-6 lg:px-8">
        <div class="sm:col-span-2">
            <div class="flex">
                <div class="hidden sm:block">
                    <x-application-logo />
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500 mb-4">Triple B, we love to play</p>
                    <div class="flex">
                        <button class="text-gray-700 dark:text-white bg-gray-200 hover:bg-gray-400 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-500">
                            <svg class="size-5"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                      d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                      clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                        <button class="text-gray-700 dark:text-white bg-gray-200 hover:bg-gray-400 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-500">
                            <svg class="size-5"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      fill-rule="evenodd"
                                      d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                      clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                        <button class="text-gray-700 dark:text-white bg-gray-200 hover:bg-gray-400 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-500">
                            <svg class="size-5"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 24 24">
                                <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden sm:block w-full">
            <div class="text-lg text-orange-500 font-black uppercase">Latest Post</div>
            <div class="border-t border-orange-500 w-[60px] pb-4"></div>
            <x-blog.temp-footer />
        </div>
        <div class="flex justify-end w-full">
            <div>
                <div class="text-lg text-orange-500 font-black uppercase">Contact</div>
                <div class="border-t border-orange-500 w-[60px] pb-4"></div>
                <x-contact-us />
            </div>

        </div>
    </div>
</footer>
