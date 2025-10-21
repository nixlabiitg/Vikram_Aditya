<?php include("layouts/header.php"); ?>

<div class="max-w-6xl mx-auto p-6 mt-6">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
    <h1 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2 mb-6">
      Kavach Submission
    </h1>
    <input type="text" placeholder="Search Client ID..." class="bg-white border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
  </div>
  <!-- Success Alert -->
  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Kavach Submitted successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <div class="overflow-x-auto bg-white rounded-xl p-6 mt-6">
    <table class="w-full border-b border-[#FFD699] rounded-lg overflow-hidden">
      <thead class="bg-orange-100 text-left text-orange-800 border-b border-orange-300">
        <tr>
          <th class="px-4 py-2">Client ID</th>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Phone</th>
          <th class="px-4 py-2">Kavach</th>
          <th class="px-4 py-2">Submission Date</th>
          <th class="px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody id="submissionTableBody">
        <!-- Dynamic rows go here -->
      </tbody>
    </table>
  </div>
</section>
<script>
  // Dummy client database
  const clientDatabase = {
    "C101": { name: "Rahul Sharma", phone: "9876543210", address: "123, MG Road, Delhi" },
    "C102": { name: "Priya Das", phone: "9823412356", address: "45, Park Street, Kolkata" },
    "C103": { name: "Amit Verma", phone: "9898123456", address: "78, MG Marg, Jaipur" },
    "C104": { name: "Suman Roy", phone: "9831022211", address: "12, Brigade Road, Bangalore" }
  };

  // Dummy submissions
  const submissions = [
    { id: 'SUB1001', client: 'C101', kavachName: 'Hanuman Kavach', reason: 'Protection', subDate: '2025-10-12' },
    { id: 'SUB1002', client: 'C102', kavachName: 'Narayan Kavach', reason: 'Blessing', subDate: '2025-10-13' },
    { id: 'SUB1003', client: 'C103', kavachName: 'Guru Kavach', reason: 'Healing', subDate: '2025-10-14' },
    { id: 'SUB1004', client: 'C104', kavachName: 'Graha Kavach', reason: 'Fortune', subDate: '2025-10-15' },
    { id: 'SUB1005', client: 'C101', kavachName: 'Shiva Kavach', reason: 'Peace', subDate: '2025-10-16' }
  ];

  function toggleDetails(id, row) {
    let detailRow = document.getElementById('details-' + id);

    if (detailRow) {
      // Toggle visibility
      detailRow.classList.toggle('hidden');
    } else {
      // Create a new detail row
      const sub = submissions.find(x => x.id === id);
      const client = clientDatabase[sub.client] || { name: 'Unknown', phone: '—', address: '—' };

      const tr = document.createElement('tr');
      tr.id = 'details-' + id;
      tr.className = 'bg-orange-50';
      tr.innerHTML = `
        <td colspan="6" class="px-4 py-3 border-b border-orange-300">
          <div class="space-y-1 text-sm text-gray-700">
            <p><strong>Client ID:</strong> ${sub.client}</p>
            <p><strong>Name:</strong> ${client.name}</p>
            <p><strong>Phone:</strong> ${client.phone}</p>
            <p><strong>Address:</strong> ${client.address}</p>
            <p><strong>Kavach Name:</strong> ${sub.kavachName}</p>
            <p><strong>Reason for Submission:</strong> ${sub.reason}</p>
            <p><strong>Submitted On:</strong> ${sub.subDate}</p>
            <div class="mt-2 flex gap-2">
                <a href="tel:${client.phone}" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">Call</a>
                <a href="https://wa.me/${client.phone}" target="_blank" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Message</a>
            </div>
          </div>
        </td>
      `;
      row.parentNode.insertBefore(tr, row.nextSibling);
    }
  }

  function renderSubmissionList() {
    const tbody = document.getElementById('submissionTableBody');
    tbody.innerHTML = '';

    if (!submissions.length) {
      const tr = document.createElement('tr');
      tr.innerHTML = `<td colspan="6" class="text-center text-gray-500 py-4">No submissions yet</td>`;
      tbody.appendChild(tr);
      return;
    }

    submissions.forEach(sub => {
      const clientData = clientDatabase[sub.client] || { name: 'Unknown', phone: '—' };

      const tr = document.createElement('tr');
      tr.className = 'hover:bg-orange-50';

      tr.innerHTML = `
        <td class="px-4 py-2 border-b border-orange-300">${sub.client}</td>
        <td class="px-4 py-2 border-b border-orange-300">${clientData.name}</td>
        <td class="px-4 py-2 border-b border-orange-300">${clientData.phone}</td>
        <td class="px-4 py-2 border-b border-orange-300">${sub.kavachName}</td>
        <td class="px-4 py-2 border-b border-orange-300">${sub.subDate}</td>
        <td class="px-4 py-2 border-b border-orange-300">
          <button onclick="toggleDetails('${sub.id}', this.closest('tr'))" class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">View</button>
        </td>
      `;

      tbody.appendChild(tr);
    });
  }

  renderSubmissionList();
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Client ID..."]');
  const tableRows = document.querySelectorAll('tbody tr');

  function filterClients() {
    const searchValue = searchInput.value.toLowerCase().trim();

    tableRows.forEach(row => {
      const clientIdCell = row.querySelectorAll('td')[0];
      const clientId = clientIdCell ? clientIdCell.textContent.toLowerCase().trim() : '';

      row.style.display = clientId.includes(searchValue) || searchValue === '' ? '' : 'none';
    });
  }

  searchInput.addEventListener('input', filterClients);
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
<?php include("layouts/footer.php"); ?>
