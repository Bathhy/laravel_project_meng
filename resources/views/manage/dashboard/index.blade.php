<x-layout>
    <div class="w-full h-full overflow-auto">
        
        <div class="sticky top-0 z-10  p-2 pb-5 border-b bg-white  flex justify-between">
            <h1 >Dashboard</h1>
        </div>
        <ul class="mt-4 dash-grid ">
            <li class=" flex justify-center items-center ">
                <div class="w-[50%] h-[150px] border border-black rounded text-center">
                    <h1 class="mt-[10%]">Total Member:</h1>
                    <h2>{{ $membercount }}</h2>
                </div>
                
            </li >
            <li class=" flex justify-center items-center ">
                <div class="w-[50%] h-[150px] border border-black rounded text-center">
                    <h1 class="mt-[10%]">Total Book:</h1>
                    <h2>{{ $bookcount }}</h2>
                </div>
            </li>
            <li class=" flex justify-center items-center ">
                <div class="w-[50%] h-[150px] border border-black rounded text-center">
                    <h1 class="mt-[10%]">Total Borrowing:</h1>
                    <h2>{{ $borrowcount }}</h2>
                </div>
            </li>
        </ul>
  </div>
</x-layout>