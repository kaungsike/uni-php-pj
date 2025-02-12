<!-- Tailwind CSS User Management Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md p-5 flex flex-col">
            <h2 class="text-2xl font-bold mb-5">Admin Panel</h2>
            <nav class="flex-1">
                <ul>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>🏠</span> <span>Dashboard</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>📬</span> <span>Inbox</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>👥</span> <span>Users</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>📦</span> <span>Complaints</span></a></li>
                    <li class="mb-4"><a href="./setting.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>⚙️</span> <span>Settings</span></a></li>
                </ul>
            </nav>
            <a href="#" class="mt-auto flex items-center space-x-2 text-gray-700 hover:text-red-500"><span>🚪</span> <span>Logout</span></a>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-3xl font-bold mb-6">User Management</h2>
            
            <!-- User List Table -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Registered Users</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b p-3">User ID</th>
                            <th class="border-b p-3">Name</th>
                            <th class="border-b p-3">Email</th>
                            <th class="border-b p-3">Role</th>
                            <th class="border-b p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b p-3">U001</td>
                            <td class="border-b p-3">John Doe</td>
                            <td class="border-b p-3">john@example.com</td>
                            <td class="border-b p-3">Admin</td>
                            <td class="border-b p-3">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded ml-2">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b p-3">U002</td>
                            <td class="border-b p-3">Jane Smith</td>
                            <td class="border-b p-3">jane@example.com</td>
                            <td class="border-b p-3">User</td>
                            <td class="border-b p-3">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                                <button class="bg-red-500 text-white px-3 py-1 rounded ml-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>