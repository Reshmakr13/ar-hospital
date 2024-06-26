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
            <ul>
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'emergency-medicine-and-critical-care'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'emergency-medicine-and-critical-care'])}}'})" 
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.emergency_medicine_and_critical_care')!!}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'orthopaedics-and-trauma-surgery'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'orthopaedics-and-trauma-surgery'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.orthopaedics_and_trauma_surgery')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'physiotherapy'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'physiotherapy'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.physiotherapy')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'neurology'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'neurology'])}}'})" 
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.neurology')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'cardiology'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'cardiology'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.cardiology')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'urology'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'urology'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.urology')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'ent'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'ent'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.ent')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'dermatology-cosmetology'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'dermatology-cosmetology'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.dermatology_&_cosmetology')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'pediatrics-pediatric-surgery'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'pediatrics-pediatric-surgery'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.pediatrics_&_pediatric_surgery')!!}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'clinical-psychology'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'clinical-psychology'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.clinical_psychology')}}</a></li>
                
                <li><a href="{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'craniofacial-surgery'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('departments.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'craniofacial-surgery'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.craniofacial_surgery')}}</a></li>
            </ul>
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
            <p class="text-lg font-normal text-white mb-4 ">{{ __('header.facilities')}}</p>
            <ul>
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => '24x7-emergency-medicine-and-critical-care'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => '24x7-emergency-medicine-and-critical-care'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{!!__('footer.24×7_emergency_medicine_and_critical_care')!!}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => '24x7-cardiac-care'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => '24x7-cardiac-care'])}}'})" 
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.24×7_cardiac_care')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'delivery-packages'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'delivery-packages'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.delivery_packages')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'health-check-up-packages'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'health-check-up-packages'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.health_check-up_packages')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'health-insurance'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'health-insurance'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.health_insurance')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'nicu'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'nicu'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.nicu')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'sicu'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'sicu'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.sicu')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'micu'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'micu'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.micu')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'ccu'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'ccu'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.ccu')}}</a></li>
                
                <li><a href="{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'other-facilities'])}}"
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('facilities.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'other-facilities'])}}'})" 
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.other_facilities')}}</a></li>
            </ul>
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
            <p class="text-lg font-normal text-white mb-4">{{ __('header.about')}}</p>
            <ul>
                <li><a href="{{route('webpages.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'doctors'])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('webpages.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'doctors'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.doctors')}}</a></li>
                
                <!-- <li><a href="{{route('webpages.guest.show', ['locale' => app()->currentLocale(),'slug' => ''])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('webpages.guest.show', ['locale' => app()->currentLocale(), 'slug' => ''])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.infrastructure')}}</a></li>
                
                <li><a class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.board_members')}}</a></li> -->
                
                <li><a href="{{route('webpages.guest.show', ['locale' => app()->currentLocale(),'slug' => 'careers'])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('webpages.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'careers'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.careers')}}</a></li>
            </ul>
        </div>
        <div class="lg:w-1/4 mb-8 flex flex-col gap-2">
            <p class="text-lg font-normal text-white mb-4">{{ __('footer.resources')}}</p>
            <ul>
                <li><a href="{{route('webpages.guest.show', ['locale' => app()->currentLocale(),'slug' => 'ebooks'])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('webpages.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'ebooks'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.ebook')}}</a></li>
                <!-- <li><a class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('footer.blogs')}}</a></li> -->
                <li><a href="{{route('media.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'our-photos'])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('media.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'our-photos'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.our_photos')}}</a></li>
                <li><a href="{{route('media.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'our_videos'])}}" 
                        @click.prevent.stop="$dispatch('linkaction', {link: '{{route('media.guest.show', ['locale' => app()->currentLocale(), 'slug' => 'our_videos'])}}'})"
                        class="text-sm text-white hover:underline underline-offset-2 font-thin">{{ __('header.our_videos')}}</a></li>
            </ul>
        </div>
        

    </div>
   
</div>
<div class="flex flex-col lg:flex-row justify-between gap-y-2  ltr:ml-10 rtl:mr-10 lg:mx-16 mt-16 ">
    <p class="text-white text-sm">{{ __('footer.right_reserved')}}</p>
    <p class="text-white text-sm mb-8">{{ __('footer.privacy_policy')}}</p>
</div>
</div>