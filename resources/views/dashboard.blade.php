<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session()->has('status'))
        <div class="mt-5 shadow bg-purple text-white text-sm py-2 px-4">
            {{session('status')}}
        </div>
    @endif    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center p-6 bg-white border-b border-gray-200">

                    <div class="w-auto border-b border-gray-200 shadow">
                        <table class="w-full mx-auto mb-4">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Title
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Body
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Action
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white text-center">
                                @foreach($posts as $post)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{$post->user->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            {{$post->title}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div class="text-sm text-gray-500">
                                            {{$post->body}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{url('/post/edit', $post->id)}}" class="px-4 py-1 text-sm text-gray bg-blue rounded">Edit</a>
                                        <a href="{{url('/post/delete', $post->id)}}" class="px-4 py-1 text-sm text-gray bg-red rounded">Delete</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
