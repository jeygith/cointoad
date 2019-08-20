<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cointoad</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="font-sans bg-gray-100">
{{--Navigation--}}
<div>
    {{--Top nav--}}
    <div class="bg-blue-500">
        <div class="container mx-auto px-4">
            <div class="flex items-center sm:justify-between py-4">

                <div class="w-1/4 sm:hidden">
                    <svg class="fill-current text-white h-8 w-8" version="1.1" id="Menu"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M16.4,9H3.6C3.048,9,3,9.447,3,10c0,0.553,0.048,1,0.6,1H16.4c0.552,0,0.6-0.447,0.6-1C17,9.447,16.952,9,16.4,9z M16.4,13
	H3.6C3.048,13,3,13.447,3,14c0,0.553,0.048,1,0.6,1H16.4c0.552,0,0.6-0.447,0.6-1C17,13.447,16.952,13,16.4,13z M3.6,7H16.4
	C16.952,7,17,6.553,17,6c0-0.553-0.048-1-0.6-1H3.6C3.048,5,3,5.447,3,6C3,6.553,3.048,7,3.6,7z"/>
</svg>
                </div>
                <div class="w-1/2 sm:w-auto text-center text-white text-2xl font-medium">cointoad</div>
                <div class="w-1/4 sm:w-auto sm:flex text-right">
                    <div>
                        <img class="inline-block h-8 w-8 rounded-full"
                             src="https://avatars0.githubusercontent.com/u/12443889?s=460&v=4" alt="">

                    </div>

                    <div class="hidden sm:block sm:flex sm:items-center ml-2">

                        <span class="text-white text-sm mr-1">Jeff Gith</span>
                        <div>
                            <svg class="fill-current text-white h-4 w-4  block opacity-50" version="1.1"
                                 id="Chevron_down" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M4.516,7.548c0.436-0.446,1.043-0.481,1.576,0L10,11.295l3.908-3.747c0.533-0.481,1.141-0.446,1.574,0
	c0.436,0.445,0.408,1.197,0,1.615c-0.406,0.418-4.695,4.502-4.695,4.502C10.57,13.888,10.285,14,10,14s-0.57-0.112-0.789-0.335
	c0,0-4.287-4.084-4.695-4.502C4.107,8.745,4.08,7.993,4.516,7.548z"/>
</svg>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{--Secondary nav--}}

    <div class="hidden bg-blue-500 sm:block sm:bg-white sm:border-b">
        <div class="container mx-auto px-4">
            <div class="sm:flex">
                <div class="flex -mb-px mr-6">
                    <a href="#"
                       class="no-underline text-white  sm:text-blue-600 flex items-center py-4 border-b border-blue-600">
                        <svg class="h-6 w-6 fill-current mr-2" version="1.1" id="Grid"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8,4H5C4.447,4,4,4.447,4,5v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5
	C9,4.448,8.553,4,8,4z M15,4h-3c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1V5C16,4.448,15.553,4,15,4z M8,11
	H5c-0.553,0-1,0.447-1,1v3c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C9,11.448,8.553,11,8,11z M15,11h-3c-0.553,0-1,0.447-1,1v3
	c0,0.552,0.447,1,1,1h3c0.553,0,1-0.448,1-1v-3C16,11.448,15.553,11,15,11z"/>
</svg>
                        Dashboard

                    </a>
                </div>
                <div class="flex -mb-px mr-6">


                    <a href="#"
                       class="no-underline text-white opacity-50 sm:opacity-100 sm:text-gray-500 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-gray-500">
                        <svg class="h-6 w-6 fill-current mr-2" version="1.1" id="Swap"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M14,5H4V3L0,6.5L4,10V8h10V5z M20,13.5L16,10v2H6v3h10v2L20,13.5z"/>
</svg>
                        </svg>
                        Buy/Sell

                    </a>
                </div>
                <div class="flex -mb-px mr-6">


                    <a href="#"
                       class="no-underline text-white opacity-50 sm:opacity-100 sm:text-gray-500 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-gray-500">
                        <svg class="h-6 w-6 fill-current mr-2" version="1.1" id="Swap"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M16,6H3.5V5.5l11-0.88V5.5H16V4c0-1.1-0.891-1.872-1.979-1.717L3.98,3.717C2.891,3.873,2,4.9,2,6v10c0,1.104,0.895,2,2,2h12
	c1.104,0,2-0.896,2-2V8C18,6.896,17.104,6,16,6z M14.5,13.006c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5
	S15.328,13.006,14.5,13.006z"/>
