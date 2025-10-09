<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-10 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0V9a4 4 0 00-4-4H9a4 4 0 00-4 4v8" />
        </svg>
        Complaint Tracking
    </h1>

    <div id="search-section" class="max-w-lg mx-auto mb-12">
        <form onsubmit="return trackComplaint();" class="bg-white shadow-md rounded-lg flex items-center p-4 gap-4">
            <input id="track-id" type="text" placeholder="Enter Complaint ID e.g. ASTRO-CMP-2025-0101" class="w-full border-gray-300 rounded px-4 py-2 text-sm focus:ring-2 focus:ring-orange-300 focus:outline-none" required />
            <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] transition">Track</button>
        </form>
    </div>

    <div id="table-section" class="overflow-hidden rounded-xl shadow-lg mb-12">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] md:min-w-full sm:min-w-full">
                <thead class="bg-[#FFF4E6] text-[#7A3E00] uppercase font-semibold text-center">
                    <tr>
                        <th class="px-6 py-4">Complaint ID</th>
                        <th class="px-6 py-4">Client</th>
                        <th class="px-6 py-4">Astrologer</th>
                        <th class="px-6 py-4">Type</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-center">
                    <tr class="hover:bg-orange-50">
                        <td class="px-6 py-4 font-medium">ASTRO-CMP-2025-0101</td>
                        <td class="px-6 py-4">Rajesh Kumar</td>
                        <td class="px-6 py-4">Pt. Ramesh</td>
                        <td class="px-6 py-4">Urgent</td>
                        
                        <td id="status-cell" class="px-6 py-4">Open</td>
                        <td class="px-6 py-4 text-center">
                            <button onclick="scrollToDetail(true);" class="inline-flex items-center gap-1 text-blue-600 hover:underline">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                View
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="detail-panel" class="hidden bg-white p-6 rounded-xl shadow-md border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-2 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 10c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z" />
            </svg>
            Complaint Tracker & Resolution Panel
        </h2>
        
        <div class="mb-6">
            <span class="text-sm text-gray-500 mr-2">Current Status:</span>
            <span id="inline-status-badge" class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Open</span>
        </div>

        <form onsubmit="return saveNote(event);">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div><p class="text-sm text-gray-500">Complaint ID</p><p class="font-semibold text-lg text-[#7A3E00]">ASTRO-CMP-2025-0101</p></div>
                <div><p class="text-sm text-gray-500">Client</p><p class="font-medium">Rajesh Kumar</p></div>
                <div><p class="text-sm text-gray-500">Astrologer</p><p class="font-medium">Pt. Ramesh</p></div>
                <div><p class="text-sm text-gray-500">Type</p><p class="font-medium">Urgent</p></div>
                <div><p class="text-sm text-gray-500">Category</p><p class="font-medium">Incorrect Prediction</p></div>
                <div>
                    <p class="text-sm text-gray-500">Status</p>
                    <select id="status-dropdown" class="mt-1 block w-full border rounded px-4 py-2 text-gray-700">
                        <option>Open</option>
                        <option>In Progress</option>
                        <option>Escalated</option>
                        <option>Resolved</option>
                        <option>Closed</option>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-1">Complaint Description</p>
                <div class="bg-gray-50 border p-4 rounded text-sm text-gray-700">
                    Client says the prediction made on 3rd August regarding career was incorrect. Client has attached chat logs and expects clarification or refund.
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-2">Resolution Checklist</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Acknowledgement Sent</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Apology Issued</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Refund Processed</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Rebooking Offered</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Supervisor Approval</label>
                    <label class="flex items-center gap-2"><input type="checkbox" class="form-checkbox"> Final Update Sent</label>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-500">Escalation Level</p>
                    <select class="w-full border rounded px-4 py-2">
                        <option>None</option>
                        <option>Level 1 - Supervisor</option>
                        <option>Level 2 - Admin</option>
                        <option>Level 3 - Management</option>
                    </select>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Escalated By</p>
                    <p class="font-medium">CRM Executive (Neha)</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Escalation Date</p>
                    <p class="font-medium">06 Aug 2025</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">SLA Deadline</p>
                    <p class="text-red-600 font-semibold">08 Aug 2025</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Current SLA Status</p>
                    <span class="inline-block px-3 py-1 text-xs font-semibold bg-yellow-100 text-yellow-800 rounded-full">Due in 1 Day</span>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-1">Escalation Remarks</p>
                <textarea class="w-full border rounded px-4 py-2" rows="3" placeholder="Enter reason and context for escalation..."></textarea>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-1">Internal Notes</p>
                <textarea class="w-full border rounded px-4 py-2" rows="4" placeholder="Add remarks or investigation notes..."></textarea>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-1">Attachments</p>
                <ul class="text-blue-600 text-sm list-disc list-inside">
                    <li><a href="#" class="hover:underline">Chat_Screenshot_03Aug.png</a></li>
                    <li><a href="#" class="hover:underline">Session_Invoice.pdf</a></li>
                </ul>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-500 mb-2">Escalation History</p>
                <ul class="text-sm list-disc pl-5 text-gray-700">
                    <li>06 Aug 2025 - Escalated to Supervisor by Neha</li>
                    <li>07 Aug 2025 - Supervisor assigned to Admin for follow-up</li>
                </ul>
            </div>

            <div class="mt-8 text-right">
                <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Updates</button>
            </div>
        </form>
    </div>
