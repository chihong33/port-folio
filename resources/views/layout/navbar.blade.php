<!-- Navbar section  -->
<div>
    <header x-data="{navbarOpen: false}" class="fixed left-0 top-0 z-[10000] bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24">
        <div class="container">
            <div class="flex -mx-4 items-center justify-between relative">
                <!-- <div class="pr-4 w-60 max-w-full">
                    <a href="javascript:void(0)" class="w-full flex items-center py-2">
                        <img src="https://cdn.tailgrids.com/1.0/assets/images/logo/logo.svg" alt="logo" class="w-full" />
                    </a>
                </div> -->
                <div class="flex px-4 justify-between items-center w-full">
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive' ">
                    </x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none lg:mt-0 mt-6">
                        <ul class="block lg:flex lg:items-center justify-center">
                            @foreach($nagivationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{$item['label']}}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
</div>
<!-- Navbar section end -->