<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='https://fonts.googleapis.com/css?family=Roboto Mono' rel='stylesheet'>
    <title>Library management</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="laycontain flex h-[100vh]">
        <aside class="sidebar h-[100vh] w-[20%]  text-center border-black border-r flex flex-col justify-between ">
            <div class="">
                <h1 class="text-center mb-[20px]">Library <br><span><h1>Management System</h1></span></h1>
                <ul class="">
                    <a href="{{route('dashboard.index')}}"><li>DashBoard</li></a>
                    <a href="{{route('member.index')}}"><li>Member</li></a>
                    <a href="{{route( 'book.index')}}"><li>Book</li></a>
                    <a href="{{route( 'borrow.index')}}"><li>Borrow</li></a>
                    <a href="{{route('category.index')}}"><li>Category</li></a>
                    <a href="{{route('author.index')}}"><li>Author</li></a>
                    <a href="{{route('publisher.index')}}"><li>Publish</li></a>
                </ul>  
            </div>
            
                {{-- <a href="" class="bg-blue-500 p-2 mb-[5%] text-white rounded">Logout</a> --}}
                <form action="{{route('logout')}}" method="POST" class="m-0">
                    @csrf
                    <button class="bg-blue-500 w-[70%] p-2 mb-[5%] text-white rounded hover:bg-blue-600 hover:text-gray-300">Logout</button>
                </form>
        </aside>
        <main class="main-contain w-[100%] p-[10px]">
            {{$slot}}
        </main>
    </div>
</body>
</html>