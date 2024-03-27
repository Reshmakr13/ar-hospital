@props(['title','content','src'=>'/images/dep2.jpg'])
<div class=" flex flex-col md:flex-row border border-beige  bg-beige  rounded-3xl max-w-xs sm:max-w-sm h-full  ">
    <div class="h-1/2  ml-6 mr-6">
        <p class="text-4xl font-helvetica mt-8 text-left">{{ $title }}</p>
        <p class="text-base font-thin  font-helvetica text-left mt-6 mb-6 ">{{ $content }}</p>
    </div>
    <div class="h-1/2  ">
        <img src="{{$src}}" class="border border-transparent w-full h-80 md:h-full rounded-br-xl rounded-bl-xl " alt="">
    </div>
</div>