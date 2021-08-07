
<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        <!-- @if($errors->all())
            <div class="alert alert-danger">
                Your data was invalida
            </div>
        @endif -->
        <form action="/tasks" method="post">
            @csrf
            <div class="row">
                <div class="col-10">        
                    <input type="text" class="form-control @error('list') is-invalid @enderror me-2" name="list" placeholder="the name of the task">
                    @error('list')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>