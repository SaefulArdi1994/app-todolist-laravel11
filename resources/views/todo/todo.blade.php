<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App - Todolist</title>

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-9">
                        <div class="card rounded-3">
                            <div class="card-body p-4">

                                <h4 class="text-center my-3 pb-3">To Do App</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form id="todo-form" class="row row-cols-lg-auto g-1 justify-content-center align-items-center mb-4 pb-2" action="{{ url('/todo') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" id="form1" class="form-control" placeholder="Enter a task here" value="{{ old('task')}}" />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>

                                <table class="table mb-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Todo</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <th scope="row">1</th>
                                            <td>Buy groceries for next week</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Status
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Open</a></li>
                                                    <li><a class="dropdown-item" href="#">On Progress</a></li>
                                                    <li><a class="dropdown-item" href="#">Closed</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
