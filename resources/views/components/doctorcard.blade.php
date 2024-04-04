@props(['designation'=>'Chairman & Medical director','department'=>'Dermatology, Venerology and leprosy','qualification'=>'MBBS, MD DVL (Dermatology, Venerology and leprosy)',
        'specialization'=>'Dermatology',
        'experience'=>'Junior resident in the department of dermatology, medical college, Trivandrum – 3 years

                        Senior resident in the department of dermatology, medical college Kottayam – 1 year

                        Consultant dermatologist at kaya skin clinic cochin – 5 year'])
<div x-data="{ open:false }" class="border border-customOrange rounded-lg flex flex-col md:flex-row ">
    <div class="md:w-1/2 p-2 flex   justify-center gap-y-2">
        <img src="/images/image9.png" class="rounded-lg   " alt="doctor_image">
            
    </div>
    <div class="md:w-1/2 p-4 md:p-10">
        <div class="flex justify-end ">
            <button @click.prevent="open = true"class="bg-darkorange rounded-2xl py-2 flex justify-center w-24 items-center gap-1">
                <p class="text-white">Video</p>
                <span class=" fill-current text-white flex items-center"><x-easyadmin::display.icon icon="icons.youtube-icon" height="h-5" width="w-5"/></span>
            </button>
        </div>        
            
        <div x-show=open class="fixed top-0 left-0 w-full h-full  ">
            <div class="max-w-sm sm:max-w-lg md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto flex flex-col justify-center  bg-white/95 h-screen">
            <div class="flex justify-end ">
                <button @click="open = !open" class="flex justify-end top-0 w-full px-6 py-11 fill-current text-darkorange">
                <x-easyadmin::display.icon icon="icons.close-button" height="h-6" width="w-6"/>
                </button>
            </div>   
                <div class=" flex justify-center items-center ">
                
                    <div class="flex flex-col items-center justify-center ">
                    <iframe width="560" height="415" class="w-2/3 " src="https://www.youtube.com/embed/LUucaju0hHU?si=eYlE4vghjiveYFB-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="flex flex-col items-start justify-start p-4 lg:w-2/3 ">
                            <p class="font-semibold">Experience & Expertise</p>
                            <p class="mt-6 h-52 overflow-y-scroll ">{{$experience}}</p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
     
        <p class="text-3xl text-darkorange font-semibold">Dr. Anish</p>
        <p class="">{{$designation}}</p>
        
        <div  class="mt-6 md:mt-20 flex flex-col gap-y-2 md:gap-y-8">
            <div>
                <p class="font-semibold">Department</p>
                <p>{{$department}}</p>
            </div>
            <div>
                <p class="font-semibold">Qualification</p>
                <p>{{$qualification}}</p>
            </div>
            <div>
                <p class="font-semibold">Specialization</p>
                <p>{{$specialization}}</p>
            </div>
            
        </div>
        </div> 
    </div>
    
</div>