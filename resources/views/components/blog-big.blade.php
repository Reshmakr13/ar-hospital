@props(['title','content','src'=>'/images/dep2.jpg'])
<div class="flex flex-col border border-beige  bg-beige  rounded-3xl w-1/2 h-full">
    <div class=" ml-6 mr-6">
        <p class="text-4xl font-helvetica mt-8 text-left">{{ $title }}</p>
        <p class="text-base font-thin  font-helvetica text-left mt-6 mb-6 ">{{ $content }}</p>
    </div>
    <div class=" ">
        <img src="{{$src}}" class="border border-transparent   w-full rounded-bl-xl rounded-br-xl " alt="">
    </div>
</div>