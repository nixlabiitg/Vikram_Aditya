<?php include("layouts/header.php"); ?>

<div class="min-h-screen p-6 font-sans text-[#332c26]">

  <div class="relative overflow-hidden h-10 mb-6">
    <div class="absolute animate-marquee whitespace-nowrap font-bold flex gap-12 text-sm text-yellow-900">
      <span class="flex items-center gap-2">
        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 3" />
        </svg>
        Appointment reminder for Priya at <b>12:00 PM</b>
      </span>
      <span class="flex items-center gap-2">
        <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
          <path d="M3 5a2 2 0 0 0-2 2v2h22V7a2 2 0 0 0-2-2H3zm20 6H1v6a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2v-6zm-13 5H6v-2h4v2zm7 0h-5v-2h5v2z"/>
        </svg>
        Payment received from Ramesh- <b>₹1500</b>
      </span>
      <span class="flex items-center gap-2">
        <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H7l-5 3V5z"/></svg>
        New lead assigned: <b>Seema</b> | Source: WhatsApp
      </span>
    </div>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-8">
    <!-- Total Leads -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-indigo-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8-4H8m8 8H8m12-4a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Total Leads Today</p>
      </div>
      <p class="text-3xl font-bold text-indigo-700">32</p>
    </div>
    <!-- Follow-Ups -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-blue-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.16 3.483a1 1 0 01-.272 1.06l-2.12 2.12a16.001 16.001 0 006.584 6.584l2.12-2.12a1 1 0 011.06-.272l3.483 1.16a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Follow-Ups Due</p>
      </div>
      <p class="text-3xl font-bold text-blue-700">18</p>
    </div>
    <!-- Appointments -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-green-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M4 11h16M4 19h16" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Appointments Today</p>
      </div>
      <p class="text-3xl font-bold text-green-700">12</p>
    </div>
    <!-- Conversions -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-yellow-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Conversions</p>
      </div>
      <p class="text-3xl font-bold text-yellow-700">5</p>
    </div>
    <!-- Lost Leads -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-rose-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h2l4 8 4-4 6 6 2-2" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Lost Leads</p>
      </div>
      <p class="text-3xl font-bold text-rose-700">4</p>
    </div>
    <!-- Complaints -->
    <div class="rounded-2xl bg-white shadow-lg p-4 border-b-4 border-pink-500 hover:scale-105 transition">
      <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 11-12.728 0 9 9 0 0112.728 0zM12 8v4m0 4h.01" />
        </svg>
        <p class="text-xs font-bold text-gray-500">Complaints</p>
      </div>
      <p class="text-3xl font-bold text-pink-700">3</p>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-sm text-gray-500 mb-1">Quote of the Day</h3>
      <p class="text-md font-bold italic text-indigo-700">"Your destiny is written in the stars, but your success is written in your actions."</p>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-sm text-gray-500 mb-1">Birthdays Today</h3>
      <p class="text-md text-pink-600">Anita Sharma: 3:00 PM</p>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-sm text-gray-500 mb-1">Pending Tasks</h3>
      <p class="text-md text-yellow-600">Follow-up with Vipul | Upload session notes</p>
    </div>
  </div>

  <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-indigo-700">Lead Funnel</h3>
      <canvas id="leadFunnelChart" class="h-40"></canvas>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-blue-700">Lead Source Effectiveness</h3>
      <canvas id="leadSourceChart" class="h-40"></canvas>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-yellow-700">Follow-Up Calendar</h3>
      <div id="calendar" class="grid grid-cols-7 gap-2 text-sm text-center item-center"></div>
      <!-- Modal -->
      <div id="followUpModal" class="fixed inset-0 hidden bg-black/30 bg-opacity-50 items-center justify-center z-50">
        <div class="bg-white rounded-xl p-6 w-80">
          <h2 class="text-xl font-semibold text-gray-800 mb-2">Follow-Up Details</h2>
          <p class="text-sm text-gray-700">Date: <span id="modalDate" class="font-bold"></span></p>
          <p class="text-sm text-gray-700">Client: <span id="modalClient">Astro Lead</span></p>
          <p class="text-sm text-gray-700 mb-4">Notes: <span id="modalNotes">Call regarding service interest</span></p>
          <div class="flex justify-end space-x-2">
            <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-3 py-1 rounded hover:bg-gray-400">Cancel</button>
            <button onclick="markDone()" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">✅ Mark Done</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-green-700">Team Performance</h3>
      <canvas id="teamPerformanceChart" class="h-40"></canvas>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-rose-700">Recent Activity</h3>
      <ul class="text-sm space-y-2 text-gray-700">
        <li>Rina added new lead: Ramesh | Instagram | 11:05 AM</li>
        <li>Sushil completed follow-up on Lead #323</li>
      </ul>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-6">
      <h3 class="text-lg font-semibold mb-3 text-pink-700">Appointments Timeline</h3>
      <ul class="text-sm text-gray-800 space-y-3">
        <!-- Done -->
        <li class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          <span>10:30 AM: Rajesh | Horoscope | <span class="text-green-600 font-medium">Done</span></span>
        </li>

        <li class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <circle cx="12" cy="12" r="9" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7v5l3 3" />
          </svg>
          <span>12:00 PM: Priya | Compatibility | <span class="text-yellow-600 font-medium">Pending</span></span>
        </li>

        <li class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          <span>02:00 PM: Ankit | Career | <span class="text-red-600 font-medium">Missed</span></span>
        </li>

      </ul>
    </div>
  </div>

  <div class="mt-10 bg-white rounded-2xl shadow-xl p-6">
    <h3 class="text-lg font-semibold mb-3 text-blue-700">Quick Actions</h3>
    <div class="grid grid-cols-2 gap-3 sm:flex sm:flex-wrap sm:gap-4">
      <a href="add_lead" class="text-decoration-none"><button class="bg-indigo-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Add Lead</button></a>
      <a href="add_lead#bulk" class="text-decoration-none"><button class="bg-blue-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Bulk Upload</button></a>
      <a href="messanger" class="text-decoration-none"><button class="bg-yellow-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Send Reminder</button></a>
      <a href="assign_task" class="text-decoration-none"><button class="bg-pink-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Assign Task</button></a>
      <a href="proposal_sent" class="text-decoration-none"><button class="bg-green-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Send Proposal</button></a>
      <a href="complain_entry" class="text-decoration-none"><button class="bg-rose-600 text-white px-4 py-2 rounded-xl w-full sm:w-auto">Raise Complaint</button></a>
    </div>
  </div>
