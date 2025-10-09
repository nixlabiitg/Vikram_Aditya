<?php include("layouts/header.php"); ?>
<div class="p-6">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
    <h1 class="text-2xl font-bold text-[#7A3E00]">Tasks</h1>
    <a href="assign_task">
        <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] w-full md:w-auto">Assign Task</button>
    </a>
  </div>

  <div class="bg-white shadow-md rounded-2xl p-4 mb-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <input type="text" placeholder="Search by Task/Lead" class="border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
      <select class="border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
        <option value="">Status</option>
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
        <option value="overdue">Overdue</option>
        <option value="missed">Missed</option>
      </select>
      <select class="border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
        <option value="">Assigned To</option>
        <option value="telecaller a">Telecaller A</option>
        <option value="telecaller b">Telecaller B</option>
        <option value="telecaller c">Telecaller C</option>
        <option value="staff a">Staff A</option>
      </select>
    </div>
  </div>
  <!-- Success Alert -->
  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
        <span class="font-bold">Success!</span>
        <span>Task assigned successfully</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <div class="overflow-x-auto bg-white shadow-md rounded-2xl overflow-hidden">
    <table class="w-full text-sm text-left text-gray-600">
      <thead class="bg-gradient-to-r from-orange-100 to-orange-50 text-gray-700 uppercase text-xs">
        <tr>
          <th class="px-6 py-3">Task ID</th>
          <th class="px-6 py-3">Lead/Client</th>
          <th class="px-6 py-3">Task Type</th>
          <th class="px-6 py-3">Assigned To</th>
          <th class="px-6 py-3">Due Date</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3 text-center">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <tr class="hover:bg-orange-50 transition">
          <td class="px-6 py-4 font-medium text-gray-800">T-001</td>
          <td class="px-6 py-4">Lead 101 - Rajesh</td>
          <td class="px-6 py-4">Follow-Up Call</td>
          <td class="px-6 py-4">Telecaller B</td>
          <td class="px-6 py-4">2025-08-25</td>
          <td class="px-6 py-4">
            <span class="status px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700">Pending</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="view-btn text-blue-600 hover:text-blue-800 font-medium">View</button>
            <button class="done-btn text-green-600 hover:text-green-800 font-medium">Done</button>
            <button class="delete-btn text-red-600 hover:text-red-800 font-medium">Delete</button>
          </td>
        </tr>

        <tr class="hover:bg-orange-50 transition">
          <td class="px-6 py-4 font-medium text-gray-800">T-002</td>
          <td class="px-6 py-4">Client 205 - Priya</td>
          <td class="px-6 py-4">Email Follow-Up</td>
          <td class="px-6 py-4">Telecaller A</td>
          <td class="px-6 py-4">2025-08-26</td>
          <td class="px-6 py-4">
            <span class="status px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700">Pending</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="view-btn text-blue-600 hover:text-blue-800 font-medium">View</button>
            <button class="done-btn text-green-600 hover:text-green-800 font-medium">Done</button>
            <button class="delete-btn text-red-600 hover:text-red-800 font-medium">Delete</button>
          </td>
        </tr>

        <tr class="hover:bg-orange-50 transition">
          <td class="px-6 py-4 font-medium text-gray-800">T-003</td>
          <td class="px-6 py-4">Lead 303 - Amit</td>
          <td class="px-6 py-4">Call Reminder</td>
          <td class="px-6 py-4">Telecaller C</td>
          <td class="px-6 py-4">2025-08-27</td>
          <td class="px-6 py-4">
            <span class="status px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700">Pending</span>
          </td>
          <td class="px-6 py-4 text-center space-x-2">
            <button class="view-btn text-blue-600 hover:text-blue-800 font-medium">View</button>
            <button class="done-btn text-green-600 hover:text-green-800 font-medium">Done</button>
            <button class="delete-btn text-red-600 hover:text-red-800 font-medium">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>

    <div id="viewModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden items-center justify-center z-50">
      <div class="bg-white rounded-lg shadow-lg w-96 p-6 relative">
        <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 font-bold">&times;</button>
        <h2 class="text-xl font-semibold mb-4">Task Details</h2>
        <div id="modalContent" class="text-gray-700 space-y-2">
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  const tbody = document.querySelector('tbody');
  const modal = document.getElementById('viewModal');
  const modalContent = document.getElementById('modalContent');
  const closeModal = document.getElementById('closeModal');

  tbody.addEventListener('click', function(e) {
    const row = e.target.closest('tr');
    if (!row) return;

    if (e.target.classList.contains('done-btn')) {
      const statusEl = row.querySelector('.status');
      statusEl.textContent = 'Completed';
      statusEl.classList.remove('bg-yellow-100', 'text-yellow-700');
      statusEl.classList.add('bg-green-100', 'text-green-700');
    }

    if (e.target.classList.contains('delete-btn')) {
      const confirmed = confirm(`Are you sure you want to delete task ${row.children[0].textContent}?`);
      if (confirmed) row.remove();
    }

    if (e.target.classList.contains('view-btn')) {
      modalContent.innerHTML = `
        <p><strong>Task ID:</strong> ${row.children[0].textContent}</p>
        <p><strong>Lead/Client:</strong> ${row.children[1].textContent}</p>
        <p><strong>Task Type:</strong> ${row.children[2].textContent}</p>
        <p><strong>Assigned To:</strong> ${row.children[3].textContent}</p>
        <p><strong>Due Date:</strong> ${row.children[4].textContent}</p>
        <p><strong>Status:</strong> ${row.querySelector('.status').textContent}</p>
      `;
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    }
  });

  closeModal.addEventListener('click', () => {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  });
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }
  });
</script>
<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
<script>
const searchInput = document.querySelector('input[placeholder="Search by Task/Lead"]');
const statusSelect = document.querySelectorAll('select')[0];
const assignedSelect = document.querySelectorAll('select')[1];
const tableRows = document.querySelectorAll('tbody tr');

function filterTable() {
  const searchTerm = searchInput.value.trim().toLowerCase();
  const statusTerm = statusSelect.value.trim().toLowerCase();
  const assignedTerm = assignedSelect.value.trim().toLowerCase();

  tableRows.forEach(row => {
    const cells = row.querySelectorAll('td');
    const taskId = cells[0].textContent.trim().toLowerCase();
    const leadClient = cells[1].textContent.trim().toLowerCase();
    const taskType = cells[2].textContent.trim().toLowerCase();
    const assignedTo = cells[3].textContent.trim().toLowerCase();
    const status = cells[5].querySelector('.status').textContent.trim().toLowerCase();

    const matchesSearch = !searchTerm || taskId.includes(searchTerm) || leadClient.includes(searchTerm) || taskType.includes(searchTerm);

    const matchesStatus = !statusTerm || status.includes(statusTerm);

    const matchesAssigned = !assignedTerm || assignedTo.includes(assignedTerm);

    row.style.display = (matchesSearch && matchesStatus && matchesAssigned) ? '' : 'none';
  });
}

searchInput.addEventListener('input', filterTable);
statusSelect.addEventListener('change', filterTable);
assignedSelect.addEventListener('change', filterTable);
</script>

<?php include("layouts/footer.php"); ?>
