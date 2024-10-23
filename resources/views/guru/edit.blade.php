<x-app-layout>
   
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <section class="bg-white dark:bg-gray-900">
                    <div class="mx-auto max-w-4xl">

                        <div class="p-6">

                            
                                <div>

                                    <div class="w-full">

                                        <div class="sm:col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelapor</label>
                                           {{ $gurus->pelapor }}
                                        </div>  
                                    </div>
                                    <br><br>

                                    <div class="sm:col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">terlapor</label>
                                       {{ $gurus->terlapor }}
                                    </div> 
                                    <br><br>
                                    <div class="sm:col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kelas</label>
                                            <div class="text-white"> {{ $gurus->kelas }}</div>  
                                    </div> 
                                    <br><br>
                                 
                                    
                                    <div class="w-full">
                                        <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bukti</label>
                                        <h3 class="text-3xl  text-white font-bold">   @if ($gurus->bukti)
                                            <img src="{{ asset($gurus->bukti) }}" alt=""
                                                class="w-16 h-16 object-cover">
                                        @else
                                            No image
                                        @endif</h3>
                                    </div>
                                   <br><br>
                                     <div class="sm:col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">laporan</label>
                                      <div class="text-white">{{ $gurus->laporan }}</div> 
                                    </div> 


                                  
                                </div>
                            </div>


                        </div>



            
  


    
                      
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-6">Tindakan</h3>
                            <form action="{{ route('guru.update', $gurus->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$gurus->id}}">
        
                                <div class="mb-6">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="solusi">
                                        Solusi
                                    </label>
                                    <textarea  id="solusi"name="solusi" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-white dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" required
                                    >{{ old('solusi', $gurus->solusi) }}</textarea>
                                </div>
        
                                <div class="mb-6">
                                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="status">
                                        Status
                                    </label>
                                    <select  id="status"name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-white dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                                        <option value="belum" {{ old('status', $gurus->status) === 'belum' ? 'selected' : '' }}>Belum Di Tindak</option>
                                        <option value="sudah" {{ old('status', $gurus->status) === 'sudah' ? 'selected' : '' }}>Selesai di Tindak</option>
                                    </select>
                                </div>
        
                                <div class="flex justify-end space-x-4">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                     Kirim Tindakan
                                    </button>
                                </div>
                            </form>
                       
    </section>

</x-app-layout>