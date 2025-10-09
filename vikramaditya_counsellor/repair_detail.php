<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <!-- Ticket List -->
    <div id="repair-ticket-list" class="mb-10">
        <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
            <svg class="w-7 h-7 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5h6M9 9h6m-6 4h6m-6 4h6M5 5h.01M5 9h.01M5 13h.01M5 17h.01"/>
            </svg>
            All Repair Tickets
        </h1>

        <div class="overflow-hidden shadow-xl rounded-xl">
            <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
                <table class="min-w-[700px] md:min-w-full">
                    <thead class="bg-[#FFF4E6] text-[#7A3E00]">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold border-b border-[#FFD699]">Ticket ID</th>
                            <th class="px-6 py-3 text-left font-semibold border-b border-[#FFD699]">Client</th>
                            <th class="px-6 py-3 text-left font-semibold border-b border-[#FFD699]">Product</th>
                            <th class="px-6 py-3 text-left font-semibold border-b border-[#FFD699]">Received</th>
                            <th class="px-6 py-3 text-left font-semibold border-b border-[#FFD699]">Status</th>
                            <th class="px-6 py-3 text-center font-semibold border-b border-[#FFD699]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 bg-white">
                        <?php
                        $repairs = [
                            ["AUTO12345", "Rajiv Sharma", "Rudraksha Bracelet", "05 Aug 2025", "In Progress"],
                            ["RP25002", "Meena Verma", "Crystal Pendant", "03 Aug 2025", "Checked"],
                            ["RP25003", "Suresh Kumar", "Yantra", "01 Aug 2025", "Delivered"]
                        ];

                        foreach ($repairs as $repair) {
                            echo '<tr class="hover:bg-orange-50 transition">';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $repair[0] . '</td>';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $repair[1] . '</td>';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $repair[2] . '</td>';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $repair[3] . '</td>';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $repair[4] . '</td>';
                            echo '<td class="px-6 py-4 border-b border-[#FFD699] text-center">';
                            echo '<a href="repair_detail?id=' . $repair[0] . '" class="inline-flex items-center gap-1 text-blue-600 hover:underline font-medium">';
                            echo '<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">';
                            echo '<path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> View';
                            echo '</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Detail View -->
    <div id="ticket-detail" class="hidden bg-white p-6 rounded-xl shadow-xl border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6M7 17V9a4 4 0 014-4h2a4 4 0 014 4v8"/>
            </svg>
            Repair Ticket Details
        </h2>
        <p><strong>Ticket ID:</strong> <span id="detail-ticket"></span></p>
        <p><strong>Client Name:</strong> <span id="detail-client"></span></p>
        <p><strong>Product:</strong> <span id="detail-product"></span></p>
        <p><strong>Status:</strong> <span id="detail-status"></span></p>

        <h3 class="mt-6 text-xl font-semibold text-[#7A3E00]">Stages</h3>
        <div id="detail-stages" class="grid grid-cols-2 md:grid-cols-6 gap-4 mt-3"></div>

        <h3 class="mt-6 text-xl font-semibold text-[#7A3E00]">Notes</h3>
        <ul id="detail-notes" class="list-disc pl-5 text-gray-700"></ul>

        <div class="mt-4">
            <a href="repair_detail" class="inline-flex items-center gap-2 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                Close
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const ticketId = params.get("id");

    if (!ticketId) return;

    let ticketData = JSON.parse(localStorage.getItem("ticketData")) || {};
    let ticket = ticketData[ticketId];

    if (!ticket) {
        alert("No data found for this ticket.");
        return;
    }

    // Show detail box
    document.getElementById("ticket-detail").classList.remove("hidden");

    // Fill details
    document.getElementById("detail-ticket").textContent = ticketId;
    document.getElementById("detail-client").textContent = ticket.client_name;
    document.getElementById("detail-product").textContent = ticket.product;

    // Status = last completed/in-progress stage
    let currentStage = ticket.stages.find(s => s.status === "In Progress") 
                    || ticket.stages.slice().reverse().find(s => s.status === "Completed")
                    || { name: "Pending" };
    document.getElementById("detail-status").textContent = currentStage.name;

    // Render stages
    const stageContainer = document.getElementById("detail-stages");
    stageContainer.innerHTML = "";
    ticket.stages.forEach(stage => {
        stageContainer.innerHTML += `
            <div class="border rounded-lg p-3 text-center shadow">
                <div class="font-semibold text-[#7A3E00]">${stage.name}</div>
                <div class="w-3 h-3 mx-auto mt-2 rounded-full ${stage.color}"></div>
                <p class="text-xs text-gray-500 mt-1">${stage.note}</p>
            </div>`;
    });

    // Render notes
    const noteList = document.getElementById("detail-notes");
    noteList.innerHTML = "";
    (ticket.notes || []).forEach(note => {
        noteList.innerHTML += `<li>${note.text} <span class="text-gray-400 text-xs">(${note.date})</span></li>`;
    });
});
</script>

<?php include('layouts/footer.php'); ?>
