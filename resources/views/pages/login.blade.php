@extends('index')

@section('pages')
    @include('_partials.header')
    <div class="h-216px bg-[#14141F] opacity-[0.7] flex flex-col items-center">
        <h1 class="text-[48px] mt-[60px] font-bold">Login</h1>
        <div class="mt-[12px] flex gap-x-[12px] text-[18px] font-normal mb-[60px]">
            <a href="#">Home</a>
            <span>/</span>
            <a href="#">Pages</a>
            <span>/</span>
            <a href="#">Login</a>
        </div>
    </div>
    <form action="{{ route('login') }}" method="post" class="bg-[#14141F] flex justify-center">
        @csrf
        <div class="w-[690px] mt-[80px] flex flex-col h-[428px] mb-[210px]">
            <div class="flex-col flex text-center">
                <span class="text-[36px] font-bold">Login to NFTs</span>
                <a href="#" class="text-[18px] mb-[30px] font-normal mt-[65px]">Don't have an account?</a>
            </div>
            <div class="gap-y-[25px] flex flex-col">
                <div>
                <x-input placeholder="Your Email Address" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                <x-input placeholder="Password" name="password" required autocomplete="current-password" type="password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
            <div class="mt-[30px] justify-between flex items-center">
                <div class="flex gap-x-[8px] font-normal text-[14px] items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-[#343444] bg-[#14141F] w-5 h-5 border-[1px]">Remember me
                </div>
                <a href="#" class="text-[15px] font-bold">Forgot Password ?</a>
            </div>
            <button type="submit" class=" border-white border-[1px] font-bold text-[15px] mt-[34px] rounded-[56px] pt-[16px] pb-[16px] w-full justify-center">Login</button>
        </div>
    </form>
    @include('_partials.footer')
@endsection
