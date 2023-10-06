<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tailwind CSS</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-blue-500 text-white p-4">
        Beautiful tailwind header test
    </div>


    <div class="h-screen flex">
        <!-- Sidenav -->
        <div class="flex flex-col items-center w-72 h-full bg-gray-800 text-white p-4">
            <!-- Centered Links -->
            <ul class="flex flex-col items-center justify-center space-y-4">
                <li><a href="#" class="hover:text-blue-500">View all Companies</a></li>
                <li><a href="#" class="hover:text-blue-500">View all Employees</a></li>
                <li><a href="#" class="hover:text-blue-500">Add Company</a></li>
                <li><a href="#" class="hover:text-blue-500">Add Employee</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="flex-1 p-4">
            <!-- Your main content goes here -->
        </div>
    </div>

</body>
</html>