</div>

<script>
 
  new Chart(document.getElementById("leadFunnelChart"), {
    type: "bar",
    data: {
      labels: ["New", "Contacted", "Proposal Sent", "Converted", "Lost"],
      datasets: [{
        label: "Leads",
        data: [12, 9, 6, 3, 1],
        backgroundColor: [
          "#6366F1", "#818CF8", "#A5B4FC", "#C7D2FE", "#E0E7FF"
        ],
        borderRadius: 6,
        barThickness: 30
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true, ticks: { stepSize: 2 } }
      },
      plugins: {
        legend: { display: false }
      }
    }
  });

  new Chart(document.getElementById("leadSourceChart"), {
    type: "pie",
    data: {
      labels: ["Instagram", "Facebook", "Website", "Referral"],
      datasets: [{
        label: "Sources",
        data: [35, 25, 20, 20],
        backgroundColor: ["#3B82F6", "#60A5FA", "#93C5FD", "#BFDBFE"],
        borderColor: "#fff",
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "right",
          labels: {
            color: "#374151",
            padding: 12,
            boxWidth: 16
          }
        }
      }
    }
  });
</script>

<script>
  function renderCalendar() {
    const calendar = document.getElementById('calendar');
    const today = new Date().getDate();
    const totalDays = 31;
    calendar.innerHTML = '';

    for (let day = 1; day <= totalDays; day++) {
      const isToday = day === today;
      calendar.innerHTML += `
        <button class="rounded-full w-10 h-10 
          ${isToday ? 'bg-orange-500 text-white font-bold shadow-md' : 'bg-orange-100 text-[#7A3E00] hover:bg-orange-200'}
          transition-all duration-150 ease-in-out">
          ${day}
        </button>`;
    }
  }

  renderCalendar();
</script>
<script>
    const followUps = {
      5: 'overdue',
      7: 'today',
      10: 'future',
      14: 'future',
      18: 'future',
    };

    function renderCalendar() {
      const calendar = document.getElementById('calendar');
      calendar.innerHTML = '';
      const today = new Date().getDate();

      for (let i = 1; i <= 31; i++) {
        const status = localStorage.getItem("followup_" + i);
        let colorClass = "bg-orange-100 text-gray-700";

        if (status === "done") {
          colorClass = "bg-gray-400 text-white";
        } else if (followUps[i]) {
          if (followUps[i] === "overdue") colorClass = "bg-red-500 text-white";
          else if (followUps[i] === "today") colorClass = "bg-yellow-400 text-white";
          else if (followUps[i] === "future") colorClass = "bg-green-500 text-white";
        }

        calendar.innerHTML += `
          <button 
            onclick="openModal(${i})" 
            class="w-8 h-8 rounded-full ${colorClass} hover:scale-105 transition"
            title="Follow-Up on Day ${i}">
            ${i}
          </button>
        `;
      }
    }

    function openModal(day) {
      document.getElementById('modalDate').innerText = day;
      document.getElementById('followUpModal').classList.remove('hidden');
      document.getElementById('followUpModal').classList.add('flex');
    }

    function closeModal() {
      document.getElementById('followUpModal').classList.add('hidden');
      document.getElementById('followUpModal').classList.remove('flex');
    }

    function markDone() {
      const day = document.getElementById('modalDate').innerText;
      localStorage.setItem("followup_" + day, "done");
      closeModal();
      renderCalendar();
      alert("Follow-up marked as done for day " + day);
    }

    window.onload = renderCalendar;
  </script>

<script>
  new Chart(document.getElementById("teamPerformanceChart"), {
    type: "bar",
    data: {
      labels: ["Sushil", "Rina", "Amit", "Neha"],
      datasets: [{
        label: "Leads Handled",
        data: [12, 9, 7, 5],
        backgroundColor: ["#22C55E","#34D399","#4ADE80","#86EFAC"],
        borderRadius: 6,
        barThickness: 30
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false }},
      scales: {
        y: { beginAtZero: true, ticks: { stepSize: 2 } }
      }
    }
  });
</script>
<?php include("layouts/footer.php"); ?>