<?php include("layouts/header.php") ?>
 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="main-content p-4 sm:p-6">
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
        <h1 class="text-2xl font-bold text-[#7A3E00]">All Leads</h1>
        <a href="add_lead" class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] text-center">+ Add Lead</a>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-6 border border-[#FFD699] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <input type="text" placeholder="Search Leads." class="border border-gray-300 rounded px-4 py-2 w-full sm:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
        <select class="border border-gray-300 rounded px-4 py-2 w-full sm:w-auto focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
            <option value="">Status: All</option>
            <option value="new">New</option>
            <option value="in progress">In Progress</option>
            <option value="converted">Converted</option>
            <option value="lost">Lost</option>
        </select>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699] mb-6 overflow-x-auto">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">Lead List</h2>
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] md:min-w-full sm:min-w-full">
                <thead>
                    <tr class="bg-[#FFEBD6]">
                        <th class="p-2 border-b border-[#FFD699]">Lead Name</th>
                        <th class="p-2 border-b border-[#FFD699]">Phone</th>
                        <th class="p-2 border-b border-[#FFD699]">Source</th>
                        <th class="p-2 border-b border-[#FFD699]">Assigned To</th>
                        <th class="p-2 border-b border-[#FFD699]">Status</th>
                        <th class="p-2 border-b border-[#FFD699]">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-700 text-center">
                    <?php
                    $leads = [
                        ["Rajesh Kumar", "+91 9876543210", "Website", "Rina Sharma", "New"],
                        ["Priya Desai", "+91 9123456780", "Facebook", "Sushil Verma", "In Progress"],
                        ["Ankit Mehra", "+91 9988776655", "Referral", "Priya Desai", "Converted"]
                    ];

                    foreach ($leads as $index => $row) {
                        echo '<tr class="hover:bg-[#FFF4E0] transition">';
                        echo '<td class="px-3 py-2 border-b border-[#FFD699] font-medium">' . $row[0] . '</td>';
                        echo '<td class="px-3 py-2 border-b border-[#FFD699]">' . $row[1] . '</td>';
                        echo '<td class="px-3 py-2 border-b border-[#FFD699]">' . $row[2] . '</td>';
                        echo '<td class="px-3 py-2 border-b border-[#FFD699]">' . $row[3] . '</td>';

                        $statusColor = $row[4] === "New" ? "bg-green-100 text-green-800" :
                                    ($row[4] === "In Progress" ? "bg-yellow-100 text-yellow-800" : "bg-blue-100 text-blue-800");

                        echo '<td class="px-3 py-2 border-b border-[#FFD699]" id="lead-status-cell-' . $index . '">
                                <span class="inline-block px-2 py-1 text-xs rounded ' . $statusColor . '" id="lead-status-badge-' . $index . '">' . $row[4] . '</span>
                            </td>';

                        echo '<td class="px-3 py-2 border-b border-[#FFD699] text-center space-x-2">';
                        echo '<a href="#" onclick="showLeadDetail(\'' . $row[0] . '\', \'' . $row[1] . '\', \'' . $row[2] . '\', \'' . $row[3] . '\', \'' . $row[4] . '\',' . $index . ')" 
                                    class="inline-flex items-center px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm">View</a>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="lead-detail" class="hidden mt-4 bg-white p-6 rounded-xl shadow-md border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            Lead Details
        </h2>
        <p><strong>Lead Name:</strong> <span id="lead-name"></span></p>
        <p><strong>Phone:</strong> <span id="lead-phone"></span></p>
        <p><strong>Source:</strong> <span id="lead-source"></span></p>
        <p><strong>Assigned To:</strong> <span id="lead-assigned"></span></p>
        <div class="mt-4 border-t border-[#FFD699] pt-4">
            <p class="font-semibold mb-2">Lead Status:</p>
            <div class="flex space-x-6">
                <label>
                    <input type="radio" name="lead_status" value="New" onchange="updateLeadStatus(this.value)"> New
                </label>
                <label>
                    <input type="radio" name="lead_status" value="In Progress" onchange="updateLeadStatus(this.value)"> In Progress
                </label>
                <label>
                    <input type="radio" name="lead_status" value="Converted" onchange="updateLeadStatus(this.value)"> Converted
                </label>
            </div>
            <p class="mt-2 text-sm text-gray-600">Current: <span id="lead-status" class="font-semibold text-blue-600"></span></p>
        </div>
        <div class="mt-3">
            <button onclick="openConfirm()" class="px-2 py-1 bg-green-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
                width="24" height="24">
            <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3M4 11h16M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15h4m0 0l-2-2m2 2l-2 2"/>
            </svg>
            </button>
            <button class="px-2 py-1 bg-indigo-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M2 5a3 3 0 013-3h14a3 3 0 013 3v9a3 3 0 01-3 3H7l-5 4V5z" />
            </svg>
            </button>
        </div>

        <div class="mt-4">
            <button onclick="hideLeadDetail()" class="inline-flex items-center gap-2 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Close
            </button>
        </div>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699] mt-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 gap-4">
            <h2 class="text-lg font-semibold text-[#7A3E00]">Lead Source Effectiveness</h2>
            <select class="border border-gray-300 rounded px-4 py-2 w-full sm:w-auto">
                <option>This Week</option>
                <option>This Month</option>
                <option>Custom Date Range</option>
            </select>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-md h-80 sm:h-96">
                <canvas id="leadSourceChart"></canvas>
            </div>
        </div>
    </div>
