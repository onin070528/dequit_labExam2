<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      body {
        background-color: #f8f9fa;
      }
    </style>
  </head>
  <body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
      <div class="card shadow-lg w-100" style="max-width: 700px;">
        <div class="card-body p-5">

          <h2 class="mb-4 text-center">Edit Task</h2>

          @if($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" placeholder="Enter task title" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter task details" required>{{ $task->description }}</textarea>
            </div>

            <div class="form-check mb-4">
              <input type="checkbox" name="is_completed" id="is_completed" class="form-check-input" {{ $task->is_completed ? 'checked' : '' }}>
              <label for="is_completed" class="form-check-label">Mark as Completed</label>
            </div>

            <div class="d-flex justify-content-between">
              <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">Back</a>
              <button type="submit" class="btn btn-primary">Update Task</button>
            </div>

          </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
