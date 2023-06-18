@props(['userName', 'profilePic'])

<div>
  <div class="flex gap-x-4 items-center">
    <div class="w-[100px] h-[100px] relative rounded-[34px] bg-[#7A798A]">
        <img class="object-fill w-[100px] h-[100px] rounded-[34px]" src="{{$profilePic ?? 'unknown'}}" alt="profile">
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
      <span class="text-base font-bold">{{$userName ?? 'unknown'}}</span>
      <span class="text-sm font-bold">€ 214.2 ETH</span>
    </div>
  </div>
</div>
