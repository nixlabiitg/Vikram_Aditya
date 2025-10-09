<?php include("layouts/header.php") ?>

<div class="p-6 min-h-screen space-y-6">

  <!-- Page Header -->
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    <h2 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2">
      <!-- Calendar SVG -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      Follow-Ups
    </h2>

    <!-- Filters -->
    <div class="flex flex-wrap gap-3">
      <a href="schedule_followup">
            <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] w-full md:w-auto">Schedule Follow-Up</button>
        </a>
      <select class="bg-white rounded px-3 py-1 text-sm">
        <option>All Telecallers</option>
        <option>Telecaller 1</option>
        <option>Telecaller 2</option>
      </select>
    </div>
  </div>
  <!-- Success Alert -->
  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Follow-up successfully Scheduled</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <!-- KPI Cards -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="bg-white rounded-2xl shadow p-4 flex items-center gap-3 border-l-4 border-blue-500">
      <div class="p-2 bg-blue-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Total Follow-Ups</p>
        <p class="text-lg font-bold text-gray-700">12</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-4 flex items-center gap-3 border-l-4 border-yellow-500">
      <div class="p-2 bg-yellow-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
        </svg>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Pending</p>
        <p class="text-lg font-bold text-gray-700">5</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-4 flex items-center gap-3 border-l-4 border-green-500">
      <div class="p-2 bg-green-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <div>
        <p class="text-gray-500 text-sm"><button class="p-1 bg-blue-800 text-bold text-white rounded hover:bg-blue-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 24 24" 
                  stroke="currentColor" stroke-width="2" 
                  class="w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </button>
            </p>
            <p class="text-lg font-bold text-gray-700">6</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow p-4 flex items-center gap-3 border-l-4 border-red-500">
      <div class="p-2 bg-red-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01" />
        </svg>
      </div>
      <div>
        <p class="text-gray-500 text-sm">Missed</p>
        <p class="text-lg font-bold text-gray-700">1</p>
      </div>
    </div>
  </div>

  <!-- Today's Follow-Ups Table -->
  <div class="bg-white rounded-2xl shadow p-5 space-y-4">
    <h2 class="text-lg font-semibold text-indigo-600 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      Today's Follow-Up Schedules
    </h2>

    <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table class="min-w-[800px] md:min-w-full sm:min-w-full text-sm">
        <thead>
          <tr class="bg-[#FFEBD6] text-gray-700">
            <th class="px-2 py-1 border-b border-[#FFD699]">Lead Name</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Phone</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Last Contact</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Next Follow-Up</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Assigned To</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Status</th>
            <th class="px-2 py-1 border-b border-[#FFD699]">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Pending -->
          <tr class="hover:bg-[#FFF4E0]">
            <td class="px-2 py-1 border-b border-[#FFD699]">Rajesh Kumar</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">+91 9876543210</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-01</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-06</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">Astrologer A</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">
              <span class="inline-block px-2 py-0.5 text-xs bg-yellow-100 text-yellow-800 rounded">Pending</span>
            </td>
            <td class="px-2 py-1 border-b border-[#FFD699] space-x-1">
              <button onclick="window.location.href='messanger'" class="px-2 py-0.5 bg-red-500 text-white rounded text-xs hover:bg-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 32 32"
                stroke="currentColor"
                stroke-width="2"
                width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 22a2 2 0 002-2H10a2 2 0 002 2zM18 16v-5a6 6 0 10-12 0v5l-2 2h16l-2-2z"/>
            </svg></button>
              <button class="px-2 py-0.5 bg-blue-500 hover:bg-blue-800 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
              <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
            </svg>
            </button>
              <button class="px-2 py-0.5 bg-green-400 hover:bg-green-600 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" 
                width="24" height="24" 
                fill="currentColor">
              <path d="M16.003 3C9.374 3 4 8.373 4 15c0 2.62.764 5.07 2.215 7.2L4 29l7.013-2.188C12.103 27.586 14.03 28 16.003 28 22.63 28 28 22.627 28 16S22.63 3 16.003 3zm-.002 22.5c-1.77 0-3.496-.473-5.005-1.37l-.358-.213-4.162 1.3 1.336-4.064-.232-.372C6.568 19.2 6 17.132 6 15 6 9.49 10.49 5 16 5s10 4.49 10 10-4.49 10-9.999 10.5z"/>
              <path d="M21.246 18.758c-.308-.154-1.823-.898-2.106-1-.282-.103-.487-.154-.693.154-.205.308-.794.999-.973 1.205-.18.205-.359.23-.667.077-.308-.154-1.3-.479-2.476-1.525-.915-.817-1.532-1.828-1.712-2.136-.18-.308-.019-.475.135-.628.138-.137.308-.359.462-.539.154-.18.205-.308.308-.513.103-.205.051-.385-.026-.539-.077-.154-.693-1.667-.949-2.28-.25-.6-.505-.517-.693-.527-.18-.009-.385-.011-.59-.011s-.539.077-.821.385c-.282.308-1.077 1.052-1.077 2.565s1.103 2.977 1.256 3.182c.154.205 2.171 3.318 5.262 4.651.737.318 1.311.508 1.759.65.739.235 1.41.202 1.94.123.592-.088 1.823-.745 2.08-1.463.256-.718.256-1.333.18-1.463-.077-.128-.282-.205-.59-.359z"/>
            </svg>
            </button>
              <button  onclick="markAsDone(this)"class="p-1 bg-blue-800 text-bold text-white rounded hover:bg-blue-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 38 38" 
                  stroke="currentColor" stroke-width="5" 
                  class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </button>
            </td>
          </tr>

          <!-- Pending -->
          <tr class="hover:bg-[#FFF4E0]">
            <td class="px-2 py-1 border-b border-[#FFD699]">Priya Desai</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">+91 9123456780</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-02</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-07</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">Telecaller B</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">
              <span class="inline-block px-2 py-0.5 text-xs bg-yellow-100 text-yellow-800 rounded">Pending</span>
            </td>
            <td class="px-2 py-1 border-b border-[#FFD699] space-x-1">
              <button onclick="window.location.href='messanger'" class="px-2 py-0.5 bg-red-500 text-white rounded text-xs hover:bg-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 32 32"
                stroke="currentColor"
                stroke-width="2"
                width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 22a2 2 0 002-2H10a2 2 0 002 2zM18 16v-5a6 6 0 10-12 0v5l-2 2h16l-2-2z"/>
            </svg></button>
            
              <button class="px-2 py-0.5 bg-blue-500 hover:bg-blue-800 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                  class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
              </svg>
              </button>
              <button class="px-2 py-0.5 bg-green-400 hover:bg-green-600 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" 
                width="24" height="24" 
                fill="currentColor">
              <path d="M16.003 3C9.374 3 4 8.373 4 15c0 2.62.764 5.07 2.215 7.2L4 29l7.013-2.188C12.103 27.586 14.03 28 16.003 28 22.63 28 28 22.627 28 16S22.63 3 16.003 3zm-.002 22.5c-1.77 0-3.496-.473-5.005-1.37l-.358-.213-4.162 1.3 1.336-4.064-.232-.372C6.568 19.2 6 17.132 6 15 6 9.49 10.49 5 16 5s10 4.49 10 10-4.49 10-9.999 10.5z"/>
              <path d="M21.246 18.758c-.308-.154-1.823-.898-2.106-1-.282-.103-.487-.154-.693.154-.205.308-.794.999-.973 1.205-.18.205-.359.23-.667.077-.308-.154-1.3-.479-2.476-1.525-.915-.817-1.532-1.828-1.712-2.136-.18-.308-.019-.475.135-.628.138-.137.308-.359.462-.539.154-.18.205-.308.308-.513.103-.205.051-.385-.026-.539-.077-.154-.693-1.667-.949-2.28-.25-.6-.505-.517-.693-.527-.18-.009-.385-.011-.59-.011s-.539.077-.821.385c-.282.308-1.077 1.052-1.077 2.565s1.103 2.977 1.256 3.182c.154.205 2.171 3.318 5.262 4.651.737.318 1.311.508 1.759.65.739.235 1.41.202 1.94.123.592-.088 1.823-.745 2.08-1.463.256-.718.256-1.333.18-1.463-.077-.128-.282-.205-.59-.359z"/>
            </svg>
            </button>
              <button onclick="markAsDone(this)" class="p-1 bg-blue-800 text-bold text-white rounded hover:bg-blue-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="none" viewBox="0 0 38 38" 
                  stroke="currentColor" stroke-width="5" 
                  class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </button>
            </td>
          </tr>

          <!-- Overdue -->
          <tr class="hover:bg-[#FFF4E0]">
            <td class="px-2 py-1 border-b border-[#FFD699]">Amit Sharma</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">+91 9988776655</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-07-30</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-03</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">Telecaller C</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">
              <span class="inline-block px-2 py-0.5 text-xs bg-red-100 text-red-800 rounded">Overdue</span>
            </td>
            <td class="px-2 py-1 border-b border-[#FFD699] space-x-1">
              <button onclick="window.location.href='messanger'" class="px-2 py-0.5 bg-red-500 text-white rounded text-xs hover:bg-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 32 32"
                stroke="currentColor"
                stroke-width="2"
                width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 22a2 2 0 002-2H10a2 2 0 002 2zM18 16v-5a6 6 0 10-12 0v5l-2 2h16l-2-2z"/>
            </svg></button>
            
              <button class="px-2 py-0.5 bg-blue-500 hover:bg-blue-800 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                  class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
              </svg>
              </button>
              <button class="px-2 py-0.5 bg-green-400 hover:bg-green-600 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" 
                width="24" height="24" 
                fill="currentColor">
              <path d="M16.003 3C9.374 3 4 8.373 4 15c0 2.62.764 5.07 2.215 7.2L4 29l7.013-2.188C12.103 27.586 14.03 28 16.003 28 22.63 28 28 22.627 28 16S22.63 3 16.003 3zm-.002 22.5c-1.77 0-3.496-.473-5.005-1.37l-.358-.213-4.162 1.3 1.336-4.064-.232-.372C6.568 19.2 6 17.132 6 15 6 9.49 10.49 5 16 5s10 4.49 10 10-4.49 10-9.999 10.5z"/>
              <path d="M21.246 18.758c-.308-.154-1.823-.898-2.106-1-.282-.103-.487-.154-.693.154-.205.308-.794.999-.973 1.205-.18.205-.359.23-.667.077-.308-.154-1.3-.479-2.476-1.525-.915-.817-1.532-1.828-1.712-2.136-.18-.308-.019-.475.135-.628.138-.137.308-.359.462-.539.154-.18.205-.308.308-.513.103-.205.051-.385-.026-.539-.077-.154-.693-1.667-.949-2.28-.25-.6-.505-.517-.693-.527-.18-.009-.385-.011-.59-.011s-.539.077-.821.385c-.282.308-1.077 1.052-1.077 2.565s1.103 2.977 1.256 3.182c.154.205 2.171 3.318 5.262 4.651.737.318 1.311.508 1.759.65.739.235 1.41.202 1.94.123.592-.088 1.823-.745 2.08-1.463.256-.718.256-1.333.18-1.463-.077-.128-.282-.205-.59-.359z"/>
            </svg>
            </button>
              <button  onclick="markAsDone(this)"class="p-1 bg-blue-800 text-bold text-white rounded hover:bg-blue-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 38 38" 
                  stroke="currentColor" stroke-width="5" 
                  class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </button>
            </td>
          </tr>

          <!-- Missed -->
          <tr class="hover:bg-[#FFF4E0]">
            <td class="px-2 py-1 border-b border-[#FFD699]">Sneha Verma</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">+91 9090909090</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-04</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">2025-08-05</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">Astrologer B</td>
            <td class="px-2 py-1 border-b border-[#FFD699]">
              <span class="inline-block px-2 py-0.5 text-xs bg-orange-100 text-orange-800 rounded">Missed</span>
            </td>
            <td class="px-2 py-1 border-b border-[#FFD699] space-x-1">
              <button onclick="window.location.href='messanger'" class="px-2 py-0.5 bg-red-500 text-white rounded text-xs hover:bg-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 32 32"
                stroke="currentColor"
                stroke-width="2"
                width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 22a2 2 0 002-2H10a2 2 0 002 2zM18 16v-5a6 6 0 10-12 0v5l-2 2h16l-2-2z"/>
            </svg></button>
            
              <button class="px-2 py-0.5 bg-blue-500 hover:bg-blue-800 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
              <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
            </svg>

            </button>
              <button class="px-2 py-0.5 bg-green-400 hover:bg-green-600 text-white rounded text-xs"><svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" 
                width="24" height="24" 
                fill="currentColor">
              <path d="M16.003 3C9.374 3 4 8.373 4 15c0 2.62.764 5.07 2.215 7.2L4 29l7.013-2.188C12.103 27.586 14.03 28 16.003 28 22.63 28 28 22.627 28 16S22.63 3 16.003 3zm-.002 22.5c-1.77 0-3.496-.473-5.005-1.37l-.358-.213-4.162 1.3 1.336-4.064-.232-.372C6.568 19.2 6 17.132 6 15 6 9.49 10.49 5 16 5s10 4.49 10 10-4.49 10-9.999 10.5z"/>
              <path d="M21.246 18.758c-.308-.154-1.823-.898-2.106-1-.282-.103-.487-.154-.693.154-.205.308-.794.999-.973 1.205-.18.205-.359.23-.667.077-.308-.154-1.3-.479-2.476-1.525-.915-.817-1.532-1.828-1.712-2.136-.18-.308-.019-.475.135-.628.138-.137.308-.359.462-.539.154-.18.205-.308.308-.513.103-.205.051-.385-.026-.539-.077-.154-.693-1.667-.949-2.28-.25-.6-.505-.517-.693-.527-.18-.009-.385-.011-.59-.011s-.539.077-.821.385c-.282.308-1.077 1.052-1.077 2.565s1.103 2.977 1.256 3.182c.154.205 2.171 3.318 5.262 4.651.737.318 1.311.508 1.759.65.739.235 1.41.202 1.94.123.592-.088 1.823-.745 2.08-1.463.256-.718.256-1.333.18-1.463-.077-.128-.282-.205-.59-.359z"/>
            </svg>
            </button>
              <button  onclick="markAsDone(this)"class="p-1 bg-blue-800 text-bold text-white rounded hover:bg-blue-500 transition">
              <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 38 38" 
                  stroke="currentColor" stroke-width="5" 
                  class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </button>
            </td>
          </tr>
        </tbody>
      </table>


    </div>
  </div>

</div>

<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
<script>
function markAsDone(button) {
  
  let row = button.closest("tr");

  let statusCell = row.querySelector("td:nth-child(6) span");

  statusCell.textContent = "Done";
  statusCell.className = "inline-block px-2 py-0.5 text-xs bg-green-100 text-green-800 rounded";

  button.disabled = true;
  button.classList.add("opacity-50", "cursor-not-allowed");
}
</script>


<?php include("layouts/footer.php") ?>