</div>

<script>
const STATUS_STYLES = {
  "Open": "bg-green-100 text-green-800",
  "In Progress": "bg-yellow-100 text-yellow-800",
  "Escalated": "bg-red-100 text-red-800",
  "Resolved": "bg-blue-100 text-blue-800",
  "Closed": "bg-gray-200 text-gray-800"
};

function renderStatusBadge(cell, value) {
    const cls = STATUS_STYLES[value] || "bg-gray-100 text-gray-800";
    cell.innerHTML = `<span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full ${cls}">${value}</span>`;
}

function setInlineBadge(value) {
    const inline = document.getElementById("inline-status-badge");
    if (!inline) return;
    const cls = STATUS_STYLES[value] || "bg-gray-100 text-gray-800";
    inline.className = `inline-flex px-2 py-1 text-xs font-semibold rounded-full ${cls}`;
    inline.textContent = value;
}

document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("status-dropdown");
    const statusCell = document.getElementById("status-cell");

    if (statusCell) {
        const initial = statusCell.textContent.trim();
        renderStatusBadge(statusCell, initial || "Open");
    }

    setInlineBadge((statusCell?.textContent || "Open").trim());

    if (dropdown && statusCell) {
        dropdown.addEventListener("change", function () {
            renderStatusBadge(statusCell, dropdown.value);
            setInlineBadge(dropdown.value);
        });
    }
});

function scrollToDetail(hideOthers = false) {
    const panel = document.getElementById('detail-panel');
    const statusCell = document.getElementById('status-cell');
    const dropdown = document.getElementById('status-dropdown');

    if (statusCell && dropdown) {
        const currentStatus = statusCell.textContent.trim();
        dropdown.value = currentStatus;
        setInlineBadge(currentStatus);
    }

    panel.classList.remove('hidden');
    if (hideOthers) {
        document.getElementById('search-section').classList.add('hidden');
        document.getElementById('table-section').classList.add('hidden');
    }
    panel.scrollIntoView({ behavior: 'smooth' });
}

function trackComplaint() {
    const input = document.getElementById('track-id').value.trim().toUpperCase();
    if (input === 'ASTRO-CMP-2025-0101') {
        scrollToDetail(true);
    } else {
        alert('No matching complaint found for ID: ' + input);
    }
    return false;
}

function saveNote(event) {
    event.preventDefault();
    alert("Note saved successfully!");
  
    window.location.href = "complain_tracker.php";
    return false;
}
</script>

<?php include('layouts/footer.php'); ?>
