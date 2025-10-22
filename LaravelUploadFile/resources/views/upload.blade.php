<div>
    <h1>Upload File</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <p><input type="file" name="file" id=""></p>
    <p><button>Upload</button></p>
    </form>
</div>