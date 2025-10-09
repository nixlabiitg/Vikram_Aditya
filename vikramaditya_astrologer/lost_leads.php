<?php include("layouts/header.php") ?>

<div class="main-content p-4 md:p-6">
    <h1 class="text-2xl md:text-3xl font-bold text-[#7A3E00] mb-6">Lost Leads</h1>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-6 border border-[#FFD699] flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <input type="text" placeholder="Search Lost Leads." class="border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
        <select class="border border-gray-300 rounded px-4 py-2 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
            <option>Reason: All</option>
            <option>Not Interested</option>
            <option>Wrong Contact</option>
            <option>Budget Issue</option>
            <option>No Response</option>
        </select>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699] overflow-x-auto">
        <h2 class="text-lg md:text-xl font-semibold text-[#7A3E00] mb-4">Lost Lead List</h2>
        <table class="w-full text-left border-collapse min-w-[600px] md:min-w-full">
            <thead>
                <tr class="bg-[#FFEBD6]">
                    <th class="p-2 border-b border-[#FFD699]">Lead Name</th>
                    <th class="p-2 border-b border-[#FFD699]">Phone</th>
                    <th class="p-2 border-b border-[#FFD699]">Lost Reason</th>
                    <th class="p-2 border-b border-[#FFD699]">Last Contact</th>
                    <th class="p-2 border-b border-[#FFD699]">Status</th>
                    <th class="p-2 border-b border-[#FFD699]">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFD699]">Rajesh Kumar</td>
                    <td class="p-2 border-b border-[#FFD699]">+91 9876543210</td>
                    <td class="p-2 border-b border-[#FFD699]">Not Interested</td>
                    <td class="p-2 border-b border-[#FFD699]">2025-08-01</td>
                    <td class="p-2 border-b border-[#FFD699]">
                        <span class="inline-block px-2 py-1 text-xs bg-red-100 text-red-800 rounded">Still Lost</span>
                    </td>
                    <td class="p-2 border-b border-[#FFD699] space-x-2 flex flex-wrap">
                        <button onclick="openModal('Rajesh Kumar', '+91 9876543210')" class="px-2 py-1 bg-green-500 text-white rounded">Re-Engage</button>
                        <button onclick="openViewModal('Rajesh Kumar', '+91 9876543210', 'Not Interested', '2025-08-01', 'Still Lost')" class="px-2 py-1 bg-blue-500 text-white rounded">View</button>
                    </td>
                </tr>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFD699]">Priya Desai</td>
                    <td class="p-2 border-b border-[#FFD699]">+91 9123456780</td>
                    <td class="p-2 border-b border-[#FFD699]">Budget Issue</td>
                    <td class="p-2 border-b border-[#FFD699]">2025-07-30</td>
                    <td class="p-2 border-b border-[#FFD699]">
                        <span class="inline-block px-2 py-1 text-xs bg-green-100 text-green-800 rounded">Re-engaged</span>
                    </td>
                    <td class="p-2 border-b border-[#FFD699] space-x-2 flex flex-wrap">
                        <button onclick="openModal('Priya Desai', '+91 9123456780')" class="px-2 py-1 bg-green-500 text-white rounded">Re-Engage</button>
                        <button onclick="openViewModal('Priya Desai', '+91 9123456780', 'Budget Issue', '2025-07-30', 'Re-engaged')" class="px-2 py-1 bg-blue-500 text-white rounded">View</button>
                    </td>
                </tr>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFD699]">Ankit Mehra</td>
                    <td class="p-2 border-b border-[#FFD699]">+91 9988776655</td>
                    <td class="p-2 border-b border-[#FFD699]">No Response</td>
                    <td class="p-2 border-b border-[#FFD699]">2025-07-28</td>
                    <td class="p-2 border-b border-[#FFD699]">
                        <span class="inline-block px-2 py-1 text-xs bg-red-100 text-red-800 rounded">Still Lost</span>
                    </td>
                    <td class="p-2 border-b border-[#FFD699] space-x-2 flex flex-wrap">
                        <button onclick="openModal('Ankit Mehra', '+91 9988776655')" class="px-2 py-1 bg-green-500 text-white rounded">Re-Engage</button>
                        <button onclick="openViewModal('Ankit Mehra', '+91 9988776655', 'No Response', '2025-07-28', 'Still Lost')" class="px-2 py-1 bg-blue-500 text-white rounded">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="viewModal" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center hidden">
  <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 relative">
    <h2 class="text-lg font-bold mb-4">Lead Details</h2>
    <div id="viewContent" class="space-y-2 text-sm"></div>
    <div class="flex justify-end mt-4">
      <button onclick="closeViewModal()" class="px-3 py-1 bg-gray-500 text-white rounded">Close</button>
    </div>
  </div>
