<div>
    <h1>Web Forms</h1>
    <h2>Form-2 - Post Method</h2>
    
    <!-- {{ print_r($errors) }} -->
    
    <!--
    @if($errors->any())
        @foreach ($errors->all() as $error )
            <div style="color:red">{{ $error }}</div>
        @endforeach
    @endif
    -->

    <form action="postForm2" method="post">       
        @csrf
        <div>
            <input type="text" placeholder="ID" name="pid" value="{{ old('pid') }}"
            class="{{ ($errors->first('pid')?'input-error':'')}}">
            <span style="color:red">@error('pid'){{ $message }}@enderror</span>
        </div>
        <div>
            <input type="text" placeholder="NAME" name="fullname" value="{{ old('fullname') }}">
            <span style="color:red">@error('fullname'){{ $message }}@enderror</span>
        </div>
        <div>
            <input type="text" placeholder="EMAIL" name="email" value="{{ old('email') }}">
            <span style="color:red">@error('email'){{ $message }}@enderror</span>
        </div>
        <div>
            <input type="text" placeholder="PHONE" name="phone" value="{{ old('phone') }}">
            <span style="color:red">@error('phone'){{ $message }}@enderror</span>
        </div>
        <div>
        Gender
        <span>
            <input type="radio" name="rbGender" value="male" id="rbMale" checked>
            <label for="rbMale">MALE</label>
        </span>
        <span>
            <input type="radio" name="rbGender" value="male" id="rbFemale">
            <label for="rbFemale">FEMALE</label>
        </span>
        </div>
        
        <div>
        Age
        <select name="cmbAge">
            <option value="g1">1-14</option>
            <option value="g2" selected>15-29</option>
            <option value="g3">30-44</option>
            <option value="g4">45+</option>
        </select>       
        <span style="color:red">@error('cmbAge'){{ $message }}@enderror</span> 
        </div>

        <div>
        Hobbies
        <span>
            <input type="checkbox" name="hobbies[]" value="reading" id="chkReading">
            <label for="chkReading">Reading</label>
        </span>
        <span>
            <input type="checkbox" name="hobbies[]" value="playing" id="chkPlaying">
            <label for="chkPlaying">Playing</label>
        </span>
        <span>
            <input type="checkbox" name="hobbies[]" value="other" id="chkOther">
            <label for="chk">Other</label>
        </span>
         <span style="color:red">@error('hobbies'){{ $message }}@enderror</span>        
        </div>

        <div>
            <button>Save</button>
        </div>
    </form>
</div>

<style>
    .input-error{
        border: 1px solid red;
        color:red;
    }
</style>