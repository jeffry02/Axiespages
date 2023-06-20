@props(['items', 'collectionName', 'userName', 'profilePic' ])

<div>
  <div class="flex mt-10">
    <div class="bg-[#343444] p-[20px] rounded-[10px]">
    <div class="flex gap-2.5 mb-[10px]">
      <div class="bg-[#7A798A] w-[200px] h-[131px] rounded-[10px]">
        <img class="w-[200px] h-[131px] rounded-[10px] object-fill" src="{{'unknown'}}" alt="Collect pics">
      </div>
      <div class="bg-[#7A798A] h-[131px] w-[200px] rounded-[10px]">
        <img class="h-[131px] w-[200px] rounded-[10px] object-fill" src="{{'unknown'}}" alt="Collect pics">
      </div>
    </div>
      <div class="flex gap-2.5">
        @foreach($items as $item)
          <div class="mb-[20px]">
            <div class="bg-[#7A798A] w-[130px] h-[131px] rounded-[10px]">
              <img class="w-[130px] h-[131px] rounded-[10px] object-fill" src="{{$item->getFirstMediaUrL('items_images')}}" alt="Collect pics">
            </div>
          </div>
        @endforeach
      </div>
  <div class="gap-x-2.5 flex">
    <div class="w-[64px] h-[64px] rounded-[21px] relative bg-[#7A798A]">
      <img class="w-[64px] h-[64px] rounded-[21px] object-fill" src="{{$profilePic}}" alt="profile">
      <div class="bg-[#5142FC]  absolute  p-[4px] bottom-0 right-0 rounded-[50px]">
        <svg
          width="14"
          height="14"
          viewBox="0 0 14 14"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M5.8095 10.6978C5.7124 10.7954 5.58 10.8499 5.4424 10.8499C5.30481 10.8499 5.1724 10.7954 5.07531 10.6978L2.14373 7.76571C1.83946 7.46144 1.83946 6.96817 2.14373 6.66442L2.51083 6.29732C2.81509 5.99305 3.30784 5.99305 3.61211 6.29732L5.4424 8.12761L10.3881 3.18194C10.6923 2.87767 11.1856 2.87767 11.4894 3.18194L11.8565 3.54903C12.1607 3.8533 12.1607 4.34657 11.8565 4.65032L5.8095 10.6978Z" fill="white"/>
        </svg>
      </div>
    </div>
    <div class="flex items-baseline gap-x-16">
      <div>
        <span class="text-xl font-bold">{{$collectionName ?? 'unknown'}} Collection</span>
        <div class="flex gap-x-1.5 items-center">
          <span class="text-[13px] font-normal text-[#8A8AA0]">Created by</span>
          <span class="text-[15px] font-bold">{{$userName ?? 'unknown'}}</span>
        </div>
      </div>
      <div class="bg-[#14141F] py-0.5 px-3 rounded-[10px] flex items-center gap-x-[5px]">
        <svg
          width="16"
          height="14"
          viewBox="0 0 16 14"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z" fill="white"/>
        </svg>
        <span class="font-bold text-sm">35</span>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
