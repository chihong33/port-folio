<div
  x-data="{categories: {{ json_encode($categories) }} }"
  :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105 ">
      <div id="animation-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative overflow-hidden rounded-lg md:h-96 border  dark:border-neutral-700 ">
            @foreach ($image_arr as $image)
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                  <img src="{{ Storage::url($image) }}" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 p-1" alt="...">
              </div>
            @endforeach
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-white-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none " data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-white-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
      </div>
    </div>



    <div
      class="text-center bg-white dark:bg-slate-900 relative z-20 py-9 px-3 rounded-lg drop-shadow-xl mx-7 -mt-[6rem]">
      <span class="text-sm text-secondary font-semibold block mb-2">
        {{ implode(", ", $categories) }}
      </span>
      <h3 class="font-bold text-lg text-dark dark:text-gray-300 mb-4">
        {{ $title }}
      </h3>
      <x-button-link :href="$github" variant="outline-primary">View Details</x-button-link>
    </div>

  </div>

</div>
