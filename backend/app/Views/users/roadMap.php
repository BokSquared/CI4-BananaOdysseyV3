<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Banana Road Map']) ?>
</head>

<body>
    <?= view('components/header') ?>
    <div class="max-w-7xl mx-auto px-6 py-12 space-y-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Road Map</h2>
        <p class="mb-6 text-[#FFF3B0]">Our to-do list for Banana Odyssey.</p>

        <div class="bg-white shadow-lg rounded-xl p-6 flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg text-[#9E2A2B] mb-1">CRUD for Users</h3>
                <p class="text-gray-600 mb-2">Sign Up, Login, Update, Delete Account</p>
                <p class="text-sm font-medium text-gray-500">Priority: High</p>
            </div>
            <select id="status-1" class="px-3 py-1 rounded-full font-semibold text-sm text-[#9E2A2B]" onchange="updateStatusColor(this)">
                <option value="planned" selected>Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg text-[#AF4B41] mb-1">Menu Management</h3>
                <p class="text-gray-600 mb-2">Creating of menus, updating, display, & disabling</p>
                <p class="text-sm font-medium text-gray-500">Priority: Medium</p>
            </div>
            <select id="status-1" class="px-3 py-1 rounded-full font-semibold text-sm text-[#AF4B41]" onchange="updateStatusColor(this)">
                <option value="planned" selected>Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg text-[#AF4B41] mb-1">CRUD for Customer Orders</h3>
                <p class="text-gray-600 mb-2">Lets users update and delete their orders</p>
                <p class="text-sm font-medium text-gray-500">Priority: High</p>
            </div>
            <select id="status-1" class="px-3 py-1 rounded-full font-semibold text-sm text-[#AF4B41]" onchange="updateStatusColor(this)">
                <option value="planned" selected>Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg text-[#AF4B41] mb-1">Database Migration & Seeding</h3>
                <p class="text-gray-600 mb-2">Database for all CRUD</p>
                <p class="text-sm font-medium text-gray-500">Priority: Medium</p>
            </div>
            <select id="status-1" class="px-3 py-1 rounded-full font-semibold text-sm text-[#AF4B41]" onchange="updateStatusColor(this)">
                <option value="planned">Planned</option>
                <option value="in-progress" selected>In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-lg text-[#AF4B41] mb-1">About Us</h3>
                <p class="text-gray-600 mb-2">Create a page with company info and story.</p>
                <p class="text-sm font-medium text-gray-500">Priority: Low</p>
            </div>
            <select id="status-1" class="px-3 py-1 rounded-full font-semibold text-sm text-[#AF4B41]" onchange="updateStatusColor(this)">
                <option value="planned" selected>Planned</option>
                <option value="in-progress">In Progress</option>
                <option value="done">Done</option>
            </select>
        </div>
    </div>
    <?= view('components/footer') ?>
    <script>
        function updateStatusColor(select) {
            switch (select.value) {
                case 'planned':
                    select.style.backgroundColor = '#E09F3E';
                    select.style.color = '#FFF3B0';
                    break;
                case 'in-progress':
                    select.style.backgroundColor = '#9E2A2B';
                    select.style.color = '#FFF3B0';
                    break;
                case 'done':
                    select.style.backgroundColor = '#333333';
                    select.style.color = '#FFF3B0';
                    break;
            }
        }

        document.querySelectorAll('select').forEach(sel => updateStatusColor(sel));
    </script>

</body>

</html>