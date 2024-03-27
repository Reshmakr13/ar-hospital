@props(['title','content','src'=>'/images/dep2.jpg'])
<div class="flex flex-row md:flex-row border border-beige  bg-beige  rounded-3xl lg:w-1/2  ">
    <div class="w-1/2  ml-6 mr-6">
        <p class="text-4xl font-helvetica mt-8 text-left">{{ $title }}</p>
        <p class="text-base font-thin  font-helvetica text-left mt-6 mb-6 ">{{ $content }}</p>
    </div>
    <div class="w-1/2  ">
        <img src="{{$src}}" class="border border-transparent w-full h-48 md:h-full rounded-tr-xl rounded-br-xl " alt="">
    </div>
</div>