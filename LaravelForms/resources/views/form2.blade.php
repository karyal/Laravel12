<div>
    <h1>Web Forms</h1>
    <h2>Form-2 - Post Method</h2>     
    <form action="postForm" method="post">       
        @csrf
        <div>
            <input type="text" placeholder="ID" name="pid">
        </div>
        <div>
            <input type="text" placeholder="NAME" name="fullname">
        </div>
        <div>
            <input type="text" placeholder="EMAIL" name="email">
        </div>
        <div>
            <input type="text" placeholder="PHONE" name="phone">
        </div>
        <div>
        Gender
        <span>
            <input type="radio" name="rbGender" value="male" id="rbMale">
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
            <option value="g2">15-29</option>
            <option value="g3">30-44</option>
            <option value="g4">45+</option>
        </select>        
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
        </div>

        <div>
            <button>Save</button>
        </div>
    </form>
</div>