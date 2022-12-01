<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit bands</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('bands.index') }}" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ route('bands.update', $band->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>name:</strong>
                        <input type="enum" name="name" class="form-control" placeholder="name"
                            value="{{ $band->name }}">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>founded</strong>
                        <input type="text" name="founded" value="{{ $band->founded }}" class="form-control"
                            placeholder="founded ">
                        @error('founded')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>genre</strong>
                        <input type="text" name="genre" value="{{ $band->genre }}" class="form-control"
                            placeholder="genre ">
                        @error('v')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
              
              <div>      
            </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>

