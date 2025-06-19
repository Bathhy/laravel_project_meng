<x-authlayout>
    <form action="{{route('login')}}" method="POST" class="w-[500px] p-10 m-auto  border border-black rounded mt-20">
  @csrf

  <h2 class="text-xl font-bold mb-4 text-center">Log In to Your Account</h2>

  <label for="email">Email:</label>
  <input 
    type="email"
    name="email"
    required
    value="{{old('email')}}"
    class="inputbox"
  ><br><br>

  <label for="password">Password:</label>
  <input 
    type="password"
    name="password"
    required
    class="inputbox"
  ><br><br>

  <button type="submit" class="btn mt-4">Log in</button>
     <a href="{{ route('show.register') }}" class="text-center mt-4 text-blue-500 underline hover:text-gray-200">
  Don't have an account?
</a>
  <!-- validation errors -->
  @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                    <li class="my-2 text-red-500">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
</form>
</x-authlayout>