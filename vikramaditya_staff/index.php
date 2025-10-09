<?php include('layouts/header.php'); ?>

<div class="min-h-screen p-6">
    <!-- Dashboard Title -->
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Staff Dashboard</h1>

    <!-- KPI Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-[#FFE68F] rounded-xl shadow p-5 flex items-center justify-between">
            <div>
                <p class="text-yellow-800">Clients</p>
                <p class="text-2xl font-semibold text-yellow-900">25</p>
            </div>
            <div class="text-yellow-500 text-3xl">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="bg-green-100 rounded-xl shadow p-5 flex items-center justify-between">
            <div>
                <p class="text-green-800">Appointments Today</p>
                <p class="text-2xl font-semibold text-green-900">8</p>
            </div>
            <div class="text-green-500 text-3xl">
                <i class="fas fa-calendar-check"></i>
            </div>
        </div>
        <div class="bg-red-100 rounded-xl shadow p-5 flex items-center justify-between">
            <div>
                <p class="text-red-800">Pending Complaints</p>
                <p class="text-2xl font-semibold text-red-900">3</p>
            </div>
            <div class="text-red-500 text-3xl">
                <i class="fas fa-exclamation-circle"></i>
            </div>
        </div>
        <div class="bg-blue-100 rounded-xl shadow p-5 flex items-center justify-between">
            <div>
                <p class="text-blue-800">Repair Tasks</p>
                <p class="text-2xl font-semibold text-blue-900">5</p>
            </div>
            <div class="text-blue-500 text-3xl">
                <i class="fas fa-tools"></i>
            </div>
        </div>
    </div>


    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Today's Schedule -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Today's Schedule</h2>
            <ul class="space-y-3">
                <li class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div>
                        <p class="font-semibold text-gray-800">John Doe</p>
                        <p class="text-sm text-gray-500">Appointment: 10:00 AM</p>
                    </div>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-green-600 transition">Call</button>
                </li>
                <li class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div>
                        <p class="font-semibold text-gray-800">Jane Smith</p>
                        <p class="text-sm text-gray-500">Repair Check: 11:30 AM</p>
                    </div>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-600 transition">Update</button>
                </li>
                <li class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <div>
                        <p class="font-semibold text-gray-800">Alex Brown</p>
                        <p class="text-sm text-gray-500">Complaint Review: 2:00 PM</p>
                    </div>
                    <button class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600 transition">Check</button>
                </li>
            </ul>
        </div>

        <!-- Pending Tasks -->
        <div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Pending Tasks</h2>
            <table class="min-w-full divide-y text-center divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-sm font-medium text-gray-500">Client</th>
                        <th class="px-4 py-2 text-sm font-medium text-gray-500">Task Type</th>
                        <th class="px-4 py-2 text-sm font-medium text-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2 text-gray-800">John Doe</td>
                        <td class="px-4 py-2 text-gray-800">Follow-Up</td>
                        <td class="px-4 py-2">
                            <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 text-sm transition">Complete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-gray-800">Jane Smith</td>
                        <td class="px-4 py-2 text-gray-800">Complaint</td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 text-sm transition">Update</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-gray-800">Alex Brown</td>
                        <td class="px-4 py-2 text-gray-800">Repair</td>
                        <td class="px-4 py-2">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 text-sm transition">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Recent Activities (Full width on small screens) -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Activities</h2>
            <ul class="space-y-2">
                <li class="p-3 bg-green-50 rounded-lg flex items-center space-x-3">
                    <span class="bg-green-400 text-white px-2 py-1 rounded-full text-xs font-semibold">Appointment</span>
                    <span class="text-gray-800">Completed appointment with John Doe at 10:00 AM</span>
                </li>
                <li class="p-3 bg-red-50 rounded-lg flex items-center space-x-3">
                    <span class="bg-red-400 text-white px-2 py-1 rounded-full text-xs font-semibold">Complaint</span>
                    <span class="text-gray-800">Updated complaint status for Jane Smith</span>
                </li>
                <li class="p-3 bg-blue-50 rounded-lg flex items-center space-x-3">
                    <span class="bg-blue-400 text-white px-2 py-1 rounded-full text-xs font-semibold">Repair</span>
                    <span class="text-gray-800">Marked repair task completed for client Alex</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>
