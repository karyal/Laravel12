<div>
    <h1>New Student</h1>
    <form action="student" method="post">
        @csrf
        <p><input type="text" name="txtName" placeholder="Enter name" /></p>
        <p><input type="text" name="txtCourse" placeholder="Enter course" /></p>
        <p><input type="text" name="txtYear" placeholder="Enter level" /></p>
        <p><input type="text" name="txtSection" placeholder="Enter section" /></p>
        <p><button>Save</button></p>
    </form>
</div>