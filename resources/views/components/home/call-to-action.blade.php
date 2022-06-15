<!-- ====== Call To Action Section Start -->
<section>
    <div class="container">
        <div class="
                relative
                rounded
                overflow-hidden
                py-12
                px-8
                z-10
            ">
            <div class="container mx-auto">

                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full lg:w-1/2 px-4">
                        <h2 class="
                            text-white
                            font-bold
                            text-3xl
                            sm:text-[38px]
                            leading-tight
                            mb-6
                            sm:mb-8
                            lg:mb-0
                        ">
                            Skills that I've acquired
                        </h2>
                    </div>
                    <div class="w-full lg:w-1/2 px-4">
                        <div class="flex flex-wrap lg:justify-end">
                            @foreach($skill_list as $skill)
                            <div class="group relative inline-block">
                                <img src="{{asset($skill['img_src'])}}" alt="" class="m-2 {{$skill['class']}}" width="{{$skill['width']}}" height="{{$skill['height']}}">

                                <div class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-black py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                                    <span class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-black"></span>
                                    {{$skill['label']}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <span class="absolute top-0 left-0 z-[-1]">
                        <svg width="189" height="162" viewBox="0 0 189 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="16" cy="-16.5" rx="173" ry="178.5" transform="rotate(180 16 -16.5)" fill="url(#paint0_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="-157" y1="-107.754" x2="98.5011" y2="-106.425" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <span class="absolute bottom-0 right-0 z-[-1]">
                        <svg width="191" height="208" viewBox="0 0 191 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="173" cy="178.5" rx="173" ry="178.5" fill="url(#paint0_linear)" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="-3.27832e-05" y1="87.2457" x2="255.501" y2="88.5747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.07" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Call To Action Section End -->