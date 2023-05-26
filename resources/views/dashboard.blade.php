<x-app-layout>
    <x-slot name="header">
        <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (auth()->user()->role->name == 'manager')
                        <span class="text-blue-500 font-bold text-xl"> Recived Applications</span>
                        <!-- post card -->
                            <div
                                class="mt-10 mb-10 bg-white shadow-2xl rounded-lg max-w-md md:max-w-2xl ">
                                <!--horizantil margin is just for display-->
                                <div class="flex items-start px-4 py-6">
                                    <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                        src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="avatar">
                                    <div class="">
                                        <div class="flex items-center justify-between">
                                            <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                                            <small class="text-gray-700">ID number:</small>
                                        </div>
                                        <p class="text-gray-700">Joined 2023-05-23 </p>
                                        <p class="mt-3 text-gray-700 text-sm">
                                            Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!                                            Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!

                                        </p>
                                        <div class="mt-4 flex items-center">
                                            Email@email.com
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-10 mb-10 bg-white shadow-2xl rounded-lg max-w-md md:max-w-2xl ">
                                <!--horizantil margin is just for display-->
                                <div class="flex items-start px-4 py-6">
                                    <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                        src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                        alt="avatar">
                                    <div class="">
                                        <div class="flex items-center justify-between">
                                            <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                                            <small class="text-text-gray-700"><p>ID:</p> <p>2023-05-23 11:58:39</p></small>
                                        </div>
                                        <p class="text-gray-700">Joined 12 SEP 2012. </p>
                                        <p class="mt-3 text-gray-700 text-sm">
                                            Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!                                            Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!

                                        </p>
                                        <div class="mt-4 flex items-center">
                                            Email@email.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    @elseif (auth()->user()->role->name == 'client')
                    <div class='flex items-center'>
                        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                            <div class='max-w-md mx-auto space-y-6'>
                
                                <form action="" method="POST">
                                    @csrf
                                    <h2 class="text-2xl font-bold ">Submit your application</h2>
                                    <hr class="my-6">
                                    <label class="uppercase text-sm font-bold opacity-70">Subject</label>
                                    <input type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    <label class="uppercase text-sm font-bold opacity-70">Message</label>
                                    <textarea rows="5" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"></textarea>
                                    <label class="uppercase text-sm font-bold opacity-70">File</label>
                                    <input type="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">

                                    <input type="submit" class="py-3 px-6 my-2 bg-indigo-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
                                </form>
                
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



