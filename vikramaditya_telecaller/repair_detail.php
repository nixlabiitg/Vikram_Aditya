<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <!-- STEP 9: Repair Ticket Table Overview -->
    <div id="repair-ticket-list" class="mb-10">
        <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
            <svg class="w-7 h-7 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 9h6m-6 4h6m-6 4h6M5 5h.01M5 9h.01M5 13h.01M5 17h.01" /></svg>
            All Repair Tickets
        </h1>

        <div class="overflow-hidden shadow-xl rounded-xl">
            <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] md:min-w-full sm:min-w-full">
                <thead class="bg-[#FFF4E6] text-[#7A3E00]">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold border-b">Ticket ID</th>
                        <th class="px-6 py-3 text-left font-semibold border-b">Client</th>
                        <th class="px-6 py-3 text-left font-semibold border-b">Product</th>
                        <th class="px-6 py-3 text-left font-semibold border-b">Received</th>
                        <th class="px-6 py-3 text-left font-semibold border-b">Status</th>
                        <th class="px-6 py-3 text-center font-semibold border-b">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php
                    $repairs = [
                        ["RP25001", "Rajiv Sharma", "Rudraksha Bracelet", "05 Aug 2025", "In Progress"],
                        ["RP25002", "Meena Verma", "Crystal Pendant", "03 Aug 2025", "Checked"],
                        ["RP25003", "Suresh Kumar", "Yantra", "01 Aug 2025", "Delivered"]
                    ];

                    foreach ($repairs as $repair) {
                        echo '<tr class="hover:bg-orange-50 transition">';
                        echo '<td class="px-6 py-4 border-b">' . $repair[0] . '</td>';
                        echo '<td class="px-6 py-4 border-b">' . $repair[1] . '</td>';
                        echo '<td class="px-6 py-4 border-b">' . $repair[2] . '</td>';
                        echo '<td class="px-6 py-4 border-b">' . $repair[3] . '</td>';
                        echo '<td class="px-6 py-4 border-b">' . $repair[4] . '</td>';
                        echo '<td class="px-6 py-4 border-b text-center">';
                        echo '<button onclick="showDetail(\'' . $repair[0] . '\')" class="inline-flex items-center gap-1 text-blue-600 hover:underline font-medium">';
                        echo '<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> View';
                        echo '</button>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table></div>
        </div>
    </div>

    <!-- Detail View Section (hidden by default) -->
    <div id="ticket-detail" class="hidden bg-white p-6 rounded-xl shadow-xl border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6M7 17V9a4 4 0 014-4h2a4 4 0 014 4v8" /></svg>
            Repair Ticket Details
        </h2>
        <p><strong>Ticket ID:</strong> <span id="detail-ticket"></span></p>
        <p><strong>Client Name:</strong> Rajiv Sharma</p>
        <p><strong>Product:</strong> Rudraksha Bracelet</p>
        <p><strong>Date Received:</strong> 05 Aug 2025</p>
        <p><strong>Status:</strong> In Progress</p>
        <p><strong>Complaint:</strong> Bead cracked and thread loose. Requires re-threading and energy recharge.</p>
        <div class="mt-4">
            <button onclick="hideDetail()" class="inline-flex items-center gap-2 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                Close
            </button>
        </div>
    </div>
</div>

<script>
function showDetail(ticketId) {
    document.getElementById('detail-ticket').textContent = ticketId;
    document.getElementById('ticket-detail').classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function hideDetail() {
    document.getElementById('ticket-detail').classList.add('hidden');
}
</script>

<?php include('layouts/footer.php'); ?>