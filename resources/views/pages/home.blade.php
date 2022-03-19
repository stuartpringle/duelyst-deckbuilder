@extends('layouts.default')
@section('content')
            <div id="app">
                <welcome></welcome>
            </div>
    <div class="sm:w-1/3 md:1/4 w-full flex-shrink flex-grow-0 p-4">
        <div class="sticky top-0 p-4 bg-gray-100 rounded-xl w-full">
            <ul class="flex sm:flex-col overflow-hidden content-center justify-between">
                <li class="py-2 hover:bg-indigo-300 rounded">
                    <a class="truncate" href="#">
                        <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/home.svg" class="w-7 sm:mx-2 mx-4 inline" />
                        <span class="hidden sm:inline">Home</span>
                    </a>
                </li>
                <li class="py-2 hover:bg-indigo-300 rounded">
                    <a class="truncate" href="#">
                        <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/cog.svg" class="w-7 sm:mx-2 mx-4 inline" /> <span class="hidden sm:inline">Settings</span>
                    </a>
                </li>
                <li class="py-2 hover:bg-indigo-300 rounded">
                    <a class="" href="#">
                        <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/gift.svg" class="w-7 sm:mx-2 mx-4 inline" /> <span class="hidden sm:inline">Products</span>
                    </a>
                </li>
                <li class="py-2 hover:bg-indigo-300 rounded">
                    <a class="" href="#">
                        <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/chart-bar.svg" class="w-7 sm:mx-2 mx-4 inline" /> <span class="hidden sm:inline">Reports</span>
                    </a>
                </li>
                <li class="py-2 hover:bg-indigo-300 rounded">
                    <a class="" href="#">
                        <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/collection.svg" class="w-7 sm:mx-2 mx-4 inline" /> <span class="hidden sm:inline">Integrations</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bg-gray-50 rounded-xl border my-3 w-full">
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:py-12 lg:px-8 lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="block text-indigo-600 overflow-ellipsis">Made with Tailwind CSS!</span>
                </h2>
            </div>
        </div>
    </div>
    <main role="main" class="w-full h-full flex-grow p-3 overflow-auto">
        <h1 class="text-3xl md:text-5xl mb-4 font-extrabold" id="home">Single-page App Layout</h1>
        <p class="py-2 text-xl">This single-page "app" style layout features a <span class="font-bold">sidebar</span>, <span class="font-bold">main</span> 
        content area, and <span class="font-bold">footer</span>.
        This full-height layout is never more than viewport height. The content area scrolls
        independently as needed. For this example, we're using the <a class="text-indigo-600" href="https://tailwindcss.com/">Tailwind CSS</a> 
        utility framework. As part of it's default classes, Tailwind includes Flexbox classes which make this layout 
        implementation simple!
        </p>
        <p class="py-2 text-xl">
        Additionally, this layout is <span class="italic">responsive</span>. As screen width decreases down to 640px (the smallest Tailwind breakpoint), the layout stacks vertically.
        The sidebar orientation is flipped from vertical to horizontal (<code>flex-col sm:flex-row</code>), and the main content area fills the remaining height
        above the footer.
        </p>
    </main>
@stop