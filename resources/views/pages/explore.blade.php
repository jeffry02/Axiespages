@extends('index')

@section('pages')
  @include('_partials.header')
  <div class="h-216px bg-[#14141F] opacity-[0.7] flex flex-col items-center text-[13px] font-normal">
    <h1 class="text-[48px] mt-[60px] font-bold">Explore</h1>
    <div class="mt-[12px] flex gap-x-[12px] text-[18px] font-normal mb-[60px]">
      <span>Home</span>
      <span>/</span>
      <span>Pages</span>
      <span>/</span>
      <span>Explore</span>
    </div>
  </div>
    <main class="flex justify-center text-[13px] font-normal bg-[#14141F] py-20">
      <div class="w-[280px]">
        <div>
          <span class="text-xl font-bold">Categories</span>
            <div class="mt-2.5 flex gap-y-3 flex-col">
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Art">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Art" type="checkbox">Art
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal " for="Music">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Music" type="checkbox">Music
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Domain">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Domain Names" type="checkbox">Domain Names
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Virtual">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Virtual Worlds" type="checkbox">Virtual Worlds
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Trading">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Trading  Cards" type="checkbox">Trading  Cards
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Collectibles">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Collectibles" type="checkbox">Collectibles
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Sports">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Sports" type="checkbox">Sports
              </label>
              <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Utility">
                <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Utility" type="checkbox">Utility
              </label>
            </div>
        </div>
        <hr class="border-[#343444] mt-6 mb-8">
      <div>
        <span class="text-xl font-bold">Collections</span>
          <div class="mt-2.5 flex gap-y-3 flex-col">
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Abstraction">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Abstraction" type="checkbox">Abstraction
            </label>
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Patternlicious">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Patternlicious" type="checkbox">Patternlicious
            </label>
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Skecthify">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Skecthify" type="checkbox">Skecthify
            </label>
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Cartoonism">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Cartoonism" type="checkbox">Cartoonism
            </label>
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Virtuland">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Virtuland" type="checkbox">Virtuland
            </label>
            <label class="flex gap-x-2 items-center text-[13px] font-normal" for="Papercut">
              <input  class="bg-[#14141F] w-4 h-4 rounded border-[#7A798A]" name="Papercut" type="checkbox">Papercut
            </label>
          </div>
        </div>
      </div>

      <div class="flex flex-col ml-20 items-center">
          <div class="flex flex-wrap gap-x-[38px] mb-11 max-w-[1075px] gap-y-11">
            @foreach($cardInfo as $item)
              <x-exploreCard :item-img="$item->getFirstMediaUrL('items_images')" :item-title="$item->title" :user-id="$item->user->name" :item-price="$item->price" :profile-pic="$item->user->getFirstMediaUrL('ProfilePic')"/>
            @endforeach
          </div>
          <div class="mt-9">
          <button class="text-[15px] font-bold py-4 px-10 border-[1px] rounded-[30px]">Load More</button>
        </div>
      </div>
    </main>
    @include('_partials.footer')
@endsection
