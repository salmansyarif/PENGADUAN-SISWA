<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 justify-center">
    <section class="bg-white dark:bg-gray-900 justify-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
   
    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl justify-center">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
              
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else

                            <!-- Modal toggle -->
                           



                            
                                
                                    <div class="mx-auto max-w-screen-sm text-center justify-center">
                                        <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">WEB</h1>
                                        <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Tempat Pengaduan Siswa</p>
                                        <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Silhkan Login Dan Adukan Siswa </p>
                                        <a href="{{route('news.index')}}" class=" text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
                                   
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                    class=" inline-flex  block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                LogIn
                            </button>
                                   
                                    </div>   
                              
                           


                            <!-- Main modal -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Sign in to our platform
                                            </h3>
                                            <button type="button"
                                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="authentication-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form method="POST" action="{{ route ('login') }}">
                                                @csrf

                                                <div>
                                                    <label for="email"
                                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                        email</label>
                                                    <input type="email" name="email" id="email"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="name@company.com" required/>
                                                </div>
                                                <div>
                                                    <label for="password"
                                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                        password</label>
                                                    <input type="password" name="password" id="password"
                                                           placeholder="••••••••"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           required/>
                                                </div>
                                                <div class="flex justify-between">
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="remember" type="checkbox" value=""
                                                                   class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                                   required/>
                                                        </div>
                                                        <label for="remember"
                                                               class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                            me</label>
                                                    </div>
                                                    <a href="#"
                                                       class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                                                        Password?</a>
                                                </div>
                                                <button type="submit"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Login
                                                    to your account
                                                </button>
                                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                    Not registered? <a href="{{route('register')}}"
                                                                       class="text-blue-700 hover:underline dark:text-blue-500">Create
                                                        account</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </nav>
                @endif
            </header>
            <main class="mt-6">
                <div class="container mt-5">
                    <h1 class="mb-4">Latest News</h1>
                    <div id="news-container" class="row"></div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                <script>
                    const apiKey = '16fa3d583f514293a1e0fb4c6aca0125';
                    const apiUrl = `https://newsapi.org/v2/top-headlines?country=us&apiKey=${apiKey}`;

                    axios.get(apiUrl)
                        .then(response => {
                            const articles = response.data.articles;
                            const newsContainer = document.getElementById('news-container');

                            articles.forEach(article => {
                                const articleElement = document.createElement('div');
                                articleElement.className = 'col-md-4 mb-4';
                                articleElement.innerHTML = `
                   
                    `;
                                newsContainer.appendChild(articleElement);
                            });
                        })
                        .catch(error => {
                            console.error('Error fetching news:', error);
                        });
                </script>
            </main>

          
        </div>
    </div>
</div>   </div>
</section>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>
