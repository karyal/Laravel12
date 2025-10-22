<div>
    <h1>New Person - Get Method</h1>
    <form action="/persons" method="get">
        <p><input type="text" name="txtFullName" placeholder="FULL NAME"></p>
        <p><input type="text" name="txtAddress" placeholder="ADDRESS"></p>
        <p><input type="text" name="txtEmail" placeholder="EMAIL"></p>
        <p><input type="text" name="txtPhone" placeholder="PHONE"></p>
        <p><button>SEND-GET</button></p>
    </form>

    <h1>New Person - Post Method</h1>
    <form action="/persons" method="post">
        @csrf
        <p><input type="text" name="txtFullName" placeholder="FULL NAME"></p>
        <p><input type="text" name="txtAddress" placeholder="ADDRESS"></p>
        <p><input type="text" name="txtEmail" placeholder="EMAIL"></p>
        <p><input type="text" name="txtPhone" placeholder="PHONE"></p>
        <p><button>SEND-POST</button></p>
    </form>

    <h1>New Person - Put Method</h1>
    <form action="/persons" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">        
        <p><input type="text" name="txtFullName" placeholder="FULL NAME"></p>
        <p><input type="text" name="txtAddress" placeholder="ADDRESS"></p>
        <p><input type="text" name="txtEmail" placeholder="EMAIL"></p>
        <p><input type="text" name="txtPhone" placeholder="PHONE"></p>
        <p><button>SEND-PUT</button></p>
    </form>

    <h1>New Person - Patch Method</h1>
    <form action="/persons" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <p><input type="text" name="txtFullName" placeholder="FULL NAME"></p>
        <p><input type="text" name="txtAddress" placeholder="ADDRESS"></p>
        <p><input type="text" name="txtEmail" placeholder="EMAIL"></p>
        <p><input type="text" name="txtPhone" placeholder="PHONE"></p>
        <p><button>SEND-PATCH</button></p>
    </form>

    <h1>New Person - Delete Method</h1>
    <form action="/persons" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <p><input type="text" name="txtFullName" placeholder="FULL NAME"></p>
        <p><input type="text" name="txtAddress" placeholder="ADDRESS"></p>
        <p><input type="text" name="txtEmail" placeholder="EMAIL"></p>
        <p><input type="text" name="txtPhone" placeholder="PHONE"></p>
        <p><button>SEND-DELETE</button></p>
    </form>


</div>