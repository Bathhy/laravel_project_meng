<x-layout>
    <h1>Member</h1>
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Name: {{$member->name}}</h3>
    <h3>Gender: {{$member->gender}}</h3>
    <h3>Phone Number: {{$member->phone_number}}</h3>
  </div>
  <div class="flex items-center gap-4">
      <button type="button" class="btn m-0" onclick="window.location='{{ route('member.edit', $member->id) }}'">Update</button>
    <form action="{{route('member.destroy',$member->id)}}" method="POST" class="m-0 p-0">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn mt-0">Delect</button>
    </form>
    <button type="button" class="btn m-0" onclick="window.location='{{ route('member.index') }}'">Back</button>
  </div>
</x-layout>