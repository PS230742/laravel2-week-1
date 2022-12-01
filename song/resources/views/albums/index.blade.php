<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>
<style>

</style>

<body>

    <div class="container mt-2 ">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="text-red-500">index</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('albums.create') }}"> Create album</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
        <div class="grid grid-cols-1 md:grid-cols-[auto_auto_auto_auto] gap-x-2 mx-10">
            <div class="border-solid border-red-600 border-2 px-4 py-2">ID</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">name</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">year</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">Action</div>
    
            @foreach ($albums as $album)
                <div class="border-solid border-black border-2 px-4 py-2">{{ $album->id }}</div>
                <div class="border-solid border-black border-2 px-4 py-2>">{{ $album->name }}</div>
                <div class="border-solid border-black border-2 px-4 py-2">{{ $album->year }}</div>
                <div>
                    <form action="{{ route('albums.destroy', $album->id) }}" class="border-solid border-black border-2 px-4 py-2" method="Post">
                        <a class="btn btn-primary" href="{{ route('albums.edit', $album->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-[#FF0000] px-5 py-1 rounded-md text-white   ">Delete</button>
                    </form>
                </div>
                <hr><hr><hr><div></div>
            @endforeach
        </div>
    
    {{-- <div class= flex-1>
        <table class="table table-responsive width-100%  table-bordered">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>year</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->id }}</td>
                    <td>{{ $album->name }}</td>
                    <td>{{ $album->year }}</td>
               
                    <td>
                        <form action="{{ route('albums.destroy', $album->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('albums.edit', $album->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table> --}}

</body>

</html>
