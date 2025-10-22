<div>
    <h1>Students</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>GRADE</td>
            <td>SECTION</td>
        </tr>
         @foreach ($students as $student)
        <tr>
            <td>{{$student->sid}}</td>
            <td>{{$student->full_name}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->section}}</td>
        </tr>
        @endforeach
    </table>
</div>
<style>
    table{
        border: 1px solid;
        width: 99%;
    }
    tr{
        border: 1px solid;
    }
    td{
        border: 1px solid;
    }
</style>
