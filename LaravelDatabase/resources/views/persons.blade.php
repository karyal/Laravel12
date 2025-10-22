<div>
    <h1>Persons</h1>
    <!-- {{ print_r($persons) }} -->

    <table border="1" width="90%">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>EMAIL</td>
            <td>PHONE</td>
        </tr>
        @foreach ($persons as $person)
        <tr>
            <td>{{$person->pid}}</td>
            <td>{{$person->full_name}}</td>
            <td>{{$person->address}}</td>
            <td>{{$person->email}}</td>
            <td>{{$person->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
