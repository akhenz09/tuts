<div class="w-full py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1>Video Podcast</h1>
        <div class="p-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="flex justify-end p-2">

                <a href="{{ route('video.create') }}" class="px-4 py-2 bg-green-700 rounded-md hover:bg-green-500">Add</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Title</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Description</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Video</th>
                            <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($videos as $video)
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $video->title }}
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $video->description }}
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="{{ asset('storage/' . $video->video) }}" alt="Landing Page Image" class="max-h-32">
                                </div>
                            </td>
                            {{--<td>
                               <div class="flex justify-end">
                                   <div class="flex space-x-2">
                                    <a href="{{ route('landingpages.edit', $landingpage->id) }}" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-700">Edit</a>
                                    <form class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-700" method="POST" action="{{ route('landingpages.destroy', $landingpage->id) }}" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                     </form>                                       </div>
                               </div>
                            </td>--}}
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

