@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">


        <div class="flex justify-center w-full mt-4 ">


            <div>
                <span class="relative z-0  flex items-center gap-3  rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('Previous') }}">
                            <span class=" flex items-center gap-2 text-gray-400 cursor-not-allowed" aria-hidden="true">

                                <i class="las la-angle-right text-[20px]"></i>
                            
                                    االسابق
                                                      
                            
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="    " aria-label="{{ __('Previous') }}">
                            <span class=" flex items-center gap-2   px-4 py-2 hover:bg-secondry hover:text-white text-secondry  rounded-md " >

                                <i class="las la-angle-right text-[20px]"></i>
                            
                                االسابق
                                                      
                            
                            </span>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-200 cursor-not-allowed">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-secondry rounded-md">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-secondry bg-transparent hover:bg-secondry hover:text-white rounded-md" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())

                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="    " aria-label="{{ __('Next') }}">
                        <span class=" flex items-center gap-2   px-4 py-2 hover:bg-secondry hover:text-white text-secondry  rounded-md " >

                            التالي
                            <i class="las la-angle-left text-[20px]"></i>
                        </span>
                    </a>
                 
                    @else
                    <span aria-disabled="true" aria-label="{{ __('Next') }}">
                        <span class=" flex items-center gap-2 text-gray-400 cursor-not-allowed" aria-hidden="true">

                         
                            التالي
                            <i class="las la-angle-left text-[20px]"></i>           
                        
                        </span>
                    </span>
 
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
