<x-layout>
    <h1>Borrow</h1>
   
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">

    <h3>Name: {{$borrow->member->name}}</h3>
    <h3>book: {{$borrow->book->title}}</h3>
    <h3>Borrow date : {{$borrow->borrow_date}}</h3>
    <h3>Due_date : {{$borrow->due_date}}</h3>
  </div>
  <div class="flex items-center gap-4">
    <button type="button" class="btn m-0" onclick="window.location='{{ route('borrow.edit', $borrow->id) }}'">Update</button>
    <form action="{{route('borrow.destroy',$borrow->id)}}" method="POST" class="m-0 p-0">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn m-0">Delect</button>
    </form>
    <button type="button" class="btn m-0" onclick="window.location='{{ route('borrow.index') }}'">Back</button>
  </div>
  
</x-layout>