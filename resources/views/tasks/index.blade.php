<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">        
                @include('tasks._create')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group mt-4">
                    @foreach ($tasks as $index => $task)
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            {{ $index + 1 }} - {{ $task->list }}
                            <div class="d-flex">
                                <a class="btn btn-primary me-2" href="/tasks/{{$task->id}}/edit">Edit</a>
                                <form action="/tasks/{{$task->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach  
                </ul>
            </div>
        </div>        
    </div>
</x-app-layout>