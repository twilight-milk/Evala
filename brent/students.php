<html?>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            ;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <div class="wrapper">
        <?php
        // Database connection
        $servername = "localhost"; // Database server
        $username = "root"; // Database username
        $password = ""; // Database password
        $database = "evala_db1"; // Database name
        
        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * 
FROM evala_db1.users AS u
JOIN evala_db1.students AS s ON u.user_id = s.user_id
JOIN evala_db1.courses AS c ON s.course_id = c.course_id
WHERE u.role = 'student';
";

        $result = $conn->query($sql);

        echo "<table style='width:100%; border: 1px solid black; border-collapse: collapse;'>";
        echo "<tr>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Name</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Student Number</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Course</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Year</th>";
        echo "</tr>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['student_number'] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['course_name'] . "</td>";
                echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['student_year'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='border: 1px solid black; padding: 8px; text-align: center;'>No Available Students.</td></tr>";
        }

        echo "</table>";

        $conn->close();
        ?>


    </div>

    </html>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>