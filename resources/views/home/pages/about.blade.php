<html lang="en" style="--head-fontFamily: 'Clash Display', sans-serif; --body-fontFamily: 'Satoshi', sans-serif; --header-logo-fontFamily: 'Clash Display', sans-serif; --header-logo-fontWeight: 600; --footer-logo-fontFamily: 'Clash Display', sans-serif; --footer-logo-fontWeight: 600;">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta name="robots" content="noindex, nofollow">
      <meta http-equiv="content-language" content="en">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
      <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700,800&amp;display=swap" rel="stylesheet">
      <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,600,700,800&amp;display=swap" rel="stylesheet">
      <meta name="next-head-count" content="8">

      <link rel="stylesheet" href="/laravel10/public/assets/css/6c7c42dacc871655.css" data-n-g="">
      <link rel="stylesheet" type="text/css" href="/laravel10/public/assets/css/26a1a5c22ee4e247.css">
      <link rel="stylesheet" type="text/css" href="/laravel10/public/assets/css/6ad5f70cb56137d7.css">
      <link rel="stylesheet" type="text/css" href="/laravel10/public/assets/css/a6e8b051a157dcb0.css">
      <link rel="stylesheet" type="text/css" href="/laravel10/public/assets/css/main.css">
      <style>/*!
         Theme: GitHub Dark
         Description: Dark theme as seen on github.com
         Author: github.com
         Maintainer: @Hirse
         Updated: 2021-05-15
         Outdated base version: https://github.com/primer/github-syntax-dark
         Current colors taken from GitHub's CSS
         */.hljs{color:#c9d1d9;background:#0d1117}.hljs-doctag,.hljs-keyword,.hljs-meta .hljs-keyword,.hljs-template-tag,.hljs-template-variable,.hljs-type,.hljs-variable.language_{color:#ff7b72}.hljs-title,.hljs-title.class_,.hljs-title.class_.inherited__,.hljs-title.function_{color:#d2a8ff}.hljs-attr,.hljs-attribute,.hljs-literal,.hljs-meta,.hljs-number,.hljs-operator,.hljs-variable,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-id{color:#79c0ff}.hljs-regexp,.hljs-string,.hljs-meta .hljs-string{color:#a5d6ff}.hljs-built_in,.hljs-symbol{color:#ffa657}.hljs-comment,.hljs-code,.hljs-formula{color:#8b949e}.hljs-name,.hljs-quote,.hljs-selector-tag,.hljs-selector-pseudo{color:#7ee787}.hljs-subst{color:#c9d1d9}.hljs-section{color:#1f6feb;font-weight:700}.hljs-bullet{color:#f2cc60}.hljs-emphasis{color:#c9d1d9;font-style:italic}.hljs-strong{color:#c9d1d9;font-weight:700}.hljs-addition{color:#aff5b4;background-color:#033a16}.hljs-deletion{color:#ffdcd7;background-color:#67060c}pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}/*!
         Theme: GitHub
         Description: Light theme as seen on github.com
         Author: github.com
         Maintainer: @Hirse
         Updated: 2021-05-15
         Outdated base version: https://github.com/primer/github-syntax-light
         Current colors taken from GitHub's CSS
         */.hljs{color:#24292e;background:#ffffff}.hljs-doctag,.hljs-keyword,.hljs-meta .hljs-keyword,.hljs-template-tag,.hljs-template-variable,.hljs-type,.hljs-variable.language_{color:#d73a49}.hljs-title,.hljs-title.class_,.hljs-title.class_.inherited__,.hljs-title.function_{color:#6f42c1}.hljs-attr,.hljs-attribute,.hljs-literal,.hljs-meta,.hljs-number,.hljs-operator,.hljs-variable,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-id{color:#005cc5}.hljs-regexp,.hljs-string,.hljs-meta .hljs-string{color:#032f62}.hljs-built_in,.hljs-symbol{color:#e36209}.hljs-comment,.hljs-code,.hljs-formula{color:#6a737d}.hljs-name,.hljs-quote,.hljs-selector-tag,.hljs-selector-pseudo{color:#22863a}.hljs-subst{color:#24292e}.hljs-section{color:#005cc5;font-weight:700}.hljs-bullet{color:#735c0f}.hljs-emphasis{color:#24292e;font-style:italic}.hljs-strong{color:#24292e;font-weight:700}.hljs-addition{color:#22863a;background-color:#f0fff4}.hljs-deletion{color:#b31d28;background-color:#ffeef0}
      </style>

   </head>
   <body class="overflow-x-hidden">
    <div id="__next" data-reactroot="">

        <style>
            #nprogress {
              pointer-events: none;
            }
            #nprogress .bar {
              background: #F2CA2C;
              position: fixed;
              z-index: 9999;
              top: 0;
              left: 0;
              width: 100%;
              height: 3px;
            }
            #nprogress .peg {
              display: block;
              position: absolute;
              right: 0px;
              width: 100px;
              height: 100%;
              box-shadow: 0 0 10px #F2CA2C, 0 0 5px #F2CA2C;
              opacity: 1;
              -webkit-transform: rotate(3deg) translate(0px, -4px);
              -ms-transform: rotate(3deg) translate(0px, -4px);
              transform: rotate(3deg) translate(0px, -4px);
            }
            #nprogress .spinner {
              display: block;
              position: fixed;
              z-index: 1031;
              top: 15px;
              right: 15px;
            }
            #nprogress .spinner-icon {
              width: 18px;
              height: 18px;
              box-sizing: border-box;
              border: solid 2px transparent;
              border-top-color: #F2CA2C;
              border-left-color: #F2CA2C;
              border-radius: 50%;
              -webkit-animation: nprogresss-spinner 400ms linear infinite;
              animation: nprogress-spinner 400ms linear infinite;
            }
            .nprogress-custom-parent {
              overflow: hidden;
              position: relative;
            }
            .nprogress-custom-parent #nprogress .spinner,
            .nprogress-custom-parent #nprogress .bar {
              position: absolute;
            }
            @-webkit-keyframes nprogress-spinner {
              0% {
                -webkit-transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(360deg);
              }
            }
            @keyframes nprogress-spinner {
              0% {
                transform: rotate(0deg);
              }
              100% {
                transform: rotate(360deg);
              }
            }
        </style>



        <div id="main-body" class="flex flex-col h-full overflow-y-auto overflow-x-hidden smooth-scroll transition-all" style="scroll-behavior: smooth;">

            <header id="website-header" class="!z-[2000] transition-colors duration-300 sticky top-0" style="background-color: rgb(222, 223, 227); color: rgb(17, 24, 39);">
                <div class="relative z-10 grid items-center lg:gap-6 xl:gap-10 mx-auto pt-8 pb-8 px-6 lg:px-12" style="grid-template-columns:auto auto auto">

                   <div class="col-span-2 lg:col-span-1">
                      <a class="grid max-w-full" target="_self" href="/">
                         <h2 class="heading-small lg:heading-medium max-w-full whitespace-nowrap overflow-hidden overflow-ellipsis" style="color: rgb(17, 24, 39); font-family: var(--header-logo-fontFamily); font-weight: var(--header-logo-fontWeight); width: 135.547px;">TechLife</h2>
                      </a>
                   </div>

                   <div class="hidden lg:flex item-center justify-end gap-10 lg:col-span-2">
                    <ul class="hidden items-center flex-wrap lg:flex justify-end gap-x-6" style="color: rgb(17, 24, 39);">
                        <li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor"><a class="block body-normal whitespace-nowrap py-1.5" target="_self" href="{{ route('about') }}" >About</a></li>
                        <li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor"><a class="block body-normal whitespace-nowrap py-1.5" target="_self" href="{{ route('services') }}" >Services</a></li>
                        <li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor"><a class="block body-normal whitespace-nowrap py-1.5" target="_self" href="{{ route('contact') }}" >Contact</a></li>
                        <li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor"><a class="block body-normal whitespace-nowrap py-1.5" target="_self" href="{{ route('faq') }}">FAQ</a></li>
                        <li class="border-b-2" style="border-color:transparent;background-color:transparent;color:currentColor"><a class="block body-normal whitespace-nowrap py-1.5" target="_self" href="{{ route('project') }}" >Project</a></li>
                     </ul>
                      <ul class="lg:flex items-center gap-x-4 gap-y-2 flex-wrap justify-end hidden"></ul>
                      <div class="hidden lg:flex items-center flex-shrink-0 gap-4"><a class="button md" target="_self" href="/?pt=NjgwNWQ3ZDQzNjdmM2I3Yzc2N2U0OWZkOjE3NDUyMzEzMTMuNTU3OnByZXZpZXc=#" style="border-width: 2px; border-style: solid; box-shadow: none; font-family: var(--body-fontFamily); font-weight: var(--body-fontWeight, 500); font-style: var(--body-fontStyle); background-color: rgb(22, 21, 19); color: rgb(255, 255, 255); border-radius: 40px; border-color: rgb(22, 21, 19);">Contact</a></div>
                   </div>
                   <div class="ml-auto lg:hidden">
                      <button class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition-colors duration-300" style="color: rgb(17, 24, 39);">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="block h-5 w-5">
                            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path>
                         </svg>
                      </button>
                   </div>
                </div>
            </header>




            <section class="relative">
            <div id="6805dab1f07a02263851dc61" data-text-color="#111827" class="flex relative break-word items-center" data-combine-with-header="false" style="z-index: 39; scroll-margin-top: calc(6rem); min-height: calc(-106px); padding-bottom: 0px;">
                <div class="w-full flex break-word transition-all duration-300 items-center">
                    <div class="absolute inset-0 z-10 pointer-events-none">
                        <div class="absolute inset-0 z-10" style="background-color: rgb(242, 202, 44);"></div>
                    </div>
                    <div class="relative z-10 container mx-auto px-5 md:px-6 transition-all duration-300 pt-8 lg:pt-32 pb-8 lg:pb-32">
                        <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 relative z-10 w-full h-full">
                        <div class="flex w-full gap-10 lg:gap-20 transition-all duration-300 flex-col justify-center">
                            <div class="flex-1 flex flex-col gap-4 w-full max-w-3xl items-center text-center mx-auto">
                                <h1 class="break-word heading-xlarge" style="color: rgb(17, 24, 39);">About us</h1>
                            </div>
                            <div class="flex-1 flex w-full lg:max-w-1/2 h-full transition-all duration-300 items-center lg:max-w-1/2 mx-auto text-center">
                                <div class="flex-shrink-0 relative mx-auto w-full h-full transition-all duration-300 aspect-w-16 aspect-h-9">

                                    <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                        <img alt="Web Browser with Pictogram Business People on Chalkboard Background  - 3D Rendering" src="/laravel/public/assets/image/image-1.jpeg" decoding="async" data-nimg="fill" class="transition-all duration-300" sizes="100vw" ></span></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805dab5f07a02263851dc63" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(0px); z-index: 38; padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
                    <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 flex w-full gap-10 lg:gap-20 flex-col lg:flex-row items-center">
                        <div class="flex-1 flex flex-col max-w-240 items-start">
                        <div class="rich-text-block" style="color: rgb(17, 24, 39);">
                            <h2 style="white-space:pre-line">Empowering Innovation in Project Showcasing</h2>
                            At mytechlife, based in the vibrant city of New Delhi, we are dedicated to transforming how projects are showcased across industries. Our innovative platform offers a dynamic space for professionals to present their work, ensuring every project receives the attention it deserves. By fostering a community of creativity and collaboration, mytechlife empowers individuals to connect, inspire, and drive forward innovation.
                        </div>
                        </div>
                        <div class="flex-1 flex w-full h-full justify-center lg:justify-start">
                        <div class="flex-shrink-0 relative w-full h-full mx-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Innovation Concept On A Laptop Screen" title="Innovation Concept On A Laptop Screen" src="/laravel/public/assets/image/image-7.jpeg" decoding="async" data-nimg="fill" class="" sizes="200vw"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805daa8f07a02263851dc5f" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(0px); z-index: 37; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(242, 202, 44);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
                    <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
                        <div class="rich-text-block max-w-5xl text-center mx-auto" style="color: rgb(17, 24, 39);">
                        <h2 style="white-space:pre-line">Our mission</h2>
                        <p class="normal" style="white-space:pre-line">Empowering innovation through strategic tech solutions in New Delhi.</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805e0d9f07a02263851dccf" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(0px); z-index: 36; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
                    <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
                        <div class="rich-text-block max-w-5xl text-center mx-auto" style="color: rgb(17, 24, 39);">
                        <h3 style="white-space:pre-line">MyTechLife is your gateway to innovation in New Delhi. Our project portfolio exemplifies cutting-edge solutions tailored to elevate businesses in the region. With a commitment to excellence and a focus on results, we turn vision into reality. Explore our projects and discover how we can transform your business journey.</h3>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805dab1f07a02263851dc62" class="flex flex-none flex-shrink-0 relative break-word items-center" style="min-height: calc(0px); z-index: 35; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                </div>
                <div class="relative z-10 w-full pt-8 lg:pt-12 pb-16 lg:pb-32">
                    <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0">
                        <div class="gallery-carousel">
                        <div class="slider-container" style="position: relative;">
                            <div aria-live="polite" aria-atomic="true" tabindex="-1" style="position: absolute; width: 1px; height: 1px; overflow: hidden; padding: 0px; margin: -1px; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border: 0px;">Slide 1 of 5</div>
                            <div style="align-items: center; justify-content: flex-start; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
                                <div class="slider-control-centerleft" style="pointer-events: auto;">
                                    <button class="" aria-label="previous" type="button" style="border: 0px; background: transparent; color: white; padding: 10px; text-transform: uppercase; opacity: 1; cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" width="24" height="24" class="w-6 lg:w-12 h-6 lg:h-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15 19-7-7 7-7"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                            <div style="align-items: center; justify-content: flex-end; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
                                <div class="slider-control-centerright" style="pointer-events: auto;">
                                    <button class="" aria-label="next" type="button" style="border: 0px; background: transparent; color: white; padding: 10px; text-transform: uppercase; opacity: 1; cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" width="24" height="24" class="w-6 lg:w-12 h-6 lg:h-12">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5 7 7-7 7"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                            <div style="align-items: flex-end; justify-content: center; position: absolute; display: flex; z-index: 1; inset: 0px; pointer-events: none;">
                                <div class="slider-control-bottomcenter" style="pointer-events: auto;">
                                    <ul class="flex gap-4 lg:gap-5 mt-4 md:mt-10">
                                    <li><button class="w-2.5 h-2.5 rounded-full transition-all bg-gray-900 ring-4 ring-gray-200"></button></li>
                                    <li><button class="w-2.5 h-2.5 rounded-full transition-all bg-gray-900"></button></li>
                                    <li><button class="w-2.5 h-2.5 rounded-full transition-all bg-gray-900"></button></li>
                                    <li><button class="w-2.5 h-2.5 rounded-full transition-all bg-gray-900"></button></li>
                                    <li><button class="w-2.5 h-2.5 rounded-full transition-all bg-gray-900"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-frame" aria-label="carousel-slider" role="region" tabindex="0" style="overflow: hidden; width: 100%; position: relative; outline: none; height: auto; transition: height 300ms ease-in-out; will-change: height; user-select: none;">
                                <div class="slider-list" style="width: 1000%; text-align: left; user-select: auto; transform: translateX(calc(-31.6667% + 0px)); display: flex;">
                                    <div class="slide prev-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="PORTFOLIO Word with Tower Crane" title="PORTFOLIO Word with Tower Crane" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide prev-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Web design and website development" title="Web design and website development" src="/laravel/public/assets/image/scroll-2.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide prev-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="The word &quot;JOBS&quot; written in wooden letterpress." title="The word &quot;JOBS&quot; written in wooden letterpress." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                            <noscript></noscript>
                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide prev-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." title="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                            <noscript></noscript>
                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide prev-cloned slide-visible" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Job. Text on colored cubes" title="Job. Text on colored cubes" src="/_next/image?url=https%3A%2F%2Fcdn.durable.co%2Fgetty%2F4twaUlhBLSyB2PJNEsotxB3mhvDV4jNYjaFY5SFxqVorOnbYSFAyPRDemuP8dSRd.jpeg&amp;w=1920&amp;q=90" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide slide-current slide-visible" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="PORTFOLIO Word with Tower Crane" title="PORTFOLIO Word with Tower Crane" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide slide-visible" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Web design and website development" title="Web design and website development" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw"></span></div>
                                    </div>
                                    <div class="slide" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="The word &quot;JOBS&quot; written in wooden letterpress." title="The word &quot;JOBS&quot; written in wooden letterpress." src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." title="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." src="/laravel/public/assets/image/scroll-1.jpeg"decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Job. Text on colored cubes" title="Job. Text on colored cubes" src="/laravel/public/assets/image/scroll-1.jpeg"decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide next-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="PORTFOLIO Word with Tower Crane" title="PORTFOLIO Word with Tower Crane" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide next-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Web design and website development" title="Web design and website development" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw" ></span></div>
                                    </div>
                                    <div class="slide next-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="The word &quot;JOBS&quot; written in wooden letterpress." title="The word &quot;JOBS&quot; written in wooden letterpress." src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide next-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." title="Online CV/Resume and Job Search. Business. Business man searching for staff on a laptop computer." src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                            <noscript></noscript>
                                        </span>
                                    </div>
                                    </div>
                                    <div class="slide next-cloned" inert="true" style="width: 6.66667%; flex: 1 1 0%; height: auto; padding: 0px 20px; opacity: 1;">
                                    <div class="relative overflow-hidden cursor-auto aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Job. Text on colored cubes" title="Job. Text on colored cubes" src="/laravel/public/assets/image/scroll-1.jpeg"decoding="async" data-nimg="fill" class="w-full h-full object-center object-cover" draggable="false" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;" sizes="200vw"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805daeff07a02263851dc64" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(0px); z-index: 34; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-16 lg:pt-32 pb-16 lg:pb-32">
                    <div>
                        <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 flex flex-col gap-4 mb-6 items-start">
                        <h2 class="break-word heading-large block w-full ml-0 mr-auto" style="color: rgb(17, 24, 39);">Innovative Solutions, Trusted Quality</h2>
                        </div>
                        <div class="flex flex-wrap relative justify-start" style="gap: 40px;">
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="transition-all transition-all ease-in-out duration-500 delay-100 opacity-100 translate-y-0 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Innovation Concept On A Laptop Screen" title="Innovation Concept On A Laptop Screen" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="" sizes="200vw" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                                    <div class="flex flex-row items-center justify-start"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Innovation</p>
                                            <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">At mytechlife, we are committed to pushing the boundaries of what's possible. We foster a culture of creativity and encourage our team to explore new ideas and technologies to deliver cutting-edge solutions.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="transition-all transition-all ease-in-out duration-500 delay-200 opacity-100 translate-y-0 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Integrity - Business Chalkboard Background" title="Integrity - Business Chalkboard Background" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="" sizes="200vw" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                                    <div class="flex flex-row items-center justify-start"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Integrity</p>
                                            <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">We believe in conducting our business with the highest level of integrity. Transparency, honesty, and ethical practices are at the heart of everything we do, ensuring trust and reliability for our clients and partners.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="transition-all transition-all ease-in-out duration-500 delay-300 opacity-100 translate-y-0 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Bull's-eye with woman in centre" title="Bull's-eye with woman in centre" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="" sizes="200vw"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                                    <div class="flex flex-row items-center justify-start"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Customer-Centricity</p>
                                            <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">Our clients are at the center of our universe. We strive to understand their unique needs and deliver tailored solutions that exceed their expectations, ensuring a seamless and satisfying experience every time.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="transition-all transition-all ease-in-out duration-500 delay-400 opacity-100 translate-y-0 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Desktop 3D illustration. Web development and UI design" title="Desktop 3D illustration. Web development and UI design" src="/laravel/public/assets/image/scroll-1.jpeg" decoding="async" data-nimg="fill" class="" sizes="200vw"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                                    <div class="flex flex-row items-center justify-start"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Excellence</p>
                                            <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">We are dedicated to achieving excellence in all our endeavors. From the quality of our work to the professionalism of our team, we are committed to delivering only the best.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="transition-all transition-all ease-in-out duration-500 delay-500 opacity-100 translate-y-0 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-3 aspect-h-2"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="Financial meeting" title="Financial meeting" src="/laravel/public/assets/image/scroll-1.jpeg"decoding="async" data-nimg="fill" class="" sizes="200vw"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                                    <div class="flex flex-row items-center justify-start"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Collaboration</p>
                                            <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">We believe in the power of teamwork. By fostering a collaborative environment, we harness the collective expertise of our diverse team to create innovative solutions and achieve common goals.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805e0ebf07a02263851dcd0" data-text-color="#111827" class="flex relative break-word items-center" data-combine-with-header="false" style="z-index: 33; scroll-margin-top: calc(6rem); min-height: calc(0px); padding-bottom: 0px;">
                <div class="flex justify-center w-full break-word items-center">
                    <div class="absolute inset-0 transition-all duration-300" style="background-color: rgb(222, 223, 227);"></div>
                    <div class="relative z-10 container mx-auto px-5 md:px-6 pt-12 lg:pt-20 pb-12 lg:pb-20">
                        <div class="relative z-10 px-4 md:px-28 overflow-hidden">
                        <div class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-5"></div>
                        <div class="relative z-10 py-12 lg:py-32">
                            <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                            <div class="transition-all transition-all ease-in-out duration-500   translate-y-8 flex flex-col gap-4 max-w-3xl items-center mx-auto text-center">
                                <h2 class="break-word heading-xlarge" style="color: rgb(17, 24, 39);">Showcase Your Vision Today</h2>
                                <pre class="body-normal" style="color: rgb(17, 24, 39);">Discover how mytechlife can elevate your projects with our comprehensive portfolio showcasing services in New Delhi. Turn your best work into your greatest asset.</pre>
                                <div class="flex md:inline-flex flex-wrap gap-4 justify-center pt-4"><button type="button" class="button lg" style="border-width: 2px; border-style: solid; box-shadow: none; font-family: var(--body-fontFamily); font-weight: var(--body-fontWeight, 500); font-style: var(--body-fontStyle); background-color: rgb(22, 21, 19); color: rgb(255, 255, 255); border-radius: 40px; border-color: rgb(22, 21, 19);">Discover More</button></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <footer class="flex flex-1">
            <div id="website-footer" class="relative flex-1 z-10 break-word" style="color: rgb(17, 24, 39); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(222, 223, 227);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
                    <div class="flex flex-col lg:flex-row lg:justify-between gap-12">
                        <div class="flex flex-col items-start gap-12 lg:gap-6">
                        <a class="grid max-w-full" target="_self" href="/">
                            <h2 class="heading-small lg:heading-medium max-w-full whitespace-nowrap overflow-hidden overflow-ellipsis" style="color: rgb(17, 24, 39); font-family: var(--header-logo-fontFamily); font-weight: var(--header-logo-fontWeight); width: 135.547px;">mytechlife</h2>
                        </a>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-12">
                            <ul class="flex flex-col items-start flex-wrap lg:flex-row lg:items-center gap-6" style="color: rgb(17, 24, 39);">
                                <li class="border-b-2 pb-1.5 -mb-2" style="border-color: transparent;"><a class="block body-normal" target="_self" href="/team">Team</a></li>
                                <li class="border-b-2 pb-1.5 -mb-2" style="border-color: transparent;"><a class="block body-normal" target="_self" href="/terms-of-service">Terms of service</a></li>
                                <li class="border-b-2 pb-1.5 -mb-2" style="border-color: transparent;"><a class="block body-normal" target="_self" href="/privacy-policy">Privacy policy</a></li>
                                <li class="border-b-2 pb-1.5 -mb-2" style="border-color: transparent;"><a class="block body-normal" target="_self" href="/faq">FAQ</a></li>
                                <li class="border-b-2 pb-1.5 -mb-2" style="border-color: transparent;"><a class="block body-normal" target="_self" href="/project">Project</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="flex flex-col gap-6">
                        <p class="body-normal lg:text-right whitespace-nowrap"><span>Made with&nbsp;</span><a target="_blank" class="underline text-current" href="https://durable.co?referrer=https%3A%2F%2Fmytechlife.durablesites.com">Durable</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </footer>
            <div hidden="" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px; display: none;"></div>
            <div class="Toastify"></div>
        </div>


    </div>
 </body>
</html>
