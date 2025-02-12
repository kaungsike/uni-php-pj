<!-- Tailwind CSS Feedback Page with Sidebar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md p-5 flex flex-col">
            <h2 class="text-2xl font-bold mb-5">Student Panel</h2>
            <nav class="flex-1">
                <ul>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>🏠</span> <span>Dashboard</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>📬</span> <span>Inbox</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>✍️</span> <span>Feedback</span></a></li>
                    <li class="mb-4"><a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500"><span>⚙️</span> <span>Settings</span></a></li>
                </ul>
            </nav>
            <a href="#" class="mt-auto flex items-center space-x-2 text-gray-700 hover:text-red-500"><span>🚪</span> <span>Logout</span></a>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Student Feedback</h2>
            
            <!-- Feedback Post Section -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Share Your Feedback</h3>
                <form>
                    <div class="mb-4">
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write your feedback here..." rows="4"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Upload Image (optional)</label>
                        <input type="file" class="w-full px-4 py-2 border border-gray-300 rounded-lg" />
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="anonymous" class="mr-2 w-4 h-4">
                        <label for="anonymous" class="text-gray-700">Post as Anonymous</label>
                    </div>
                    <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Post Feedback</button>
                </form>
            </div>
            
            <!-- Feedback Feed Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Feedback</h3>
                <div class="space-y-4">
                    <div class="p-4 border border-gray-200 rounded-lg bg-gray-100">
                        <p class="text-gray-700">"The cafeteria food could be improved. More healthy options, please!"</p>
                        <span class="text-sm text-gray-500">- Anonymous</span>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-lg bg-gray-100">
                        <p class="text-gray-700">"Library hours should be extended during exam season."</p>
                        <span class="text-sm text-gray-500">- Student123</span>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-lg bg-gray-100">
                        <p class="text-gray-700">"More extracurricular activities would be great for student engagement."</p>
                        <span class="text-sm text-gray-500">- User567</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
