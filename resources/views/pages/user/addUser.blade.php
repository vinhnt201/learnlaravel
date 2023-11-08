<div>
    <form action="addUser" method="POST">
        {{-- @if($errors->any())
            <li>{{$message}}</li>
        @endif --}}
        <input type="text" name="name">
        @error('name')
        {{$message}}
        @enderror
        
        <label for="">Ten nguoi dung</label>
        <input type="text" name="address">
        @error('address')
        {{$message}}
        @enderror
        <label for="">Dia chi</label>
        @csrf
        <button type="submit">Tao moi</button>
    </form>
</div>