<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container mt-2 ">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="text-red-500">index</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('songs.create') }}"> Create songs</a>
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
            <div class="border-solid border-red-600 border-2 px-4 py-2">title</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">singer</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">Action</div>
          
    
            @foreach ($songs as $song)
                <div class="border-solid border-black border-2 px-4 py-2">{{ $song->id }}</div>
                <div class="border-solid border-black border-2 px-4 py-2>">{{ $song->title }}</div>
                <div class="border-solid border-black border-2 px-4 py-2">{{ $song->singer }}</div>
                <div>
                    <form action="{{ route('albums.destroy', $song->id) }}" class="border-solid border-black border-2 px-4 py-2" method="Post">
                        <a class="btn btn-primary" href="{{ route('albums.edit', $song->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-[#FF0000] px-5 py-1 rounded-md text-white">Delete</button>
                    </form>
                </div>
                <hr><hr><hr><div></div>
            @endforeach
        </div>

        {{-- <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 class="text-red-500">index</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('songs.create') }}"> Create song</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table  class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>singer</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($songs as $song)
                    <tr>
                        <td>{{ $song->id }}</td>
                        <td>{{ $song->title }}</td>
                        <td>{{ $song->singer }}</td>
                    
                        <td>
                            <form action="{{ route('songs.destroy', $song->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('songs.edit', $song->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            <p class="bg-red-500 weight-bold color-hotpink">Some example text.</p> --}}
</body>

</html>