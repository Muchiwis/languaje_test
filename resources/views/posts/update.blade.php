@include('layouts.master')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                    <div class="relative w-full max-w-md max-h-full">

                {{-- FORMULARIO --}}
                        <form class="space-y-6" action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>

                    
                       
                                    
                                    {{-- <div class="grid gap-6 mb-6 md:grid-cols-2"> --}}

                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                                            <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" name="title"  required>


                                            
                                            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                                            <textarea id="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="body"></textarea>

                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload file</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">

                                            <div class="flex">
                                                <button type="submit" class="w-32 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
                                                <div class="mx-3"></div>
                                                <button data-modal-hide="authentication-modal" class="w-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cerrar</button>
                                            </div>
                                    {{-- </div> --}}
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>