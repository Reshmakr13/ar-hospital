<div class="bg-black/95">
<div class= "flex flex-col lg:flex-row ">
    <div class="lg:w-1/3 pt-16 ltr:ml-16 rtl:mr-16 flex flex-col justify-start gap-y-8 ">
        <div class="rounded-full bg-white flex justify-center p-2 w-52 ">
            <img src="/images/speciality.png" class=" h-12    " alt="craft_logo"> 
        </div>
        <div class="flex flex-row items-center gap-x-1 mt-6 ">
            <span class="fill-current text-white flex items-center ">   
                <x-easyadmin::display.icon icon="icons.phone-icon" height="h-3.5" width="w-3.5"/>
            </span>
            <p class="text-white text-sm">0484 4527 234 <span class="italic">({{__('footer.24/7_general_enquiry')}})</span></p>   
        </div>
        <div class="flex flex-row items-center gap-x-1 ">
         <span class="fill-current text-white flex items-center">   
            <x-easyadmin::display.icon icon="icons.envelope-icon" height="h-4" width="w-4"/>
        </span>
        <p class="text-white text-sm underline underline-offset-2">info@armedcentre.com</p>   
        </div>

        <div class="flex flex-row items-start gap-x-1 ">
         <span class="fill-current text-white flex items-start">   
            <x-easyadmin::display.icon icon="icons.location-icon" height="h-4" width="w-4"/>
        </span>
        <p class="text-white text-sm ">{!!__('footer.ar_address_kodungallur')!!}</p>
           
        </div>
        <div class="flex flex-row items-center gap-x-2 ">
            <span class="fill-current text-white flex items-center gap-x-3">   
                <x-easyadmin::display.icon icon="icons.facebook-icon" height="h-4" width="w-4"/>
                <x-easyadmin::display.icon icon="icons.instagram-icon" height="h-4" width="w-4"/>
                <x-easyadmin::display.icon icon="icons.linkedin-icon" height="h-4" width="w-4"/>
                <x-easyadmin::display.icon icon="icons.youtube-icon" height="h-4" width="w-4"/>
            </span>
        </div>
    
    </div>
    <div class="lg:w-2/3 ltr:ml-16 rtl:mr-16 lg:ml-0 ltr:text-left rtl:text-right pt-16 flex flex-col lg:flex-row justify-end gap-x-2  ">
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
            <p class="text-lg font-normal text-white mb-4">{{ __('header.departments')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.emergency_medicine_and_critical_care')!!}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.orthopaedics_and_trauma_surgery')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.physiotherapy')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.neurology')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.cardiology')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.urology')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.ent')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.dermatology_&_cosmetology')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.pediatrics_&_pediatric_surgery')!!}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.clinical_psychology')}}</p>
            <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.craniofacial_surgery')}}</p>
            
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
        <p class="text-lg font-normal text-white mb-4 ">{{ __('header.facilities')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.24×7_emergency_medicine_and_critical_care')!!}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.24×7_cardiac_care')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.delivery_packages')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.health_check-up_packages')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.health_insurance')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.nicu')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.sicu')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.micu')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.ccu')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.other_facilities')}}</p>
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
        <p class="text-lg font-normal text-white mb-4">{{ __('header.about')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.doctors')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.infrastructure')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.board_members')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.careers')}}</p>
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
        <p class="text-lg font-normal text-white mb-4">{{ __('footer.resources')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.ebook')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.blogs')}}</p>
        <p class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.media')}}</p>
        </div>
        

    </div>
   
</div>
<div class="flex flex-col lg:flex-row justify-between gap-y-2  ltr:ml-10 rtl:mr-10 lg:mx-16 mt-16 ">
    <p class="text-white text-sm">{{ __('footer.right_reserved')}}</p>
    <p class="text-white text-sm mb-8">{{ __('footer.privacy_policy')}}</p>
</div>
</div>