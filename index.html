<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

/* Body Styling */
body {
    background: #f9f9f9;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0;
    min-height: 100vh;
    transition: background 0.3s ease;
}

/* Main Container Styling */
.container {
    width: 100%;
    max-width: 1200px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;
    margin: 15px 0;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.container:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Section Header */
h1 {
    color: #555;
    font-size: 1.8rem;
    margin: 10px 0;
    text-align: center;
}

/* Form Styling */
form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 15px;
}

form label {
    font-size: 0.9rem;
    color: #555;
}

form input,
form select {
    padding: 10px;
    border: 1px solid #d1d1d1;
    border-radius: 5px;
    font-size: 0.9rem;
    flex: 0 1 calc(50% - 10px);
    transition: border-color 0.2s ease;
}

form input:focus,
form select:focus {
    border-color: #555;
    outline: none;
}

/* Buttons Styling */
button {
    padding: 10px 20px;
    background: #555;
    border: none;
    color: #ffffff;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.1s ease;
}

button:hover {
    background-color: #333;
    transform: translateY(-2px);
}

/* Table Section */
.table-container {
    overflow-x: auto;
    max-height: 400px;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin: 10px 0;
}

th,
td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
    font-size: 0.9rem;
    transition: background-color 0.2s ease;
}

th {
    background-color: #555;
    color: white;
    text-transform: uppercase;
}

tr:hover {
    background-color: #f2f2f2;
}

/* Responsiveness */
@media (max-width: 768px) {
    h1 {
        font-size: 1.6rem;
    }

    form input,
    form select {
        flex: 0 1 100%;
    }

    button {
        width: 100%;
    }

    table th,
    table td {
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1.4rem;
    }

    button {
        font-size: 0.8rem;
    }

    form input,
    form select {
        font-size: 0.8rem;
    }

    table th,
    table td {
        font-size: 0.7rem;
    }
}


    </style>
</head>

<body>
    <div class="container">
        <h1>Online Registration Form</h1>
        <form id="registrationForm">
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            <input type="date" id="dob" name="dob" required>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <button type="button" id="submitBtn">Submit</button>
            <button type="button" id="updateSubmitBtn" style="display:none;">Update</button>
        </form>
        <div id="response"></div>
    </div>

    <div class="container">
        <h1>Registered Users</h1>
        <div class="table-container">
            <table id="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamically loaded user data -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadUsers() {
            $.ajax({
                url: 'fetch.php',
                type: 'GET',
                success: function (response) {
                    $('#user-table tbody').html(response);
                },
                error: function () {
                    alert('Error loading users');
                }
            });
        }

        loadUsers();

        $('#submitBtn').click(function () {
            const formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                dob: $('#dob').val(),
                gender: $('#gender').val()
            };

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: formData,
                success: function (response) {
                    alert(response);
                    $('#registrationForm')[0].reset();
                    loadUsers();
                },
                error: function () {
                    alert('Error during registration');
                }
            });
        });

        $(document).on('click', '.update-btn', function () {
            const userId = $(this).data('id');
            $.ajax({
                url: 'fetch.php',
                type: 'GET',
                data: { id: userId },
                success: function (data) {
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#phone').val(data.phone);
                    $('#dob').val(data.dob);
                    $('#gender').val(data.gender);
                    $('#updateSubmitBtn').show().data('id', userId);
                }
            });
        });

        $('#updateSubmitBtn').click(function () {
            const formData = {
                id: $(this).data('id'),
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                dob: $('#dob').val(),
                gender: $('#gender').val()
            };

            $.ajax({
                url: 'update.php',
                type: 'POST',
                data: formData,
                success: function (response) {
                    alert(response);
                    $('#registrationForm')[0].reset();
                    $('#updateSubmitBtn').hide();
                    loadUsers();
                },
                error: function () {
                    alert('Error updating user');
                }
            });
        });

        $(document).on('click', '.delete-btn', function () {
            const userId = $(this).data('id');

            if (confirm('Are you sure you want to delete this user?')) {
                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: { id: userId },
                    success: function (response) {
                        alert(response);
                        loadUsers();
                    },
                    error: function () {
                        alert('Error deleting user');
                    }
                });
            }
        });

    </script>
</body>

</html>