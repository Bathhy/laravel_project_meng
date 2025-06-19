<x-layout>
    <div class=" flex flex-col items-center justify-start p-10">
    <form action="{{route('member.store')}}" method="POST" class="mt-10">
        @csrf
        <h2>Create a New Member</h2>
        <label for="name">Member Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{old('name')}}"
            required
             class=" inputbox"
        ><br><br>

        <label for="gender">Member gender:</label>
        <select id="gender" name="gender" required class="inputbox">
            <option value="" disabled selected>Select gender</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select>
        <br><br>

        <label for="phone_number">Member Phone number:</label>
        <input 
            type="tel" 
            id="phone_number" 
            name="phone_number"
             value="{{old('phone_number')}}"
             class=" inputbox"
            required
        ><br>

        <button type="submit" class="btn mt-4">Create Member</button>
        <button type="button" class="btn ml-2" onclick="window.location='{{ route('member.index') }}'">Cancel</button>
    </form>
    </div>
</x-layout>