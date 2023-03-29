<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>

    <!-- Bootstrap 5 CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="container my-5">
        <h2 class="text-center text-decoration-underline mt-5">Input Form</h2>
        <div class="d-flex justify-content-center">
        <form class="w-50 card p-5 justify-content-center" action="" method="POST">
            @csrf
            @method('PUT')
        	<!-- User Name Input Here -->
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" value="{{ $student->name}}">
            </div>
          </div>
          <!-- User Email Input Here -->
          <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" value="{{ $student->email}}">
            </div>
          </div>
          <!-- User Image Input Here -->
          <div class="row mb-3">
            <label for="image" class="col-sm-3 col-form-label">Image:</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="image" name="image" value="{{ $student->image}}">
            </div>
          </div>
          <!-- User Gender Input Here -->
          <div class="row mb-3">
            <label for="gender" class="col-sm-3 col-form-label">Gender:</label>
            <div class="col-sm-9">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="{{ $student->gender}}">
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="{{ $student->gender}}">
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
          </div>
          <!-- User Skill Input Here -->
          <div class="row mb-3">
            <label for="skills" class="col-sm-3 col-form-label">Skills:</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">Laravel</label>
                    </div>
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">Codeigniter</label>
                    </div>
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">Ajax</label>
                    </div>
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">VUE JS</label>
                    </div>
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">MySQL</label>
                    </div>
                    <div class="form-check col-sm-6">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="{{ $student->skills}}" checked>
                        <label class="form-check-label" for="check1">API</label>
                    </div>
                </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Update</button>
          @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        </form>
       
    </div>

<!-- Bootstrap 5 CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>


</body>
</html>