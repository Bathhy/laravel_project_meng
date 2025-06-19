<x-layout>
    <h1>Category</h1>
   
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
     {{-- <h2>{{  $categories->name }}</h2> --}}
    <h3>Category Name: {{$category->name}}</h3>
  </div>
  <div class="flex items-center gap-4">
    <button type="button" class="btn m-0" onclick="window.location='{{ route('category.edit', $category->id) }}'">Update</button>
    <form action="{{route('category.destroy',$category->id)}}" method="POST" class="m-0 p-0">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn m-0">Delect</button>
  </form>
  <button type="button" class="btn m-0" onclick="window.location='{{ route('category.index') }}'">back</button>
  </div>
  
</x-layout>