</div>

<div id="confirmPopup" class="hidden fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg p-6 w-80 shadow-lg">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Do you want to reschedule?</h2>
    <div class="flex justify-end space-x-3">
      <button onclick="closeConfirm()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
      <button onclick="openForm()" class="px-4 py-2 bg-[#7A3E00] text-white rounded">Okay</button>
    </div>
  </div>
</div>

<div id="formPopup" class="hidden fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg p-6 w-96 shadow-lg">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Reschedule Appointment</h2>
    <form class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Date</label>
        <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Time</label>
        <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Place</label>
        <input type="text" placeholder="Enter place" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="flex justify-end space-x-3">
        <button type="button" onclick="closeForm()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
        <button type="submit" class="px-4 py-2 bg-[#7A3E00] text-white rounded">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
  function openConfirm() {
    document.getElementById('confirmPopup').classList.remove('hidden');
  }
  function closeConfirm() {
    document.getElementById('confirmPopup').classList.add('hidden');
  }
  function openForm() {
    closeConfirm();
    document.getElementById('formPopup').classList.remove('hidden');
  }
  function closeForm() {
    document.getElementById('formPopup').classList.add('hidden');
  }
</script>

<script>
const ctx = document.getElementById('leadSourceChart').getContext('2d');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Website', 'Facebook', 'WhatsApp', 'Referral'],
        datasets: [{
            data: [40, 25, 20, 15],
            backgroundColor: ['#FBBF24', '#60A5FA', '#34D399', '#F87171'],
            borderColor: '#FFF',
            borderWidth: 2
        }]
    },
    options: {
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: { color: '#7A3E00' }
            }
        }
    }
});
</script>
<script>
let currentLeadIndex = null;

function showLeadDetail(name, phone, source, assigned, status, index) {
    currentLeadIndex = index; 

    document.getElementById("lead-name").textContent = name;
    document.getElementById("lead-phone").textContent = phone;
    document.getElementById("lead-source").textContent = source;
    document.getElementById("lead-assigned").textContent = assigned;
    document.getElementById("lead-status").textContent = status;

    let radios = document.getElementsByName("lead_status");
    radios.forEach(r => {
        r.checked = (r.value === status);
    });

    document.getElementById("lead-detail").classList.remove("hidden");
}

function hideLeadDetail() {
    document.getElementById("lead-detail").classList.add("hidden");
}

function hideLeadDetail() {
    document.getElementById("lead-detail").classList.add("hidden");
}

function hideLeadDetail() {
    document.getElementById('lead-detail').classList.add('hidden');
}

function updateLeadStatus(value) {
    document.getElementById("lead-status").textContent = value;

    if (currentLeadIndex !== null) {
        let badge = document.getElementById("lead-status-badge-" + currentLeadIndex);

        badge.textContent = value;

        badge.className = "inline-block px-2 py-1 text-xs rounded " + 
            (value === "New" ? "bg-green-100 text-green-800" :
            value === "In Progress" ? "bg-yellow-100 text-yellow-800" :
            "bg-blue-100 text-blue-800");
    }
}
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Leads."]');
  const allSelects = Array.from(document.querySelectorAll('select'));
  const statusSelect = allSelects.find(s =>
    s.options[0] && s.options[0].text.toLowerCase().includes('status')
  ) || allSelects[0];

  function filterLeads() {
    const q = (searchInput?.value || '').toLowerCase().trim();
    const status = (statusSelect?.value || '').toLowerCase().trim();

    const rows = document.querySelectorAll('table tbody tr');
    rows.forEach(row => {
      const cells = row.querySelectorAll('td');
      if (!cells || cells.length === 0) return;

      const leadName = (cells[0].textContent || '').toLowerCase().trim(); 
      const statusText = (cells[4].textContent || '').toLowerCase().trim(); 

      const matchesSearch = q === '' || leadName.includes(q);
      const matchesStatus = status === '' || statusText.includes(status);

      row.style.display = (matchesSearch && matchesStatus) ? '' : 'none';
    });
  }

  if (searchInput) searchInput.addEventListener('input', filterLeads);
  if (statusSelect) statusSelect.addEventListener('change', filterLeads);
  filterLeads();
});
</script>

<?php include("layouts/footer.php") ?>