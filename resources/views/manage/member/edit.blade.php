<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
        <form action="{{route('member.update',$member->id)}}" method="POST" class="mt-10">
            @csrf
            @method('PUT')
            <h2>Update Member</h2>
            <label for="name" class=" mt-5">Member Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{$member->name}}"
                required
                class=" inputbox"
            ><br><br>
            <label for="gender">Member Gender:</label>
            <select id="gender" name="gender" required class="inputbox">
                <option value="male" {{ (old('gender', $member->gender) == 'male') ? 'selected' : '' }}>Male</option>
                <option value="female" {{ (old('gender', $member->gender) == 'female') ? 'selected' : '' }}>Female</option>
            </select>

            <br><br>

            <label for="phone_number">Member Phone number:</label>
            <input 
                type="tel" 
                id="phone_number" 
                name="phone_number"
                value="{{$member->phone_number}}"
                class=" inputbox"
                required
            ><br>

            <button type="submit" class="btn mt-9">Update Member</button>
            <button type="button" class="btn ml-2" onclick="window.location='{{route('member.show',$member ->id)}}'">Cancel</button>
        </form>
    </div>
</x-layout>