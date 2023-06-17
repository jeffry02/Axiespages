@extends('index')

@section('pages')
    <header class="bg-[#14141F] text-white">
      <div class=" flex h-[80px]  pl-[255px] items-center border-b-[1px] border-[#8A8AA0] ">
        <div class="font-bold gap-x-[10px] items-center flex mr-[240px] leading-[56px] text-[36px]">
          <svg
            width="30"
            height="41"
            viewBox="0 0 30 41"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M18.75 0C10.2255 5.0344 11.25 19.2187 11.25 19.2187C11.25 19.2187 7.5 17.9375 7.5 12.1719C3.02601 14.831 0 19.9421 0 25.625C0 34.1164 6.71572 41 15 41C23.2843 41 30 34.1164 30 25.625C29.9999 13.1328 18.75 10.5703 18.75 0V0ZM16.3176 35.7023C13.3034 36.4725 10.2505 34.5924 9.49887 31.5027C8.74736 28.4131 10.5816 25.2838 13.596 24.5135C20.8732 22.6538 21.7852 18.4592 21.7852 18.4592C21.7852 18.4592 25.4141 33.3775 16.3176 35.7023Z" fill="url(#paint0_linear_504_1447)"/>
            <defs>
            <linearGradient id="paint0_linear_504_1447" x1="26.25" y1="-1.74884e-06" x2="-5.52352" y2="31.3469" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E250E5"/>
              <stop offset="1" stop-color="#4B50E6"/>
            </linearGradient>
            </defs>
          </svg>
          Axies
        </div>
        <nav class="flex p-[27px] text-[18px] font-bold leading-[26px] mr-[180px] gap-x-[40px]">
          <a href="{{route('dashboard')}}">Home</a>
          <a class="flex gap-x-[6px] items-center" href="/explore">Explore
            <svg
              width="10"
              height="6"
              viewBox="0 0 10 6"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
            </svg>
          </a>
                @if(\Illuminate\Support\Facades\Auth::user() != null)

                <a class="flex gap-x-[6px] items-center" href="{{action([\App\Http\Controllers\ItemController::class, 'create'])}}">Items Create</a>
                <a class="flex gap-x-[6px] items-center" href="{{action([\App\Http\Controllers\UserController::class, 'index'])}}">Authors</a>
                    @endif

                <a class="flex gap-x-[6px] items-center" href="{{action([\App\Http\Controllers\CollectionController::class, 'index'])}}">Details
                    <svg
                        width="10"
                        height="6"
                        viewBox="0 0 10 6",
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                    </svg></a>
                <a class="flex gap-x-[6px] items-center" href="#">Contact
                    <svg
                        width="10"
                        height="6"
                        viewBox="0 0 10 6"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                    </svg></a>
            </nav>

            <div class="">
                <a href="{{route('login')}}" class="py-[13px]  pl-[35px] flex gap-x-[10px] pr-[35px] rounded-[24px] text-[15px] font-bold border-2 border-[#5142FC]">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Icon Wallet">
                            <g id="Wallet">
                                <path id="Wallet_2" fill-rule="evenodd" clip-rule="evenodd" d="M14.8072 6.98483H18.3332C18.3332 4.15383 16.6369 2.5 13.7628 2.5H6.23688C3.3628 2.5 1.6665 4.15383 1.6665 6.94872V13.0513C1.6665 15.8462 3.3628 17.5 6.23688 17.5H13.7628C16.6369 17.5 18.3332 15.8462 18.3332 13.0513V12.7913H14.8072C13.1708 12.7913 11.8443 11.4979 11.8443 9.9025C11.8443 8.30707 13.1708 7.01372 14.8072 7.01372V6.98483ZM14.8072 8.22701H17.711C18.0546 8.22701 18.3332 8.49861 18.3332 8.83365V10.9425C18.3292 11.2759 18.0529 11.5452 17.711 11.5491H14.8739C14.0455 11.56 13.3211 11.007 13.1332 10.2203C13.0391 9.73191 13.1712 9.22797 13.4941 8.84351C13.817 8.45906 14.2976 8.2334 14.8072 8.22701ZM14.9332 10.4441H15.2072C15.5591 10.4441 15.8443 10.1661 15.8443 9.82306C15.8443 9.48004 15.5591 9.20197 15.2072 9.20197H14.9332C14.7649 9.20004 14.6028 9.26387 14.4832 9.3792C14.3635 9.49453 14.2961 9.65177 14.2961 9.81584C14.2961 10.16 14.5802 10.4402 14.9332 10.4441ZM5.61465 6.98483H10.3183C10.6702 6.98483 10.9554 6.70676 10.9554 6.36375C10.9554 6.02073 10.6702 5.74266 10.3183 5.74266H5.61465C5.26569 5.74263 4.98167 6.01633 4.97761 6.35652C4.97759 6.70073 5.26163 6.98088 5.61465 6.98483Z" fill="white"/>
                            </g>
                        </g>
                    </svg>
                    Login
                </a>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
            </div>
            @endif
        </div>
    </header>

    <main class="bg-[#14141F] pt-[117px] pb-[80px] isolate flex pl-[255px] pr-[260px] relative flex-col">
        <div class="flex flex-col">
            <span class="text-[56px] font-bold">Discover, and collect</span>
            <span class="text-[56px] font-bold">extraordinary</span>
            <span class="text-[56px] font-bold"><span class="text-[56px] font-bold">Monster </span>NFTs</span>
            <span class="text-xl font-normal">Marketplace for monster character collections non fungible token NFTs</span>
        </div>
        <div class="flex gap-x-4 mb-[230px] mt-[36px]">
            <a href="{{action([\App\Http\Controllers\CollectionController::class, 'create'])}}" class="py-[17px] flex px-9 rounded-[30px] gap-x-2 border-[#5142FC] border font-bold text-[15px]">
                <svg
                    width="21"
                    height="24"
                    viewBox="0 0 21 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5018 16.208L13.7719 14.0081C16.6056 9.09999 16.241 4.93672 15.9644 3.41039C15.9351 3.24485 15.8342 3.10183 15.6899 3.01705C15.5447 2.93251 15.3707 2.916 15.2117 2.97134C13.7383 3.48437 9.90813 5.22727 7.07185 10.1398L5.80142 12.3403L5.23711 12.3794C4.14896 12.4556 3.16906 13.0678 2.6233 14.0131L1.10734 16.6388C1.01756 16.7943 1.02037 16.9876 1.11469 17.1409C1.20988 17.294 1.38135 17.3818 1.56086 17.3695L3.38816 17.2526C3.90103 17.2202 4.41204 17.3391 4.85737 17.5962L5.82773 18.1565L5.09308 19.4289C4.95793 19.663 5.03802 19.9619 5.27155 20.0968L6.04851 20.5453C6.28205 20.6802 6.58096 20.6001 6.71611 20.366L7.45076 19.0935L8.42057 19.6535C8.8659 19.9106 9.22557 20.2929 9.45358 20.7552L10.2651 22.395C10.3443 22.5566 10.5061 22.6611 10.6862 22.6671C10.8661 22.6721 11.035 22.5779 11.1248 22.4223L12.6407 19.7966C13.1858 18.8525 13.2255 17.6974 12.7486 16.7162L12.5018 16.208ZM11.142 10.8273C10.336 10.362 10.0592 9.33044 10.5245 8.5245C10.9901 7.718 12.0216 7.44256 12.8275 7.90787C13.6329 8.37286 13.9101 9.40387 13.4445 10.2104C12.9792 11.0163 11.9474 11.2923 11.142 10.8273Z" fill="white"/>
                </svg>
                Explore
            </a>
            <a href="{{action([\App\Http\Controllers\ItemController::class, 'create'])}}" class="bg-white py-[17px] flex px-9 rounded-[30px] gap-x-2 font-bold text-[15px] text-[#343444]">
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_201_1122)">
                        <path d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z" fill="#5142FC"/>
                        <path d="M3.13295 0.00947192C2.97955 -0.0183796 2.82127 0.0159954 2.69326 0.105058C2.56529 0.194159 2.47807 0.330605 2.451 0.484199L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947192Z" fill="#5142FC"/>
                        <path d="M19.991 16.8704L17.549 3.02157C17.4928 2.7029 17.189 2.49024 16.8702 2.5463L3.02141 4.98821C2.70274 5.04438 2.48993 5.34829 2.5461 5.66696L4.98801 19.5158C5.015 19.6689 5.10168 19.8049 5.22899 19.8941C5.32817 19.9635 5.44563 20 5.56508 20C5.59895 20 5.63301 19.9971 5.6668 19.9911L19.5156 17.5492C19.6687 17.5223 19.8047 17.4356 19.8939 17.3083C19.983 17.181 20.0179 17.0235 19.991 16.8704ZM5.66821 9.8763C5.61203 9.55763 5.82485 9.25372 6.14352 9.19755L15.3761 7.56958C15.6951 7.51341 15.9987 7.72618 16.0549 8.04485C16.1111 8.36353 15.8983 8.66743 15.5796 8.7236L6.34699 10.3516C6.31258 10.3577 6.27832 10.3606 6.24457 10.3606C5.96555 10.3606 5.71832 10.1606 5.66821 9.8763ZM13.316 13.8826L7.16098 14.9679C7.12656 14.974 7.09231 14.9769 7.05856 14.9769C6.77953 14.9769 6.53231 14.7769 6.48219 14.4926C6.42602 14.1739 6.63883 13.87 6.9575 13.8138L13.1125 12.7285C13.4314 12.6723 13.7351 12.8851 13.7913 13.2038C13.8475 13.5225 13.6347 13.8264 13.316 13.8826ZM15.9865 11.0318L6.75395 12.6597C6.71953 12.6658 6.68528 12.6687 6.65153 12.6687C6.3725 12.6687 6.12528 12.4687 6.07516 12.1844C6.01899 11.8658 6.2318 11.5618 6.55047 11.5057L15.7831 9.8777C16.102 9.82153 16.4057 10.0343 16.4619 10.353C16.518 10.6717 16.3052 10.9756 15.9865 11.0318Z" fill="#5142FC"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_201_1122">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                Create
            </a>
        </div>
        <div class="flex gap-x-10">
            <div class="max-w-[320px]">
                <div class="flex flex-col items-center">
                    <button class="bg-[#5142FC] p-4 mb-[24px] rounded-2xl">
                        <svg
                            width="24"
                            height="21"
                            viewBox="0 0 24 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                            <path d="M18.9227 6.27877H24C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                            <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
                        </svg>
                    </button>
                    <span class="text-2xl font-bold">Set up your wallet</span>
                    <p class="mt-[10px] text-sm text-center font-normal">Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.</p>
                </div>
            </div>
            <div class="max-w-[320px]">
                <div class="flex flex-col items-center">
                    <a  href="" class="bg-[#47A432] p-4 mb-[24px] rounded-2xl">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.10396 0H3.04798C1.36799 0 0 1.37999 0 3.07318V7.16396C0 8.86795 1.36799 10.2359 3.04798 10.2359H7.10396C8.79595 10.2359 10.1519 8.86795 10.1519 7.16396V3.07318C10.1519 1.37999 8.79595 0 7.10396 0Z" fill="white"/>
                            <path d="M7.10396 13.7637H3.04798C1.36799 13.7637 0 15.1329 0 16.8369V20.9276C0 22.6196 1.36799 23.9996 3.04798 23.9996H7.10396C8.79595 23.9996 10.1519 22.6196 10.1519 20.9276V16.8369C10.1519 15.1329 8.79595 13.7637 7.10396 13.7637Z" fill="white"/>
                            <path d="M20.9521 0H16.8961C15.2041 0 13.8481 1.37999 13.8481 3.07318V7.16396C13.8481 8.86795 15.2041 10.2359 16.8961 10.2359H20.9521C22.6321 10.2359 24.0001 8.86795 24.0001 7.16396V3.07318C24.0001 1.37999 22.6321 0 20.9521 0Z" fill="white" fill-opacity="0.4"/>
                            <path d="M20.9521 13.7637H16.8961C15.2041 13.7637 13.8481 15.1329 13.8481 16.8369V20.9276C13.8481 22.6196 15.2041 23.9996 16.8961 23.9996H20.9521C22.6321 23.9996 24.0001 22.6196 24.0001 20.9276V16.8369C24.0001 15.1329 22.6321 13.7637 20.9521 13.7637Z" fill="white"/>
                        </svg>
                        </a>
                            <span class="text-2xl font-bold">Create your collection</span>
                            <p class="mt-[10px] text-sm text-center font-normal">Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
                </div>
            </div>
            <div class="max-w-[320px]">
                <div class="flex-col flex items-center">
                    <button class="bg-[#9835FB] p-4 mb-[24px] rounded-2xl">
                        <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39551 5.88849C1.39551 3.16249 3.06051 1.39549 5.63751 1.39549H14.3535C16.9395 1.39549 18.6045 3.16249 18.6045 5.88849V11.1905C18.1585 10.8125 16.8115 9.87149 16.6235 9.75949C15.2235 8.91949 13.5435 9.29949 12.4535 10.7195C12.3585 10.8445 10.7815 13.1445 10.2235 13.4885C10.0945 13.5685 9.95851 13.6115 9.81351 13.6315C9.46351 13.6615 9.12651 13.4815 8.55351 13.0985C8.22351 12.8885 7.86351 12.6495 7.45351 12.4795C5.74851 11.7665 4.44951 12.9445 3.75751 13.7345C3.74851 13.7425 1.81151 16.1045 1.78051 16.1415C1.53751 15.5505 1.39551 14.8675 1.39551 14.1025V5.88849ZM19.9995 5.88849C19.9995 2.36249 17.7305 0.000488281 14.3535 0.000488281H5.63751C2.27051 0.000488281 -0.000488281 2.36249 -0.000488281 5.88849V14.1025C-0.000488281 15.6745 0.446512 17.0135 1.23751 18.0095C1.24651 18.0185 1.24651 18.0285 1.25551 18.0285C2.04251 19.0135 3.16551 19.6665 4.51851 19.8995C4.53051 19.9015 4.54251 19.9035 4.55551 19.9055C4.90251 19.9625 5.26151 20.0005 5.63751 20.0005H14.3535C14.5345 20.0005 14.6995 19.9665 14.8735 19.9535C15.0775 19.9365 15.2885 19.9325 15.4825 19.8985C15.7395 19.8545 15.9755 19.7775 16.2145 19.7035C16.3185 19.6705 16.4295 19.6505 16.5295 19.6125C16.7725 19.5205 16.9955 19.4015 17.2165 19.2795C17.2965 19.2355 17.3825 19.1995 17.4605 19.1505C17.6775 19.0145 17.8745 18.8555 18.0675 18.6895C18.1315 18.6345 18.2005 18.5845 18.2615 18.5265C18.4495 18.3475 18.6155 18.1505 18.7745 17.9445C18.8235 17.8795 18.8755 17.8195 18.9225 17.7525C19.0755 17.5345 19.2075 17.2995 19.3295 17.0545C19.3635 16.9835 19.3995 16.9145 19.4325 16.8425C19.5455 16.5855 19.6395 16.3165 19.7195 16.0345C19.7405 15.9585 19.7615 15.8835 19.7795 15.8055C19.8505 15.5145 19.9015 15.2145 19.9345 14.9005C19.9385 14.8625 19.9495 14.8275 19.9535 14.7895C19.9605 14.7045 19.9595 14.6195 19.9645 14.5345C19.9725 14.3885 19.9995 14.2535 19.9995 14.1025V5.88849Z" fill="white"/>
                            <path d="M6.50484 9.00009C7.86628 9.00009 9 7.87 9 6.51505C9 5.83564 8.71512 5.21318 8.26066 4.76153C7.80814 4.29347 7.17636 4.00009 6.47868 4.00009C5.10853 4.00009 4 5.10413 4 6.46873C4 6.64919 4.02132 6.82387 4.05911 6.99372C4.28779 8.12574 5.30814 9.00009 6.50484 9.00009Z" fill="white" fill-opacity="0.4"/>
                        </svg>
                    </button>
                    <span class="text-2xl font-bold">Add your NFTs</span>
                    <p class="text-sm mt-[10px] text-center font-normal">Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats</p>
                </div>
            </div>
            <div class="max-w-[320px]">
                <div class="flex flex-col items-center">
                    <button class="bg-[#DF4949] p-4 mb-[24px] rounded-2xl">
                        <svg
                            width="20"
                            height="24"
                            viewBox="0 0 20 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="6" width="13" height="4" fill="white" fill-opacity="0.4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.125 0H13.8375C17.225 0 19.9625 1.28395 20 4.54782V22.7631C20 22.9671 19.95 23.1711 19.85 23.3511C19.6875 23.6391 19.4125 23.8551 19.075 23.9511C18.75 24.0471 18.3875 23.9991 18.0875 23.8311L9.9875 19.9432L1.875 23.8311C1.68875 23.9259 1.475 23.9871 1.2625 23.9871C0.5625 23.9871 0 23.4351 0 22.7631V4.54782C0 1.28395 2.75 0 6.125 0ZM5.27529 9.14372H14.6878C15.2253 9.14372 15.6628 8.72254 15.6628 8.19576C15.6628 7.66778 15.2253 7.24779 14.6878 7.24779H5.27529C4.73779 7.24779 4.30029 7.66778 4.30029 8.19576C4.30029 8.72254 4.73779 9.14372 5.27529 9.14372Z" fill="white"/>
                        </svg>
                    </button>
                    <span class="text-2xl font-bold">List them for sale</span>
                    <p class="text-sm mt-[10px] text-center font-normal">Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
                </div>
            </div>
        </div>
        <svg class="z-[-1] absolute right-0 top-0" xmlns="http://www.w3.org/2000/svg" width="1920" height="820" viewBox="0 0 1920 820" fill="none">
            <path d="M1236.49 632.452C1232.15 630.976 1227.93 629.174 1223.88 627.065C1186.64 607.712 1173.45 570.482 1159.49 531.067C1149.67 503.369 1139.52 474.723 1120.25 452.732C1101.76 431.616 1075.68 417.727 1050.46 404.268C1036.72 396.953 1022.52 389.386 1009.55 380.697C970.411 354.458 942.899 305.78 966.704 272.906C984.982 247.667 1023.49 245.695 1044.81 246.764C1053.32 247.191 1062 248.05 1070.4 248.883C1090.56 250.879 1111.41 252.946 1131.02 249.075C1159.04 243.531 1181.84 226.534 1203.88 210.098C1216.4 200.704 1229.38 191.077 1243.3 183.454C1284.8 160.739 1340.46 157.678 1392.22 175.268C1435.69 190.042 1471.17 217.161 1492.14 251.635C1501.28 266.687 1508.26 283.265 1515 299.313C1527.8 329.747 1539.89 358.496 1565.67 378.708C1579.35 389.444 1595.93 396.597 1611.95 403.518C1619.79 406.907 1627.9 410.406 1635.62 414.302C1652.92 423.024 1682.4 441.942 1685.49 470.646C1689.28 505.849 1648.23 531.517 1607.51 533.403C1590.82 534.172 1573.73 532.484 1557.2 530.81C1535.69 528.678 1513.44 526.473 1492.2 529.785C1452.96 535.934 1421.34 559.892 1390.76 583.066C1382.73 589.158 1374.42 595.431 1366.11 601.31C1344.47 616.625 1288.59 650.162 1236.49 632.452ZM1391.36 177.64C1340.37 160.309 1285.54 163.304 1244.71 185.656C1230.94 193.196 1218.05 202.816 1205.58 212.111C1183.32 228.718 1160.3 245.896 1131.66 251.546C1111.65 255.495 1090.6 253.416 1070.22 251.397C1061.86 250.569 1053.21 249.713 1044.79 249.3C1024.01 248.26 986.531 250.139 968.944 274.418C946.054 306.059 972.978 353.197 1010.99 378.701C1023.82 387.33 1037.97 394.843 1051.65 402.12C1077.1 415.677 1103.43 429.692 1122.27 451.198C1141.87 473.587 1152.11 502.468 1162.01 530.405C1175.79 569.306 1188.81 606.067 1225.06 624.889C1228.99 626.934 1233.08 628.681 1237.28 630.112C1288.14 647.397 1343.1 614.367 1364.37 599.36C1372.63 593.534 1380.93 587.242 1388.95 581.163C1419.79 557.801 1451.66 533.636 1491.58 527.389C1513.15 524.01 1535.58 526.233 1557.28 528.387C1573.71 530.012 1590.7 531.699 1607.18 530.936C1646.61 529.114 1686.39 504.518 1682.76 470.809C1679.69 442.301 1647.91 423.366 1634.39 416.546C1626.75 412.694 1618.68 409.21 1610.88 405.842C1594.68 398.843 1577.94 391.608 1563.94 380.641C1537.59 359.977 1524.81 329.574 1512.45 300.159C1505.73 284.223 1498.8 267.695 1489.75 252.821C1469.14 218.877 1434.19 192.203 1391.36 177.648L1391.36 177.64Z" fill="#6A1AB7"/>
            <g filter="url(#filter0_f_201_1095)">
                <ellipse cx="264.458" cy="229.048" rx="264.458" ry="163.634" fill="url(#paint0_radial_201_1095)" fill-opacity="0.24"/>
            </g>
            <g filter="url(#filter1_f_201_1095)">
                <ellipse cx="1632.79" cy="572.214" rx="157.791" ry="97.6336" transform="rotate(180 1632.79 572.214)" fill="url(#paint1_linear_201_1095)" fill-opacity="0.3"/>
            </g>
            <g filter="url(#filter2_f_201_1095)">
                <ellipse cx="88.9941" cy="55.0654" rx="88.9941" ry="55.0654" transform="matrix(-1 0 0 1 1920 0)" fill="url(#paint2_linear_201_1095)" fill-opacity="0.7"/>
            </g>
            <ellipse cx="694" cy="541.521" rx="11" ry="10.9903" fill="url(#paint3_linear_201_1095)"/>
            <circle cx="1052" cy="251" r="22" fill="url(#paint4_linear_201_1095)"/>
            <ellipse cx="1579" cy="607.986" rx="16" ry="15.9859" fill="url(#paint5_linear_201_1095)"/>
            <ellipse cx="1203" cy="223.802" rx="8" ry="7.99294" fill="url(#paint6_linear_201_1095)"/>
            <path d="M1572.5 176.787C1565.74 176.78 1559.26 174.096 1554.48 169.325C1549.7 164.554 1547.01 158.085 1547 151.338C1547.01 144.591 1549.7 138.122 1554.48 133.351C1559.26 128.58 1565.74 125.896 1572.5 125.889C1579.27 125.896 1585.75 128.58 1590.53 133.351C1595.31 138.122 1598 144.591 1598.01 151.338C1598 158.085 1595.31 164.554 1590.53 169.325C1585.75 174.096 1579.27 176.78 1572.5 176.787ZM1572.5 128.102C1566.33 128.107 1560.41 130.557 1556.04 134.913C1551.68 139.27 1549.22 145.176 1549.21 151.338C1549.22 157.498 1551.67 163.404 1556.04 167.76C1560.4 172.116 1566.32 174.567 1572.5 174.574C1578.67 174.567 1584.59 172.116 1588.95 167.76C1593.32 163.404 1595.78 157.498 1595.78 151.338C1595.78 145.179 1593.32 139.274 1588.96 134.918C1584.59 130.563 1578.68 128.111 1572.5 128.102Z" fill="#6A1AB7"/>
            <path d="M823.504 392.898C816.742 392.891 810.26 390.207 805.478 385.436C800.697 380.665 798.008 374.196 798 367.449C798.008 360.702 800.697 354.233 805.478 349.462C810.26 344.691 816.742 342.008 823.504 342C830.266 342.008 836.749 344.691 841.53 349.462C846.311 354.233 849.001 360.702 849.008 367.449C849.001 374.196 846.311 380.665 841.53 385.436C836.749 390.207 830.266 392.891 823.504 392.898ZM823.504 344.213C817.329 344.219 811.409 346.668 807.042 351.025C802.675 355.381 800.218 361.288 800.211 367.449C800.218 373.609 802.674 379.515 807.039 383.871C811.405 388.227 817.323 390.678 823.497 390.686C829.671 390.678 835.589 388.227 839.955 383.871C844.32 379.515 846.776 373.609 846.784 367.449C846.776 361.29 844.321 355.385 839.957 351.03C835.593 346.674 829.677 344.222 823.504 344.213Z" fill="#6A1AB7"/>
            <defs>
                <filter id="filter0_f_201_1095" x="-150" y="-84.5855" width="828.915" height="627.268" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
                </filter>
                <filter id="filter1_f_201_1095" x="1325" y="324.581" width="615.582" height="495.267" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
                </filter>
                <filter id="filter2_f_201_1095" x="1592.01" y="-150" width="477.988" height="410.131" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
                </filter>
                <radialGradient id="paint0_radial_201_1095" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(305.659 244.463) rotate(34.1621) scale(179.488 167.508)">
                    <stop stop-color="#2B1867"/>
                    <stop offset="0.487063" stop-color="#382383"/>
                    <stop offset="0.781641" stop-color="#452896"/>
                    <stop offset="1" stop-color="#76248E"/>
                </radialGradient>
                <linearGradient id="paint1_linear_201_1095" x1="1568.76" y1="521.275" x2="1663.02" y2="688.356" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2B1867"/>
                    <stop offset="0.487063" stop-color="#382383"/>
                    <stop offset="0.781641" stop-color="#452896"/>
                    <stop offset="1" stop-color="#76248E"/>
                </linearGradient>
                <linearGradient id="paint2_linear_201_1095" x1="52.8805" y1="26.3356" x2="106.043" y2="120.569" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2B1867"/>
                    <stop offset="0.487063" stop-color="#3F298D"/>
                    <stop offset="0.781641" stop-color="#453D9A"/>
                    <stop offset="1" stop-color="#5D6AA7"/>
                </linearGradient>
                <linearGradient id="paint3_linear_201_1095" x1="702.25" y1="530.531" x2="685.952" y2="552.526" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E250E5"/>
                    <stop offset="1" stop-color="#4B50E6"/>
                </linearGradient>
                <linearGradient id="paint4_linear_201_1095" x1="1068.5" y1="229" x2="1035.87" y2="273" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E250E5"/>
                    <stop offset="1" stop-color="#4B50E6"/>
                </linearGradient>
                <linearGradient id="paint5_linear_201_1095" x1="1591" y1="592" x2="1567.29" y2="623.992" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E250E5"/>
                    <stop offset="1" stop-color="#4B50E6"/>
                </linearGradient>
                <linearGradient id="paint6_linear_201_1095" x1="1209" y1="215.809" x2="1197.15" y2="231.805" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E250E5"/>
                    <stop offset="1" stop-color="#4B50E6"/>
                </linearGradient>
            </defs>
        </svg>
    </main>
    <section class="bg-[#0D0D11] pt-[60px] pb-[70px]">
        <div class="flex items-center justify-between mr-[255px] ml-[255px]">
            <span class="text-[36px] font-bold">New Posts</span>
            <span class="text-sm font-normal">Explore more</span>
        </div>
        <div class="relative mt-10">
            <div class="bg-[#0D0D11] h-[15px] w-full absolute gap-x-[22px] items-center flex justify-center bottom-0">
                <svg
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class=" flex gap-x-4 items-center">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"/>
                    </svg>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"/>
                    </svg>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"/>
                    </svg>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"/>
                    </svg>
                </div>
                <svg
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex gap-x-[30px] overflow-x-scroll">
                @foreach($items as $item)
                 <x-home-cards :item-img="$item->getFirstMediaUrL('items_images')" :item-title="$item->title" :user_id="$item->user->name" :item-price="$item->price"/>
                @endforeach
            </div>
    </section>
    <section class="bg-[#14141F] py-20 flex px-[255px] flex-col justify-center">
        <div class="flex items-center justify-between">
            <span class="text-[36px] font-bold">Popular Collection</span>
            <span class="text-sm font-normal">Explore more</span>
        </div>
        <div class="flex mt-10 mb-20">
            <div class="bg-[#343444] p-[20px] rounded-[10px]">
                <div class="flex gap-2.5 mb-[10px]">
                    <div class="bg-[#7A798A] w-[200px] h-[131px] rounded-[10px]"></div>
                    <div class="bg-[#7A798A] h-[131px] w-[200px] rounded-[10px]"></div>
                </div>
                <div class="flex gap-2.5 mb-[20px]">
                    <div class="bg-[#7A798A] w-[130px] h-[131px] rounded-[10px]"></div>
                    <div class="bg-[#7A798A] w-[131px] h-[131px] rounded-[10px]"></div>
                    <div class="bg-[#7A798A] w-[130px] h-[131px] rounded-[10px]"></div>
                </div>
                <div class="gap-x-2.5 flex">
                    <div class="w-[64px] h-[64px] rounded-[21px] relative bg-[#7A798A]">
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
                            <span class="text-xl font-bold  ">Creative Art Collection</span>
                            <div class="flex gap-x-1.5 items-center">
                                <span class="text-[13px] font-normal text-[#8A8AA0]">Created by</span>
                                <span class="text-[15px] font-bold">Ralph Garraway</span>
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
                            <span class="font-bold text-sm">100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="text-[36px] font-bold">Top Seller</span>

        <div class="flex gap-x-[85px] mt-10 mb-20">
            <div class="flex gap-x-4 items-center">
                <div class="w-[100px] h-[100px] relative rounded-[34px] bg-[#7A798A]">
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
                <div class="flex flex-col">
                    <span class="text-base font-bold">Crispin Berry</span>
                    <span class="text-sm font-bold">214.2 ETH</span>
                </div>
            </div>
        </div>

        <div>
            <span class="text-[36px] font-bold">Today's Picks</span>
            <span class="text-sm font-normal">Explore more</span>
        </div>
        <div>
            <div class="flex gap-[30px] flex-wrap gap-y-10 max-w-[1410px]">
                @foreach($items as $item)
                <x-users-cards :item-id="$item->id" :item-img="$item->getFirstMediaUrL('items_images')" :item-title="$item->title" :user_id="$item->user->name" :item-price="$item->price"></x-users-cards>
                @endforeach
            </div>
            <button>Load More</button>
        </div>
    </section>
    @include('_partials.footer')
{{--    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>--}}
{{--    <script>--}}

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        // var pusher = new Pusher('6e81a554f62ce9dfa365', {
        //     cluster: 'us2'
        // });

        // var channel = pusher.subscribe('my-channel');
        // channel.bind('my-event', function(data) {
        //     alert(JSON.stringify(data));
        // });
{{--    </script>--}}
@endsection
