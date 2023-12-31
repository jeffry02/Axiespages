<header class="bg-[#14141F] opacity-[0.7] text-white">
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
            Axies</div>
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
                <a class="flex gap-x-[6px] items-center" href="/user?userid={{\Illuminate\Support\Facades\Auth::user()->id}}">Authors</a>
        @endif
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
            <button class="py-[13px]  pl-[35px] flex gap-x-[10px] pr-[35px] rounded-[24px] text-[15px] font-bold border-2 border-[#5142FC]">
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
                Wallet connect
            </button>
        </div>
</header>
