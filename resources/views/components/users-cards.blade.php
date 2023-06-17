@props(['itemId','itemImg', 'itemTitle', 'user_id', 'itemPrice'])

<div>
    <div>
        <div class="rounded-[20px] p-[20px] bg-[#343444] flex flex-col">
            <div class="bg-[#7A798A] h-[290px] rounded-[20px] relative mb-[20px] w-[290px]">
                <a href="/item?items_id={{$itemId}}">
                <img class="w-[290px] h-[290px] object-fill rounded-[20px]" alt="item image" src="{{$itemImg ?? 'unknown'}}"/>
                </a>
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
                    <span class="ml-[5px] font-bold text-sm">100</span>
                </div>
            </div>
            <div class="mb-[17px]">
                <span class="font-bold text-lg">{{$itemTitle ?? 'unknown'}}</span>
            </div>
            <div class="flex justify-between items-center mb-5 border-b-[1px] border-[#14141F]">
                <div class="flex gap-x-3">
                    <div class="bg-[#C4C4C4] w-[44px] h-[44px] rounded-[15px]">
                        <img src="#" id="#">
                    </div>
                    <div class="flex flex-col mb-5">
                        <span class="text-[#8A8AA0] text-[13px] font-normal">Creator</span>
                        <span class="font-bold text-[15px] text-[#EBEBEB]">{{$user_id ?? 'unknown'}}</span>
                    </div>
                </div>
                <div>
                    <button class="bg-[#5142FC] px-3 py-0.5 rounded-[10px] text-xs font-bold">BSC</button>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex flex-col">
                    <span class="text-[#8A8AA0] text-[13px] font-normal">Current Bid</span>
                    <div class="flex gap-x-2 items-center">
                        <span class="text-lg font-bold">€ {{$itemPrice ?? 'unknown'}}</span>
                        <span class="text-[#8A8AA0] text-[13px] font-normal">= $12.246</span>
                    </div>
                </div>
                <div class="flex gap-x-[9px]">
                    <button>
                        <svg
                            width="20"
                            height="16"
                            viewBox="0 0 20 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.7803 9.99284C16.5493 9.88916 16.2866 9.88147 16.05 9.97146C15.8134 10.0614 15.6222 10.2417 15.5185 10.4727C15.0503 11.5167 14.2956 12.4065 13.3419 13.0387C12.3882 13.6709 11.2747 14.0195 10.1308 14.0442C8.98687 14.0689 7.85941 13.7686 6.87935 13.1781C5.89929 12.5876 5.10685 11.7312 4.59405 10.7083L5.13468 10.949C5.36596 11.052 5.62867 11.0589 5.86503 10.9682C6.10138 10.8774 6.29202 10.6965 6.39499 10.4653C6.49796 10.234 6.50484 9.97126 6.41411 9.73491C6.32339 9.49856 6.14248 9.30792 5.9112 9.20495L3.39889 8.08644C3.28438 8.03545 3.16093 8.00752 3.03562 8.00423C2.91031 8.00095 2.78557 8.02239 2.66854 8.06731C2.55151 8.11223 2.44447 8.17977 2.35354 8.26606C2.26261 8.35235 2.18957 8.45571 2.13858 8.57023L1.02003 11.0824C0.917054 11.3137 0.910175 11.5764 1.0009 11.8128C1.09163 12.0492 1.27253 12.2398 1.50382 12.3428C1.7351 12.4457 1.99781 12.4526 2.23417 12.3619C2.47052 12.2712 2.66116 12.0903 2.76413 11.859L2.89171 11.5724C3.55406 12.8898 4.56946 13.9972 5.8246 14.7711C7.07975 15.5449 8.52524 15.9547 9.99975 15.9548C10.0459 15.9548 10.0923 15.9544 10.1385 15.9536C11.6492 15.9275 13.1213 15.4717 14.3825 14.6395C15.6437 13.8074 16.6418 12.6333 17.2601 11.2547C17.3638 11.0237 17.3715 10.761 17.2815 10.5244C17.1915 10.2877 17.0112 10.0965 16.7803 9.99284Z" fill="white"/>
                            <path d="M18.4955 3.65724C18.2642 3.55428 18.0015 3.5474 17.7652 3.63813C17.5288 3.72886 17.3382 3.90976 17.2352 4.14103L17.1076 4.42756C16.4345 3.08867 15.397 1.9671 14.1144 1.19197C12.8319 0.416837 11.3566 0.0196605 9.85824 0.046167C8.35991 0.0726735 6.89953 0.521785 5.64522 1.3418C4.39092 2.16181 3.3937 3.31937 2.76836 4.68123C2.71584 4.79515 2.68629 4.9183 2.68139 5.04365C2.6765 5.169 2.69635 5.29408 2.73983 5.41175C2.78331 5.52941 2.84955 5.63736 2.93478 5.72941C3.02 5.82146 3.12253 5.89581 3.2365 5.94821C3.35048 6.0006 3.47366 6.03002 3.59902 6.03478C3.72437 6.03954 3.84943 6.01955 3.96705 5.97594C4.08467 5.93234 4.19255 5.86598 4.2845 5.78065C4.37646 5.69533 4.4507 5.59272 4.50297 5.47869C4.97849 4.44299 5.73697 3.56272 6.69101 2.93934C7.64506 2.31596 8.75582 1.97484 9.8953 1.9553C11.0348 1.93575 12.1566 2.23857 13.1315 2.82886C14.1063 3.41914 14.8946 4.27287 15.4053 5.29166L14.8647 5.05095C14.6337 4.94955 14.3719 4.94373 14.1366 5.03477C13.9013 5.12581 13.7116 5.30631 13.6089 5.5368C13.5063 5.7673 13.4991 6.02905 13.5889 6.26483C13.6787 6.50062 13.8582 6.69126 14.0882 6.7951L16.5932 7.91025L16.5977 7.91228C16.7123 7.96372 16.8359 7.99203 16.9614 7.99561C17.087 7.99919 17.212 7.97796 17.3293 7.93314C17.4466 7.88831 17.5539 7.82078 17.6451 7.7344C17.7363 7.64803 17.8095 7.54451 17.8606 7.42978L18.9791 4.91756C19.0821 4.68629 19.089 4.42359 18.9983 4.18724C18.9076 3.95089 18.7268 3.76024 18.4955 3.65724Z" fill="white"/>
                        </svg>
                    </button>
                    <a class="text-base font-bold text-[#8A8AA0]" href="">View History</a>
                </div>
            </div>
        </div>
    </div>
</div>
