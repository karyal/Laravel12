<div>
    <h1>Edit Student</h1>
    <form action="/update/{{$student->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="txtId" value="{{ $student->id }}" />        
        <p><input type="text" name="txtID" placeholder="Enter id" value="{{ $student->id }}" disabled/></p>
        <p><input type="text" name="txtName" placeholder="Enter name" value="{{ $student->fullname }}" /></p>
        <p><input type="text" name="txtCourse" placeholder="Enter course" value="{{ $student->course }}" /></p>
        <p><input type="text" name="txtYear" placeholder="Enter level" value="{{ $student->courseyear }}" /></p>
        <p><input type="text" name="txtSection" placeholder="Enter section" value="{{ $student->section }}" /></p>
        <p><button>Update</button></p>
    </form>
</div>