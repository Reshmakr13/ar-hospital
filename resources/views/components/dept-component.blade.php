@props(['src'=>'/images/img1.png','title'=>'Orthopediac and sports medicine'])
<div x-data="{open:false}" class="relative" @mouseleave="open = false">
    <img src="{{$src}}" class="h-72  " alt="hospital_department_image" @mouseover="open = true" >
    <div x-show="open" class="transition-all duration-300 ease-in-out absolute right-0 left-0 top-0 bg-gradient-to-b from-transparent to-black/50 rounded-3xl h-72 w-72"></div>
    <a x-show="!open" class="w-48 absolute  bottom-8 ltr:left-8 rtl:right-8 bg-beige text-darkorange font-helvetica rounded-lg text-left py-2 px-3 ">{{$title}}</a>
    <div  x-show="open" class="absolute top-1/2 ltr:left-20 rtl:right-20  "><x-button-component /></div>
</div>