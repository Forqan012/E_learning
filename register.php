<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/registers.css">
</head>

<body>
  <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 form-container">
      <h3 class="text-center mb-4">Register</h3>
      <form action="register" method="post" enctype="multipart/form-data">
        <!-- First Name and Last Name -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
          </div>
        </div>
        <!-- Email and Phone -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
          </div>
        </div>
        <!-- DOB and Gender  -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" id="dob" name="dob" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="gender" class="form-select" required>
              <option value="" disabled selected>Select your gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>
        <!-- Role and Status -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="role" class="form-label">Role</label>
            <select id="role" name="role" class="form-select" required>
              <option value="" disabled selected>Select your role</option>
              <option value="admin">Admin</option>
              <option value="teacher">Teacher</option>
              <option value="student">Student</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="status" class="form-label">Status File</label>
            <select name="status" id="status" class="form-select">
              <option value="" disabled selected></option>
              <option value="active">Active</option>
              <option value="unactive">Unactive</option>
            </select>
          </div>
        </div>
        <!-- Password and Confirm Password -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
          </div>
        </div>
        <!-- checkbox -->
        <div class="form-check form-check-inline mb-3">
          <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
          <label for="terms" class="form-check-label">
            <a href="terms.php" class="text-decoration-none">I agree to the terms and conditions</a>
          </label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK" crossorigin="anonymous"></script>
</body>

</html>
