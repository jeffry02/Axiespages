@props([
    'image' => '',
    'likes' => 0,
    'title' => '',
    'userName'  => '',
    'price' => '',
    'userImg' => '',
  ])
<div>
  <div>
    <div class="rounded-[20px] p-[20px] bg-[#343444] flex flex-col">
      <div class="bg-[#7A798A] h-[290px] rounded-[20px] relative mb-[20px] w-[290px]">
          <img src="{{$image}}">
          <div class="absolute items-center pt-[2px] pr-[10px] flex right-[12px] top-[14px] rounded-[10px] bg-[#14141F]">
            <div class="pl-[10px]">
              <svg
                width="16"
                height="14"
                viewBox="0 0 16 14"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7145 1.64672C12.9744 -0.092941 10.1436 -0.092941 8.40393 1.64672L7.99986 2.05055L7.59603 1.64672C5.85637 -0.0931764 3.02531 -0.0931764 1.28565 1.64672C-0.418689 3.35105 -0.429756 6.05261 1.25998 7.93096C2.80114 9.64354 7.34643 13.3435 7.53928 13.5001C7.6702 13.6065 7.82773 13.6583 7.98432 13.6583C7.9895 13.6583 7.99468 13.6583 7.99963 13.6581C8.16163 13.6656 8.32481 13.61 8.45997 13.5001C8.65282 13.3435 13.1986 9.64354 14.7402 7.93072C16.4297 6.05261 16.4186 3.35105 14.7145 1.64672ZM13.69 6.98578C12.4884 8.32066 9.18546 11.0738 7.99963 12.0508C6.8138 11.074 3.51155 8.32114 2.31018 6.98602C1.13142 5.67586 1.12035 3.80999 2.28452 2.64582C2.87908 2.05149 3.6599 1.75409 4.44072 1.75409C5.22154 1.75409 6.00236 2.05126 6.59693 2.64582L7.48512 3.53401C7.59085 3.63974 7.72412 3.70285 7.86399 3.72498C8.09099 3.77372 8.33729 3.71038 8.51389 3.53425L9.40256 2.64582C10.5919 1.45693 12.5266 1.45716 13.7152 2.64582C14.8794 3.80999 14.8683 5.67586 13.69 6.98578Z" fill="white"/>
              </svg>
            </div>
          <span class="ml-[5px] font-bold text-sm">{{$likes}}</span>
        </div>
      </div>
      <div class="flex justify-between mb-[17px]">
        <span class="font-bold text-lg">{{$title}}</span>
        <button class="bg-[#5142FC] px-3 py-0.5 rounded-[10px] text-xs font-bold">BSC</button>
      </div>
      <div class="flex justify-between items-center">
        <div class="flex gap-x-3">
          <div class="bg-[#C4C4C4] w-[44px] h-[44px] rounded-[15px]">
            <img src="{{$userImg}}">
          </div>
          <div class="flex flex-col">
            <span class="text-[#8A8AA0] text-[13px] font-normal">Owned By</span>
            <span class="font-bold text-[15px] text-[#EBEBEB]">{{$userName}}</span>
          </div>
        </div>
        <div class="flex flex-col">
          <span class="text-[#8A8AA0] text-[13px] font-normal">Current Bid</span>
          <span class="text-lg font-bold">{{$price}}</span>
        </div>
      </div>
    </div>
  </div>
</div>
