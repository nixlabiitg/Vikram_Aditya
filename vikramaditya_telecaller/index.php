<?php include("layouts/header.php"); ?>

<div class="p-4 md:p-6 space-y-8">

  <!-- KPI Cards (color-coded) -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Calls Made -->
    <div class="rounded-2xl shadow p-5 text-center bg-[#FFE68F]">
      <h3 class="text-xs md:text-sm font6medium text-yellow-700 flex items-center justify-center gap-1">
        <!-- Phone -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5a2 2 0 012-2h2.3l1.2 4.9-2.3 2.3a16 16 0 006.6 6.6l1.6-1.6 4.9 1.2V19a2 2 0 01-2 2H7A4 4 0 013 17V5z"/>
        </svg>
        Calls Made Today
      </h3>
      <p class="text-3xl font-bold text-yellow-700 mt-2">24</p>
    </div>

    <!-- Follow-ups Due -->
    <div class="rounded-2xl shadow p-5 text-center bg-blue-100">
      <h3 class="text-xs md:text-sm font-medium text-blue-800 flex items-center justify-center gap-1">
        <!-- Calendar -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2zM7 13h10"/>
        </svg>
        Follow-ups Due
      </h3>
      <p class="text-3xl font-bold text-blue-700 mt-2">8</p>
    </div>

    <!-- Conversions -->
    <div class="rounded-2xl shadow p-5 text-center bg-green-100">
      <h3 class="text-xs md:text-sm font-medium text-green-800 flex items-center justify-center gap-1">
        <!-- Target -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <circle cx="12" cy="12" r="3"></circle>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 6V4m0 16v-2m8-8h-2M6 12H4m13.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414M17.95 17.95l1.414 1.414M6.05 6.05L4.636 4.636"/>
        </svg>
        Conversions
      </h3>
      <p class="text-3xl font-bold text-green-700 mt-2">2</p>
    </div>

    <!-- Missed Follow-ups -->
    <div class="rounded-2xl shadow p-5 text-center bg-red-100">
      <h3 class="text-xs md:text-sm font-medium text-red-800 flex items-center justify-center gap-1">
        <!-- Alert -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 9v4m0 4h.01M10.3 3.9L1.8 18a2 2 0 001.7 3h16.9a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/>
        </svg>
        Missed Follow-ups
      </h3>
      <p class="text-3xl font-bold text-red-600 mt-2">3</p>
    </div>
  </div>

  <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Today’s Task Summary -->
    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-lg font-semibold mb-5 text-yellow-700 flex items-center gap-2">
        <!-- Clipboard -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 5h6a2 2 0 012 2v1H7V7a2 2 0 012-2zm9 4H6a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2v-7a2 2 0 00-2-2z"/>
        </svg>
        Today's Task Summary
      </h3>
      <ul class="space-y-4 text-sm md:text-base">
        <li class="flex justify-between items-center border-b border-[#a3b18a] pb-3">
          <span class="flex items-center gap-2">
            <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-yellow-200">
              <!-- Phone dot -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 4h3l1.2 4.9-2.3 2.3a16 16 0 006.6 6.6l1.6-1.6 4.9 1.2v3H17C9.3 21 4 15.7 4 8V4z"/>
              </svg>
            </span>
            Calls to Make
          </span>
          <span class="font-semibold text-yellow-700">12</span>
        </li>
        <li class="flex justify-between items-center border-b border-[#a3b18a] pb-3">
          <span class="flex items-center gap-2">
            <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-green-200">
              <!-- Chat dot -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 8h10M7 12h4m1 8h.01M12 20h9a2 2 0 002-2V6a2 2 0 00-2-2H3a2 2 0 00-2 2v12a2 2 0 002 2h9z"/>
              </svg>
            </span>
            WhatsApps Sent
          </span>
          <span class="font-semibold text-green-700">5</span>
        </li>
        <li class="flex justify-between items-center">
          <span class="flex items-center gap-2">
            <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-200">
              <!-- Calendar dot -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 7V3m8 4V3M5 21h14v-9H5v9z"/>
              </svg>
            </span>
            Follow-ups Due
          </span>
          <span class="font-semibold text-blue-700">8</span>
        </li>
      </ul>

      <!-- Status legend -->
      <div class="flex flex-wrap gap-3 mt-5 text-xs">
        <span class="px-2 py-1 rounded-full bg-red-100 text-red-700">Overdue</span>
        <span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-700">Due Today</span>
        <span class="px-2 py-1 rounded-full bg-green-100 text-green-700">Upcoming</span>
        <span class="px-2 py-1 rounded-full bg-blue-100 text-blue-700">Scheduled</span>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-lg font-semibold mb-5 text-yellow-700 flex items-center gap-2">
        <!-- Activity -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Recent Activity
      </h3>
      <ul class="space-y-5 text-sm md:text-base">
        <li class="flex items-start gap-3">
          <!-- Phone -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h2.3l1.2 4.9-2.3 2.3a16 16 0 006.6 6.6l1.6-1.6 4.9 1.2V19a2 2 0 01-2 2H7A4 4 0 013 17V5z"/>
          </svg>
          <p><span class="font-semibold">You</span> called <span class="font-medium">Ravi Sharma</span> — <span class="text-red-600">No Answer</span></p>
        </li>
        <li class="flex items-start gap-3">
          <!-- Calendar -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V8H3v11a2 2 0 002 2z"/>
          </svg>
          <p><span class="font-semibold">You</span> scheduled follow-up with <span class="font-medium">Anita</span> for <span class="text-blue-700">tomorrow</span></p>
        </li>
        <li class="flex items-start gap-3">
          <!-- Chat -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 15a2 2 0 01-2 2H8l-5 3V6a2 2 0 012-2h14a2 2 0 012 2v9z"/>
          </svg>
          <p><span class="font-semibold">You</span> sent WhatsApp message to <span class="font-medium">Rahul</span></p>
        </li>
      </ul>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    
    <!-- Left Column: Client Profile + Action Buttons -->
    <div class="space-y-6">
      
      <!-- Client Profile Snapshot -->
      <div class="bg-white rounded-2xl shadow p-6 space-y-3">
        <h3 class="text-lg font-semibold text-yellow-700 flex items-center gap-2">
          <!-- User -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.1 18A13.9 13.9 0 0112 15c2.5 0 4.8.7 6.9 1.9M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
          My Client Profile
        </h3>
        <p class="font-bold text-gray-900">Ravi Sharma</p>
        <p class="text-sm text-gray-700 flex items-center gap-1">
          <!-- Phone -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h2.3l1.2 4.9-2.3 2.3a16 16 0 006.6 6.6l1.6-1.6 4.9 1.2V19a2 2 0 01-2 2H7A4 4 0 013 17V5z"/>
          </svg>
          +91 98765 43210
        </p>
        <p class="text-sm text-gray-700">Source: Website</p>

        <div class="flex items-center gap-2">
          <label class="text-sm">Stage:</label>
          <select class="border border-gray-400 rounded-lg px-2 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-800
                    transition duration-200 ease-in-out">
            <option>Initial</option><option>Enquiry</option><option>Analysis</option>
            <option selected>Proposal</option><option>Negotiation</option>
            <option>Confirmed</option><option>Lost</option>
          </select>
        </div>

        <div class="flex gap-2 flex-wrap">
          <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">Hot</span>
          <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">Warm</span>
          <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">Cold</span>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <button class="flex items-center justify-center gap-2 bg-yellow-600 hover:bg-yellow-700 text-white px-3 py-2 rounded-xl text-sm w-full">
          <!-- Call -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h2.3l1.2 4.9-2.3 2.3a16 16 0 006.6 6.6l1.6-1.6 4.9 1.2V19a2 2 0 01-2 2H7A4 4 0 013 17V5z"/>
          </svg>
          Call
        </button>

        <button class="flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-xl text-sm w-full">
          <!-- WhatsApp -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 15a2 2 0 01-2 2H8l-5 3V6a2 2 0 012-2h14a2 2 0 012 2v9z"/>
          </svg>
          WhatsApp
        </button>

        <button class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-xl text-sm w-full">
          <!-- SMS -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5h18v14H3zM4 6l8 6 8-6"/>
          </svg>
          SMS
        </button>
      </div>
    </div>

    <div class="space-y-6">

      <!-- Timeline of Activity -->
      <div class="bg-white rounded-2xl shadow p-6">
        <h3 class="text-base font-semibold text-yellow-700 mb-4 flex items-center gap-2">
          <!-- Timeline -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h10M4 18h6"/>
          </svg>
          My Activity Timeline
        </h3>
        <ul class="space-y-3 text-sm">
          <li class="flex items-start gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-yellow-500 mt-2"></span>
            <div>Called Ravi: <span class="text-red-600">No Answer</span> <span class="text-gray-500">(10:30 AM)</span></div>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-blue-500 mt-2"></span>
            <div>Follow-up scheduled with Anita <span class="text-gray-500">(Tomorrow 11:00 AM)</span></div>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-green-500 mt-2"></span>
            <div>WhatsApp proposal sent to Rahul <span class="text-gray-500">(Yesterday)</span></div>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-gray-400 mt-2"></span>
            <div>Remark added: “Needs confirmation” <span class="text-gray-500">(2 days ago)</span></div>
          </li>
        </ul>
      </div>

      <!-- Document Upload -->
      <div class="bg-white rounded-2xl shadow p-6">
        <h3 class="text-base font-semibold text-yellow-700 mb-2 flex items-center gap-2">
          <!-- Upload -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 17v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 9l5-5 5 5M12 4v12"/>
          </svg>
          Upload Documents
        </h3>
        <input type="file" class="w-full text-sm">
      </div>

    </div>
  </div>

  <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Notes -->
    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-base font-semibold text-yellow-700 mb-2 flex items-center gap-2">
        <!-- Note -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 20h9M12 4h9M7 4v16M3 4h.01M3 20h.01"/>
        </svg>
        My Call Remarks
      </h3>
      <textarea class="w-full border border-gray-500 rounded-xl p-3 text-sm" rows="3" placeholder="Add my notes here..."></textarea>
    </div>

    <!-- Follow-Up Scheduler -->
    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-base font-semibold text-yellow-700 mb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        My Follow-Up
      </h3>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <input id="reminderDate" type="date"
          class="text-gray-400 border border-gray-400 rounded-xl p-2 text-sm w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-800 transition duration-200 ease-in-out">
        <input id="reminderTime" type="time"
          class="text-gray-400 border border-gray-400 rounded-xl p-2 text-sm w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-800 transition duration-200 ease-in-out">
      </div>

      <button id="addReminder"
        class="mt-3 w-full px-3 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded-xl text-sm">Add Reminder</button>
    </div>

    <script>
    document.getElementById("addReminder").addEventListener("click", function () {
      const date = document.getElementById("reminderDate").value;
      const time = document.getElementById("reminderTime").value;

      if (!date || !time) {
        alert("Please select both date and time.");
        return;
      }

      const reminderDateTime = new Date(`${date}T${time}`);
      const now = new Date();
      const diff = reminderDateTime - now;

      if (diff <= 0) {
        alert("Please choose a future time.");
        return;
      }

      alert("Reminder set!");

      setTimeout(() => {
        alert("Reminder: It's time for your follow-up!");
        if (Notification.permission === "granted") {
          new Notification("Follow-Up Reminder", {
            body: "It's time for your follow-up!",
          });
        }
      }, diff);
    });

    // Ask for notification permission once
    if (Notification && Notification.permission !== "granted") {
      Notification.requestPermission();
    }
    </script>


    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-base font-semibold text-yellow-700 mb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 14l11-7-18 4 7 3 3 7 4-18-7 11z"/>
        </svg>
        Send Template
      </h3>
      <select id="templateSelect" 
        class="w-full border border-gray-400 rounded-xl p-2 text-sm mb-3 focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-green-800 transition duration-200 ease-in-out">
        <option value="">Select Template</option>
        <option value="Hello! This is a reminder for your appointment tomorrow.">Appointment Reminder</option>
        <option value="Just following up on the proposal we sent. Looking forward to your feedback!">Proposal Follow-Up</option>
        <option value="Thank you for choosing our services. We appreciate your trust!">Thank You Message</option>
      </select>

      <button id="sendBtn" 
        class="w-full px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm">
        Send
      </button>
    </div>

    <script>
      document.getElementById("sendBtn").addEventListener("click", function() {
        let template = document.getElementById("templateSelect").value;

        if (template === "") {
          alert("Please select a template before sending.");
          return;
        }

        let phone = "91XXXXXXXXXX"; 
        let url = "https://wa.me/" + phone + "?text=" + encodeURIComponent(template);

        window.open(url, "_blank");
      });
    </script>

  </div>

  <!-- Productivity Tools -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-sm font-semibold text-yellow-700 mb-2 flex items-center gap-2">
        <!-- Meter -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 3a9 9 0 00-9 9h3a6 6 0 1112 0h3a9 9 0 00-9-9z"/>
        </svg>
        Daily Call Target
      </h3>
      <div class="w-full bg-gray-200 rounded-full h-3">
        <div class="bg-yellow-600 h-3 rounded-full" style="width:70%"></div>
      </div>
      <p class="text-xs text-gray-600 mt-2">18 / 25 calls</p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
      <h3 class="text-sm font-semibold text-yellow-700 mb-2 flex items-center gap-2">
        <!-- Ratio -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 3v18h18M7 13l3 3 7-7"/>
        </svg>
        Conversion Ratio
      </h3>
      <p class="text-2xl font-bold text-green-600">25%</p>
      <p class="text-xs text-gray-600">2 converted of 8 leads</p>
    </div>
  </div>
  <!-- Quick Actions -->
  <div class="bg-white rounded-2xl shadow p-6 flex flex-wrap gap-3 justify-center">
    <a href="add_lead" class="text-decoration-none">
      <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded-xl text-sm sm:text-base font-semibold flex items-center gap-2">
        <!-- Plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14M5 12h14"/>
        </svg>
        Add Lead
      </button>
    </a>
    <a href="proposal_sent" class="text-decoration-none">
      <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-xl text-sm sm:text-base font-semibold flex items-center gap-2">
        <!-- Document -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 3h8l4 4v14H7zM15 3v5h5"/>
        </svg>
        Send Proposal
      </button>
    </a>
    <a href="follow_up" class="text-decoration-none">
      <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-sm sm:text-base font-semibold flex items-center gap-2">
        <!-- Bell -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 17h5l-1.4-1.4A2 2 0 0118 14V9a6 6 0 10-12 0v5a2 2 0 01-.6 1.4L4 17h5m6 0v1a3 3 0 11-6 0v-1h6z"/>
        </svg>
        Follow-Up
      </button>
    </a>
    <a href="appointment_book" class="text-decoration-none">
      <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-xl text-sm sm:text-base font-semibold flex items-center gap-2">
        <!-- Calendar check -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3M5 21h14V8H5v13zm3-6l2 2 4-4"/>
        </svg>
        Book Appointment
      </button>
    </a>
  </div>
</div>

<?php include("layouts/footer.php"); ?>
