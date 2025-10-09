<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-bold text-[#7A3E00] mb-6 flex items-center gap-2">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Tags & Lead Status Management
    </h1>

    <div class="bg-orange-50 border-l-4 border-orange-400 p-4 rounded mb-6">
        <p class="text-sm text-gray-700">Use tags and lead statuses to classify and segment leads intelligently for better filtering, targeting, and campaigns. Ex: <strong>“VIP,” “Kundli Match,” “Tarot Query,” “Festival Offer,”</strong> etc.</p>
    </div>

    <div class="flex gap-4 mb-8">
        <button id="btn-tags" onclick="showSection('tags-section')" class="tab-btn px-4 py-2 rounded shadow">Tags</button>
        <button id="btn-status" onclick="showSection('status-section')" class="tab-btn px-4 py-2 rounded shadow">Lead Status</button>
        <button id="btn-bulk" onclick="showSection('bulk-section')" class="tab-btn px-4 py-2 rounded shadow">Bulk Apply</button>
    </div>

    <!-- Tags Section -->
    <div id="tags-section">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-[#7A3E00]">Custom Tags</h2>
            <button class="bg-[#FF7F50] text-white px-4 py-2 rounded hover:bg-[#e67300]"><a href="tag_add">+ Add Tag</a></button>
        </div>
        <div class="overflow-hidden shadow rounded-xl">
            <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] md:min-w-full sm:min-w-full">
                <thead class="bg-[#FFF4E6] text-center text-[#7A3E00] uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-4">Tag</th>
                        <th class="px-6 py-4">Color</th>
                        <th class="px-6 py-4">Used In</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-center">
                    <tr>
                        <td class="px-6 py-4 font-medium">High Budget</td>
                        <td class="px-6 py-4"><span class="inline-block px-2 py-1 rounded-full bg-green-100 text-green-800 text-xs">#22C55E</span></td>
                        <td class="px-6 py-4">35 Leads</td>
                        <td class="px-6 py-4">
                        <button onclick="openEditModal('High Budget', '#01ac26ff', '35 Lead')" class="text-blue-600 hover:underline mr-2">Edit</button>
                        <button onclick="deleteRow(this)" class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table></div>
        </div>
    </div>

    <!-- Lead Status Section -->
    <div id="status-section" class="hidden mt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-[#7A3E00]">Lead Status Settings</h2>
            <button class="bg-[#FF7F50] text-white px-4 py-2 rounded hover:bg-[#e67300]"><a href="tag_status_add">+ Add Status</a></button>
        </div>
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead class="bg-[#FFF4E6] text-center text-[#7A3E00] uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Color</th>
                    <th class="px-6 py-4">Type</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y text-center divide-gray-200">
                <tr>
                    <td class="px-6 py-4 font-medium">Contacted</td>
                    <td class="px-6 py-4"><span class="inline-block px-2 py-1 rounded-full bg-blue-100 text-blue-800 text-xs">#3B82F6</span></td>
                    <td class="px-6 py-4">Lead</td>
                    <td class="px-6 py-4">
                        <button onclick="openEditModal('Contacted', '#3B82F6', 'Lead')" class="text-blue-600 hover:underline mr-2">Edit</button>
                        <button onclick="deleteRow(this)" class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table></div>
    </div>
    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 relative">
        <h2 class="text-lg font-bold mb-4">Edit Status</h2>
        <form id="editForm" class="space-y-3">
        <div>
            <label class="block text-sm font-medium text-gray-600">Status Name</label>
            <input type="text" id="editName" class="w-full border border-gray-300 px-3 py-2 rounded-lg" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600">Color Code</label>
            <input type="text" id="editColor" class="w-full border border-gray-300 px-3 py-2 rounded-lg" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600">Type</label>
            <input type="text" id="editType" class="w-full border border-gray-300 px-3 py-2 rounded-lg" />
        </div>
        </form>
        <div class="flex justify-end gap-2 mt-4">
        <button onclick="closeEditModal()" class="px-3 py-1 bg-gray-500 text-white rounded">Cancel</button>
        <button onclick="saveEdit()" class="px-3 py-1 bg-blue-600 text-white rounded">Save</button>
        </div>
    </div>
    </div>

    <script>
        let editingName = "";

        function openEditModal(name, color, type) {
        editingName = name;
        document.getElementById("editName").value = name;
        document.getElementById("editColor").value = color;
        document.getElementById("editType").value = type;
        document.getElementById("editModal").classList.remove("hidden");
        }

        function closeEditModal() {
        document.getElementById("editModal").classList.add("hidden");
        }

        function saveEdit() {
        alert("Saved changes for: " + editingName);
        closeEditModal();
        }

        function deleteRow(button) {
            if (confirm("Are you sure you want to delete this row?")) {
            button.closest("tr").remove(); 
            }
        }
        </script>

    <!-- Bulk Apply Section -->
    <div id="bulk-section" class="hidden mt-10">
        <h2 class="text-xl font-semibold text-[#7A3E00] mb-4">Bulk Apply Tags / Status</h2>
        <div class="bg-white border border-gray-300 p-6 rounded-xl shadow">
            <form class="space-y-4" onsubmit="return saveApply(event);">
                <div>
                    <label class="text-sm font-medium text-gray-700">Select Leads</label>
                    <input type="text" placeholder="Lead IDs or names" class="w-full border border-gray-300 border-gray-300 rounded px-4 py-2" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700">Apply Tag</label>
                        <select class="w-full border border-gray-300 border-gray-300 rounded px-4 py-2">
                            <option value="">Select Tag</option>
                            <option>Festival Offer</option>
                            <option>VIP</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Apply Status</label>
                        <select class="w-full border border-gray-300 border-gray-300 rounded px-4 py-2">
                            <option value="">Select Status</option>
                            <option>New</option>
                            <option>Contacted</option>
                            <option>Not Interested</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="mt-4 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#e67300]">Apply</button>
            </form>
        </div>
    </div>
</div>

<script>
    function showSection(sectionId) {
        const sections = ['tags-section', 'status-section', 'bulk-section'];
        const buttons = {
            'tags-section': 'btn-tags',
            'status-section': 'btn-status',
            'bulk-section': 'btn-bulk'
        };

        sections.forEach(id => document.getElementById(id).classList.add('hidden'));

        Object.values(buttons).forEach(btn => {
            document.getElementById(btn).classList.remove('bg-[#FFE1C1]', 'text-[#7A3E00]', 'font-semibold');
            document.getElementById(btn).classList.add('bg-[#FFF4E6]', 'text-[#7A3E00]');
        });

        document.getElementById(sectionId).classList.remove('hidden');
        const activeBtn = document.getElementById(buttons[sectionId]);
        activeBtn.classList.remove('bg-[#FFF4E6]');
        activeBtn.classList.add('bg-[#FFE1C1]', 'font-semibold');
    }

    document.addEventListener('DOMContentLoaded', () => {
        showSection('tags-section');
    });
    function saveApply(event) {
    event.preventDefault();

    alert("saved successfully!");

    document.querySelector("form").reset();

    window.location.href = "tags_leads.php#bulk-tab";

    return false;
}

</script>

<?php include('layouts/footer.php'); ?>
