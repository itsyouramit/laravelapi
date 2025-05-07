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

      <link rel="stylesheet" href="/laravel/public/assets/css/6c7c42dacc871655.css" data-n-g="">
      <link rel="stylesheet" type="text/css" href="/laravel/public/assets/css/26a1a5c22ee4e247.css">
      <link rel="stylesheet" type="text/css" href="/laravel/public/assets/css/6ad5f70cb56137d7.css">
      <link rel="stylesheet" type="text/css" href="/laravel/public/assets/css/a6e8b051a157dcb0.css">
      <link rel="stylesheet" type="text/css" href="/laravel/public/assets/css/main.css">
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
                <div id="6805db59f07a02263851dc66" data-text-color="#111827" class="flex relative break-word items-center" data-combine-with-header="false" style="z-index: 39; scroll-margin-top: calc(6rem); min-height: calc(-106px); padding-bottom: 0px;">
                    <div class="w-full flex break-word transition-all duration-300 items-center">
                        <div class="absolute inset-0 z-10 pointer-events-none">
                            <div class="absolute inset-0 z-10" style="background-color: rgb(242, 202, 44); opacity: 0.7;"></div>
                            <div class="absolute inset-0 z-0 bg-white"><span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img alt="background" sizes="200vw" srcset="/laravel/public/assets/image/banner-1.jpeg" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"></span></div>
                        </div>
                        <div class="relative z-10 container mx-auto px-5 md:px-6 transition-all duration-300 pt-20 lg:pt-48 pb-20 lg:pb-48">
                            <div class="transition-all transition-all ease-in-out duration-500  opacity-100 translate-y-0 relative z-10 w-full h-full">
                            <div class="flex w-full gap-10 lg:gap-20 transition-all duration-300 flex-col lg:flex-row justify-start">
                                <div class="flex-1 flex flex-col gap-4 w-full max-w-3xl items-start">
                                    <h1 class="break-word heading-xlarge" style="color: rgb(17, 24, 39);">Services</h1>
                                    <div class="flex md:inline-flex flex-col md:flex-row gap-4 w-full md:w-max mt-2 lg:mt-4"><button type="button" class="button w-full md:w-max lg" style="border-width: 2px; border-style: solid; box-shadow: none; font-family: var(--body-fontFamily); font-weight: var(--body-fontWeight, 500); font-style: var(--body-fontStyle); background-color: rgb(22, 21, 19); color: rgb(255, 255, 255); border-radius: 40px; border-color: rgb(22, 21, 19);">Get in touch</button></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative">
                <div id="6805db57f07a02263851dc65" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(0px); z-index: 38; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                    <div class="absolute inset-0 z-10 pointer-events-none">
                        <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                    </div>
                    <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
                        <div>
                            <div class="flex flex-wrap relative justify-start" style="gap: 40px;">
                            <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                                <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                                <div class="transition-all transition-all ease-in-out duration-500 delay-100 translate-y-8 h-full">
                                    <div class="flex flex-col h-full">
                                        <div>
                                        <div class="flex-shrink-0 relative overflow-hidden aspect-w-1 aspect-h-1">
                                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Project Management Concept" title="Project Management Concept" src="/laravel/public/assets/image/image-1.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                                            </span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start"></div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                                <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Comprehensive Portfolio Management</p>
                                                <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">Streamline your projects with our intuitive management solutions, designed for efficiency and clarity.</div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                                <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                                <div class="transition-all transition-all ease-in-out duration-500 delay-200 translate-y-8 h-full">
                                    <div class="flex flex-col h-full">
                                        <div>
                                        <div class="flex-shrink-0 relative overflow-hidden aspect-w-1 aspect-h-1">
                                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Empty presentation background, showcase technology mock up, screen shot, powerpoint presentation" title="Empty presentation background, showcase technology mock up, screen shot, powerpoint presentation" src="/laravel/public/assets/image/image-3.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                                <noscript></noscript>
                                            </span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start"></div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                                <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Dynamic Project Showcasing Tools</p>
                                                <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">Elevate your portfolio with our engaging presentation tools that highlight your project's unique features.</div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                                <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                                <div class="transition-all transition-all ease-in-out duration-500 delay-300 translate-y-8 h-full">
                                    <div class="flex flex-col h-full">
                                        <div>
                                        <div class="flex-shrink-0 relative overflow-hidden aspect-w-1 aspect-h-1">
                                            <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                                <img alt="Laptop with graph on the screen on a desk" title="Laptop with graph on the screen on a desk" src="/laravel/public/assets/image/image-2.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                                <noscript></noscript>
                                            </span>
                                        </div>
                                        <div class="flex flex-row items-center justify-start"></div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-col items-start py-6" style="color: rgb(17, 24, 39);">
                                                <p class="heading-medium mb-4 ml-0 mr-auto" style="color: currentcolor;">Customizable Reporting Solutions</p>
                                                <div class="rich-text-block ml-0 mr-auto" style="color: currentcolor;">Gain insights with tailored reports that provide a clear overview of project performance and progress.</div>
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
            <div id="6805db5ef07a02263851dc68" class="flex flex-none relative items-center" style="min-height: calc(0px); z-index: 37; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                </div>
                <div class="relative z-10 w-full mx-auto">
                    <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                    <div class="transition-all transition-all ease-in-out duration-500  opacity-0 translate-y-8 relative z-10 flex justify-center items-center">
                        <div class="relative overflow-hidden w-full w-full h-60 md:h-80 lg:h-120 xl:h-150"></div>
                    </div>
                </div>
                <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                <div class="transition-all transition-all ease-in-out duration-500  translate-y-8 absolute z-10 inset-0 w-full h-full">
                    <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                        <img alt="Desktop 3D illustration. Web development and UI design" title="Desktop 3D illustration. Web development and UI design" src="/laravel/public/assets/image/banner-2.jpeg" decoding="async" data-nimg="fill" class="absolute inset-0 w-full h-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                    </span>
                </div>
            </div>
            </section>
            <section class="relative">
            <div id="6805e15ef07a02263851dce4" class="relative flex flex-none flex-shrink-0 break-word items-center" style="min-height: calc(0px); z-index: 36; scroll-margin-top: calc(6rem); padding-top: 0px; padding-bottom: 0px;">
                <div class="absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-0 z-10" style="background-color: rgb(242, 202, 44);"></div>
                </div>
                <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
                    <div>
                        <div class="flex flex-wrap relative justify-center" style="gap: 40px;">
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                            <div class="transition-all transition-all ease-in-out duration-500 delay-100 translate-y-8 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-16 aspect-h-9">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Property for sale on the screen of a desktop pc in a modern office" title="Property for sale on the screen of a desktop pc in a modern office" src="/laravel/public/assets/image/image-2.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">

                                        </span>
                                    </div>
                                    <div class="flex flex-row items-center justify-center"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-center text-center mx-auto py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 mx-auto" style="color: currentcolor;">Real Estate Showcase Design</p>
                                            <div class="rich-text-block mx-auto" style="color: currentcolor;">Crafted a comprehensive digital portfolio for a leading real estate company in New Delhi, highlighting their diverse range of properties. This project involved designing visually appealing layouts and integrating high-definition images and videos to effectively showcase residential and commercial spaces to potential buyers and investors.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                            <div class="transition-all transition-all ease-in-out duration-500 delay-200 translate-y-8 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-16 aspect-h-9">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Visitors observing abstract artwork in a contemporary gallery exhibition" title="Visitors observing abstract artwork in a contemporary gallery exhibition" src="/laravel/public/assets/image/image-1.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                            <noscript></noscript>
                                        </span>
                                    </div>
                                    <div class="flex flex-row items-center justify-center"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-center text-center mx-auto py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 mx-auto" style="color: currentcolor;">Art Exhibition Digital Catalog</p>
                                            <div class="rich-text-block mx-auto" style="color: currentcolor;">Developed an engaging online catalog for a renowned art gallery in New Delhi, featuring collections from contemporary local artists. The project focused on user experience, with interactive elements that allow visitors to explore different artworks, read artist bios, and purchase pieces directly through the platform.</div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group w-full relative overflow-hidden" style="flex: 0 0 calc(33.3333% - 26.6667px);">
                            <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                            <div class="transition-all transition-all ease-in-out duration-500 delay-300 translate-y-8 h-full">
                                <div class="flex flex-col h-full">
                                    <div>
                                    <div class="flex-shrink-0 relative overflow-hidden aspect-w-16 aspect-h-9">
                                        <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                                            <img alt="Business Graph" title="Business Graph" src="/laravel/public/assets/image/image-3.jpeg" decoding="async" data-nimg="fill" class="" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;">
                                            <noscript></noscript>
                                        </span>
                                    </div>
                                    <div class="flex flex-row items-center justify-center"></div>
                                    <div class="flex flex-col">
                                        <div class="flex flex-col items-center text-center mx-auto py-6" style="color: rgb(17, 24, 39);">
                                            <p class="heading-medium mb-4 mx-auto" style="color: currentcolor;">Corporate Project Presentation</p>
                                            <div class="rich-text-block mx-auto" style="color: currentcolor;">Created a sophisticated presentation portfolio for a major corporate client in New Delhi, aimed at displaying their latest infrastructure development projects. The work included designing customized templates, incorporating detailed graphics, charts, and incorporating client testimonials to enhance credibility and capture stakeholder interest.</div>
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
            <div id="6805e13af07a02263851dce2" data-text-color="#111827" class="flex relative break-word items-center" data-combine-with-header="false" style="z-index: 35; scroll-margin-top: calc(6rem); min-height: calc(0px); padding-bottom: 0px;">
                <div class="flex justify-center w-full break-word items-center">
                    <div class="absolute inset-0 z-10 pointer-events-none">
                        <div class="absolute inset-0 z-10" style="background-color: rgb(246, 245, 244);"></div>
                    </div>
                    <div class="relative z-10 container mx-auto pt-12 lg:pt-20 pb-12 lg:pb-20">
                        <div class="absolute left-0 top-8 min-h-full min-w-full"></div>
                        <div class="transition-all transition-all ease-in-out duration-500  translate-y-8 flex flex-col gap-4 max-w-3xl items-center mx-auto text-center">
                        <h2 class="break-word heading-xlarge" style="color: rgb(17, 24, 39);">Discover Innovative Solutions Today</h2>
                        <pre class="body-large" style="color: rgb(17, 24, 39);">Explore our diverse portfolio to see how we bring creative visions to life. Your next project deserves the expertise and excellence that New Delhi trusts.</pre>
                        <div class="flex md:inline-flex flex-wrap gap-4 justify-center pt-4"><button type="button" class="button lg" style="border-width: 2px; border-style: solid; box-shadow: none; font-family: var(--body-fontFamily); font-weight: var(--body-fontWeight, 500); font-style: var(--body-fontStyle); background-color: rgb(242, 202, 44); color: rgb(17, 24, 39); border-radius: 40px; border-color: rgb(242, 202, 44);">View Portfolio</button></div>
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
