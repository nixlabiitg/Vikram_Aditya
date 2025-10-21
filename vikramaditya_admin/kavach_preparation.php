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
      <thead class="bg-orange-100 text-left text-orange-800">
        <tr>
          <th class="px-4 py-2">Client ID</th>
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Phone</th>
          <th class="px-4 py-2">Kavach</th>
          <th class="px-4 py-2">Date</th>
          <th class="px-4 py-2">Status</th>
          <th class="px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody id="preparationTableBody">
        <!-- Dynamic rows go here -->
      </tbody>
    </table>
  </div>
</section>

<script>
  const clientDatabase = {
    "C101": { name: "Rahul Sharma", phone: "9876543210", address: "Delhi" },
    "C102": { name: "Priya Das", phone: "9823412356", address: "Mumbai" },
    "C103": { name: "Amit Verma", phone: "9898123456", address: "Bangalore" },
    "C104": { name: "Suman Roy", phone: "9831022211", address: "Kolkata" }
  };

  const preparationQueue = [
    { id: 'PR1001', client: 'C101', kavachName: 'Hanuman Kavach', subDate: '2025-10-12', status: 'Preparing' },
    { id: 'PR1002', client: 'C102', kavachName: 'Narayan Kavach', subDate: '2025-10-13', status: 'Building' },
    { id: 'PR1003', client: 'C101', kavachName: 'Guru Kavach', subDate: '2025-10-14', status: 'Preparing' },
    { id: 'PR1004', client: 'C104', kavachName: 'Graha Kavach', subDate: '2025-10-15', status: 'Done' }
  ];

  function togglePreparationDetails(id, row) {
    let detailRow = document.getElementById('prepDetails-' + id);

    if (detailRow) {
      detailRow.classList.toggle('hidden');
    } else {
      const r = preparationQueue.find(x => x.id === id);
      const client = clientDatabase[r.client] || { name: 'Unknown', phone: '—', address: '—' };

      const tr = document.createElement('tr');
      tr.id = 'prepDetails-' + id;
      tr.className = 'bg-orange-50';
      tr.innerHTML = `
        <td colspan="7" class="px-4 py-3 border-b border-orange-300">
          <div class="space-y-2 text-sm text-gray-700">
            <p><strong>Client ID:</strong> ${r.client}</p>
            <p><strong>Name:</strong> ${client.name}</p>
            <p><strong>Phone:</strong> ${client.phone}</p>
            <p><strong>Address:</strong> ${client.address}</p>
            <p><strong>Kavach Name:</strong> ${r.kavachName}</p>
            <p><strong>Submitted On:</strong> ${r.subDate}</p>
            <p><strong>Status:</strong> ${r.status}</p>
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

  function renderPreparationList() {
    const tbody = document.getElementById('preparationTableBody');
    tbody.innerHTML = '';

    if (!preparationQueue.length) {
      const tr = document.createElement('tr');
      tr.innerHTML = `<td colspan="7" class="text-center text-gray-500 py-4">No kavach in preparation</td>`;
      tbody.appendChild(tr);
      return;
    }

    preparationQueue.forEach(r => {
      const client = clientDatabase[r.client] || { name: 'Unknown', phone: '—' };
      const tr = document.createElement('tr');
      tr.className = 'hover:bg-orange-50';
      tr.innerHTML = `
        <td class="px-4 py-2 border-b border-orange-300 text-center">${r.client}</td>
        <td class="px-4 py-2 border-b border-orange-300">${client.name}</td>
        <td class="px-4 py-2 border-b border-orange-300">${client.phone}</td>
        <td class="px-4 py-2 border-b border-orange-300">${r.kavachName}</td>
        <td class="px-4 py-2 border-b border-orange-300 text-center">${r.subDate}</td>
        <td class="px-4 py-2 border-b border-orange-300 text-center">${r.status}</td>
        <td class="px-4 py-2 border-b border-orange-300 text-center">
          <button onclick="togglePreparationDetails('${r.id}', this.parentNode.parentNode)" class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">View</button>
        </td>
      `;
      tbody.appendChild(tr);
    });
  }

  renderPreparationList();
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Client ID..."]');
  const tableRows = document.querySelectorAll('tbody tr');

  function filterClients() {
    const searchValue = searchInput.value.toLowerCase().trim();

    tableRows.forEach(row => {
      const clientIdCell = row.querySelectorAll('td')[0]; // ✅ Client ID is in first column
      const clientId = clientIdCell ? clientIdCell.textContent.toLowerCase().trim() : '';

      // show or hide row
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
