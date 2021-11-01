<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IClinic API Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-12xl mx-auto sm:px-12 lg:px-12">
                <div class="" style="margin-bottom: -8%; margin-right: -5%; display: flex; justify-content: end;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="max-width: 20%"
                         viewBox="-7.4481 -12.7791 64.5502 76.6746">
                        <path fill-rule="evenodd" fill="#FF2D20"
                              d="M49.626 11.5639a.809.809 0 01.028.209v10.972a.8.8 0 01-.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694L20.42 51.0099c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 01-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.9439a.801.801 0 01-.402-.694V6.3339c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 01.8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 01.028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 01.8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zM1.602 7.7189v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994l-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.7189l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325l-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zM20.02 38.3299l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"/>
                    </svg>
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 122 27" fill="none" class="headerstyle__LogoMenuCustom-sc-1oak5xc-7 gURDki">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.336.929s-.746-.26-2.135-.26c-1.495-.002-2.133.26-2.133.26v23.889s.638.26 2.135.26c1.389 0 2.135-.26 2.135-.26L69.336.928zm36.193.42s-.746-.26-2.135-.26c-1.491 0-2.135.26-2.135.26v3.745s.638.26 2.135.26c1.389 0 2.135-.26 2.135-.26V1.35zm14.945 10.025a9.044 9.044 0 00-2.846-.423c-2.915 0-3.966 1.688-3.966 5.56 0 3.874 1.22 5.436 4.101 5.436 1.036 0 2.065-.155 3.051-.46.708.619 1.153 1.79 1.186 2.898 0 0-1.457 1.009-5.083 1.009-5.186 0-7.625-3.092-7.625-8.882 0-5.79 2.439-8.882 7.625-8.882 3.49 0 4.743.847 4.743.847 0 1.075-.44 2.214-1.186 2.897zm-17.08-3.416c1.389 0 2.135.26 2.135.26v16.598s-.746.26-2.135.26c-1.497 0-2.135-.26-2.135-.26V8.218s.644-.26 2.135-.26zM91.565 7.63c3.49 0 5.321 2.018 5.321 4.948v12.238s-.746.26-2.135.26c-1.497 0-2.135-.26-2.135-.26V13.295c0-1.4-.78-2.344-2.71-2.344a4.417 4.417 0 00-2.984 1.206v12.66s-.746.26-2.135.26c-1.497 0-2.135-.26-2.135-.26V8.217s.644-.26 2.135-.26c1.389 0 2.135.26 2.135.26v.974c1.187-1.041 2.78-1.562 4.643-1.562zm-13.384.588s-.746-.26-2.135-.26c-1.49 0-2.135.26-2.135.26v16.598s.638.26 2.135.26c1.389 0 2.135-.26 2.135-.26V8.218zM76.046 1.09c1.389 0 2.135.26 2.135.26v3.744s-.746.26-2.135.26c-1.497 0-2.135-.26-2.135-.26V1.35s.644-.26 2.135-.26zm-20.4 24.313c-6.71 0-10.269-4.2-10.269-12.043 0-7.843 3.557-12.04 10.269-12.042 3.761 0 5.863 1.14 5.863 1.14.1 1.333-.509 2.278-1.288 3.09a13.848 13.848 0 00-4.102-.682c-3.59 0-6.2 1.79-6.2 8.526 0 6.737 2.608 8.397 6.2 8.397a15.282 15.282 0 004.44-.683c.848.749 1.288 1.954 1.288 3.157 0 0-2.27 1.14-6.201 1.14zM41.48 8.218s-.746-.26-2.135-.26c-1.49 0-2.135.26-2.135.26v16.598s.638.26 2.135.26c1.389 0 2.135-.26 2.135-.26V8.218zM39.345 1.09c1.389 0 2.135.26 2.135.26v3.744s-.746.26-2.135.26c-1.497 0-2.135-.26-2.135-.26V1.35s.644-.26 2.135-.26z" fill="#228bf0"></path>
                        <rect y="8.69" width="28.06" height="9.359" rx="2.56" fill="#228bf0" fill-opacity="0.5"></rect>
                        <path d="M19.33 26.74h-8.2a.759.759 0 01-.545-.22.722.722 0 01-.215-.535c.058-2.151.463-4.28 1.201-6.308a16.743 16.743 0 013.644-5.839 16.344 16.344 0 015.75-3.848 18.793 18.793 0 016.314-1.299.761.761 0 01.55.204c.148.138.231.33.231.53v8.001a.743.743 0 01-.708.732c-2.093.134-3.839.873-5.07 2.165-1.324 1.375-2.08 3.344-2.2 5.722a.742.742 0 01-.753.695zM0 17.323V9.369c0-.383.305-.701.698-.727C2.791 8.498 4.511 7.69 5.82 6.24 7.13 4.787 7.888 2.846 8.024.687A.742.742 0 018.77 0h8.178a.757.757 0 01.533.223c.139.141.214.33.208.526-.158 4.427-1.785 8.552-4.606 11.682a16.683 16.683 0 01-5.686 4.118 18.014 18.014 0 01-6.626 1.5.762.762 0 01-.543-.205.72.72 0 01-.229-.521z" fill="#228bf0"></path>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <i class="devicon-bash-plain colored"></i>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="/docs" class="underline text-gray-900 dark:text-white">
                                        Documentation
                                    </a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Access the project documentation here.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <i class="devicon-github-original colored"></i>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="https://github.com/kelver/IClinicApi" target="_blank" class="underline text-gray-900 dark:text-white">
                                        Github
                                    </a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Access the repository from here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </body>
</html>
