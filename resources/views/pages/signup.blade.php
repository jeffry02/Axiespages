  @extends('index')

@section('pages')
  @include('_partials.header')
    <div class="h-216px bg-[#14141F] opacity-[0.7] flex flex-col items-center">
      <h1 class="text-[48px] mt-[60px] font-bold">Signup</h1>
      <div class="mt-[12px] flex gap-x-[12px] text-[18px] font-normal mb-[60px]">
        <a href="#">Home</a>
        <span>/</span>
        <a href="#">Pages</a>
        <span>/</span>
        <a href="#">Signup</a>
        </div>
      </div>
    <main class="bg-[#14141F] flex justify-center">
      <div class="w-[690px] mt-[80px] flex flex-col mb-[210px]">
        <div class="flex-col flex text-center">
          <span class="text-[36px] font-bold">Signup to NFTs</span>
          <a href="#" class="text-[18px] mb-[30px] font-normal mt-[65px]">Or login with email</a>
        </div>
        <div class="flex gap-x-8">
          <div class="w-[480px] p-[10px]">
            <form method="post" action="{{ route('register') }}" enctype="multipart/form-data" class="gap-y-8 flex flex-col">
              @csrf
              <div>
                <x-input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Write Your Full Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div>
                <x-input type="file" name="ProfilePic" onchange="loadFile(event)"/>
              </div>
              <div>
                <x-input type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Fill Your Email Address"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div>
                <x-input type="password" name="password" required autocomplete="new-password" placeholder="Set Your Password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div>
                <x-input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <button class=" border-white border-[1px] font-bold text-[15px] mt-[34px] rounded-[56px] pt-[16px] pb-[16px] w-full justify-center">Signup</button>
            </form>
          </div>
            <div>
              <div class="w-[280px] rounded-[30px] h-[280px] mt-5">
                <img id="output" class="opacity-0 object-fill w-[280px] rounded-[30px] h-[280px]">
              </div>
            </div>
        </div>
    </main>
  <script>
      let loadFile = function(event) {
          output.src = URL.createObjectURL(event.target.files[0]);
          output.style.opacity = '1';
      };
  </script>
    @include('_partials.footer')
@endsection
