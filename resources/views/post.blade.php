<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>



    <div class="container">
        <div class="wrapper">
            <form action="" method="POST">
                @csrf
                <div class="px-4 py-4">
                    <label class="block font-medium text-sm text-gray-700" for="title">
                        Title
                    </label>

                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" placeholder="Enter the title" name="title" type="text" required="required" autofocus="autofocus">
                </div>
                <div class="px-4 py-4">
                    <label class="block font-medium text-sm text-gray-700" for="body">
                        Body
                    </label>

                    <textarea name="body" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" placeholder="Enter the body" required="required" autofocus="autofocus"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" class="bg-green" value="Post">
                </div>
            </form>
            @if(session()->has('status'))
                <div class="mt-5 shadow bg-purple text-white font-bold py-2 px-4 rounded">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>

</x-app-layout>
