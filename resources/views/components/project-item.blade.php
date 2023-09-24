<div data-app_name="{{$title}}" x-data="{categories: {{ json_encode($categories) }} }" :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' " class="relative min-h-[450px] project-modal cursor-pointer w-full px-4 md:w-1/2 xl:w-1/4 h-1/2 hover:scale-110 ease-in-out duration-150">
  <div class="mx-auto mb-10 w-full max-w-[370px] h-auto">
    <div class="relative overflow-hidden rounded-lg h-[350px]">
      <!-- blurred base image as placeholder if the original image is too small -->
      <img src="{{ Storage::url($image_arr[0]) }}" alt="image" class="blur-lg w-full h-[350px]" />
      <img src="{{ Storage::url($image_arr[0]) }}" alt="image" class="absolute left-0 right-0 top-0 bottom-0 m-auto w-fulls z-10" />
    </div>
  </div>
  <div class="absolute bottom-16 left-0 right-0 w-3/4 text-center z-500 m-auto z-[100]">
    <div class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3">
      <h3 class="text-dark text-base font-bold">{{ $title }}</h3>
      @foreach($categories as $category)
      <span class="inline-block whitespace-nowrap rounded-full bg-neutral-800 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-50 dark:bg-neutral-900">
        {{$category}}
      </span>
      @endforeach

      <div>
        <span class="absolute left-0 bottom-0">
          <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="16" cy="45" r="45" fill="#13C296" fill-opacity="0.11" />
          </svg>
        </span>
        <span class="absolute top-0 right-0">
          <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="0.706257" cy="24.3533" r="0.646687" transform="rotate(-90 0.706257 24.3533)" fill="#3056D3" />
            <circle cx="6.39669" cy="24.3533" r="0.646687" transform="rotate(-90 6.39669 24.3533)" fill="#3056D3" />
            <circle cx="12.0881" cy="24.3533" r="0.646687" transform="rotate(-90 12.0881 24.3533)" fill="#3056D3" />
            <circle cx="17.7785" cy="24.3533" r="0.646687" transform="rotate(-90 17.7785 24.3533)" fill="#3056D3" />
            <circle cx="0.706257" cy="18.6624" r="0.646687" transform="rotate(-90 0.706257 18.6624)" fill="#3056D3" />
            <circle cx="6.39669" cy="18.6624" r="0.646687" transform="rotate(-90 6.39669 18.6624)" fill="#3056D3" />
            <circle cx="12.0881" cy="18.6624" r="0.646687" transform="rotate(-90 12.0881 18.6624)" fill="#3056D3" />
            <circle cx="17.7785" cy="18.6624" r="0.646687" transform="rotate(-90 17.7785 18.6624)" fill="#3056D3" />
            <circle cx="0.706257" cy="12.9717" r="0.646687" transform="rotate(-90 0.706257 12.9717)" fill="#3056D3" />
            <circle cx="6.39669" cy="12.9717" r="0.646687" transform="rotate(-90 6.39669 12.9717)" fill="#3056D3" />
            <circle cx="12.0881" cy="12.9717" r="0.646687" transform="rotate(-90 12.0881 12.9717)" fill="#3056D3" />
            <circle cx="17.7785" cy="12.9717" r="0.646687" transform="rotate(-90 17.7785 12.9717)" fill="#3056D3" />
            <circle cx="0.706257" cy="7.28077" r="0.646687" transform="rotate(-90 0.706257 7.28077)" fill="#3056D3" />
            <circle cx="6.39669" cy="7.28077" r="0.646687" transform="rotate(-90 6.39669 7.28077)" fill="#3056D3" />
            <circle cx="12.0881" cy="7.28077" r="0.646687" transform="rotate(-90 12.0881 7.28077)" fill="#3056D3" />
            <circle cx="17.7785" cy="7.28077" r="0.646687" transform="rotate(-90 17.7785 7.28077)" fill="#3056D3" />
            <circle cx="0.706257" cy="1.58989" r="0.646687" transform="rotate(-90 0.706257 1.58989)" fill="#3056D3" />
            <circle cx="6.39669" cy="1.58989" r="0.646687" transform="rotate(-90 6.39669 1.58989)" fill="#3056D3" />
            <circle cx="12.0881" cy="1.58989" r="0.646687" transform="rotate(-90 12.0881 1.58989)" fill="#3056D3" />
            <circle cx="17.7785" cy="1.58989" r="0.646687" transform="rotate(-90 17.7785 1.58989)" fill="#3056D3" />
          </svg>
        </span>
      </div>
    </div>
  </div>
</div>