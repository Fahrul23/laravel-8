<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">            
            <h1>Tasks</h1>
            <form action="{{route('tasks.update',$tasks->id)}}" method="post">
                @method('put');
                @csrf
                <input type="text" class="form-control" name="list" value="{{$tasks->list}}" placeholder="the name of the task">
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>