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
                    <a class="btn btn-success" href="{{ route('bands.create') }}"> Create band</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
        <div class="grid grid-cols-1 md:grid-cols-[auto_auto_auto_auto_auto_auto] gap-x-2 mx-10">
            <div class="border-solid border-red-600 border-2 px-4 py-2">ID</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">name</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">founded</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">genre</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">active_til</div>
            <div class="border-solid border-red-600 border-2 px-4 py-2">Action</div>

        
    
            @foreach ($bands as $band)
                <div class="border-solid border-black border-2 px-4 py-2">{{ $band->id }}</div>
                <div class="border-solid border-black border-2 px-4 py-2>">{{$band->name }}</div>
                <div class="border-solid border-black border-2 px-4 py-2">{{ $band->founded }}</div>
                <div class="border-solid border-black border-2 px-4 py-2">{{ $band->genre }}</div>
                <div class="border-solid border-black border-2 px-4 py-2">{{ $band->active_til }}</div>
                
                <div>
                    <form action="{{ route('albums.destroy', $band->id) }}" class="border-solid border-black border-2 px-4 py-2" method="Post">
                        <a class="btn btn-primary" href="{{ route('albums.edit', $band->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-[#FF0000] px-5 py-1 rounded-md text-white">Delete</button>
                    </form>
                </div>
                <hr><hr><hr><hr><hr><div></div>
            @endforeach
        </div>
    

       
</body>

{{-- <body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="text-red-500">index</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('bands.create') }}"> Create bands</a>
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
                <th>name</th>
                <th>founded</th>
                <th>genre</th>
                <th>active_til</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($bands as $band)
                <tr>
                    <td>{{ $band->id }}</td>
                    <td>{{ $band->name }}</td>
                    <td>{{ $band->founded }}</td>
                    <td>{{ $band->genre }}</td>
                    <td>{{ $band->active_til }}</td>
                  
                    <td>
                        <form action="{{ route('bands.destroy', $band->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('bands.edit', $band->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <p class="bg-red-500 weight-bold color-hotpink">Some example text.</p>
</body> --}}

</html>