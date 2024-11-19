<?php
// Include the database connection
include('db_conn_people.php');

// Initialize a message variable for success/error messages
$message = "";

// Handle form submission (Create or Update)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $school_id = $_POST['school_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $section = $_POST['section'];
    $id = isset($_POST['id']) ? $_POST['id'] : null; // If updating, get the ID

    // Handle file upload (image)
    $target_dir = "uploads/"; // Directory for storing images
    $image_path = "default.jpg"; // Default image if none is uploaded

    if (!empty($_FILES['image']['name'])) {
        // Process uploaded image
        $image_name = basename($_FILES['image']['name']);
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_path = $target_file; // Update image path if upload is successful
        }
    }

    // If ID exists, update the record, else create a new one
    if ($id) {
        $sql = "UPDATE students SET school_id='$school_id', name='$name', email='$email', phone='$phone', department='$department', section='$section', image='$image_path' WHERE id=$id";
    } else {
        $sql = "INSERT INTO students (school_id, name, email, phone, department, section, image) VALUES ('$school_id', '$name', '$email', '$phone', '$department', '$section', '$image_path')";
    }

    // Execute SQL query and set success or error message
    if ($conn->query($sql) === TRUE) {
        $message = $id ? "Record updated successfully." : "New record created successfully.";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Handle record deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $message = "Record deleted successfully.";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Fetch all student records
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Fetch record for editing if an ID is provided
$edit_record = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $edit_sql = "SELECT * FROM students WHERE id=$id";
    $edit_result = $conn->query($edit_sql);

    if ($edit_result->num_rows > 0) {
        $edit_record = $edit_result->fetch_assoc(); // Fetch the record for editing
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Styling for the image upload area */
        #image-drop-zone {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            background-color: #f7f7f7;
        }
        #image-drop-zone:hover {
            background-color: #f0f0f0;
        }

        /* Styling for the image preview */
        #preview {
            margin-top: 10px;
            max-width: 100%;
            max-height: 150px;
        }
        .upload-container p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Student Management</h1>

    <!-- Display success or error message -->
    <p><?php echo $message; ?></p>

    <!-- Form for creating or editing student record -->
    <form method="POST" action="students.php" enctype="multipart/form-data">
        <h2><?php echo $edit_record ? "Edit Student" : "Add New Student"; ?></h2>

        <!-- Hidden input for the student ID (used for editing) -->
        <input type="hidden" name="id" value="<?php echo $edit_record['id'] ?? ''; ?>">

        <!-- Form fields for student details -->
        <label for="school_id">School ID:</label>
        <input type="text" id="school_id" name="school_id" value="<?php echo $edit_record['school_id'] ?? ''; ?>" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $edit_record['name'] ?? ''; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $edit_record['email'] ?? ''; ?>" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $edit_record['phone'] ?? ''; ?>" required><br><br>

        <!-- Image upload section -->
        <label for="image">Image:</label>
        <div id="image-drop-zone" class="upload-container" ondrop="drop(event)" ondragover="allowDrop(event)">
            <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            <p>Drag & Drop an image here or click to select</p>
            <img id="preview" src="<?php echo $edit_record['image'] ?? 'default.jpg'; ?>" width="150" height="150" alt="Preview">
        </div><br><br>

        <!-- Department selection -->
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="CAMS" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'CAMS' ? 'selected' : ''; ?>>CAMS</option>
            <option value="CAS" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'CAS' ? 'selected' : ''; ?>>CAS</option>
            <option value="CBA" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'CBA' ? 'selected' : ''; ?>>CBA</option>
            <option value="COECSA" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'COECSA' ? 'selected' : ''; ?>>COECSA</option>
            <option value="CFAD" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'CFAD' ? 'selected' : ''; ?>>CFAD</option>
            <option value="CITHM" <?php echo isset($edit_record['department']) && $edit_record['department'] === 'CITHM' ? 'selected' : ''; ?>>CITHM</option>
        </select><br><br>

        <!-- Section input -->
        <label for="section">Section:</label>
        <input type="text" id="section" name="section" value="<?php echo $edit_record['section'] ?? ''; ?>" required><br><br>

        <!-- Submit button -->
        <input type="submit" value="<?php echo $edit_record ? 'Update Student' : 'Create Student'; ?>">
    </form>

    <!-- Student records table -->
    <h2>Student List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>School ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Section</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['school_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['section']; ?></td>
                        <td>
                            <img src="<?php echo $row['image']; ?>" alt="Profile Picture" width="50" height="50" onerror="this.src='default.jpg';">
                        </td>
                        <td>
                            <a href="students.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="students.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script>
        // Allow file to be dropped
        function allowDrop(event) {
            event.preventDefault();
        }
        // Handle file drop event
        function drop(event) {
            event.preventDefault();
            const file = event.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                const input = document.getElementById('image');
                input.files = event.dataTransfer.files;
                previewImage({ target: input });
            } else {
                alert('Please drop a valid image file (e.g., JPG, PNG, GIF).');
            }
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) { // Display the selected image
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = "default.jpg";
            }
        }
    </script>
</body>
</html>
