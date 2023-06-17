@extends('index')

@section('pages')
    @include('_partials.header')
    <div class="h-216px bg-[#14141F] opacity-[0.7] flex flex-col items-center">
        <h1 class="text-[48px] mt-[60px] font-bold">Author</h1>
        <div class="mt-[12px] flex gap-x-[12px] text-[18px] font-normal mb-[60px]">
            <a href="#">Home</a>
            <span>/</span>
            <a href="#">Pages</a>
            <span>/</span>
            <a href="#">Author</a>
        </div>
    </div>
    <main class="bg-[#14141F] flex flex-col py-20 px-[240px]">
        <div class="p-10 bg-[#00000099] rounded-xl mb-[60px] max-w-[1410px] relative">
            <div class="flex">
                <div class="z-10 w-[294px] h-[294px] bg-[#7A798A] rounded-[20px]">
                    <img src="#" id="#">
                </div>
                <div class="flex flex-col w-[465px] mt-5 ml-[30px] mr-[225px]">
                    <span class="text-[#EBEBEB] font-normal text-lg">Author Profile</span>
                    <span class="text-4xl font-bold mb-2">{{ $user->name }}</span>
                </div>
                <div class="flex flex-col gap-y-9">
                <div class="flex">
                <div>
                    <div class="flex gap-x-[12px] mr-8">
                        <button class="p-2.5 bg-[#EBEBEB] rounded-lg border-solid">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.00195 12.0636C1.00312 17.0133 4.58036 21.2277 9.43895 22.0034V14.9714H6.90195V12.0636H9.44195V9.85005C9.32841 8.80118 9.68448 7.75583 10.4136 6.99753C11.1427 6.23923 12.1693 5.84657 13.215 5.92605C13.9655 5.93824 14.7141 6.0055 15.455 6.12728V8.60141H14.191C13.7558 8.54407 13.3183 8.68867 13.0017 8.99449C12.6851 9.3003 12.5237 9.73423 12.563 10.174V12.0636H15.334L14.891 14.9724H12.563V22.0034C17.8174 21.1679 21.502 16.3395 20.9475 11.0163C20.3929 5.69299 15.7932 1.73835 10.4808 2.01731C5.16831 2.29626 1.0028 6.71116 1.00195 12.0636Z" fill="#14141F"/>
                            </svg>
                        </button>
                        <button class="p-2.5 bg-[#EBEBEB] rounded-lg border-solid">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.6441 6.18054C20.5012 5.64436 21.1425 4.80009 21.4483 3.80535C20.6429 4.30541 19.7618 4.65766 18.8429 4.84687C17.569 3.4367 15.5505 3.09352 13.9155 4.00911C12.2804 4.9247 11.4335 6.87238 11.848 8.76384C8.54901 8.59052 5.47544 6.95985 3.3921 4.27759C2.30485 6.23999 2.86046 8.74861 4.66182 10.0105C4.01043 9.98855 3.37348 9.804 2.80409 9.47219C2.80409 9.4902 2.80409 9.50821 2.80409 9.52622C2.80447 11.5704 4.18125 13.3312 6.09599 13.7363C5.49179 13.9083 4.85802 13.9337 4.24304 13.8104C4.78153 15.5585 6.32121 16.7561 8.07611 16.7919C6.62265 17.9856 4.82769 18.6329 2.98002 18.6298C2.65252 18.6303 2.32528 18.6106 2 18.5707C3.87627 19.8324 6.06002 20.5021 8.29028 20.4997C11.3931 20.522 14.375 19.242 16.569 16.946C18.763 14.6499 19.986 11.5295 19.9644 8.2826C19.9644 8.0965 19.9603 7.91141 19.952 7.72732C20.7556 7.11961 21.4491 6.36678 22 5.5042C21.2514 5.85144 20.4573 6.07941 19.6441 6.18054Z" fill="#14141F"/>
                            </svg>
                        </button>
                        <button class="p-2.5 bg-[#EBEBEB] rounded-lg border-solid">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2093 10.3581V13.8365H17.1483C16.6887 16.0469 14.7644 17.317 12.2093 17.317C9.2333 17.2769 6.84224 14.9062 6.84224 11.9955C6.84224 9.08482 9.2333 6.7141 12.2093 6.67404C13.4464 6.67259 14.6453 7.09241 15.6003 7.8614L18.28 5.24074C15.2061 2.59797 10.7169 2.25806 7.26368 4.40661C3.81044 6.55516 2.22311 10.6758 3.36842 14.5185C4.51374 18.3612 8.11645 21.0024 12.2093 21C16.8134 21 21 17.7252 21 11.995C20.9929 11.4433 20.9238 10.894 20.7939 10.3571L12.2093 10.3581Z" fill="#14141F"/>
                            </svg>
                        </button>
                        <button class="p-2.5 bg-[#EBEBEB] rounded-lg border-solid">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 2.5V14.3756L16.304 19.1249H12.391L9.954 21.5H6.913V19.1249H3V5.66616L4.227 2.5H21ZM19.435 4.08308H6.13V15.9587H9.26V18.3328L11.609 15.9577H16.304L19.434 12.7915V4.08308H19.435ZM16.305 7.24924V11.9995H14.739V7.25025H16.304L16.305 7.24924ZM12.391 7.24924V11.9995H10.826V7.25025H12.391V7.24924Z" fill="#14141F"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <button class="font-bold text-sm border rounded-[30px] py-[9px] px-7">Follow</button>
                </div>
                </div>
                <div>
                    <form action="{{action([\App\Http\Controllers\CollectionController::class, 'store'])}}" method="post" class="#">
                        @csrf
                        <label class="mb-4 text-lg font-normal" for="name">Make a new Collection</label>
                        <x-input name="name" placeholder="Name a new Collection"></x-input>
                        <button type="submit" class="font-bold text-sm mt-4 border py-2 px-6 rounded-[30px] ">Create</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="py-6 rounded-b-xl absolute bottom-0 w-full left-0 pl-[415px] overflow-x-scroll text-xl font-bold justify-between pr-[100px] flex gap-x-8 bg-[#343444]">
                <a href="/user?userid={{$userId}}">All</a>
                @foreach($collections as $collection)
                    <a href="/user?userid={{$userId}}&collection_id={{$collection->id}}">{{$collection->name}}</a>
                @endforeach
            </div>
        </div>
        {{--    cards--}}
        <div class="flex gap-[30px] flex-wrap gap-y-10 max-w-[1410px]">
            @foreach($items as $item)
                <x-users-cards :item-id="$item->id" :item-img="$item->getFirstMediaUrL('items_images')" :item-title="$item->title" :user_id="$item->user->name" :item-price="$item->price"></x-users-cards>
            @endforeach
        </div>
        <div class="flex justify-center mt-[40px]">
          <button class="text-[15px] font-bold py-4 px-10 border-[1px] rounded-[30px]">Load More</button>
        </div>
    </main>
    @include('_partials.footer')
@endsection
