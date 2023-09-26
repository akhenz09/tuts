<x-app-layout>
    <section>
        <div class="w-full py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="flex justify-end p-2">
                        <a href="{{ route('Podcast.index') }}" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-700">Back</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
                            <form method="POST" action="{{ route('video.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="sm:col-span-6">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                    <div class="mt-1">
                                        <input type="text" id="title" name="title" class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out rounded-md sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('title') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <div class="mt-1">
                                        <input type="text" id="description" name="description" class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out rounded-md sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('description') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Video</label>
                                    <div class="mt-1">
                                        <input type="file" id="video" name="video" class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out rounded-md sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('video') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex justify-end pt-5 sm:col-span-6">
                                    <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-700">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
