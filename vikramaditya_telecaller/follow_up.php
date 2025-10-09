<?php include("layouts/header.php"); ?>
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
  <h1 class="text-xl md:text-2xl font-bold text-gray-900 flex items-center gap-2">
    
    Tasks
  </h1>
</div>
<!-- My Tasks & Follow-Ups Panel -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

  <!-- My Tasks -->
  <div class="bg-white rounded-2xl shadow p-6">
    <h3 class="text-lg font-semibold text-yellow-700 mb-4 flex items-center gap-2">
      <!-- Clipboard Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 5h6a2 2 0 012 2v1H7V7a2 2 0 012-2zm9 4H6a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2v-7a2 2 0 00-2-2z"/>
      </svg>
      My Tasks
    </h3>

    <ul class="space-y-4 text-sm">
      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-red-500"></span>
          Call Ravi Sharma
        </span>
        <span class="text-xs font-semibold text-red-600">Overdue</span>
      </li>

      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
          WhatsApp proposal to Anita
        </span>
        <span class="text-xs font-semibold text-yellow-600">Today</span>
      </li>

      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-green-500"></span>
          Email PDF to Rahul
        </span>
        <span class="text-xs font-semibold text-green-600">Done</span>
      </li>

      <li class="flex justify-between items-center">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-blue-500"></span>
          Report to Supervisor
        </span>
        <span class="text-xs font-semibold text-blue-600">Upcoming</span>
      </li>
    </ul>
  </div>

  <!-- My Follow-Ups -->
  <div class="bg-white rounded-2xl shadow p-6">
    <h3 class="text-lg font-semibold text-yellow-700 mb-4 flex items-center gap-2">
      <!-- Clock Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      My Follow-Ups
    </h3>

    <ul class="space-y-4 text-sm">
      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
          10:30 AM — Call Ravi Sharma
        </span>
        <span class="text-xs font-semibold text-yellow-600">Today</span>
      </li>

      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-blue-500"></span>
          12:00 PM — WhatsApp Rahul Singh
        </span>
        <span class="text-xs font-semibold text-blue-600">Scheduled</span>
      </li>

      <li class="flex justify-between items-center pb-3">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-green-500"></span>
          Tomorrow — Follow up with Anita
        </span>
        <span class="text-xs font-semibold text-green-600">Upcoming</span>
      </li>

      <li class="flex justify-between items-center">
        <span class="flex items-center gap-2">
          <span class="w-3 h-3 rounded-full bg-red-500"></span>
          Missed follow-up with Preeti
        </span>
        <span class="text-xs font-semibold text-red-600">Overdue</span>
      </li>
    </ul>
  </div>
</div>

<!-- Today's Follow-Up Schedule Table -->
<div class="bg-white rounded-2xl shadow p-6 mt-6">
  <h3 class="text-lg font-semibold text-yellow-700 mb-4 flex items-center gap-2">
    <!-- Calendar Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 7V3m8 4V3M5 21h14V8H5v13z"/>
    </svg>
    Today's Follow-Up Schedule
  </h3>

  <div class="overflow-x-auto">
    <table class="w-full text-sm border border-gray-200 rounded-lg">
      <thead class="bg-yellow-100 text-yellow-800">
        <tr>
          <th class="px-4 py-2 text-left">Time</th>
          <th class="px-4 py-2 text-left">Client</th>
          <th class="px-4 py-2 text-left">Action</th>
          <th class="px-4 py-2 text-left">Status</th>
        </tr>
      </thead>
      <tbody class="">
        <tr>
          <td class="px-4 py-2">10:30 AM</td>
          <td class="px-4 py-2">Ravi Sharma</td>
          <td class="px-4 py-2">Call</td>
          <td class="px-4 py-2 text-yellow-700 font-medium">Pending</td>
        </tr>
        <tr>
          <td class="px-4 py-2">12:00 PM</td>
          <td class="px-4 py-2">Rahul Singh</td>
          <td class="px-4 py-2">WhatsApp</td>
          <td class="px-4 py-2 text-green-700 font-medium">Done</td>
        </tr>
        <tr>
          <td class="px-4 py-2">03:00 PM</td>
          <td class="px-4 py-2">Anita</td>
          <td class="px-4 py-2">Follow-Up</td>
          <td class="px-4 py-2 text-blue-700 font-medium">Scheduled</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Missed Follow-Ups Table -->
<div class="bg-white rounded-2xl shadow p-6 mt-6">
  <h3 class="text-lg font-semibold text-red-700 mb-4 flex items-center gap-2">
    <!-- Alert Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M12 9v2m0 4h.01M10.3 3.9L1.8 18a2 2 0 001.7 3h16.9a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
    </svg>
    Missed Follow-Ups
  </h3>

  <div class="overflow-x-auto">
    <table class="w-full text-sm border border-gray-200 rounded-lg">
      <thead class="bg-red-100 text-red-800">
        <tr>
          <th class="px-4 py-2 text-left">Date</th>
          <th class="px-4 py-2 text-left">Client</th>
          <th class="px-4 py-2 text-left">Action</th>
          <th class="px-4 py-2 text-left">Reason</th>
        </tr>
      </thead>
      <tbody class="">
        <tr>
          <td class="px-4 py-2">18 Aug</td>
          <td class="px-4 py-2">Preeti</td>
          <td class="px-4 py-2">Call</td>
          <td class="px-4 py-2 text-red-600">Client Busy</td>
        </tr>
        <tr>
          <td class="px-4 py-2">17 Aug</td>
          <td class="px-4 py-2">Vikas</td>
          <td class="px-4 py-2">WhatsApp</td>
          <td class="px-4 py-2 text-red-600">Not Responded</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php include("layouts/footer.php"); ?>