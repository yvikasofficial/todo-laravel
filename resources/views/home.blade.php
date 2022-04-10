@extends('layouts.app')

@section('content')
<div class="px-12 py-16">
     <div class="flex justify-between">
        <div>
            <h1 class="text-5xl mb-4">Daily Task</h1>
            <p class="text-sm text-gray-400">Click <span class="text-primary bg-primary bg-opacity-10 py-1 px-2">+ New</span> to create a new task. And use the actions to control the current state. </p>
         </div>

         <div>
            <button type="submit" class="bg-primary px-8 py-2 rounded text-white">
                + Create Task
            </button>
         </div>
     </div>
     <div class="w-full flex gap-12 mt-8">
        <div class="flex-1">
            <div class="bg-cGrey p-2 rounded flex items-center justify-between mb-4">
                <span class="font-bold">Next Up</span>
                <div class="py-1 px-2 bg-black text-white rounded">1</div>
            </div> 

            <div class="w-full flex flex-col gap-4">
                
                <div class="rounded-xl shadow-lg px-4 py-6 border-2">
                    <div class="mb-4 flex justify-between">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center bold text-white">H</div>
                        <img class="h-6" src="{{ url('/images/more.svg')}}" alt="">
                    </div>
                    <h2 class="font-bold text-lg mb-2">[SITE 1] - Need to fix header and the footer</h2>
                    <p class="text-sm text-gray-400 mb-4"> &Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, libero.</p>
                    <div>
                        <div class="flex items-center gap-2 bg-orange-500 w-max py-1 text-white px-3 rounded">
                            <img class="h-4" src="{{ url('/images/clock.svg')}}" alt="">
                            <span class="text-sm">Mar 26</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex-1">
            <div class="bg-cGrey p-2 rounded flex items-center justify-between mb-4">
                <span class="font-bold">In Progress</span>
                <div class="py-1 px-2 bg-black text-white rounded">3</div>
            </div> 

            <div class="w-full flex flex-col gap-4">
                
                <div class="rounded-xl shadow-lg px-4 py-6 border-2">
                    <div class="mb-4 flex justify-between">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center bold text-white">H</div>
                        <img class="h-6" src="{{ url('/images/more.svg')}}" alt="">
                    </div>
                    <h2 class="font-bold text-lg mb-2">[SITE 1] - Need to fix header and the footer</h2>
                    <p class="text-sm text-gray-400 mb-4"> &Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, libero.</p>
                    <div>
                        <div class="flex items-center gap-2 bg-yellow-400 w-max py-1 text-white px-3 rounded">
                            <img class="h-4" src="{{ url('/images/clock.svg')}}" alt="">
                            <span class="text-sm">Mar 21</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl shadow-lg px-4 py-6 border-2">
                    <div class="mb-4 flex justify-between">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center bold text-white">J</div>
                        <img class="h-6" src="{{ url('/images/more.svg')}}" alt="">
                    </div>
                    <h2 class="font-bold text-lg mb-2">[SITE 1] - Need to fix header and the footer</h2>
                    <p class="text-sm text-gray-400 mb-4"> &Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, libero.</p>
                    <div>
                        <div class="flex items-center gap-2 bg-yellow-400 w-max py-1 text-white px-3 rounded">
                            <img class="h-4" src="{{ url('/images/clock.svg')}}" alt="">
                            <span class="text-sm">Mar 21</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-lg px-4 py-6 border-2">
                    <div class="mb-4 flex justify-between">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center bold text-white">J</div>
                        <img class="h-6" src="{{ url('/images/more.svg')}}" alt="">
                    </div>
                    <h2 class="font-bold text-lg mb-2">[SITE 1] - Need to fix header and the footer</h2>
                    <p class="text-sm text-gray-400 mb-4"> &Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, libero.</p>
                    <div>
                        <div class="flex items-center gap-2 bg-yellow-400 w-max py-1 text-white px-3 rounded">
                            <img class="h-4" src="{{ url('/images/clock.svg')}}" alt="">
                            <span class="text-sm">Mar 21</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex-1">
            <div class="bg-cGrey p-2 rounded flex items-center justify-between mb-4">
                <span class="font-bold">Complete</span>
                <div class="py-1 px-2 bg-black text-white rounded">1</div>
            </div> 

            <div class="rounded-xl shadow-lg px-4 py-6 border-2">
                <div class="mb-4 flex justify-between">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center bold text-white">H</div>
                    <img class="h-6" src="{{ url('/images/more.svg')}}" alt="">
                </div>
                <h2 class="font-bold text-lg mb-2">[SITE 1] - Need to fix header and the footer</h2>
                <p class="text-sm text-gray-400 mb-4"> &Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, libero.</p>
                <div>
                    <div class="flex items-center gap-2 bg-blue-500 w-max py-1 text-white px-3 rounded">
                        <img class="h-4" src="{{ url('/images/clock.svg')}}" alt="">
                        <span class="text-sm">Mar 21</span>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
