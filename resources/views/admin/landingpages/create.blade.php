<x-app-layout>
    <section>
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <div class="flex justify-end p-2">
                        <a href="{{ route('landingpages.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-md">Back</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                            <form method="POST" action="{{ route('landingpages.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Batch Name</label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="name" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                    <div class="mt-1">
                                        <input type="text" id="title" name="title" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('title') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                                    <div class="mt-1">
                                        <input type="text" id="review" name="review" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('review') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <div class="mt-1">
                                        <input type="text" id="description" name="description" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('description') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <div class="mt-1">
                                        <input type="text" id="price" name="price" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('price') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                    <div class="mt-1">
                                        <input type="file" id="image" name="image" class="block w-full rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('image') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex justify-end sm:col-span-6 pt-5">
                                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-md">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
