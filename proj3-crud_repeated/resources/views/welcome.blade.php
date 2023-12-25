<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($info as $info)
                <tr>
                    <td>
                        {{$info->id}}
                    </td>
                    <td>
                        {{$info->name}}
                    </td>
                    <td>
                        {{$info->email}}
                    </td>
                    <td>
                        {{$info->created_at}}
                    </td>
                    <td>
                        {{$info->updated_at}}
                    </td>
                    <td>
                        <a href="destroy/{{$info->id}}">Delete</a><br>
                        <a href="edit/{{$info->id}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <form action="{{route('store')}}" method="GET">
        <label for="">Enter your Name</label>
        <input type="text" name="name">
        <br><br>

        <label for="">Enter your Email</label>
        <input type="text" name="email">
        <br><br>
        <input type="submit" value="add!">
    </form>
</body>
</html>