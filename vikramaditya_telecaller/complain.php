<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0V9a4 4 0 00-4-4H9a4 4 0 00-4 4v8" />
        </svg>
        All Complaints
    </h1>

    <div class="overflow-x-auto">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch rounded-xl">
        <table class="min-w-[700px] bg-white md:min-w-full sm:min-w-full">
            <thead class="bg-[#FFF4E6] text-[#7A3E00] border-b border-green-600">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Complaint ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Client</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Astrologer</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Type</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php
                $complaints = [
                    ["ASTRO-CMP-2025-0101", "06 Aug 2025", "Rajesh Kumar", "Pt. Ramesh", "Urgent", "Open"],
                    ["ASTRO-CMP-2025-0102", "05 Aug 2025", "Meena Verma", "Smt. Neha", "Major", "In Progress"],
                    ["ASTRO-CMP-2025-0103", "04 Aug 2025", "Suresh Patel", "Acharya Om", "Minor", "Closed"]
                ];

                foreach ($complaints as $row) {
                    echo '<tr class="hover:bg-orange-50 transition">';
                    foreach ($row as $i => $value) {
                        echo '<td class="px-6 py-4 border-b border-green-600">' . $value . '</td>';
                    }
                    echo '<td class="px-6 py-4 border-b border-green-600 text-center">';
                    echo '<a href="#" onclick="showComplaintDetail(\'' . $row[0] . '\')" class="inline-flex items-center text-blue-600 hover:underline font-medium">';
                    echo '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> View';
                    echo '</a>';
                    echo '</td></tr>';
                }
                ?>
            </tbody>
        </table></div>
    </div>

    <div id="complaint-detail" class="hidden mt-10 bg-white p-6 rounded-xl shadow-md border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6M7 17V9a4 4 0 014-4h2a4 4 0 014 4v8" />
            </svg>
            Complaint Details
        </h2>
        <p><strong>Complaint ID:</strong> <span id="detail-id"></span></p>
        <p><strong>Client:</strong> Rajesh Kumar</p>
        <p><strong>Astrologer:</strong> Pt. Ramesh</p>
        <p><strong>Type:</strong> Urgent</p>
        <p><strong>Status:</strong> Open</p>
        <p><strong>Description:</strong> Delay in response and incorrect prediction. Client expects a follow-up and clarification.</p>
        <div class="mt-4">
            <button onclick="hideComplaintDetail()" class="inline-flex items-center gap-2 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Close
            </button>
        </div>
    </div>
</div>

<script>
function showComplaintDetail(id) {
    document.getElementById('detail-id').textContent = id;
    document.getElementById('complaint-detail').classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
function hideComplaintDetail() {
    document.getElementById('complaint-detail').classList.add('hidden');
}
</script>

<?php include('layouts/footer.php'); ?>