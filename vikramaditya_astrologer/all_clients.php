<?php include("layouts/header.php") ?>
    
<div class="main-content p-4 md:p-6">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Clients</h1>
        <a href="add_clients">
            <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] w-full md:w-auto">+ Add Client</button>
        </a>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-4 md:mb-6 border border-[#FFD699] flex flex-col md:flex-row md:items-center md:justify-between gap-2">
      <input type="text" placeholder="Search Clients." class="border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
      <select class="border border-gray-300 rounded px-4 py-2 w-full md:w-auto">
          <option value="">All</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
      </select>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699]">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">Client Master List</h2>
        
        <div class="overflow-x-auto md:overflow-x-visible sm:overflow-x-visible -webkit-overflow-scrolling-touch">
          <table class="min-w-[700px] md:min-w-full sm:min-w-full border border-[#FFD699] rounded-lg overflow-hidden">
            <thead>
              <tr class="bg-[#FFEBD6] text-left text-sm font-semibold text-[#5a2d00]">
                <th class="p-3 text-center border-b border-[#FFD699] w-12"></th>
                <th class="p-3 text-center border-b border-[#FFD699]">ID</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Client Type</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Name</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Phone</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Gender</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white text-gray-700 text-sm">
              <tr class="hover:bg-[#FFF4E0] transition">
                <td class="px-3 py-3 border-b border-[#FFD699] text-center">
                    <button onclick="toggleDetails(this)" class="toggle-btn w-7 h-7 flex items-center justify-center rounded-full bg-[#7A3E00] text-white font-bold focus:outline-none">
                    +
                    </button>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">1</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]" id="clientType_1">Premium</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699] font-medium"><a href="client_view" class="hover:underline">Rajesh Kumar</a><br>
                <span class="text-blue-500 openFamily" data-client-id="1" style="cursor:pointer;">Family Member(2)</span><br><a class="text-blue-500" href="add_family">Add Family</a></td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">+919876543210</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">Male</td>
                <td class="px-3 py-3 text-center text-green-800 border-b border-[#FFD699]" id="statusCell_1">Active</td>
              </tr>

              <tr class="detail-row hidden">
                <td colspan="6" class="px-6 py-5 border-b border-[#FFD699] bg-[#FFF9F2]">
                  <div class="space-y-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <p><span class="font-semibold">Email:</span> rajesh@example.com</p>
                        <p><span class="font-semibold">Date of Birth:</span> 16/05/1998</p>
                        <p><span class="font-semibold">Time of Birth:</span> 03:29 PM</p>
                        <p><span class="font-semibold">Place of Birth:</span> Jorhat</p>
                        <p><span class="font-semibold">Address:</span> Jorhat</p>
                        <p>
                        <span id="statusBadge_1"
                          class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 cursor-pointer"
                          onclick="toggleStatus(1)">Active</span>
                        </p>
                        
                    <p>
                    <button onclick="window.location.href='client_edit'" class="px-2 py-1 bg-yellow-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
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
                    </button></p>
                    <p class="flex items-center gap-2">
                      <span class="font-semibold">Promises:</span>
                      <button onclick="window.location.href='client_promises'" class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                        View
                      </button>
                    </p>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                        <p class="font-semibold mb-2">Update Type:</p>
                        <div class="flex space-x-6">
                        <label><input type="radio" name="type_1" value="VIP" onchange="updateType(1,this.value)"> VIP</label>
                        <label><input type="radio" name="type_1" value="Premium" checked onchange="updateType(1,this.value)"> Premium</label>
                        <label><input type="radio" name="type_1" value="General" onchange="updateType(1,this.value)"> General</label>
                        </div>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                      <div class="flex justify-between items-center">
                        <p class="font-semibold">Family Members:</p>
                        <div class="flex items-center gap-2">
                          <button onclick="window.location.href='add_family'" class="px-3 py-1 text-xs rounded bg-[#7A3E00] text-white hover:bg-[#5a2d00]">+ Add Family</button>
                        </div>
                      </div>
                      <ul id="familyList_1" class="list-disc pl-6 mt-2 text-gray-600 space-y-1">
                        <li>Rina Kumari (Spouse)</li>
                        <li>Aditya Kumar (son)</li>
                      </ul>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                        <p><span class="font-semibold">Referred By:</span> Anju</p>
                        <p><span class="font-semibold">Registered On:</span> 12 August 2025</p>
                    </div>
                  <div>
          
                </td>
              </tr>
                <!-- ============ Client 2 ============ -->
              <tr class="hover:bg-[#f7e2e2ff] transition">
                <td class="px-3 py-3 border-b border-[#FFD699] text-center">
                  <button onclick="toggleDetails(this)" class="toggle-btn w-7 h-7 flex items-center justify-center rounded-full bg-[#7A3E00] text-white font-bold">+</button>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">2</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]" id="clientType_2">Premium</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699] font-medium"><a href="client_view" class="hover:underline">
                  Sita Sharma</a><br>
                  <span class="text-blue-500 openFamily" data-client-id="2" style="cursor:pointer;">Family Member(1)</span><br>
                  <a class="text-blue-500" href="add_family">Add Family</a>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">+91 9123456780</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">Female</td>
                <td class="px-3 py-3 text-red-800 text-center border-b border-[#FFD699]" id="statusCell_2">Inactive</td>
              </tr>
              <tr class="detail-row hidden">
                <td colspan="6" class="px-6 py-5 border-b border-[#FFD699] bg-[#FFF9F2]">
                  <div class="space-y-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Email:</span> sita@example.com</p>
                      <p><span class="font-semibold">Date of Birth:</span> 22/09/1992</p>
                      <p><span class="font-semibold">Time of Birth:</span> 11:15 AM</p>
                      <p><span class="font-semibold">Place of Birth:</span> Delhi</p>
                      <p><span class="font-semibold">Address:</span> Delhi</p>
                      <p>
                        <span class="font-semibold">Status:</span>
                        <span id="statusBadge_2"
                          class="px-2 py-1 rounded text-xs bg-red-100 text-red-700 cursor-pointer"
                          onclick="toggleStatus(2)">Inactive</span>
                      </p>
                    </div>

                    <div class="flex space-x-2">
                      <button onclick="window.location.href='client_edit?client=2'" class="px-2 py-1 bg-yellow-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
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

                    <div class="border-t border-[#FFD699] pt-4">
                      <p class="font-semibold mb-2">Update Type:</p>
                      <div class="flex space-x-6">
                        <label><input type="radio" name="type_2" value="VIP" onchange="updateType(2,this.value)"> VIP</label>
                        <label><input type="radio" name="type_2" value="Premium" checked onchange="updateType(2,this.value)"> Premium</label>
                        <label><input type="radio" name="type_2" value="General" onchange="updateType(2,this.value)"> General</label>
                      </div>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                      <div class="flex justify-between items-center">
                        <p class="font-semibold">Family Members:</p>
                        <div class="flex items-center gap-2">
                          <button onclick="window.location.href='add_family'" class="px-3 py-1 text-xs rounded bg-[#7A3E00] text-white hover:bg-[#5a2d00]">+ Add Family</button>
                        </div>
                      </div>
                      <ul id="familyList_2" class="list-disc pl-6 mt-2 text-gray-600 space-y-1">
                        <li>Meera Sharma (Spouse)</li>
                      </ul>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Referred By:</span> Ravi</p>
                      <p><span class="font-semibold">Registered On:</span> 05 June 2025</p>
                    </div>
                  </div>
                </td>
              </tr>

              <!-- ============ Client 3 ============ -->
              <tr class="hover:bg-[#FFF4E0] transition">
                <td class="px-3 py-3 border-b border-[#FFD699] text-center">
                  <button onclick="toggleDetails(this)" class="toggle-btn w-7 h-7 flex items-center justify-center rounded-full bg-[#7A3E00] text-white font-bold">+</button>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">3</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]" id="clientType_3">VIP</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699] font-medium"><a href="client_view" class="hover:underline">
                 Rina Kumari</a><br>
                  <span class="text-blue-500 openFamily" data-client-id="3" style="cursor:pointer;">Family Member(1)</span><br>
                  <a class="text-blue-500" href="add_family">Add Family</a>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">+91 9811122233</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">Female</td>
                <td class="px-3 py-3 text-green-800 text-center border-b border-[#FFD699]" id="statusCell_3">Active</td>
              </tr>
              <tr class="detail-row hidden">
                <td colspan="6" class="px-6 py-5 border-b border-[#FFD699] bg-[#FFF9F2]">
                  <div class="space-y-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Email:</span> rina@example.com</p>
                      <p><span class="font-semibold">Date of Birth:</span> 05/02/1985</p>
                      <p><span class="font-semibold">Time of Birth:</span> 09:45 AM</p>
                      <p><span class="font-semibold">Place of Birth:</span> Mumbai</p>
                      <p><span class="font-semibold">Address:</span> Mumbai</p>
                      <p>
                        <span class="font-semibold">Status:</span>
                        <span id="statusBadge_3"
                          class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 cursor-pointer"
                          onclick="toggleStatus(3)">Active</span>
                      </p>
                    </div>

                    <div class="flex space-x-2">
                      <button onclick="window.location.href='client_edit?client=3'" class="px-2 py-1 bg-yellow-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
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

                    <div class="border-t border-[#FFD699] pt-4">
                      <p class="font-semibold mb-2">Update Type:</p>
                      <div class="flex space-x-6">
                        <label><input type="radio" name="type_3" value="VIP" checked onchange="updateType(3,this.value)"> VIP</label>
                        <label><input type="radio" name="type_3" value="Premium" onchange="updateType(3,this.value)"> Premium</label>
                        <label><input type="radio" name="type_3" value="General" onchange="updateType(3,this.value)"> General</label>
                      </div>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                      <div class="flex justify-between items-center">
                        <p class="font-semibold">Family Members:</p>
                        <button onclick="window.location.href='add_family'" class="px-3 py-1 text-xs rounded bg-[#7A3E00] text-white hover:bg-[#5a2d00]">+ Add Family</button>
                      </div>
                      <ul id="familyList_3" class="list-disc pl-6 mt-2 text-gray-600 space-y-1">
                        <li>Rajesh Kumar (Spouse)</li>
                      </ul>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Referred By:</span> --</p>
                      <p><span class="font-semibold">Registered On:</span> 20 March 2025</p>
                    </div>
                  </div>
                </td>
              </tr>

              <!-- ============ Client 4 ============ -->
              <tr class="hover:bg-[#FFF4E0] transition">
                <td class="px-3 py-3 border-b border-[#FFD699] text-center">
                  <button onclick="toggleDetails(this)" class="toggle-btn w-7 h-7 flex items-center justify-center rounded-full bg-[#7A3E00] text-white font-bold">+</button>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">4</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]" id="clientType_4">General</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699] font-medium"><a href="client_view" class="hover:underline">
                  Aditya Kumar</a><br>
                  <span class="text-blue-500 openFamily" data-client-id="4" style="cursor:pointer;">Family Member(1)</span><br>
                  <a class="text-blue-500" href="add_family">Add Family</a>
                </td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">+91 9998877766</td>
                <td class="px-3 py-3 text-center border-b border-[#FFD699]">Male</td>
                <td class="px-3 py-3 text-green-800 text-center border-b border-[#FFD699]" id="statusCell_4">Active</td>
              </tr>
              <tr class="detail-row hidden">
                <td colspan="6" class="px-6 py-5 border-b border-[#FFD699] bg-[#FFF9F2]">
                  <div class="space-y-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Email:</span> aditya@example.com</p>
                      <p><span class="font-semibold">Date of Birth:</span> 14/07/1995</p>
                      <p><span class="font-semibold">Time of Birth:</span> 07:20 PM</p>
                      <p><span class="font-semibold">Place of Birth:</span> Bangalore</p>
                      <p><span class="font-semibold">Address:</span> Bangalore</p>
                      <p>
                        <span class="font-semibold">Status:</span>
                        <span id="statusBadge_4"
                          class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 cursor-pointer"
                          onclick="toggleStatus(4)">Active</span>
                      </p>
                    </div>

                    <div class="flex space-x-2">
                      <button onclick="window.location.href='client_edit?client=4'" class="px-2 py-1 bg-yellow-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
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

                    <div class="border-t border-[#FFD699] pt-4">
                      <p class="font-semibold mb-2">Update Type:</p>
                      <div class="flex space-x-6">
                        <label><input type="radio" name="type_4" value="VIP" onchange="updateType(4,this.value)"> VIP</label>
                        <label><input type="radio" name="type_4" value="Premium" onchange="updateType(4,this.value)"> Premium</label>
                        <label><input type="radio" name="type_4" value="General" checked onchange="updateType(4,this.value)"> General</label>
                      </div>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                      <div class="flex justify-between items-center">
                        <p class="font-semibold">Family Members:</p>
                        <button onclick="window.location.href='add_family'" class="px-3 py-1 text-xs rounded bg-[#7A3E00] text-white hover:bg-[#5a2d00]">+ Add Family</button>
                      </div>
                      <ul id="familyList_4" class="list-disc pl-6 mt-2 text-gray-600 space-y-1">
                        <li>Rajesh Kumar (Father)</li>
                      </ul>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                      <p><span class="font-semibold">Referred By:</span> ---</p>
                      <p><span class="font-semibold">Registered On:</span> 01 January 2025</p>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
            

            <script>
            function toggleDetails(btn) {
                let row = btn.closest("tr");
                let detailRow = row.nextElementSibling;
                if (detailRow.classList.contains("hidden")) {
                detailRow.classList.remove("hidden");
                btn.textContent = "-";
                } else {
                detailRow.classList.add("hidden");
                btn.textContent = "+";
                }
            }

            function updateType(id, value) {
                document.getElementById("clientType_" + id).textContent = value;
            }

            </script>
        </div>
    </div>