</svg>
                        </svg>
                        Accounts

                    </a>
                </div>
                <div class="flex -mb-px mr-6">


                    <a href="#"
                       class="no-underline text-white opacity-50 sm:opacity-100 sm:text-gray-500 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-gray-500">
                        <svg class="h-6 w-6 fill-current mr-2" version="1.1" id="Swap"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M9,10h2v2h9c0,0-0.149-4.459-0.2-5.854C19.75,4.82,19.275,4,17.8,4h-3.208c-0.497-0.938-1.032-1.945-1.197-2.256
	C13.064,1.121,12.951,1,12.216,1H7.783C7.048,1,6.936,1.121,6.604,1.744C6.439,2.055,5.904,3.062,5.408,4H2.199
	c-1.476,0-1.945,0.82-2,2.146C0.145,7.473,0,12,0,12h9V10z M7.649,2.916C7.879,2.484,7.957,2.4,8.466,2.4h3.067
	c0.509,0,0.588,0.084,0.816,0.516c0.086,0.16,0.318,0.6,0.575,1.084H7.074C7.331,3.516,7.563,3.076,7.649,2.916z M11,15H9v-2H0.5
	c0,0,0.124,1.797,0.199,3.322C0.73,16.955,0.917,18,2.499,18H17.5c1.582,0,1.765-1.047,1.8-1.678C19.387,14.754,19.5,13,19.5,13H11
	V15z"/></svg>
                        </svg>
                        Tools

                    </a>
                </div>
                <div class="flex -mb-px">


                    <a href="#"
                       class="no-underline text-white opacity-50 sm:opacity-100 sm:text-gray-500 flex items-center py-4 border-b border-transparent hover:opacity-100 sm:hover:border-gray-500">
                        <svg class="h-6 w-6 fill-current mr-2" version="1.1" id="Swap"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M16.783,10c0-1.049,0.646-1.875,1.617-2.443c-0.176-0.584-0.407-1.145-0.692-1.672c-1.089,0.285-1.97-0.141-2.711-0.883
	c-0.741-0.74-0.968-1.621-0.683-2.711c-0.527-0.285-1.088-0.518-1.672-0.691C12.074,2.57,11.047,3.215,10,3.215
	c-1.048,0-2.074-0.645-2.643-1.615C6.772,1.773,6.213,2.006,5.686,2.291c0.285,1.09,0.059,1.971-0.684,2.711
	C4.262,5.744,3.381,6.17,2.291,5.885C2.006,6.412,1.774,6.973,1.6,7.557C2.57,8.125,3.215,8.951,3.215,10
	c0,1.047-0.645,2.074-1.615,2.643c0.175,0.584,0.406,1.144,0.691,1.672c1.09-0.285,1.971-0.059,2.711,0.682
	c0.741,0.742,0.969,1.623,0.684,2.711c0.527,0.285,1.087,0.518,1.672,0.693c0.568-0.973,1.595-1.617,2.643-1.617
	c1.047,0,2.074,0.645,2.643,1.617c0.584-0.176,1.144-0.408,1.672-0.693c-0.285-1.088-0.059-1.969,0.683-2.711
	c0.741-0.74,1.622-1.166,2.711-0.883c0.285-0.527,0.517-1.086,0.692-1.672C17.429,11.873,16.783,11.047,16.783,10z M10,13.652
	c-2.018,0-3.653-1.635-3.653-3.652c0-2.018,1.636-3.654,3.653-3.654c2.018,0,3.652,1.637,3.652,3.654
	C13.652,12.018,12.018,13.652,10,13.652z"/></svg>
                        </svg>
                        Settings

                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow">
        <div class="border-b px-6">

            <div class="flex justify-between -mb-px">
                <div class="md:hidden text-blue-500 py-4 text-lg">
                    Price Charts
                </div>

                <div class="hidden md:flex">

                    <div class="py-4 text-blue-500 border-b border-blue-500 mr-4">
                        Bitcoin &middot; CA$21,380.01
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500 mr-4 ">
                        Ethereum &middot; CA$884.01
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500  ">
                        Litecoin &middot; CA$358.01
                    </div>
                </div>
                <div class="flex text-sm">

                    <div class="py-4 text-blue-500 border-b border-blue-500 mr-3">
                        1H
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500 mr-3">
                        1D
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500  mr-3">
                        1W
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500  mr-3">
                        1M
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500  mr-3">
                        1Y
                    </div>
                    <div class="py-4 text-gray-500 border-b border-transparent hover:border-gray-500  ">
                        ALL
                    </div>
                </div>
            </div>


        </div>

        <div class="flex px-6 items-center md:hidden">
            <div class="flex-grow flex-no-shrink py-6">
                <div class="text-gray-500 mb-2">
                    <span class="text-3xl align-top ">CA$</span>
                    <span class="text-5xl">21,380</span>
                    <span class="text-3xl align-top">.01</span>
                </div>
                <div class="text-green-400 flex items-center text-sm">
                    <svg class="h-4 w-4 fill-current mr-1" version="1.1" id="Arrow_up" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
<path d="M10,2.5L16.5,9H13v8H7V9H3.5L10,2.5z"/>
                    </svg>
                        <span>
                            CA$12,955.35 (154.16%)
                        </span>
                </div>
            </div>

            <div class="flex-shrink w-32 inline-block relative">
                <select
                    class="block appearance-none w-full bg-white border border-gray-400 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                    <option>BTC</option>
                    <option>ETH</option>
                    <option>LTC</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>

        </div>
        <div class="hidden md:flex">
            <div class="w-1/3 text-center py-6">
                <div class="border-r">
                    <div class="text-gray-500 mb-2">
                        <span class="text-3xl align-top ">CA$</span>
                        <span class="text-5xl">21,380</span>
                        <span class="text-3xl align-top">.01</span>
                    </div>

                    <div class="uppercase text-gray-400 tracking-wide">
                        bitcoin price
                    </div>
                </div>
            </div>
            <div class="w-1/3 text-center py-6">
                <div class="border-r">
                    <div class="text-gray-500 mb-2">
                        <span class="text-3xl align-top "><span class="text-green-300 align-top">+</span>CA$</span>
                        <span class="text-5xl">12,998</span>
                        <span class="text-3xl align-top">.01</span>
                    </div>

                    <div class="uppercase text-gray-400 tracking-wide">
                        Since last month (CAD)
                    </div>
                </div>
            </div>
            <div class="w-1/3 text-center py-6">
                <div>
                    <div class="text-gray-500 mb-2">
                        <span class="text-3xl  align-top "><span class="text-green-300 align-top">+</span></span>
                        <span class="text-5xl">154.99</span>
                        <span class="text-3xl align-top">%</span>
                    </div>

                    <div class="uppercase text-gray-400 tracking-wide">
                        Since last month (%)
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
