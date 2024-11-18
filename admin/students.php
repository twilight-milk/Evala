<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Datatables CSS  -->
  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
  <!-- CSS  -->
  <link rel="stylesheet" href="style.css">
</head>

<style>
        .file-upload {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 150px;
      padding: 30px;
      border: 1px dashed silver;
      border-radius: 8px;
    }

    .file-upload input {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      cursor: pointer;
      opacity: 0;
    }

    .preview_img {
      height: 80px;
      width: 80px;
      border: 4px solid silver;
      border-radius: 100%;
      object-fit: cover;
    }

    body {
            font-family: 'Roboto', sans-serif;
            background-color: #eaeaea; /* Light grey for contrast */
            color: #333; /* Dark grey for text */
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1c1c1c; /* Black background */
            color: #f0f0f0; /* Light grey text */
            padding-top: 20px;
            padding-left: 15px;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            transition: all 0.3s ease;
        }
        .sidebar h4 {
            margin-bottom: 15px;
            font-weight: 600;
            color: #fff; /* White heading */
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }
        .dropdown-btn {
            background: none;
            border: none;
            color: #f0f0f0; /* Light grey */
            text-align: left;
            width: 100%;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .dropdown-btn:hover {
            background-color: #333; /* Darker grey on hover */
            color: #fff; /* White text */
        }
        .dropdown-container {
            display: none;
            padding-left: 10px;
        }
        .nav-link {
            color: #f0f0f0;
            text-decoration: none;
            padding: 8px 15px;
            display: flex;
            align-items: center;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .nav-link:hover {
            background-color: #333; /* Darker grey */
            color: #fff;
        }
        .nav-link i {
            margin-right: 8px;
        }
        .active {
            color: #fff; /* White when active */
        }
        .content h2 {
            color: #1c1c1c; /* Blackish grey */
        }
        .content p {
            color: #4a4a4a; /* Medium grey for readability */
        }
</style>

<body>

<div class="sidebar">
    <h4>IAB</h4>
    <button class="dropdown-btn">Home <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="criteria.php" class="nav-link"><i class="fas fa-star"></i> Criteria</a>
    </div>
    
    <button class="dropdown-btn">Catalog <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
        <button class="dropdown-btn">People <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="faculty.php" class="nav-link"><i class="fas fa-user-tie"></i> Faculty</a>
            <a href="students.php" class="nav-link"><i class="fas fa-user-graduate"></i> Students</a>
            <a href="alumni.php" class="nav-link"><i class="fas fa-user"></i> Alumni</a>
            <a href="users.php" class="nav-link"><i class="fas fa-users"></i> Users</a>
        </div>
        <button class="dropdown-btn">Records <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="department.php" class="nav-link"><i class="fas fa-folder"></i> Department</a>
            <a href="subjects.php" class="nav-link"><i class="fas fa-book"></i> Subjects</a>
            <a href="courses.php" class="nav-link"><i class="fas fa-file-alt"></i> Courses</a>
            <a href="#levelandsec.php" class="nav-link"><i class="fas fa-layer-group"></i> Level & Section</a>
        </div>
    </div>
    <button class="dropdown-btn">Progress <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="evaluation.php" class="nav-link"><i class="fas fa-chart-line"></i> Evaluation</a>
    </div>
</div>


  <nav class="navbar justify-content-center fs-3 mb-3"></nav>

  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div class="text-body-secondary">
        <span class="h5">All Users</span>
        <br>
        Manage all existing user or add a new on
      </div>
      <!-- Button to trigger Add user offcanvas -->
      <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
        <i class="fa-solid fa-user-plus fa-xs"></i>
        Add new user
      </button>
    </div>


    <table class="table table-bordered table-striped table-hover align-middle" id="studebtsTable" style="width:100%;">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>School ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Image</th>
          <th>Department</th>
          <th>Section</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>



  <!-- Add user offcanvas  -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" style="width:600px;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add new user</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form method="POST" id="insertForm">

        <div class="row mb-3">
          <div class="col">
            <label class="form-label">School ID</label>
            <input type="text" class="form-control" name="schoolid" placeholder="2022-2-2343">
          </div>
          <div class="col">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
          </div>
        </div>


        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>


        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="+63 *** **** ***">
          </div>


        <div class="row mb-3">
          <label class="form-label">Upload Image</label>
          <div class="col-2">
            <img class="preview_img" src="./default-avatar.png">
          </div>
          <div class="col-10">
            <div class="file-upload text-secondary">
              <input type="file" class="image" name="image" accept="image/*">
              <span class="fs-4 fw-2">Choose file...</span>
              <span>or drag and drop file here</span>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Department</label>
          <select name="department" class="form-control">
            <option value="CAMS">Allied Medical Sciences</option>
            <option value="CAS">College of Arts and Sciences</option>
            <option value="CBA">College of Business Administration </option>
            <option value="COECSA">College of Engineering, Computer Studies and Architecture </option>
            <option value="CFAD">College of Fine Arts and Design</option>
            <option value="CITHM">College of International Tourism and Hospitality Management </option>
            <option value="BSN">Bachelor of Science in Nursing</option>
          </select>
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Section</label>
          <input type="text" class="form-control" name="section" placeholder="section">
        </div>
        <div>
          <button type="submit" class="btn btn-primary me-1" id="insertBtn">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    </div>
  </div>




  <!-- Edit user offcanvas  -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditUser" style="width:600px;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit user data</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form method="POST" id="editForm">
        <input type="hidden" name="id" id="id">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">School ID</label>
            <input type="text" class="form-control" name="schoolid" placeholder="2022-2-2343">
          </div>
          <div class="col">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
          </div>
        </div>


        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>


        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="+63 *** **** ***">
          </div>


        <div class="row mb-3">
          <label class="form-label">Upload Image</label>
          <div class="col-2">
            <img class="preview_img" src="./default-avatar.png">
          </div>
          <div class="col-10">
            <div class="file-upload text-secondary">
              <input type="file" class="image" name="image" accept="image/*">
              <span class="fs-4 fw-2">Choose file...</span>
              <span>or drag and drop file here</span>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Department</label>
          <select name="department" class="form-control">
            <option value="CAMS">Allied Medical Sciences</option>
            <option value="CAS">College of Arts and Sciences</option>
            <option value="CBA">College of Business Administration </option>
            <option value="COECSA">College of Engineering, Computer Studies and Architecture </option>
            <option value="CFAD">College of Fine Arts and Design</option>
            <option value="CITHM">College of International Tourism and Hospitality Management </option>
            <option value="BSN">Bachelor of Science in Nursing</option>
          </select>
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Section</label>
          <input type="text" class="form-control" name="section" placeholder="section">
        </div>
        <div>
          <button type="submit" class="btn btn-primary me-1" id="editBtn">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    </div>
  </div>



  <!-- Toast container BOOTSTRAP  -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <!-- Success toast BOOTSTRAP -->
    <div class="toast align-items-center text-bg-success" role="alert" aria-live="assertive" aria-atomic="true" id="successToast">
      <div class="d-flex">
        <div class="toast-body">
          <strong>Success!</strong>
          <span id="successMsg"></span>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    <!-- Error toast BOOTSTRAP  -->
    <div class="toast align-items-center text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true" id="errorToast">
      <div class="d-flex">
        <div class="toast-body">
          <strong>Error!</strong>
          <span id="errorMsg"></span>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
        });
    }
</script>

  <!-- Bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Datatables  -->
  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
  <!-- JS  -->
  <script src="script.js"></script>
</body>

</html>