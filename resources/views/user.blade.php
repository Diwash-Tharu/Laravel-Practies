<h1>THis is the vew page
</h1>
<!-- 
// user list page of the user -->
 {{
    print_r($diwash)
 }}

 <table border="2">

    <tr>
        <th>id</th>
        <th>name</th>
        <th>last name</th>
        <th>email</th>
    </tr>
    @foreach($diwash as $diwash)
    <tr>
        <td>{{$diwash->SN}}</td>
        <td>{{$diwash->Name}}</td>
        <td>{{$diwash->last_Name}}</td>
        <td>{{$diwash->email}}</td>
    </tr>
    @endforeach
 </table>
