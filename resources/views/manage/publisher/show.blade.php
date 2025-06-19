<x-layout>
    <h1>Publisher</h1>
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3> Name: {{$publisher->name}}</h3>
    <h3>adress: {{$publisher->adress}}</h3>
    <h3>Phone Number: {{$publisher->phone_number}}</h3>
  </div>
  <div class="flex items-center gap-4">
    <button type="button" class="btn m-0" onclick="window.location='{{ route('publisher.edit', $publisher->id) }}'">Update</button>
  <form action="{{route('publisher.destroy',$publisher->id)}}" method="POST" class="m-0 p-0">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn m-0">Delect</button>
    </form>
    <button type="button" class="btn m-0" onclick="window.location='{{ route('publisher.index') }}'">Cancel</button>
  </div>
</x-layout>