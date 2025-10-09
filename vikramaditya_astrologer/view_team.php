<?php include("layouts/header.php") ?>
  
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="main-content p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Team Performance</h1>
        <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#FF9966]"><a href="add_team">+ Add Team Member</a></button>
    </div>

    <!-- Quick Leaderboard (Card Grid) -->
    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-6 border border-[#FFAA80]">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">Top Performers (Card View)</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white border border-[#FFAA80] rounded-lg p-4 hover:bg-[#FFF4E0]">
                <h3 class="font-semibold text-[#7A3E00]">Rina Sharma</h3>
                <p class="text-sm text-[#5C3B00]">Leads Today: 12</p>
                <p class="text-sm text-[#5C3B00]">Conversions This Week: 5</p>
                <p class="text-sm text-[#5C3B00]">Avg Follow-Up: 2 hrs</p>
            </div>
            <div class="bg-white border border-[#FFAA80] rounded-lg p-4 hover:bg-[#FFF4E0]">
                <h3 class="font-semibold text-[#7A3E00]">Sushil Verma</h3>
                <p class="text-sm text-[#5C3B00]">Leads Today: 10</p>
                <p class="text-sm text-[#5C3B00]">Conversions This Week: 4</p>
                <p class="text-sm text-[#5C3B00]">Avg Follow-Up: 3 hrs</p>
            </div>
            <div class="bg-white border border-[#FFAA80] rounded-lg p-4 hover:bg-[#FFF4E0]">
                <h3 class="font-semibold text-[#7A3E00]">Priya Desai</h3>
                <p class="text-sm text-[#5C3B00]">Leads Today: 9</p>
                <p class="text-sm text-[#5C3B00]">Conversions This Week: 3</p>
                <p class="text-sm text-[#5C3B00]">Avg Follow-Up: 2.5 hrs</p>
            </div>
        </div>
    </div>

    <!-- Quick Leaderboard (Horizontal Scrollable Bar Chart) -->
    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-6 border border-[#FFAA80]">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">Top Performers (Bar Chart)</h2>
        <div class="overflow-x-auto">
            <canvas id="leaderboardChart" class="min-w-[600px]"></canvas>
        </div>
    </div>

    <!-- Team Member List -->
    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFAA80]">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">All Team Members</h2>
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full text-center">
            <thead>
                <tr class="bg-[#FFEBD6]">
                    <th class="p-2 border-b border-[#FFAA80]">Name</th>
                    <th class="p-2 border-b border-[#FFAA80]">Role</th>
                    <th class="p-2 border-b border-[#FFAA80]">Leads Today</th>
                    <th class="p-2 border-b border-[#FFAA80]">Conversions This Week</th>
                    <th class="p-2 border-b border-[#FFAA80]">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFAA80]">Rina Sharma</td>
                    <td class="p-2 border-b border-[#FFAA80]">Telecaller</td>
                    <td class="p-2 border-b border-[#FFAA80]">12</td>
                    <td class="p-2 border-b border-[#FFAA80]">5</td>
                    <td class="p-2 border-b border-[#FFAA80]">
                        <button onclick="window.location.href='team_edit'" class="px-3 py-1 bg-[#FF7F50] text-white rounded">Edit</button>
                    </td>
                </tr>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFAA80]">Sushil Verma</td>
                    <td class="p-2 border-b border-[#FFAA80]">Telecaller</td>
                    <td class="p-2 border-b border-[#FFAA80]">10</td>
                    <td class="p-2 border-b border-[#FFAA80]">4</td>
                    <td class="p-2 border-b border-[#FFAA80]">
                        <button onclick="window.location.href='team_edit'" class="px-3 py-1 bg-[#FF7F50] text-white rounded">Edit</button>
                    </td>
                </tr>
                <tr class="hover:bg-[#FFF4E0]">
                    <td class="p-2 border-b border-[#FFAA80]">Priya Desai</td>
                    <td class="p-2 border-b border-[#FFAA80]">Telecaller</td>
                    <td class="p-2 border-b border-[#FFAA80]">9</td>
                    <td class="p-2 border-b border-[#FFAA80]">3</td>
                    <td class="p-2 border-b border-[#FFAA80]">
                        <button onclick="window.location.href='team_edit'" class="px-3 py-1 bg-[#FF7F50] text-white rounded">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table></div>
    </div>
</div>

<script>
    const ctx = document.getElementById('leaderboardChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Rina Sharma', 'Sushil Verma', 'Priya Desai'],
            datasets: [
                {
                    label: 'Leads Handled Today',
                    data: [12, 10, 9],
                    backgroundColor: ['#e0a91dff', '#e0a91dff', '#e0a91dff'] // Same color for dataset
                },
                {
                    label: 'Conversions This Week',
                    data: [5, 4, 3],
                    backgroundColor: ['#914f29ff', '#914f29ff', '#914f29ff'] // Different dataset color
                }
            ]
        },
        options: {
            responsive: true,
            indexAxis: 'x',
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                x: {
                    stacked: false,
                    ticks: {
                        color: '#7A3E00'
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#7A3E00'
                    }
                }
            }
        }
    });
</script>

      <?php include("layouts/footer.php") ?>
