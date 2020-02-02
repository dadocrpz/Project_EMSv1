@extends('layouts.app')



@section('content')

{{--    <div class="container mx-10 shadow-2xl">--}}
{{--        <div class="mb-4">--}}
{{--            <div class="w-full h-12">--}}
{{--                @include('layouts.nav')--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="m-4 flex sm:flex-full">--}}
{{--            <div class="w-28 bg-gray-400">--}}
{{--                <img class="w-28 border border-gray-900" src="/image_files/02000147281.jpg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="flex justify-start flex-wrap m-4">--}}
{{--            <div class="sm:flex-1 m-4 w-1/3 bg-gray-300">--}}
{{--                <div class="w-full">--}}
{{--                    <label class="text-gray-900 font-bold" for="inline-full-name">--}}
{{--                        Student Number <span class="text-red-500">*</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="w-full">--}}
{{--                    <input class="bg-gray-200 appearance-none border-2 border-gray-400--}}
{{--                     rounded w-3/4 py-2 px-4 text-gray-700 leading-tight--}}
{{--                     focus:outline-none focus:bg-white focus:border-gray-900" id="inline-full-name" type="text" value="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="sm:flex-1 m-4 w-1/3 bg-gray-300">--}}
{{--                <div class="w-full">--}}
{{--                    <label class="text-gray-900 font-bold" for="inline-username">--}}
{{--                        Password <span class="text-red-500">*</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="w-full">--}}
{{--                    <input class="bg-gray-200 appearance-none border-2 border-gray-400--}}
{{--                     rounded w-3/4 py-2 px-4 text-gray-700 leading-tight--}}
{{--                     focus:outline-none focus:bg-white focus:border-gray-900" id="inline-username" type="password" placeholder="******************">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

    <div class="ml-12 mt-12 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4">
        <img class="w-28 border-2 border-gray-900" src="/image_files/02000147281.jpg" alt="">
    </div>

    <div class="mt-4 ml-4 flex flex-wrap justify-start items-baseline">

        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Student Number <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="02000147281">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Password <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_pass" type="password" placeholder="********">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Last Name <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="Corpuz">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    First Number <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Middle Name <span class="text-red-500">*</span>
                    <span class="text-sm italic font-light">(Put space if there not)</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Gender <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Birthday <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Year Level <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Program <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Semester <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">
            <div>
                <label class="mx-4 text-gray-900 font-bold" for="">
                    Academic Year <span class="text-red-500">*</span>
                </label>
            </div>
            <div>
                <input class="mx-4 bg-gray-200 appearance-none border-2 border-gray-400
                                rounded w-full py-2 px-4 text-gray-700 leading-tight
                                focus:outline-none focus:bg-white focus:border-gray-900"
                       id="stud_no" type="text" placeholder="">
            </div>
        </div>

        <hr>

    </div>

    <div class="mt-4 ml-4 flex flex-wrap justify-start items-baseline">
        <div class="m-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4">

        </div>
    </div>




@endsection
