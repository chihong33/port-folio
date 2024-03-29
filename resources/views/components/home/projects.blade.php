<section
  id="project"
  data-bg-color="#1e293b"
  data-section="project"
  x-data="
        {
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] section-container"
>
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="text-center mx-auto mb-[60px] max-w-[510px]">
          <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
            Projects
          </h2>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
      <div class="w-full px-4">
        <ul class="flex flex-wrap justify-center mb-12 space-x-1">
          <li class="mb-1">
            <button
              @click="selectedTab = 'all' "
              :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition "
            >
              All Projects
            </button>
          </li>
          @foreach($skill_tabs as $tab)
          <li class="mb-1">
            <button
              @click="selectedTab = '{{$tab}}' "
              :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
              class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition ">
              {{$tab}}
            </button>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <section >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap justify-start">
        @foreach ($items as $item)
          <x-project-item :title="$item['title']" :categories="$item['category']" :image-dir="$item['image_dir']" :github="$item['github_link']">
          </x-project-item>
        @endforeach
        </div>
      </div>
    </section>
  </div>
</section>
