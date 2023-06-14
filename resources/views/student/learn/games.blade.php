@extends('student.learn.layouts.main')

@section('learnContent')
    {{-- <div class="col-md-7">
    <h1>Games</h1>

    @foreach ($units as $unit)
        <div class="card">
            <p>{{ $unit->Content }}</p>
            @foreach ($unit->points as $point)
                <a href="/questions/{{ $point->id }}">{{ $point->id }}</a>
            @endforeach
        </div>
    @endforeach

</div> --}}

    <div class="learningg col-md-7 margin-top pt-4">
        @foreach ($units as $unit)
            <div class="chapter">
                <div class="papan" style="background-color: {{ $unit->color }}">
                    <div class="judulbab">
                        <h3 class="textjudul">{{ 'Unit ' . $unit->id }}</h3>
                        <h4 class="juduldes">{{ $unit->Content }}</h4>
                    </div>
                    <button class="guidebook" style="background-color: {{ $unit->color }}">
                        <svg width="1.5vw" height="1.5vw" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_206_3563)">
                                <path
                                    d="M0.0195312 4.83273C0.0195312 4.10477 0.609655 3.51465 1.33761 3.51465H3.09505C3.823 3.51465 4.41313 4.10477 4.41313 4.83273C4.41313 5.56068 3.823 6.15081 3.09505 6.15081H1.33761C0.609655 6.15081 0.0195312 5.56068 0.0195312 4.83273Z"
                                    fill="white" />
                                <path
                                    d="M0.0195312 11.863C0.0195312 11.135 0.609655 10.5449 1.33761 10.5449H3.09505C3.823 10.5449 4.41313 11.135 4.41313 11.863C4.41313 12.5909 3.823 13.181 3.09505 13.181H1.33761C0.609655 13.181 0.0195312 12.5909 0.0195312 11.863Z"
                                    fill="white" />
                                <path
                                    d="M0.0195312 18.8923C0.0195312 18.1643 0.609655 17.5742 1.33761 17.5742H3.09505C3.823 17.5742 4.41313 18.1643 4.41313 18.8923C4.41313 19.6202 3.823 20.2104 3.09505 20.2104H1.33761C0.609655 20.2104 0.0195312 19.6202 0.0195312 18.8923Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.65527 3.51493V6.15108H3.09466C3.82261 6.15108 4.41274 5.56096 4.41274 4.83301C4.41274 4.10505 3.82261 3.51493 3.09466 3.51493H2.65527ZM3.09466 1.75749H3.09349C3.68239 0.708669 4.80532 0 6.09377 0H20.4134C22.3125 0 23.8519 1.53947 23.8519 3.4385V20.2869C23.8519 22.1859 22.3125 23.7254 20.4134 23.7254H6.09377C4.80535 23.7254 3.68244 23.0168 3.09353 21.968H3.09464C4.7932 21.968 6.17016 20.591 6.17016 18.8925C6.17016 17.1939 4.7932 15.817 3.09464 15.817H2.65527V14.9383H3.09464C4.7932 14.9383 6.17016 13.5614 6.17016 11.8628C6.17016 10.1643 4.7932 8.78731 3.09464 8.78731H2.65527V7.90852H3.09466C4.79322 7.90852 6.17017 6.53157 6.17017 4.83301C6.17017 3.13445 4.79322 1.75749 3.09466 1.75749ZM3.09464 20.2105H2.65527V17.5744H3.09464C3.8226 17.5744 4.41272 18.1645 4.41272 18.8925C4.41272 19.6204 3.8226 20.2105 3.09464 20.2105ZM3.09464 13.1809H2.65527V10.5448H3.09464C3.8226 10.5448 4.41272 11.1349 4.41272 11.8628C4.41272 12.5908 3.8226 13.1809 3.09464 13.1809ZM9.90473 3.95423C9.2981 3.95423 8.80633 4.446 8.80633 5.05263C8.80633 5.65926 9.2981 6.15103 9.90473 6.15103H19.1313C19.7379 6.15103 20.2297 5.65926 20.2297 5.05263C20.2297 4.446 19.7379 3.95423 19.1313 3.95423H9.90473ZM8.80633 10.3249C8.80633 9.71831 9.2981 9.22654 9.90473 9.22654H19.1313C19.7379 9.22654 20.2297 9.71831 20.2297 10.3249C20.2297 10.9316 19.7379 11.4233 19.1313 11.4233H9.90473C9.2981 11.4233 8.80633 10.9316 8.80633 10.3249ZM9.90473 14.4989C9.2981 14.4989 8.80633 14.9906 8.80633 15.5973C8.80633 16.2039 9.2981 16.6957 9.90473 16.6957H16.4951C17.1017 16.6957 17.5935 16.2039 17.5935 15.5973C17.5935 14.9906 17.1017 14.4989 16.4951 14.4989H9.90473Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_206_3563">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <h5 class="notebook">Notebook</h5>
                    </button>
                </div>

                <div class="layoutlevel">
                    {{-- start --}}



                    @foreach ($unit->points as $point)
                        {{-- @if ($userPoints->contains($point->id))

                        {{ $userPoints }}
                        @endif --}}
                        {{-- if id dari pointnya udh ada di progress user --}}
                        @if (($point->id%4 == 1) && !$userPoints->contains($point->id))
                        {{-- <a href="/questions/{{ $point->id }}/{{ $point->pages[0]->id }}"> --}}
                            {{-- <button>
                                <svg width="82" height="114" viewBox="0 0 82 114" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="6" y="77.5" width="70" height="8" fill="#58CC02" />
                                    <rect x="6" y="77.5" width="70" height="8" fill="black"
                                        fill-opacity="0.2" />
                                    <g filter="url(#filter0_dd_206_3644)">
                                        <rect x="6" y="49" width="70" height="57" rx="28.5"
                                            fill="#58CC02" />
                                    </g>
                                    <g clip-path="url(#clip0_206_3644)">
                                        <mask id="mask0_206_3644" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="26" y="63" width="30" height="29">
                                            <path d="M56 63.5H26V91.5H56V63.5Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_206_3644)">
                                            <path
                                                d="M38.7521 64.9116C39.6598 63.0295 42.3402 63.0295 43.2479 64.9116L45.8539 70.3152C46.225 71.0847 46.9639 71.6109 47.8125 71.7099L53.7906 72.4076C55.9269 72.6569 56.7684 75.3114 55.1658 76.7459L50.8845 80.5785C50.224 81.1697 49.9267 82.067 50.1035 82.9357L51.2468 88.553C51.6684 90.624 49.4857 92.2487 47.6228 91.2506L42.1786 88.3339C41.4424 87.9395 40.5576 87.9395 39.8214 88.3339L34.3772 91.2506C32.5143 92.2487 30.3316 90.624 30.7532 88.553L31.8965 82.9357C32.0733 82.067 31.776 81.1697 31.1155 80.5785L26.8342 76.7459C25.2316 75.3114 26.0731 72.6569 28.2094 72.4076L34.1875 71.7099C35.0361 71.6109 35.775 71.0847 36.1461 70.3152L38.7521 64.9116Z"
                                                fill="white" />
                                        </g>
                                    </g>
                                    <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                        fill="white" />
                                    <path
                                        d="M22.1459 20.5799C22.1033 20.1502 21.9204 19.8164 21.5973 19.5785C21.2741 19.3406 20.8356 19.2216 20.2816 19.2216C19.9052 19.2216 19.5873 19.2749 19.3281 19.3814C19.0689 19.4844 18.87 19.6282 18.7315 19.8129C18.5966 19.9975 18.5291 20.207 18.5291 20.4414C18.522 20.6367 18.5628 20.8072 18.6516 20.9528C18.7439 21.0984 18.87 21.2244 19.0298 21.331C19.1896 21.4339 19.3743 21.5245 19.5838 21.6026C19.7933 21.6772 20.017 21.7411 20.2549 21.7944L21.2351 22.0288C21.7109 22.1353 22.1477 22.2773 22.5454 22.4549C22.9432 22.6325 23.2876 22.8509 23.5788 23.1101C23.87 23.3693 24.0955 23.6747 24.2553 24.0263C24.4187 24.3778 24.5021 24.7809 24.5057 25.2354C24.5021 25.9031 24.3317 26.4819 23.9943 26.9719C23.6605 27.4585 23.1775 27.8366 22.5454 28.1065C21.9169 28.3729 21.1587 28.506 20.2709 28.506C19.3902 28.506 18.6232 28.3711 17.9698 28.1012C17.3199 27.8313 16.8121 27.4318 16.4464 26.9027C16.0841 26.37 15.8942 25.7113 15.8764 24.9265H18.1083C18.1331 25.2923 18.2379 25.5977 18.4226 25.8427C18.6108 26.0842 18.8611 26.267 19.1736 26.3913C19.4897 26.5121 19.8466 26.5724 20.2443 26.5724C20.6349 26.5724 20.9741 26.5156 21.2617 26.402C21.5529 26.2884 21.7784 26.1303 21.9382 25.9279C22.098 25.7255 22.1779 25.4929 22.1779 25.2301C22.1779 24.9851 22.1051 24.7791 21.9595 24.6122C21.8174 24.4453 21.6079 24.3033 21.3309 24.1861C21.0575 24.0689 20.7219 23.9624 20.3242 23.8665L19.1363 23.5682C18.2166 23.3445 17.4904 22.9947 16.9577 22.5188C16.425 22.043 16.1605 21.402 16.164 20.5959C16.1605 19.9354 16.3363 19.3583 16.6914 18.8647C17.05 18.3711 17.5419 17.9858 18.1669 17.7088C18.7919 17.4318 19.5021 17.2933 20.2976 17.2933C21.1072 17.2933 21.8139 17.4318 22.4176 17.7088C23.0248 17.9858 23.4971 18.3711 23.8345 18.8647C24.1718 19.3583 24.3459 19.93 24.3565 20.5799H22.1459ZM26.1516 19.3441V17.4425H35.1111V19.3441H31.7712V28.3516H29.4914V19.3441H26.1516ZM37.6439 28.3516H35.1723L38.9383 17.4425H41.9106L45.6713 28.3516H43.1997L40.4671 19.9354H40.3818L37.6439 28.3516ZM37.4894 24.0636H43.3275V25.864H37.4894V24.0636ZM47.4943 28.3516V17.4425H51.7983C52.6221 17.4425 53.3253 17.5898 53.9076 17.8846C54.4936 18.1758 54.9392 18.5895 55.2446 19.1257C55.5536 19.6584 55.7081 20.2852 55.7081 21.006C55.7081 21.7305 55.5518 22.3537 55.2393 22.8757C54.9268 23.3942 54.474 23.7919 53.881 24.0689C53.2915 24.3459 52.5777 24.4844 51.7397 24.4844H48.8579V22.6307H51.3668C51.8071 22.6307 52.1729 22.5703 52.4641 22.4496C52.7553 22.3288 52.9719 22.1477 53.114 21.9062C53.2596 21.6648 53.3324 21.3647 53.3324 21.006C53.3324 20.6438 53.2596 20.3384 53.114 20.0898C52.9719 19.8413 52.7535 19.6531 52.4588 19.5252C52.1676 19.3938 51.8 19.3281 51.3561 19.3281H49.8007V28.3516H47.4943ZM53.3856 23.3871L56.0969 28.3516H53.5507L50.8981 23.3871H53.3856ZM57.4326 19.3441V17.4425H66.3921V19.3441H63.0522V28.3516H60.7724V19.3441H57.4326Z"
                                        fill="#58CC02" />
                                    <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                        stroke="#E5E5E5" stroke-width="2" />
                                    <defs>
                                        <filter id="filter0_dd_206_3644" x="6" y="49" width="70"
                                            height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="8" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.345098 0 0 0 0 0.8 0 0 0 0 0.00784314 0 0 0 1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_206_3644" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="8" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_206_3644"
                                                result="effect2_dropShadow_206_3644" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_206_3644"
                                                result="shape" />
                                        </filter>
                                        <clipPath id="clip0_206_3644">
                                            <rect width="42" height="34" fill="white"
                                                transform="translate(20 60.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button> --}}
                            {{-- </a> --}}

                            <form action="/questions" method="post">
                                @csrf
                                <input type="hidden" name="point_id" value="{{ $point->id }}">
                                <input type="hidden" name="page_id" value="{{ $point->pages[0]->id }}">
                                <input type="hidden" name="page_name" value="{{ $point->pages[0]->page_name }}">
                                <button type="submit">
                                    <svg width="82" height="114" viewBox="0 0 82 114" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="6" y="77.5" width="70" height="8" fill="#58CC02" />
                                        <rect x="6" y="77.5" width="70" height="8" fill="black"
                                            fill-opacity="0.2" />
                                        <g filter="url(#filter0_dd_206_3644)">
                                            <rect x="6" y="49" width="70" height="57" rx="28.5"
                                                fill="#58CC02" />
                                        </g>
                                        <g clip-path="url(#clip0_206_3644)">
                                            <mask id="mask0_206_3644" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                                x="26" y="63" width="30" height="29">
                                                <path d="M56 63.5H26V91.5H56V63.5Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_206_3644)">
                                                <path
                                                    d="M38.7521 64.9116C39.6598 63.0295 42.3402 63.0295 43.2479 64.9116L45.8539 70.3152C46.225 71.0847 46.9639 71.6109 47.8125 71.7099L53.7906 72.4076C55.9269 72.6569 56.7684 75.3114 55.1658 76.7459L50.8845 80.5785C50.224 81.1697 49.9267 82.067 50.1035 82.9357L51.2468 88.553C51.6684 90.624 49.4857 92.2487 47.6228 91.2506L42.1786 88.3339C41.4424 87.9395 40.5576 87.9395 39.8214 88.3339L34.3772 91.2506C32.5143 92.2487 30.3316 90.624 30.7532 88.553L31.8965 82.9357C32.0733 82.067 31.776 81.1697 31.1155 80.5785L26.8342 76.7459C25.2316 75.3114 26.0731 72.6569 28.2094 72.4076L34.1875 71.7099C35.0361 71.6109 35.775 71.0847 36.1461 70.3152L38.7521 64.9116Z"
                                                    fill="white" />
                                            </g>
                                        </g>
                                        <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                            fill="white" />
                                        <path
                                            d="M22.1459 20.5799C22.1033 20.1502 21.9204 19.8164 21.5973 19.5785C21.2741 19.3406 20.8356 19.2216 20.2816 19.2216C19.9052 19.2216 19.5873 19.2749 19.3281 19.3814C19.0689 19.4844 18.87 19.6282 18.7315 19.8129C18.5966 19.9975 18.5291 20.207 18.5291 20.4414C18.522 20.6367 18.5628 20.8072 18.6516 20.9528C18.7439 21.0984 18.87 21.2244 19.0298 21.331C19.1896 21.4339 19.3743 21.5245 19.5838 21.6026C19.7933 21.6772 20.017 21.7411 20.2549 21.7944L21.2351 22.0288C21.7109 22.1353 22.1477 22.2773 22.5454 22.4549C22.9432 22.6325 23.2876 22.8509 23.5788 23.1101C23.87 23.3693 24.0955 23.6747 24.2553 24.0263C24.4187 24.3778 24.5021 24.7809 24.5057 25.2354C24.5021 25.9031 24.3317 26.4819 23.9943 26.9719C23.6605 27.4585 23.1775 27.8366 22.5454 28.1065C21.9169 28.3729 21.1587 28.506 20.2709 28.506C19.3902 28.506 18.6232 28.3711 17.9698 28.1012C17.3199 27.8313 16.8121 27.4318 16.4464 26.9027C16.0841 26.37 15.8942 25.7113 15.8764 24.9265H18.1083C18.1331 25.2923 18.2379 25.5977 18.4226 25.8427C18.6108 26.0842 18.8611 26.267 19.1736 26.3913C19.4897 26.5121 19.8466 26.5724 20.2443 26.5724C20.6349 26.5724 20.9741 26.5156 21.2617 26.402C21.5529 26.2884 21.7784 26.1303 21.9382 25.9279C22.098 25.7255 22.1779 25.4929 22.1779 25.2301C22.1779 24.9851 22.1051 24.7791 21.9595 24.6122C21.8174 24.4453 21.6079 24.3033 21.3309 24.1861C21.0575 24.0689 20.7219 23.9624 20.3242 23.8665L19.1363 23.5682C18.2166 23.3445 17.4904 22.9947 16.9577 22.5188C16.425 22.043 16.1605 21.402 16.164 20.5959C16.1605 19.9354 16.3363 19.3583 16.6914 18.8647C17.05 18.3711 17.5419 17.9858 18.1669 17.7088C18.7919 17.4318 19.5021 17.2933 20.2976 17.2933C21.1072 17.2933 21.8139 17.4318 22.4176 17.7088C23.0248 17.9858 23.4971 18.3711 23.8345 18.8647C24.1718 19.3583 24.3459 19.93 24.3565 20.5799H22.1459ZM26.1516 19.3441V17.4425H35.1111V19.3441H31.7712V28.3516H29.4914V19.3441H26.1516ZM37.6439 28.3516H35.1723L38.9383 17.4425H41.9106L45.6713 28.3516H43.1997L40.4671 19.9354H40.3818L37.6439 28.3516ZM37.4894 24.0636H43.3275V25.864H37.4894V24.0636ZM47.4943 28.3516V17.4425H51.7983C52.6221 17.4425 53.3253 17.5898 53.9076 17.8846C54.4936 18.1758 54.9392 18.5895 55.2446 19.1257C55.5536 19.6584 55.7081 20.2852 55.7081 21.006C55.7081 21.7305 55.5518 22.3537 55.2393 22.8757C54.9268 23.3942 54.474 23.7919 53.881 24.0689C53.2915 24.3459 52.5777 24.4844 51.7397 24.4844H48.8579V22.6307H51.3668C51.8071 22.6307 52.1729 22.5703 52.4641 22.4496C52.7553 22.3288 52.9719 22.1477 53.114 21.9062C53.2596 21.6648 53.3324 21.3647 53.3324 21.006C53.3324 20.6438 53.2596 20.3384 53.114 20.0898C52.9719 19.8413 52.7535 19.6531 52.4588 19.5252C52.1676 19.3938 51.8 19.3281 51.3561 19.3281H49.8007V28.3516H47.4943ZM53.3856 23.3871L56.0969 28.3516H53.5507L50.8981 23.3871H53.3856ZM57.4326 19.3441V17.4425H66.3921V19.3441H63.0522V28.3516H60.7724V19.3441H57.4326Z"
                                            fill="#58CC02" />
                                        <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                            stroke="#E5E5E5" stroke-width="2" />
                                        <defs>
                                            <filter id="filter0_dd_206_3644" x="6" y="49" width="70"
                                                height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="8" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix"
                                                    values="0 0 0 0 0.345098 0 0 0 0 0.8 0 0 0 0 0.00784314 0 0 0 1 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_206_3644" />
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="8" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                                <feBlend mode="normal" in2="effect1_dropShadow_206_3644"
                                                    result="effect2_dropShadow_206_3644" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_206_3644"
                                                    result="shape" />
                                            </filter>
                                            <clipPath id="clip0_206_3644">
                                                <rect width="42" height="34" fill="white"
                                                    transform="translate(20 60.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </form>
                        @elseif ($userPoints->contains($point->id))
                        <a href="/questions/{{ $point->id }}/{{ $point->pages[0]->id }}">
                        <svg width="80" height="77" viewBox="0 0 80 77" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="80" height="76.16" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1003_6399" transform="scale(0.008 0.00840336)"/>
                            </pattern>
                            <image id="image0_1003_6399" width="125" height="119" xlink:href="data:image/png;base64,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"/>
                            </defs>
                            </svg>
                        </a>

                        @elseif ($userPoints->contains($point->id-1))
                        <a href="/questions/{{ $point->id }}/{{ $point->pages[0]->id }}">
                            <button>
                                <svg width="82" height="114" viewBox="0 0 82 114" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="6" y="77.5" width="70" height="8" fill="#58CC02" />
                                    <rect x="6" y="77.5" width="70" height="8" fill="black"
                                        fill-opacity="0.2" />
                                    <g filter="url(#filter0_dd_206_3644)">
                                        <rect x="6" y="49" width="70" height="57" rx="28.5"
                                            fill="#58CC02" />
                                    </g>
                                    <g clip-path="url(#clip0_206_3644)">
                                        <mask id="mask0_206_3644" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="26" y="63" width="30" height="29">
                                            <path d="M56 63.5H26V91.5H56V63.5Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_206_3644)">
                                            <path
                                                d="M38.7521 64.9116C39.6598 63.0295 42.3402 63.0295 43.2479 64.9116L45.8539 70.3152C46.225 71.0847 46.9639 71.6109 47.8125 71.7099L53.7906 72.4076C55.9269 72.6569 56.7684 75.3114 55.1658 76.7459L50.8845 80.5785C50.224 81.1697 49.9267 82.067 50.1035 82.9357L51.2468 88.553C51.6684 90.624 49.4857 92.2487 47.6228 91.2506L42.1786 88.3339C41.4424 87.9395 40.5576 87.9395 39.8214 88.3339L34.3772 91.2506C32.5143 92.2487 30.3316 90.624 30.7532 88.553L31.8965 82.9357C32.0733 82.067 31.776 81.1697 31.1155 80.5785L26.8342 76.7459C25.2316 75.3114 26.0731 72.6569 28.2094 72.4076L34.1875 71.7099C35.0361 71.6109 35.775 71.0847 36.1461 70.3152L38.7521 64.9116Z"
                                                fill="white" />
                                        </g>
                                    </g>
                                    <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                        fill="white" />
                                    <path
                                        d="M22.1459 20.5799C22.1033 20.1502 21.9204 19.8164 21.5973 19.5785C21.2741 19.3406 20.8356 19.2216 20.2816 19.2216C19.9052 19.2216 19.5873 19.2749 19.3281 19.3814C19.0689 19.4844 18.87 19.6282 18.7315 19.8129C18.5966 19.9975 18.5291 20.207 18.5291 20.4414C18.522 20.6367 18.5628 20.8072 18.6516 20.9528C18.7439 21.0984 18.87 21.2244 19.0298 21.331C19.1896 21.4339 19.3743 21.5245 19.5838 21.6026C19.7933 21.6772 20.017 21.7411 20.2549 21.7944L21.2351 22.0288C21.7109 22.1353 22.1477 22.2773 22.5454 22.4549C22.9432 22.6325 23.2876 22.8509 23.5788 23.1101C23.87 23.3693 24.0955 23.6747 24.2553 24.0263C24.4187 24.3778 24.5021 24.7809 24.5057 25.2354C24.5021 25.9031 24.3317 26.4819 23.9943 26.9719C23.6605 27.4585 23.1775 27.8366 22.5454 28.1065C21.9169 28.3729 21.1587 28.506 20.2709 28.506C19.3902 28.506 18.6232 28.3711 17.9698 28.1012C17.3199 27.8313 16.8121 27.4318 16.4464 26.9027C16.0841 26.37 15.8942 25.7113 15.8764 24.9265H18.1083C18.1331 25.2923 18.2379 25.5977 18.4226 25.8427C18.6108 26.0842 18.8611 26.267 19.1736 26.3913C19.4897 26.5121 19.8466 26.5724 20.2443 26.5724C20.6349 26.5724 20.9741 26.5156 21.2617 26.402C21.5529 26.2884 21.7784 26.1303 21.9382 25.9279C22.098 25.7255 22.1779 25.4929 22.1779 25.2301C22.1779 24.9851 22.1051 24.7791 21.9595 24.6122C21.8174 24.4453 21.6079 24.3033 21.3309 24.1861C21.0575 24.0689 20.7219 23.9624 20.3242 23.8665L19.1363 23.5682C18.2166 23.3445 17.4904 22.9947 16.9577 22.5188C16.425 22.043 16.1605 21.402 16.164 20.5959C16.1605 19.9354 16.3363 19.3583 16.6914 18.8647C17.05 18.3711 17.5419 17.9858 18.1669 17.7088C18.7919 17.4318 19.5021 17.2933 20.2976 17.2933C21.1072 17.2933 21.8139 17.4318 22.4176 17.7088C23.0248 17.9858 23.4971 18.3711 23.8345 18.8647C24.1718 19.3583 24.3459 19.93 24.3565 20.5799H22.1459ZM26.1516 19.3441V17.4425H35.1111V19.3441H31.7712V28.3516H29.4914V19.3441H26.1516ZM37.6439 28.3516H35.1723L38.9383 17.4425H41.9106L45.6713 28.3516H43.1997L40.4671 19.9354H40.3818L37.6439 28.3516ZM37.4894 24.0636H43.3275V25.864H37.4894V24.0636ZM47.4943 28.3516V17.4425H51.7983C52.6221 17.4425 53.3253 17.5898 53.9076 17.8846C54.4936 18.1758 54.9392 18.5895 55.2446 19.1257C55.5536 19.6584 55.7081 20.2852 55.7081 21.006C55.7081 21.7305 55.5518 22.3537 55.2393 22.8757C54.9268 23.3942 54.474 23.7919 53.881 24.0689C53.2915 24.3459 52.5777 24.4844 51.7397 24.4844H48.8579V22.6307H51.3668C51.8071 22.6307 52.1729 22.5703 52.4641 22.4496C52.7553 22.3288 52.9719 22.1477 53.114 21.9062C53.2596 21.6648 53.3324 21.3647 53.3324 21.006C53.3324 20.6438 53.2596 20.3384 53.114 20.0898C52.9719 19.8413 52.7535 19.6531 52.4588 19.5252C52.1676 19.3938 51.8 19.3281 51.3561 19.3281H49.8007V28.3516H47.4943ZM53.3856 23.3871L56.0969 28.3516H53.5507L50.8981 23.3871H53.3856ZM57.4326 19.3441V17.4425H66.3921V19.3441H63.0522V28.3516H60.7724V19.3441H57.4326Z"
                                        fill="#58CC02" />
                                    <rect x="1.5" y="1.85156" width="79" height="43" rx="9"
                                        stroke="#E5E5E5" stroke-width="2" />
                                    <defs>
                                        <filter id="filter0_dd_206_3644" x="6" y="49" width="70"
                                            height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="8" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.345098 0 0 0 0 0.8 0 0 0 0 0.00784314 0 0 0 1 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow_206_3644" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="8" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                            <feBlend mode="normal" in2="effect1_dropShadow_206_3644"
                                                result="effect2_dropShadow_206_3644" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_206_3644"
                                                result="shape" />
                                        </filter>
                                        <clipPath id="clip0_206_3644">
                                            <rect width="42" height="34" fill="white"
                                                transform="translate(20 60.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            </a>
                        @else
                        {{-- if id dari pointnya blm ada di progress user, tampilin lock --}}
                        {{-- <a href="/questions/{{ $point->id }}/{{ $point->pages[0]->id }}"> --}}
                        <button>
                            <svg width="70" height="66" viewBox="0 0 70 66" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="29.4961" width="70" height="8" fill="#E5E5E5" />
                                <rect y="29.4961" width="70" height="8" fill="black" fill-opacity="0.2" />
                                <g filter="url(#filter0_dd_206_3482)">
                                    <rect y="0.996094" width="70" height="57" rx="28.5" fill="#E5E5E5" />
                                </g>
                                <g clip-path="url(#clip0_206_3482)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.8731 17.0342C30.9449 17.0342 27.7604 20.0201 27.7604 23.7033V25.979C27.7604 26.0346 27.7612 26.0901 27.7626 26.1453H27.7049C25.854 26.1453 24.3535 27.6458 24.3535 29.4967V38.4378C24.3535 40.2887 25.854 41.7892 27.7049 41.7892H42.0455C43.8965 41.7892 45.397 40.2887 45.397 38.4378V29.4968C45.397 27.6458 43.8965 26.1453 42.0455 26.1453H41.9837C41.9851 26.0901 41.9858 26.0346 41.9858 25.979V23.7033C41.9858 20.02 38.8014 17.0342 34.8731 17.0342ZM38.4812 26.1453C38.484 26.0902 38.4855 26.0348 38.4855 25.979V23.7033C38.4855 21.8327 36.8682 20.3162 34.8731 20.3162C32.8781 20.3162 31.2608 21.8327 31.2608 23.7033V25.979C31.2608 26.0348 31.2622 26.0902 31.2651 26.1453H38.4812Z"
                                        fill="#AFAFAF" />
                                </g>
                                <defs>
                                    <filter id="filter0_dd_206_3482" x="0" y="0.996094" width="70"
                                        height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="8" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.898039 0 0 0 0 0.898039 0 0 0 0 0.898039 0 0 0 1 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_206_3482" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="8" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                        <feBlend mode="normal" in2="effect1_dropShadow_206_3482"
                                            result="effect2_dropShadow_206_3482" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_206_3482"
                                            result="shape" />
                                    </filter>
                                    <clipPath id="clip0_206_3482">
                                        <rect width="42" height="34" fill="white"
                                            transform="translate(14 12.4961)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </button>
                        {{-- </a> --}}
                        @endif
                    @endforeach


                    <button>
                        <svg width="80" height="90" viewBox="0 0 80 90" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_206_3588)">
                                <path opacity="0.3"
                                    d="M76 38H4C1.79086 38 0 39.7909 0 42V74C0 76.2091 1.79086 78 4 78H76C78.2091 78 80 76.2091 80 74V42C80 39.7909 78.2091 38 76 38Z"
                                    fill="#AFAFAF" />
                                <path
                                    d="M8.28906 39.7366C8.28906 34.2001 12.7772 29.7119 18.3137 29.7119H60.7559C66.2924 29.7119 70.7806 34.2001 70.7806 39.7366V66.3203C70.7806 68.5349 68.9853 70.3302 66.7707 70.3302H12.2989C10.0843 70.3302 8.28906 68.5349 8.28906 66.3203V39.7366Z"
                                    fill="#9A9A9A" />
                                <path
                                    d="M6.12207 25.2273C6.12207 19.6908 10.6103 15.2026 16.1468 15.2026H63.2629C68.7994 15.2026 73.2877 19.6908 73.2877 25.2273V55.0509H6.12207V25.2273Z"
                                    fill="#9A9A9A" />
                                <path d="M76.9183 42.7715H3.10938V54.2999H76.9183V42.7715Z" fill="#D8D8D8" />
                                <path
                                    d="M67.0205 25.4771H74.917C76.0243 25.4771 76.9219 26.3747 76.9219 27.482V45.7771H67.0205V25.4771Z"
                                    fill="#D8D8D8" />
                                <path
                                    d="M3.10938 27.482C3.10938 26.3747 4.00701 25.4771 5.11432 25.4771H11.507C12.6143 25.4771 13.512 26.3747 13.512 27.482V43.7722C13.512 44.8794 12.6143 45.7771 11.507 45.7771H5.11432C4.00701 45.7771 3.10938 44.8794 3.10938 43.7722V27.482Z"
                                    fill="#D8D8D8" />
                                <path
                                    d="M6.12207 14.0049C6.12207 12.8976 7.01971 12 8.12701 12H18.6529C19.7602 12 20.6579 12.8976 20.6579 14.0049V34.5027H6.12207V14.0049Z"
                                    fill="#D8D8D8" />
                                <path
                                    d="M58.752 14.0049C58.752 12.8976 59.6497 12 60.757 12H71.2829C72.3902 12 73.2879 12.8976 73.2879 14.0049V34.5027H58.752V14.0049Z"
                                    fill="#D8D8D8" />
                                <path d="M6.25391 24.1446L20.602 20.5723V33.2222L6.25391 33.0464V24.1446Z"
                                    fill="#EDEDED" />
                                <path d="M6.12207 31.7251H20.6579V46.2198H6.12207V31.7251Z" fill="#BFBFBF" />
                                <path
                                    d="M6.12207 52.5436C6.12207 51.4363 7.01971 50.5386 8.12701 50.5386H18.6529C19.7602 50.5386 20.6579 51.4363 20.6579 52.5436V70.3903C20.6579 71.4976 19.7602 72.3953 18.6529 72.3953H8.12701C7.01971 72.3953 6.12207 71.4976 6.12207 70.3903V52.5436Z"
                                    fill="#BFBFBF" />
                                <path
                                    d="M57.4346 52.5436C57.4346 51.4363 58.3323 50.5386 59.4396 50.5386H69.9655C71.0728 50.5386 71.9705 51.4363 71.9705 52.5436V70.3903C71.9705 71.4976 71.0728 72.3953 69.9655 72.3953H59.4396C58.3323 72.3953 57.4346 71.4976 57.4346 70.3903V52.5436Z"
                                    fill="#BFBFBF" />
                                <path d="M73.2878 31.7251H58.752V46.2198H73.2878V31.7251Z" fill="#BFBFBF" />
                                <path d="M42.4618 49.9126H36.9482V59.624H42.4618V49.9126Z" fill="#C4C4C4" />
                                <path d="M20.6579 55.3081H6.12207V60.1952H20.6579V55.3081Z" fill="#9A9A9A" />
                                <path d="M71.9704 55.3081H57.4346V60.1952H71.9704V55.3081Z" fill="#9A9A9A" />
                                <path d="M57.4315 63.8179H20.6533V66.4494H57.4315V63.8179Z" fill="#898989" />
                                <path d="M58.7472 23.6396H20.6533V26.2711H58.7472V23.6396Z" fill="#898989" />
                                <path opacity="0.92" d="M57.4315 55.3081H20.6533V60.1952H57.4315V55.3081Z"
                                    fill="#888888" />
                                <path opacity="0.92" d="M58.7472 35.3047H20.6533V42.7704H58.7472V35.3047Z"
                                    fill="#898989" />
                                <path
                                    d="M3.10938 46.2158H76.9183V55.3007C76.9183 56.408 76.0206 57.3057 74.9133 57.3057H5.11432C4.00701 57.3057 3.10938 56.408 3.10938 55.3007V46.2158Z"
                                    fill="#BFBFBF" />
                                <path
                                    d="M46.845 38.3828H31.9332C30.2722 38.3828 28.9258 39.7293 28.9258 41.3902V53.5761C28.9258 55.237 30.2722 56.5835 31.9332 56.5835H46.845C48.5059 56.5835 49.8524 55.237 49.8524 53.5761V41.3902C49.8524 39.7293 48.5059 38.3828 46.845 38.3828Z"
                                    fill="#D8D8D8" />
                                <path
                                    d="M33.6017 38.3828H31.9332C30.2723 38.3828 28.9258 39.7292 28.9258 41.3902V53.5761C28.9258 55.237 30.2723 56.5835 31.9332 56.5835H32.9372C33.4626 56.5835 33.8853 56.1516 33.874 55.6263L33.6017 42.9727V38.3828Z"
                                    fill="#EDEDED" />
                                <path
                                    d="M46.845 42.8633H31.9332C30.2722 42.8633 28.9258 44.2098 28.9258 45.8707V57.7966C28.9258 59.4575 30.2722 60.804 31.9332 60.804H46.845C48.5059 60.804 49.8524 59.4575 49.8524 57.7966V45.8707C49.8524 44.2098 48.5059 42.8633 46.845 42.8633Z"
                                    fill="#BFBFBF" />
                                <path
                                    d="M39.0439 53.2506C41.2239 53.2506 42.9911 51.6635 42.9911 49.7059C42.9911 47.7482 41.2239 46.1611 39.0439 46.1611C36.8639 46.1611 35.0967 47.7482 35.0967 49.7059C35.0967 51.6635 36.8639 53.2506 39.0439 53.2506Z"
                                    fill="#8A8A8A" />
                                <path
                                    d="M38.1466 51.6034C38.516 50.8646 39.5704 50.8646 39.9398 51.6034L41.7361 55.1958C42.0694 55.8623 41.5848 56.6466 40.8395 56.6466H37.2469C36.5017 56.6466 36.017 55.8623 36.3503 55.1958L38.1466 51.6034Z"
                                    fill="#8A8A8A" />
                                <path d="M58.7852 16.3848L73.2559 12.8931V20.8578L58.7852 24.3496V16.3848Z"
                                    fill="#EDEDED" />
                                <path d="M28.9267 42.3579H20.4844V46.1609H28.9267V42.3579Z" fill="#EDEDED" />
                            </g>
                            <defs>
                                <clipPath id="clip0_206_3588">
                                    <rect width="80" height="90" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-3" id="progress_sidebar">
        @include('student.learn.layouts.progress')
    </div>
@endsection
