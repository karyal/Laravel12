<div>
    <h1>Students</h1>
    <!-- {{ print_r($students) }} -->
    <p><a href='student'>New </a> 
    <form method="get" action="search">
            <input type="text" placeholder="Search with name" name="txtSearch" value="{{ @$search }}"/>
            <button>Search</button>
    </form>
    </p>
    <form action="delete-multi" method="post">
        @csrf
        <button>Delete Records</button>
    <table border="1" width="99%">
        <tr>
            <td>SELECT</td>
            <td>ID</td>
            <td>NAME</td>
            <td>COURSE</td>
            <td>LEVEL</td>
            <td>SECTION</td>
            <td>OPERATION</td>
        </tr>
        @foreach ($students as $student)        
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{ $student->id }}" /></td>
            <td>{{ $student->id }}</td>
            <td>{{ $student->fullname }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->courseyear }}</td>
            <td>{{ $student->section }}</td>
            <td><a href='{{'delete/'.$student->id }}'>DELETE </a> | <a href='{{'edit/'.$student->id }}'>EDIT </a> </td>
        </tr>
        @endforeach
    </table>
    </form>
    <br/><br/>
    {{ $students->links() }}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    };
</style>