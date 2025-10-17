<?php include("layouts/header.php"); ?>

<div class="main-content p-6">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
        <h1 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="w-12 h-12 text-orange-600" aria-hidden="true">
            <path fill="currentColor" d="M5 15h14l-1.2 4.2a2 2 0 0 1-1.92 1.4H8.12a2 2 0 0 1-1.92-1.4L5 15z"/>
            <rect x="4" y="13" width="16" height="2" rx="0.5" fill="currentColor"/>
            <path fill="currentColor" d="M12 6c2.7 2.3 3.8 4.6 3.2 6.7-.5 1.8-2 2.9-3.9 2.9s-3.4-1.1-3.9-2.9C6.8 10.6 9.1 8.7 12 6z"/>
            <path fill="white" fill-opacity=".8" d="M12 9.2c1.3 1.2 1.8 2.3 1.5 3.3-.3 1-1.1 1.6-2.1 1.6s-1.8-.6-2.1-1.6c-.3-1 .2-2.1 1.5-3.3.2-.2.5-.2.7 0z"/>
            </svg>
            All Client Puja Overview
        </h1>
        <input type="text" placeholder="Search Client ID..." class="bg-white border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
    </div>

     <!-- Clients Table View -->
    <div class="bg-[#FFF9F0] shadow rounded-xl p-4 border border-[#FFD699] ">
        
        
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <div x-data="pujaTable()" class="p-4">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full text-center">
            <thead>
            <tr class="border-b border-[#FFD699]">
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Client ID</th>
                <th class="px-4 py-2">Client Phone</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Detail</th>
                <th class="px-4 py-2">Note/Remarks</th>
            </tr>
            </thead>
            <tbody class="bg-white">
            <template x-for="client in clients" :key="client.id">
                <tr class="border-b border-[#FFD699]">
                <td class="px-4 py-2" x-text="client.name"></td>
                <td class="px-4 py-2" x-text="client.clientId"></td>
                <td class="px-4 py-2" x-text="client.phone"></td>
                <td class="px-4 py-2">
                    <span
                    class="px-2 py-1 rounded-lg text-sm"
                    :class="{
                        'bg-red-200 text-red-700': getOverallStatus(client) === 'Waiting',
                        'bg-yellow-200 text-yellow-700': getOverallStatus(client) === 'Suggested',
                        'bg-blue-200 text-blue-700': getOverallStatus(client) === 'Interested',
                        'bg-green-200 text-green-700': getOverallStatus(client) === 'Completed'
                    }"
                    x-text="getOverallStatus(client)"
                    ></span>
                </td>
                <td class="px-4 py-2">
                    <button
                    @click="openDetail(client)"
                    class="bg-blue-700 text-white px-3 py-1 rounded hover:bg-blue-500"
                    >
                    View
                    </button>
                </td>
                <td class="px-4 py-2">
                    <textarea
                    x-model="client.noteInput"
                    class="border border-gray-400 rounded w-full p-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400"
                    placeholder="Note"
                    ></textarea>
                    <div>
                    <button
                        @click="updateNote(client)"
                        class="mt-2 bg-orange-500 text-white px-3 py-1 rounded text-sm hover:bg-[#e89a2f]"
                    >
                        Update
                    </button>
                    <button
                        @click="toggleNoteView(client)"
                        class="mt-2 bg-indigo-700 text-white px-3 py-1 rounded text-sm hover:bg-indigo-500"
                    >
                        View
                    </button>
                    </div>
                    <div
                    x-show="client.showNote"
                    class="mt-4 p-2 border rounded bg-gray-50 text-sm text-gray-700"
                    x-text="client.note"
                    ></div>
                </td>
                </tr>
            </template>
            </tbody>
        </table>

        <!-- Detail Modal -->
        <div
            x-show="showModal"
            @click.away="showModal = false"
            class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
        >
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 relative overflow-y-auto max-h-[90vh]">
            <button
                @click="showModal = false"
                class="absolute top-2 right-2 text-gray-600 hover:text-black"
            >
                ✕
            </button>
            <h2 class="text-xl font-semibold text-[#7A3E00] mb-4">Client Puja Details</h2>
            <div class="space-y-1 text-sm mb-4">
                <p><strong>Client:</strong> <span x-text="selectedClient.name"></span></p>
                <p><strong>Client ID:</strong> <span x-text="selectedClient.clientId"></span></p>
                <p><strong>Phone:</strong> <span x-text="selectedClient.phone"></span></p>
            </div>

            <!-- Puja List Table -->
            <div>
                <table class="w-full text-sm border border-gray-300 rounded-lg">
                <thead class="bg-[#FFF3E0]">
                    <tr>
                    <th class="px-3 py-2 text-left">Puja Name</th>
                    <th class="px-3 py-2 text-left">Status</th>
                    <th class="px-3 py-2 text-left">Date</th>
                    <th class="px-3 py-2 text-left">Time</th>
                    <th class="px-3 py-2 text-left">Price</th>
                    <th class="px-3 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="puja in selectedClient.pujas" :key="puja.pujaName">
                    <tr class="border-t border-gray-200">
                        <td class="px-3 py-2" x-text="puja.pujaName"></td>
                        <td class="px-3 py-2">
                        <span
                            class="px-2 py-1 rounded-lg text-xs"
                            :class="{
                            'bg-red-200 text-red-700': puja.status === 'Waiting',
                            'bg-yellow-200 text-yellow-700': puja.status === 'Suggested',
                            'bg-blue-200 text-blue-700': puja.status === 'Interested',
                            'bg-green-200 text-green-700': puja.status === 'Completed'
                            }"
                            x-text="puja.status"
                        ></span>
                        </td>
                        <td class="px-3 py-2" x-text="puja.date"></td>
                        <td class="px-3 py-2" x-text="puja.time"></td>
                        <td class="px-3 py-2">₹<span x-text="puja.price"></span></td>
                        <td class="px-3 py-2 text-center">
                        <button
                            x-show="puja.status === 'Waiting' || puja.status === 'Suggested' || puja.status === 'Interested'"
                            class="bg-green-600 text-white px-3 py-1 rounded text-xs hover:bg-green-700"
                        >
                            Book Now
                        </button>
                        </td>
                    </tr>
                    </template>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>

        <script>
        function pujaTable() {
        return {
            showModal: false,
            selectedClient: {},
            clients: [
            {
                id: 1,
                name: "Ramesh",
                clientId: "VGJUN202515",
                phone: "9864102986",
                pujas: [
                {
                    pujaName: "Durga Puja",
                    status: "Waiting",
                    date: "22 Oct 2025",
                    time: "10:30 AM",
                    price: "1500",
                },
                {
                    pujaName: "Laxmi Puja",
                    status: "Suggested",
                    date: "28 Oct 2025",
                    time: "5:00 PM",
                    price: "1800",
                },
                {
                    pujaName: "Laxmi Puja",
                    status: "Interested",
                    date: "29 Oct 2025",
                    time: "5:00 PM",
                    price: "2300",
                },
                ],
                note: "",
                noteInput: "",
                showNote: false,
            },
            {
                id: 2,
                name: "Ankit",
                clientId: "VGJUN202516",
                phone: "9870871616",
                pujas: [
                {
                    pujaName: "Kaal Sarp Dosh Nivaran",
                    status: "Suggested",
                    date: "25 Oct 2025",
                    time: "2:00 PM",
                    price: "2100",
                },
                {
                    pujaName: "Rahu Shanti Puja",
                    status: "Completed",
                    date: "15 Oct 2025",
                    time: "11:00 AM",
                    price: "2500",
                },
                ],
                note: "",
                noteInput: "",
                showNote: false,
            },
            {
                id: 3,
                name: "Seema",
                clientId: "VGJUN202518",
                phone: "9876565665",
                pujas: [
                {
                    pujaName: "Maha Rudrabhishek",
                    status: "Completed",
                    date: "12 Oct 2025",
                    time: "11:00 AM",
                    price: "2500",
                },
                ],
                note: "",
                noteInput: "",
                showNote: false,
            },
            {
                id: 4,
                name: "Ankit",
                clientId: "VGJUN202518",
                phone: "9870871616",
                pujas: [
                {
                    pujaName: "Laxmi Puja",
                    status: "Interested",
                    date: "29 Oct 2025",
                    time: "5:00 PM",
                    price: "2300",
                },
                ],
                note: "",
                noteInput: "",
                showNote: false,
            },
            ],
            openDetail(client) {
            this.selectedClient = client;
            this.showModal = true;
            },
            updateNote(client) {
            if (client.noteInput.trim() !== "") {
                client.note = client.noteInput.trim();
                client.noteInput = "";
                alert("Note updated successfully!");
            }
            },
            toggleNoteView(client) {
            client.showNote = !client.showNote;
            },
            getOverallStatus(client) {
            if (client.pujas.some((p) => p.status === "Waiting")) return "Waiting";
            if (client.pujas.some((p) => p.status === "Suggested")) return "Suggested";
            if (client.pujas.some((p) => p.status === "Interested")) return "Interested";
            return "Completed";
            },
        };
        }
        </script>

  </div>
</div>

<script>
function updateNote() {
  const note = document.getElementById("noteInput").value.trim();
  const display = document.getElementById("noteDisplay");

  if (note === "") {
    alert("Please enter a note before updating.");
    return;
  }

  display.textContent = "Updated Note: " + note;
  display.classList.remove("hidden");

  document.getElementById("noteInput").value = "";
}
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Find the search input
  const searchInput = document.querySelector('input[placeholder="Search Client ID..."]');

  // Find all rows in the tbody
  const tableRows = document.querySelectorAll('tbody tr');

  if (!searchInput || tableRows.length === 0) {
    console.error('Search input or table rows not found.');
    return;
  }

  function filterClients() {
    const searchValue = searchInput.value.toLowerCase().trim();

    tableRows.forEach(row => {
      const cells = row.querySelectorAll('td');
      const clientIdCell = cells[1]; 
      const clientId = clientIdCell ? clientIdCell.textContent.toLowerCase().trim() : '';

      if (clientId.includes(searchValue) || searchValue === '') {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  }

  searchInput.addEventListener('input', filterClients);
});
</script>

<?php include("layouts/footer.php"); ?>