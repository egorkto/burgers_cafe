 @props(['inputName' => '', 'categories' => []])

 <x-dropdown>
     <x-slot name="title">
         <x-dropdown-toggle class="btn btn-secondary">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel"
                 viewBox="0 0 16 16">
                 <path
                     d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
             </svg>
         </x-dropdown-toggle>
     </x-slot>
     <x-dropdown-item class="dropend">
         <x-dropdown class="p-2 dropdown-menu-end">
             <x-slot name="title">
                 <x-dropdown-toggle class="dropdown-item">{{ __('Categories') }}</x-dropdown-toggle>
             </x-slot>
             @foreach ($categories as $category)
                 <x-dropdown-item>
                     <label for="{{ $category->id }}" class='d-flex justify-content-between w-100'>
                         {{ $category->title }}
                         <input type="checkbox" id="{{ $category->id }}" autocomplete="off" name="{{ $inputName }}"
                             value="{{ $category->id }}">
                     </label>
                 </x-dropdown-item>
             @endforeach
         </x-dropdown>
     </x-dropdown-item>
 </x-dropdown>
