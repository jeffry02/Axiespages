@props(['itemimg'])

<div>

    <div class="flex gap-2.5 mb-[10px]">
      <div class="bg-[#7A798A] w-[200px] h-[131px] rounded-[10px]">
        <img class="w-[200px] h-[131px] rounded-[10px] object-fill" src="{{$itemimg ?? 'unknown'}}" alt="#">
      </div>
      <div class="bg-[#7A798A] h-[131px] w-[200px] rounded-[10px]">
        <img class="h-[131px] w-[200px] rounded-[10px] object-fill" src="{{$itemimg ?? 'unknown'}}" alt="#">
      </div>
    </div>
    <div class="flex gap-2.5 mb-[20px]">
      <div class="bg-[#7A798A] w-[130px] h-[131px] rounded-[10px]">
        <img class="w-[130px] h-[131px] rounded-[10px] object-fill" src="{{$itemimg ?? 'unknown'}}" alt="#">
      </div>
      <div class="bg-[#7A798A] w-[131px] h-[131px] rounded-[10px]">
        <img class="w-[131px] h-[131px] rounded-[10px] object-fill" src="{{$itemimg ?? 'unknown'}}" alt="#">
      </div>
      <div class="bg-[#7A798A] w-[130px] h-[131px] rounded-[10px]">
        <img class="w-[130px] h-[131px] rounded-[10px] object-fill" src="{{$itemimg ?? 'unknown'}}" alt="#">
      </div>
    </div>

</div>