</div>
<div id="familyModal" class="hidden fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg shadow-lg p-6 w-96 relative">
    
    <button 
      id="closeFamily" 
      class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      ✕
    </button>
    <h2 class="text-xl font-bold text-[#7A3E00] mb-4">Family Members</h2>
    <ul class="space-y-2">
      <li class="p-2 border rounded">Rina Kumari (Spouse)</li>
      <li class="p-2 border rounded">Aarav Kumar (Son)</li>
    </ul>

    <div class="mt-4 flex justify-end">
      <button 
        id="closeFamilyBtn" 
        class="px-4 py-2 bg-[#7A3E00] text-white rounded-lg hover:bg-[#5a2d00]">
        Close
      </button>
    </div>
  </div>
</div>

<script>
  function toggleDetails(btn) {
    let row = btn.closest("tr");
    let detailRow = row.nextElementSibling;
    if (detailRow.classList.contains("hidden")) {
      detailRow.classList.remove("hidden");
      btn.textContent = "-";
    } else {
      detailRow.classList.add("hidden");
      btn.textContent = "+";
    }
  }

  function updateType(id, value) {
    const el = document.getElementById("clientType_" + id);
    if (el) el.textContent = value;
  }
  function addFamily(id) {
    let name = prompt("Enter Family Member Name:");
    if (!name) return;
    let list = document.getElementById("familyList_" + id);
    if (!list) return;
    let li = document.createElement("li");
    li.textContent = name;
    list.appendChild(li);
    const label = document.querySelector('.openFamily[data-client-id="' + id + '"]');
    if (label) {
      const count = list.children.length;
      label.textContent = 'Family Member(' + count + ')';
    }
  }

  const modal = document.getElementById("familyModal");
  const closeBtn = document.getElementById("closeFamily");
  const closeFooterBtn = document.getElementById("closeFamilyBtn");
  const modalList = modal ? modal.querySelector("ul") : null;

  document.querySelectorAll(".openFamily").forEach(el => {
    el.addEventListener("click", (e) => {
      e.preventDefault();
      const id = el.dataset.clientId;
      if (!modal || !modalList) return;
      const sourceList = document.getElementById("familyList_" + id);

      modalList.innerHTML = "";

      if (sourceList && sourceList.children.length) {
        Array.from(sourceList.children).forEach(li => {
          const item = document.createElement("li");
          item.className = "p-2 border border-gray-300 rounded";
          item.textContent = li.textContent;
          modalList.appendChild(item);
        });
      } else {
        const item = document.createElement("li");
        item.className = "p-2 border rounded";
        item.textContent = "No family members.";
        modalList.appendChild(item);
      }

      modal.classList.remove("hidden");
    });
  });

  if (closeBtn) closeBtn.addEventListener("click", () => modal.classList.add("hidden"));
  if (closeFooterBtn) closeFooterBtn.addEventListener("click", () => modal.classList.add("hidden"));
  window.addEventListener("click", (e) => {
    if (e.target === modal) modal.classList.add("hidden");
  });

  function showClientDetail(name, phone, email, status) {
    const elName = document.getElementById('client-name');
    const elPhone = document.getElementById('client-phone');
    const elEmail = document.getElementById('client-email');
    const elStatus = document.getElementById('client-status');
    if (elName) elName.textContent = name;
    if (elPhone) elPhone.textContent = phone;
    if (elEmail) elEmail.textContent = email;
    if (elStatus) elStatus.textContent = status;
    const detail = document.getElementById('client-detail');
    if (detail) detail.classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  function hideClientDetail() {
    const detail = document.getElementById('client-detail');
    if (detail) detail.classList.add('hidden');
  }
</script>
<script>
function toggleStatus(clientId) {
  const badge = document.getElementById("statusBadge_" + clientId);
  const cell = document.getElementById("statusCell_" + clientId);

  if (badge.innerText === "Active") {
    badge.innerText = "Inactive";
    badge.classList.remove("bg-green-100", "text-green-700");
    badge.classList.add("bg-red-100", "text-red-700");

    cell.innerText = "Inactive";
    cell.classList.remove("text-green-800");
    cell.classList.add("text-red-800");

  } else {
    badge.innerText = "Active";
    badge.classList.remove("bg-red-100", "text-red-700");
    badge.classList.add("bg-green-100", "text-green-700");

    cell.innerText = "Active";
    cell.classList.remove("text-red-800");
    cell.classList.add("text-green-800");
  }
}
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('input[placeholder="Search Clients."]');
    const statusFilter = document.querySelector('select');

    function filterClients() {
        const searchValue = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();

        const mainRows = document.querySelectorAll('tbody tr:not(.detail-row)');

        mainRows.forEach(mainRow => {
            const cells = mainRow.querySelectorAll('td');
            const name = cells[3].textContent.toLowerCase();
            const status = cells[6].textContent.toLowerCase();

            const matchesSearch = name.includes(searchValue); 
            const matchesStatus = statusValue === '' || status === statusValue;

            const showRow = matchesSearch && matchesStatus;
            
            mainRow.style.display = showRow ? '' : 'none';

            const nextRow = mainRow.nextElementSibling;
            if (nextRow && nextRow.classList.contains('detail-row')) {
                nextRow.style.display = showRow ? '' : 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterClients);
    statusFilter.addEventListener('change', filterClients);
});
</script>

<?php include("layouts/footer.php") ?>