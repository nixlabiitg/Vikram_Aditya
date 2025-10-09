<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <!-- STEP 8: Repair Settings & Configuration -->
    <div id="repair-settings" class="mb-10">
        <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
            <svg class="w-7 h-7 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.388 2.462a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.462a1 1 0 00-1.175 0l-3.388 2.462c-.784.57-1.838-.196-1.539-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.425 9.394c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.286-3.967z" /></svg>
            Repair Settings & Configuration
        </h1>

        <!-- Auto Notifications -->
        <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200 mb-8">
            <h2 class="text-xl font-semibold text-[#7A3E00] mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405M9 17H4l1.405-1.405M12 3v4m0 4v4" /></svg>
                Notification Rules
            </h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700 text-sm">
                <li><strong>Auto alert</strong> to repair team if item is not picked within <input type="number" value="24" class="border px-2 py-1 w-16 rounded mx-1"> hours.</li>
                <li><strong>Client notifications</strong> for each status update via <label class="mx-2"><input type="checkbox" checked> SMS</label><label class="mx-2"><input type="checkbox"> WhatsApp</label><label class="mx-2"><input type="checkbox" checked> Email</label></li>
                <li><strong>Escalate</strong> if delivery is overdue by <input type="number" value="1" class="border px-2 py-1 w-16 rounded mx-1"> day(s).</li>
                <li><strong>Set follow-up</strong> reminder <input type="number" value="2" class="border px-2 py-1 w-16 rounded mx-1"> day(s) after delivery.</li>
            </ul>
        </div>

        <!-- Source Setup -->
        <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200 mb-8">
            <h2 class="text-xl font-semibold text-[#7A3E00] mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                Lead Source & Repair Source Setup
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Add New Lead Source</label>
                    <input type="text" class="w-full px-4 py-2 border rounded" placeholder="e.g., Website, Referral, In-Store">
                    <button class="mt-2 bg-[#FF7F50] hover:bg-[#E67300] text-white px-4 py-2 rounded">Add Source</button>
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Add New Repair Category</label>
                    <input type="text" class="w-full px-4 py-2 border rounded" placeholder="e.g., Rudraksha, Crystal, Yantra">
                    <button class="mt-2 bg-[#FF7F50] hover:bg-[#E67300] text-white px-4 py-2 rounded">Add Category</button>
                </div>
            </div>
        </div>

        <!-- Staff & Role Config -->
        <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200">
            <h2 class="text-xl font-semibold text-[#7A3E00] mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20h6M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
                Staff & Repair Role Assignment
            </h2>
            <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] md:min-w-full sm:min-w-full">
                <thead>
                    <tr class="bg-[#FFF7EC] text-[#7A3E00]">
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Role</th>
                        <th class="p-2 border">Assigned Tasks</th>
                        <th class="p-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2 border">Pandit Gopal Ji</td>
                        <td class="p-2 border">Energy Healer</td>
                        <td class="p-2 border">22</td>
                        <td class="p-2 border"><button class="text-blue-600 hover:underline">Edit</button></td>
                    </tr>
                    <tr>
                        <td class="p-2 border">Priya Sharma</td>
                        <td class="p-2 border">Threading Expert</td>
                        <td class="p-2 border">15</td>
                        <td class="p-2 border"><button class="text-blue-600 hover:underline">Edit</button></td>
                    </tr>
                </tbody>
            </table></div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>
