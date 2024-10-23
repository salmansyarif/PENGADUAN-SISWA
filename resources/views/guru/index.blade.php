<x-app-layout>


    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">NO</th>
                                <th scope="col" class="px-4 py-3">Pelppor</th>
                                <th scope="col" class="px-4 py-3">Terlapor</th>
                                <th scope="col" class="px-4 py-3">Kelas</th>
                                <th scope="col" class="px-4 py-3">Bukti</th>
                                <th scope="col" class="px-4 py-3">Laporan</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            
                            @forelse($gurus as $guru)
                                
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $guru->id }}</td>
                                <td class="px-4 py-3">{{ $guru->pelapor}}</td>
                                <td class="px-4 py-3">{{ $guru->terlapor}}</td>
                                <td class="px-4 py-3">{{ $guru->kelas}}</td>
                                <td class="px-4 py-3">
                                    @if ($guru->bukti)
                                    <img src="{{ asset($guru->bukti) }}" alt=""
                                        class="w-16 h-16 object-cover">
                                @else
                                    No image
                                @endif
                            </td>
                                <td class="px-4 py-3">{{ $guru->laporan}}</td>
                                <td class="px-4 py-3">{{ $guru->status}}</td>
                                <td class="px-4 py-3"><a href="{{route ('guru.edit', $guru->id)}}" type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tindak lanjuti
                                </a></td>
                                


                            </tr>

 
                                
                           
                            @empty
                                
                            @endforelse
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>

</x-app-layout>