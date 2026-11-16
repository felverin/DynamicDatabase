<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM (GB)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>
                        <a href="{{ route('edit-laptop', $laptop) }}">Edit</a>
                    </td>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('delete-laptop') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $laptop->id }}">
                            <input style="background: red; color: white" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="{{ url('/create-laptop') }}">Add New Laptop</a></button>
</body>
</html>