</div>

<div id="reEngageModal" class="fixed inset-0 hidden items-center justify-center z-50 pointer-events-none bg-black/30">
  <div class="bg-white border border-yellow-600 rounded-2xl shadow-2xl shadow-black/60 p-6 w-full max-w-md pointer-events-auto">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-lg font-semibold text-gray-700">Re-Engage Lead</h3>
      <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">&times;</button>
    </div>

    <div class="space-y-3">
      <button onclick="scheduleFollowUp()" class="w-full flex items-center gap-3 bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-lg">
        Schedule Follow-Up
      </button>

      <button onclick="sendWhatsApp()" class="w-full flex items-center gap-3 bg-green-100 hover:bg-green-200 text-green-700 px-4 py-2 rounded-lg">
        Send WhatsApp Message
      </button>

      <button onclick="assignStaff()" class="w-full flex items-center gap-3 bg-purple-100 hover:bg-purple-200 text-purple-700 px-4 py-2 rounded-lg">
        Assign to Staff
      </button>

      <button onclick="moveToFinalStage()" class="w-full flex items-center gap-3 bg-orange-100 hover:bg-orange-200 text-orange-700 px-4 py-2 rounded-lg">
        Move to Final Stage
      </button>
    </div>

    <div class="mt-6 text-right">
      <button onclick="closeModal()" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700">
        Close
      </button>
    </div>
  </div>
</div>
<script>
function openViewModal(name, phone, reason, date, status) {
  document.getElementById("viewContent").innerHTML = `
    <p><strong>Name:</strong> ${name}</p>
    <p><strong>Phone:</strong> ${phone}</p>
    <p><strong>Reason:</strong> ${reason}</p>
    <p><strong>Date:</strong> ${date}</p>
    <p><strong>Status:</strong> ${status}</p>
  `;
  document.getElementById("viewModal").classList.remove("hidden");
}

function closeViewModal() {
  document.getElementById("viewModal").classList.add("hidden");
}
</script>

<script>
  let currentLeadName = '';
  let currentLeadPhone = '';

  function openModal(name, phone) {
    currentLeadName = name;
    currentLeadPhone = phone;
    document.getElementById("reEngageModal").classList.remove("hidden");
    document.getElementById("reEngageModal").classList.add("flex");
  }

  function closeModal() {
    document.getElementById("reEngageModal").classList.add("hidden");
    document.getElementById("reEngageModal").classList.remove("flex");
    currentLeadName = '';
    currentLeadPhone = '';
  }

  function scheduleFollowUp() {
    alert(`Open follow-up form for ${currentLeadName}`);
  }

  function sendWhatsApp() {
    const message = encodeURIComponent(`Hello ${currentLeadName}, following up regarding your inquiry.`);
    window.open(`https://wa.me/${currentLeadPhone}?text=${message}`, "_blank");
  }

  function assignStaff() {
    const staffName = prompt(`Assign ${currentLeadName} to staff:`);
    if(staffName) {
      alert(`${currentLeadName} assigned to ${staffName}`);
    }
  }

  function moveToFinalStage() {
    if(confirm(`Move ${currentLeadName} to final stage?`)) {
      alert(`${currentLeadName} moved to final stage!`);
      closeModal();
    }
  }
</script>

<?php include("layouts/footer.php") ?>
