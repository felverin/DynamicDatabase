<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
</head>
<body>
    @php($isEditing = isset($laptop))
    <h1>{{ $isEditing ? 'Edit Laptop' : 'Laptop Form' }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ $isEditing ? route('update-laptop', $laptop) : route('save-laptop') }}">
        @csrf
        @if ($isEditing)
            @method('PUT')
        @endif
        <div> input brand </div>
        <input type="text" id="brand" name="brand" value="{{ old('brand', $laptop->brand ?? '') }}" required><br><br>

        <div> input model </div>
        <input type="text" id="model" name="model" value="{{ old('model', $laptop->model ?? '') }}" required><br><br>

        <div> input processor </div>
        <input type="text" id="processor" name="processor" value="{{ old('processor', $laptop->processor ?? '') }}" required><br><br>

        <div> input ram </div>
        <input type="number" id="ram" name="ram" value="{{ old('ram', $laptop->ram ?? '') }}" min="1" required><br><br>

        <button type="submit">{{ $isEditing ? 'Update Laptop' : 'Submit' }}</button>
    </form>
</body>
</html>