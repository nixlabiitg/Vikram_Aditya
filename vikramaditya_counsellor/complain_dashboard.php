<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-10 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h3m0 0V7m0 4l-4-4m0 0l4 4" />
        </svg>
        Complaint Summary
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-white border-l-4 border-[#FF7F50] p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Total Complaints Received</p>
            <p class="text-2xl font-bold text-[#7A3E00]">128</p>
        </div>
        <div class="bg-white border-l-4 border-green-500 p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Total Resolved</p>
            <p class="text-2xl font-bold text-[#7A3E00]">76 (59%)</p>
        </div>
        <div class="bg-white border-l-4 border-blue-400 p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Avg. Resolution Time</p>
            <p class="text-2xl font-bold text-[#7A3E00]">1.6 days</p>
        </div>
        <div class="bg-white border-l-4 border-yellow-400 p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Complaints In Progress</p>
            <p class="text-2xl font-bold text-[#7A3E00]">30</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-indigo-400">
            <p class="text-sm text-gray-500">Repeat Complaints %</p>
            <p class="text-2xl font-bold text-[#7A3E00]">12%</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-pink-400">
            <p class="text-sm text-gray-500">Top 5 Complaint Categories</p>
            <ul class="text-sm text-[#7A3E00] mt-2 list-disc list-inside">
                <li>Late Session Start</li>
                <li>Prediction not satisfactory</li>
                <li>Rude Behavior</li>
                <li>Technical Issues</li>
                <li>Refund Related</li>
            </ul>
        </div>
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-purple-400">
            <p class="text-sm text-gray-500">Longest Pending Complaint</p>
            <p class="text-md font-bold text-[#7A3E00] mt-2">ASTRO-CMP-089 (8 days)</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
            <p class="text-sm text-gray-500">Escalated Cases</p>
            <p class="text-2xl font-bold text-[#7A3E00]">12</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-cyan-400">
            <p class="text-sm text-gray-500">Complaint Type Breakdown</p>
            <p class="text-md text-[#7A3E00] mt-2">Minor: 60% | Major: 30% | Urgent: 10%</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-teal-400">
            <p class="text-sm text-gray-500">Monthly Trend</p>
            <p class="text-md text-[#7A3E00] mt-2">Aug: 36 | Jul: 52 | Jun: 40</p>
        </div>
    </div>

    <h2 class="text-2xl font-bold text-[#7A3E00] mb-6 flex items-center gap-2">
        <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636a9 9 0 11-12.728 0M12 2v10" />
        </svg>
        Urgent Complaint Tracker
    </h2>
    <div class="overflow-hidden rounded-xl shadow-lg">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead class="bg-red-50 text-red-700 uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Complaint ID</th>
                    <th class="px-6 py-4">Raised On</th>
                    <th class="px-6 py-4">Assigned To</th>
                    <th class="px-6 py-4">Time Left (SLA)</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Action Taken</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-orange-50">
                    <td class="px-6 py-4 font-medium">ASTRO-CMP-101</td>
                    <td class="px-6 py-4">10 June, 10:05 AM</td>
                    <td class="px-6 py-4">Astrologer A</td>
                    <td class="px-6 py-4 text-yellow-600 font-semibold">45 mins left</td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">Open</span>
                    </td>
                    <td class="px-6 py-4 text-gray-700">Client called back, astrologer notified</td>
                </tr>
            </tbody>
        </table>
        <p class="text-xs text-gray-500 mt-2">SLA = Service Level Agreement (e.g., urgent to be resolved within 2 hrs)</p>
    </div></div>
</div>

<?php include('layouts/footer.php'); ?>