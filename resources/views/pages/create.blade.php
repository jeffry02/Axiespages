@extends('index')

@section('pages')
    @include('_partials.header')
    <div class="h-216px bg-[#14141F] opacity-[0.7] flex flex-col items-center">
        <h1 class="text-[48px] mt-[60px] font-bold">Create Item</h1>
        <div class="mt-[12px] flex gap-x-[12px] text-[18px] font-normal mb-[60px]">
            <a href="#">Home</a>
            <span>/</span>
            <a href="#">Pages</a>
            <span>/</span>
            <a href="#">Create Item</a>
        </div>
    </div>
    <main class=" flex bg-[#14141F] justify-center gap-x-20 py-20">
        {{--    card--}}
       <x-card></x-card>
        {{--    inputs screen--}}
        <form  action="{{action([\App\Http\Controllers\ItemController::class, 'store'])}}" method="post" enctype="multipart/form-data" class="w-[1000px]">
            @csrf
            <div>
                <label for="item_img" class="font-bold text-xl">Upload file
                <input placeholder="PNG, JPG, GIF, WEBP or MP4. Max 200mb." required="required" class="mt-[20px]" name="item_img" type="file" onchange="loadFile(event)">
                </labe
                    l>
            </div>
            <div class="my-6">
            </div>
            <div class="flex flex-col">
                <label for="price" class="mb-5 font-bold text-xl">Price</label>
                <x-input placeholder="Enter price for one item (ETH)" name="price" type="number" />
            </div>
            <div class="flex flex-col my-6">
                <label for="title" class="mb-5 font-bold text-xl">Title</label>
                <x-input placeholder="Item Name" name="title" type="text" />
            </div>
            <div class="flex flex-col my-6">
                <label for="description" class="font-bold mb-5 text-xl">Description</label>
                <input placeholder="e.g. “This is very limited item”" type="text" name="description" class="border-[1px] rounded-[8px] w-full bg-[#14141F] h-20 border-[#343444] outline-none hover:border-[#5142FC] placeholder: pl-[20px] py-3 font-normal text-[#8A8AA0] text-sm">
            </div>
            <div class="flex items-center gap-x-5 justify-between mb-8">

                <div class="flex flex-col w-[320px]">
                    <label for="royalties" class="font-bold mb-5 text-xl">Royalties</label>
                    <x-input name="royalties" type="text" placeholder="5%" />
                </div>
                <div class="flex flex-col w-[320px]">
                    <label for="size" class="font-bold mb-5 text-xl">Size</label>
                    <x-input type="size" name="size" placeholder="e.g. “size”" />
                </div>
                <div class="flex flex-col w-[320px]">
                    <label for="categories" class="font-bold mb-5 text-xl">categories</label>
                        <select class="bg-[#14141F] outline-none rounded-lg" name="category_id">
                            @foreach($categories as $category)
                                <option class="font-normal text-[13px] value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="w-[320px] flex flex-col">
                    <label class="font-bold mb-5 text-xl">Collection</label>
                    <select class="bg-[#14141F] outline-none rounded-lg" name="collection_id">
                        @foreach($collections as $collection)
                            <option class="font-normal text-[13px]" value="{{$collection->id}}">{{$collection->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="p-3 border rounded-[30px] font-bold text-lg hover:border-[#5142FC] hover:text-[#5142FC]">Create</button>
            </div>
        </form>
    </main>
    @include('_partials.footer')
    <script>
    const inputPrice = document.querySelector("input[name='price']");
    const inputTitle = document.querySelector("input[name='title']");
    const lblPrice = document.querySelector("#lblPrice");
    const lblTitle = document.querySelector("#lblTitle");
    let output = document.getElementById('output');

    let loadFile = function(event) {
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.opacity = '1';
    };

    inputPrice.addEventListener("change", (event) => {
        console.log(event.target.value);

        lblPrice.innerHTML=event.target.value;
    });

    inputTitle.addEventListener("change", (event) => {
        console.log(event.target.value);

        lblTitle.innerHTML=event.target.value;
    });

    </script>
@endsection
