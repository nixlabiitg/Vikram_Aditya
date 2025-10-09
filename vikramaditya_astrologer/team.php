<?php include("layouts/header.php"); ?>
<div class="main-content p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-[#7A3E00]">All Team Members</h1>
        <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#FF9966]"><a href="add_team">+ Add Team Member</a></button>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699]">
        
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
            <table class="min-w-[700px] text-center md:min-w-full sm:min-w-full">
                <thead>
                    <tr class="bg-[#FFEBD6]">
                        <th class="p-2 border-b border-[#FFD699]">Name</th>
                        <th class="p-2 border-b border-[#FFD699]">Role</th>
                        <th class="p-2 border-b border-[#FFD699]">Phone</th>
                        <th class="p-2 border-b border-[#FFD699]">Email</th>
                        <th class="p-2 border-b border-[#FFD699]">Status</th>
                        <th class="p-2 border-b border-[#FFD699]">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-700">
                    <?php
                    $team = [
                        ["Pranjal", "Astrologer", "+91 9876543210", "astroa@example.com", "Active"],
                        ["Rahul", "Counselor", "+91 9123456780", "counselx@example.com", "Active"],
                        ["Rina Sharma", "Telecaller", "+91 9988776655", "rina@example.com", "Inactive"]
                    ];

                    foreach ($team as $row) {
                        echo '<tr class="hover:bg-[#FFF4E0] transition">';
                        echo '<td class="px-6 py-4 border-b border-[#FFD699] font-medium">' . $row[0] . '</td>';
                        echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $row[1] . '</td>';
                        echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $row[2] . '</td>';
                        echo '<td class="px-6 py-4 border-b border-[#FFD699]">' . $row[3] . '</td>';

                        $statusColor = $row[4] === "Active" ? "bg-green-100 text-green-800" :
                                    ($row[4] === "Inactive" ? "bg-red-100 text-red-800" : "bg-yellow-100 text-yellow-800");

                        echo '<td class="px-6 py-4 border-b border-[#FFD699]">
                                <span class="inline-block px-2 py-1 text-xs rounded ' . $statusColor . '">' . $row[4] . '</span>
                            </td>';

                        echo '<td class="px-6 py-4 border-b border-[#FFD699] text-center">';
                        echo '<a href="#" onclick="showTeamDetail(\'' . $row[0] . '\', \'' . $row[1] . '\', \'' . $row[2] . '\', \'' . $row[3] . '\', \'' . $row[4] . '\')" 
                                    class="inline-flex items-center text-blue-600 hover:underline font-medium">';
                        echo '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> View';
                        echo '</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Team Member Details -->
    <div id="team-detail" class="hidden mt-10 bg-white p-6 rounded-xl shadow-md border border-gray-200">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4 flex items-center gap-2">
            <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            Team Member Details
        </h2>
        <p><strong>Name:</strong> <span id="team-name"></span></p>
        <p><strong>Role:</strong> <span id="team-role"></span></p>
        <p><strong>Phone:</strong> <span id="team-phone"></span></p>
        <p><strong>Email:</strong> <span id="team-email"></span></p>
        <p><strong>Status:</strong> <span id="team-status"></span></p>

        <div class="mt-3">
            <button onclick="window.location.href='team_edit'" class="px-2 py-1 bg-yellow-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor" 
                stroke-width="2" 
                width="24" height="24">
            <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
            <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M15 5l3 3" />
            </svg>
            </button>
            <button class="px-2 py-1 bg-green-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
            </svg>
            </button>
            <button class="px-2 py-1 bg-indigo-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M2 5a3 3 0 013-3h14a3 3 0 013 3v9a3 3 0 01-3 3H7l-5 4V5z" />
            </svg>
            </button>
        </div>

        <div class="mt-4">
            <button onclick="hideTeamDetail()" class="inline-flex items-center gap-2 px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Close
            </button>
        </div>
    </div>
</div>
<script>
function showTeamDetail(name, role, phone, email, status) {
    document.getElementById('team-name').textContent = name;
    document.getElementById('team-role').textContent = role;
    document.getElementById('team-phone').textContent = phone;
    document.getElementById('team-email').textContent = email;
    document.getElementById('team-status').textContent = status;
    document.getElementById('team-detail').classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function hideTeamDetail() {
    document.getElementById('team-detail').classList.add('hidden');
}
</script>
<?php include("layouts/footer.php");