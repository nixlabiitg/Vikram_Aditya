<?php include('layouts/header.php'); ?>

<div class="p-6">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
  <h2 class="text-2xl font-semibold text-gray-700 mb-6">Suggestions</h2>
  <p><strong>Name:</strong> Rajesh, <strong>Phone no. :</strong> 9876543210, <strong>ID :</strong> VGJUN250006, <strong>Referred by :</strong> Ram</p>
  </div>
  <!-- Tabs -->
  <div x-data="leadTabs">

    <div class="border-b border-gray-200 mb-6 overflow-x-auto">
      <div class="flex flex-wrap md:flex-nowrap space-x-0 md:space-x-12">
        <button 
          @click="tab = 'profile'" 
          :class="tab === 'profile' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Profile
        </button>
        <button 
          @click="tab = 'problem'" 
          :class="tab === 'problem' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Problem
        </button>
        <button 
          @click="tab = 'investigation'" 
          :class="tab === 'investigation' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Investigation
        </button>
        <button 
          @click="tab = 'remedy'" 
          :class="tab === 'remedy' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Remedy
        </button>
        <button 
          @click="tab = 'kavach'" 
          :class="tab === 'kavach' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Kavach
        </button>
        <button 
          @click="tab = 'dravya'" 
          :class="tab === 'dravya' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Dravya
        </button>
        <button 
          @click="tab = 'puja'" 
          :class="tab === 'puja' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Puja
        </button>
        <button 
          @click="tab = 'planet'" 
          :class="tab === 'planet' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Planet
        </button>
        <button 
          @click="tab = 'note'" 
          :class="tab === 'note' ? 'border-b-2 border-yellow-600 text-yellow-700' : 'text-gray-500'" 
          class="pb-2 font-medium">
          Note
        </button>
      </div>
    </div>

    <!-- profile Entry -->
    <div x-show="tab === 'profile'">
      <div class="bg-white rounded-xl shadow p-6">
        <form class="space-y-6" onsubmit="return saveprofile(event);">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Full Name</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Rajesh Kumar">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Phone Number</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="+919876543210">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Email</label>
                  <input type="email" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="rajesh@gmail.com">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                  <input type="date" class="w-full border border-gray-300 rounded px-4 py-2">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Age</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                  <input type="time" class="w-full border border-gray-300 rounded px-4 py-2">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Place of Birth</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="City, Country">
                </div>
                <div>
                  <label class="block text-gray-700 font-medium mb-1">Address</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="123 Main St, City, Country"> 
                </div>
                <div class="w-full">
                  <label class="block text-[#7A3E00] font-semibold mb-2">Gender</label>
                  <div class="flex flex-wrap gap-4">
                      
                    <!-- Female -->
                    <label class="flex items-center space-x-2 cursor-pointer">
                      <input type="radio" name="gender" value="female" class="hidden peer">
                      <div class="h-5 w-5 rounded-full border-2 border-gray-400 
                        peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                      <span>Female</span>
                    </label>

                    <!-- Male -->
                    <label class="flex items-center space-x-2 cursor-pointer">
                      <input type="radio" name="gender" value="male" class="hidden peer">
                      <div class="h-5 w-5 rounded-full border-2 border-gray-400 
                        peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                      <span>Male</span>
                    </label>

                    <!-- Other -->
                    <label class="flex items-center space-x-2 cursor-pointer">
                      <input type="radio" name="gender" value="other" class="hidden peer">
                      <div class="h-5 w-5 rounded-full border-2 border-gray-400 
                        peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                      <span>Other</span>
                    </label>
                    
                  </div>
                </div>

                
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Additional Notes</label>
                <textarea class="w-full border border-gray-300 rounded px-4 py-2" rows="4" placeholder="Enter any remarks or client requirements..."></textarea>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Update Profile</button>
            </div>
        </form>
    </div>
    </div>
    <!-- Entry -->
    <div x-show="tab === 'problem'">
      <!-- client Problem -->
      <div class="bg-white rounded-xl shadow p-6">
        <form class="space-y-6" onsubmit="return saveproblem(event);">
          <div class="flex items-center justify-between mb-4">
            <h2 class="font-semibold text-[#7A3E00]">Client Problem</h2>
            <a href="#" onclick="openproblemModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>            
          </div>
          <div id="problemModal" class="fixed inset-0 bg-black/30 hidden z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
              <!-- Close Button -->
              <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl">&times;</button>
              
              <!-- Title -->
              <h3 class="text-lg font-semibold mb-4">Add Problem</h3>

              <!-- Form -->
              <form onsubmit="saveProblem(event)">
                <label class="block text-sm font-medium mb-1">Choose Problem</label>
                <select id="problemCategory" class="w-full border border-gray-400 rounded p-2 mb-3" required>
                  <option value="">Choose an option</option>
                  <option value="loan">Loan Rin Mukti</option>
                  <option value="marriage">Blockage in Marriage</option>
                </select>

                <!-- Add new category field -->
                <div class="flex gap-2 mb-3">
                  <input id="newCategory" type="text" class="flex-1 border border-gray-400 rounded p-2" placeholder="Add new category">
                  <button type="button" onclick="addCategory()" class="bg-orange-600 text-white px-3 rounded hover:bg-orange-700">
                    +
                  </button>
                </div>

                <label class="block text-sm font-medium mb-1">Enter sub-problem in English</label>
                <textarea class="w-full border border-gray-400 rounded p-2 mb-3" placeholder="Enter problem" required></textarea>

                <label class="block text-sm font-medium mb-1">Enter sub-problem in Assamese</label>
                <textarea class="w-full border border-gray-400 rounded p-2 mb-4" placeholder="সমস্যা লিখক"></textarea>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                  Add Problem
                </button>
              </form>
            </div>
          </div>

          <script>
            function openproblemModal() {
              document.getElementById("problemModal").classList.remove("hidden");
            }

            function closeModal() {
              document.getElementById("problemModal").classList.add("hidden");
            }

            function addCategory() {
              let input = document.getElementById("newCategory");
              let select = document.getElementById("problemCategory");
              let value = input.value.trim();

              if (value !== "") {
                let option = document.createElement("option");
                option.value = value.toLowerCase().replace(/\s+/g, "-");
                option.textContent = value;
                select.appendChild(option);

                select.value = option.value; 
                input.value = "";
              } else {
                alert("Please enter a category name");
              }
            }

            function saveProblem(event) {
              event.preventDefault();
              alert("Problem saved! (later this will go to database)");
              closeModal(); 
            }
          </script>

          
          <!-- Selection -->
          <div class="flex flex-col md:flex-row gap-3 mb-4">
            <select id="problemType" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <option value="">Choose type</option>
              <option>Financial</option>
              <option>Pre Marriage Issue</option>
            </select>
            <select id="problemName" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <option value="">Select an option</option>
              <option>Loan Rin Mukti</option>
              <option>Blockage in Marriage</option>
            </select>
            <button type="button" onclick="addProblemRow()" 
                    class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">
              Add
            </button>
          </div>
        </form>
        <!-- Table -->
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table  id="problemTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
          <thead>
            <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
              <th class="px-3 py-2 w-10">#</th>
              <th class="px-3 py-2">Problem Name</th>
              <th class="px-3 py-2">Problem Type</th>
              <th class="px-3 py-2"></th>
            </tr>
          </thead>
          <tbody>
            <!-- Existing rows -->
          </tbody>
        </table>
        </div>

        <script>
          function addProblemRow() {
            let type = document.getElementById("problemType").value;
            let name = document.getElementById("problemName").value;

            if (!type || !name) {
              alert("Please select both Problem Type and Problem Name");
              return;
            }

            let table = document.getElementById("problemTable").getElementsByTagName("tbody")[0];
            let newRow = table.insertRow();
            let rowCount = table.rows.length;

            newRow.innerHTML = `
              <td class="px-3 py-2">${rowCount}</td>
              <td class="px-3 py-2">${type}</td>
              <td class="px-3 py-2">${name}</td>
              <td class="px-3 py-2 text-center">
                <button onclick="this.closest('tr').remove()" class="text-red-500 hover:text-red-700">
                  <svg xmlns="http://www.w3.org/2000/svg" 
                      class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </td>
            `;
          }
        </script>
        <!-- Note -->
        <div class="flex gap-3">
          <input type="text" placeholder="Enter problem note"
                class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
          <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
      </div>
      
    </div>

    <!-- investigation Import -->
    <div x-show="tab === 'investigation'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-6" onsubmit="return saveinvestigation(event);">
        <div class="flex items-center justify-between mb-4">
          <h2 class="font-semibold text-[#7A3E00]">Investigation</h2>
          <a href="#" onclick="openInvestigationModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>
        </div>
        <!-- Investigation Modal -->
        <div id="investigationModal" class="fixed inset-0 bg-black/30 hidden z-50 flex items-center justify-center">
          <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
            
            <!-- Close Button -->
            <button onclick="closeInvestigationModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl">&times;</button>
            
            <!-- Title -->
            <h3 class="text-lg font-semibold mb-4">Add Investigation</h3>

            <!-- Form -->
            <form onsubmit="saveInvestigation(event)">
              
              <!-- Investigation Input -->
              <label class="block text-sm font-medium mb-1">New Investigation</label>
              <input id="newInvestigation" type="text" class="w-full border border-gray-400 rounded p-2 mb-4" placeholder="Enter investigation" required>

              <!-- Save Button -->
              <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">
                Save Investigation
              </button>
            </form>
          </div>
        </div>

        <script>
          function openInvestigationModal() {
            document.getElementById("investigationModal").classList.remove("hidden");
          }

          function closeInvestigationModal() {
            document.getElementById("investigationModal").classList.add("hidden");
          }

          function saveInvestigation(event) {
            event.preventDefault();

            let input = document.getElementById("newInvestigation");
            let value = input.value.trim();

            if (value !== "") {
              // Add investigation dynamically to dropdown
              let investigationSelect = document.getElementById("investigationSelect");
              let option = document.createElement("option");
              option.value = value.toLowerCase().replace(/\s+/g, "-");
              option.textContent = value;
              investigationSelect.appendChild(option);

              // Auto-select the new investigation
              investigationSelect.value = option.value;

              // Clear input & close modal
              input.value = "";
              closeInvestigationModal();
            } else {
              alert("Please enter an investigation name");
            }
          }
        </script>


        <!-- Selection -->
        <div class="flex flex-col md:flex-row gap-3 mb-4">
          <select id="investigationType" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
            <option value="">Choose investigation</option>
            <option>Guru Dosh</option>
            <option>Graha Dosh</option>
          </select>
          <select id="investigationPhase" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
            <option value="">Select Phase</option>
            <option>Phase 1</option>
            <option>Phase 2</option>
          </select>
          <button type="button" onclick="addInvestigationRow()" class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
      </form>

      <!-- Table -->
      <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table  id="investigationTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
      
        <thead>
          <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
            <th class="px-3 py-2 w-10">#</th>
            <th class="px-3 py-2">Investigation Type</th>
            <th class="px-3 py-2">Investigation Phase</th>
            <th class="px-3 py-2"></th>
          </tr>
        </thead>
        <tbody>
          <!-- Existing rows -->
        </tbody>
      </table>
      </div>

      <script>
        function addInvestigationRow() {
          let type = document.getElementById("investigationType").value;
          let phase = document.getElementById("investigationPhase").value;

          if (!type || !phase) {
            alert("Please select both Problem Type and Problem Name");
            return;
          }

          let table = document.getElementById("investigationTable").getElementsByTagName("tbody")[0];
          let newRow = table.insertRow();
          let rowCount = table.rows.length;

          newRow.innerHTML = `
            <td class="px-3 py-2">${rowCount}</td>
            <td class="px-3 py-2">${type}</td>
            <td class="px-3 py-2">${phase}</td>
            <td class="px-3 py-2 text-center">
              <button onclick="this.closest('tr').remove()" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
            </td>
          `;
        }
      </script>
      <!-- Note -->
      <div class="flex gap-3">
        <input type="text" placeholder="Enter investigation note"
              class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
      </div>
    </div>

    <!-- remedy Connect -->
    <div x-show="tab === 'remedy'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return saveremedy(event);">
        <div class="flex items-center justify-between mb-4">
          <h2 class="font-semibold text-[#7A3E00]">Remedy</h2>
          <a href="#" onclick="openRemedyModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>
        </div>
        <!-- Remedy Modal -->
        <div id="remedyModal" class="fixed inset-0 bg-black/30 hidden z-50 flex items-center justify-center">
          <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
            
            <!-- Close Button -->
            <button onclick="closeRemedyModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl">&times;</button>
            
            <!-- Title -->
            <h3 class="text-lg font-semibold mb-4">Add Remedy</h3>

            <!-- Form -->
            <form onsubmit="saveRemedy(event)">
              
              <!-- Remedy Input -->
              <label class="block text-sm font-medium mb-1">New Remedy</label>
              <input id="newRemedy" type="text" class="w-full border border-gray-400 rounded p-2 mb-4" placeholder="Enter remedy" required>

              <!-- Save Button -->
              <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Save Remedy
              </button>
            </form>
          </div>
        </div>

        <script>
          function openRemedyModal() {
            document.getElementById("remedyModal").classList.remove("hidden");
          }

          function closeRemedyModal() {
            document.getElementById("remedyModal").classList.add("hidden");
          }

          function saveRemedy(event) {
            event.preventDefault();

            let input = document.getElementById("newRemedy");
            let value = input.value.trim();

            if (value !== "") {
              // Add remedy dynamically to main Remedy select
              let remedySelect = document.getElementById("remedySelect");
              let option = document.createElement("option");
              option.value = value.toLowerCase().replace(/\s+/g, "-");
              option.textContent = value;
              remedySelect.appendChild(option);
              remedySelect.value = option.value;

              // Clear input & close modal
              input.value = "";
              closeRemedyModal();
            } else {
              alert("Please enter a remedy name");
            }
          }
        </script>

        <!-- Selection -->
        <div class="flex flex-col md:flex-row gap-3 mb-4">
          <select id="RemedyplantType" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
            <option value="">Choose Planet</option>
            <option>Venus</option>
            <option>Jupiter</option>
          </select>
          <select id="remedyDet" class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
            <option>Remedy</option>
            <option>1</option>
            <option>2</option>
          </select>
          <button type="button" onclick="addRemedyRow()" class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
      </form>

      <!-- Table -->
      <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table id="remedyTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
      
        <thead>
          <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
            <th class="px-3 py-2 w-10">#</th>
            <th class="px-3 py-2">Planet Name</th>
            <th class="px-3 py-2">Remedy</th>
            <th class="px-3 py-2"></th>
          </tr>
        </thead>
        <tbody>
          <!-- Existing rows -->
        </tbody>
      </table>
      </div>

      <script>
        function addRemedyRow() {
          let type = document.getElementById("RemedyplantType").value;
          let name = document.getElementById("remedyDet").value;

          if (!type || !name) {
            alert("Please select valid option");
            return;
          }

          let table = document.getElementById("remedyTable").getElementsByTagName("tbody")[0];
          let newRow = table.insertRow();
          let rowCount = table.rows.length;

          newRow.innerHTML = `
            <td class="px-3 py-2">${rowCount}</td>
            <td class="px-3 py-2">${type}</td>
            <td class="px-3 py-2">${name}</td>
            <td class="px-3 py-2 text-center">
              <button onclick="this.closest('tr').remove()" class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
            </td>
          `;
        }
      </script>

      <!-- Note -->
      <div class="flex gap-3">
        <input type="text" placeholder="Enter Note for Remidies"
              class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
      </div>
    </div>
    
    <!-- Kavach -->
    <div x-show="tab === 'kavach'">
      <div class="bg-white rounded-xl shadow p-6">
        <form class="space-y-6" onsubmit="return savekavach(event);">
          <div class="flex items-center justify-between mb-4">
          <h2 class="font-semibold text-[#7A3E00]">Kavach</h2>
          <a href="#" onclick="openKavachModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>
          </div>
          <!-- Kavach Modal -->
          <div id="kavachModal" class="fixed inset-0 bg-black/40 hidden z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
              <!-- Close Button -->
              <button onclick="closeKavachModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl">&times;</button>
              <!-- Title -->
              <h3 class="text-lg font-semibold mb-4">Add New Kavach</h3>

              <!-- Form -->
              <form onsubmit="saveKavach(event)">
                <!-- Kavach Name -->
                <label class="block text-sm font-medium mb-1">Kavach Name</label>
                <input id="newKavachName" type="text" class="w-full border border-gray-400 rounded p-2 mb-4" placeholder="Enter kavach name" required>

                <!-- Price -->
                <label class="block text-sm font-medium mb-1">Price</label>
                <input id="newKavachPrice" type="number" class="w-full border border-gray-400 rounded p-2 mb-4" placeholder="Enter price" required>

                <!-- Save Button -->
                <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">
                  Save Kavach
                </button>
              </form>
            </div>
          </div>

          <script>
            function openKavachModal() {
              document.getElementById("kavachModal").classList.remove("hidden");
            }

            function closeKavachModal() {
              document.getElementById("kavachModal").classList.add("hidden");
            }

            function saveKavach(event) {
              event.preventDefault();

              let name = document.getElementById("newKavachName").value.trim();
              let price = document.getElementById("newKavachPrice").value.trim();

              if (name !== "" && price !== "") {
                let kavachSelect = document.getElementById("kavachSelect");
                let option = document.createElement("option");
                option.value = name.toLowerCase().replace(/\s+/g, "-");
                option.textContent = `${name} (₹${price})`;
                kavachSelect.appendChild(option);

                // Auto-select the new kavach
                kavachSelect.value = option.value;

                // Reset form & close modal
                document.getElementById("newKavachName").value = "";
                document.getElementById("newKavachPrice").value = "";
                closeKavachModal();
              } else {
                alert("Please fill out both fields");
              }
            }
          </script>

          <!-- Selection -->
          <div class="flex flex-col md:flex-row gap-3 mb-4">
            <select id="kavachSelect" 
                class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <option value="" disabled selected>Choose Kavach</option>
                <option value="Durga Kavach" data-price="500">Durga Kavach</option>
                <option value="Mangal Kavach" data-price="700">Mangal Kavach</option>
              </select>
              <button type="button" 
                onclick="addKavachRow()" 
                class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">
                Add
              </button>
          </div>
        </form>

        <!-- Table -->
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table id="kavachTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
      
          <thead>
            <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
              <th class="px-3 py-2 w-10">#</th>
              <th class="px-3 py-2">Kavach</th>
              <th class="px-3 py-2">Quantity</th>
              <th class="px-3 py-2">Price</th>
              <th class="px-3 py-2">Total</th>
              <th class="px-3 py-2"></th>
            </tr>
          </thead>
          <tbody>
            <!-- Existing rows -->
          </tbody>
        </table>
        </div>

        <script>
          let kavachCount = 0;

          function addKavachRow() {
            const select = document.getElementById("kavachSelect");
            const selectedOption = select.options[select.selectedIndex];

            if (!selectedOption.value) {
              alert("Please select a Kavach first.");
              return;
            }

            const kavachName = selectedOption.value;
            const price = selectedOption.dataset.price || 0; // Default 0 if not given
            const quantity = 1;
            const total = price * quantity;

            kavachCount++;

            const tableBody = document.querySelector("#kavachTable tbody");

            const row = document.createElement("tr");
            row.className = "border-b border-[#FFDCC5] hover:bg-[#FFF2EB]";
            row.innerHTML = `
              <td class="px-3 py-2">${kavachCount}</td>
              <td class="px-3 py-2">${kavachName}</td>
              <td class="px-3 py-2">
                <input type="number" value="${quantity}" min="1" 
                  class="w-16 border rounded px-1 text-center"
                  onchange="updateTotal(this)">
              </td>
              <td class="px-3 py-2 price">${price}</td>
              <td class="px-3 py-2 total">${total}</td>
              <td class="px-3 py-2 text-center">
                <button type="button" onclick="removeRow(this)" 
                  class="text-red-500 hover:text-red-700">
                  <svg xmlns="http://www.w3.org/2000/svg" 
                      class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 
                          01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 
                          00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </td>
            `;

            tableBody.appendChild(row);
          }

          function updateTotal(input) {
            const row = input.closest("tr");
            const price = parseFloat(row.querySelector(".price").textContent);
            const qty = parseInt(input.value);
            row.querySelector(".total").textContent = price * qty;
          }

          function removeRow(button) {
            const row = button.closest("tr");
            row.remove();
          }
        </script>


        <!-- Note -->
        <div class="flex gap-3">
          <input type="text" placeholder="Enter note"
                class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
          <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
      </div>
    </div>

    <!-- dravya Import -->
    <div x-show="tab === 'dravya'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return savedravya(event);">
        <div class="flex items-center justify-between mb-4">
          <h2 class="font-semibold text-[#7A3E00]">Dravya</h2>
          <a href="#" onclick="openDravyaModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>
        </div>
        <!-- Add Dravya Popup -->
        <div id="addDravyaModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden flex items-center justify-center">
          <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
            <h2 class="text-xl font-semibold text-[#7A3E00] mb-4">Add Dravya</h2>

            <form onsubmit="return saveDravya(event)">
              
              <!-- Dravya Dropdown -->
              <label class="block text-gray-700 font-medium mb-2">Dravya</label>
              <select id="dravyaSelect" class="border border-gray-300 rounded-md w-full px-3 py-2 mb-3">
                <option value="">Choose Dravya</option>
                <option value="Stone 1">Stone 1</option>
                <option value="Stone 2">Stone 2</option>
              </select>

              <!-- Add Dravya Input + Button -->
              <div class="flex gap-2 mb-3">
                <input type="text" id="newDravyaName" placeholder="Enter new Dravya"
                      class="border border-gray-300 rounded-md w-full px-3 py-2">
                <button type="button" onclick="addDravya()" 
                        class="px-3 py-2 bg-blue-600 text-white rounded">+</button>
              </div>

              <!-- Upadravya -->
              <label class="block text-gray-700 font-medium mb-2">Upadravya</label>
              <input type="text" id="upadravya" placeholder="Enter Upadravya"
                    class="border border-gray-300 rounded-md w-full px-3 py-2 mb-3">

              <!-- Price -->
              <label class="block text-gray-700 font-medium mb-2">Price</label>
              <input type="number" id="dravyaPrice" placeholder="Enter Price"
                    class="border border-gray-300 rounded-md w-full px-3 py-2 mb-3">

              <!-- Buttons -->
              <div class="flex justify-end gap-3 mt-4">
                <button type="button" onclick="closeDravyaModal()" 
                        class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</button>
                <button type="submit" 
                        class="px-4 py-2 rounded bg-orange-400 text-white hover:bg-orange-500">Save</button>
              </div>
            </form>
          </div>
        </div>
        <script>
          function openDravyaModal() {
            document.getElementById("addDravyaModal").classList.remove("hidden");
          }
          function closeDravyaModal() {
            document.getElementById("addDravyaModal").classList.add("hidden");
          }

          function addDravya() {
            let newDravya = document.getElementById("newDravyaName").value.trim();
            if (newDravya) {
              let select = document.getElementById("dravyaSelect");
              let option = document.createElement("option");
              option.value = newDravya;
              option.text = newDravya;
              select.add(option);
              select.value = newDravya;
              document.getElementById("newDravyaName").value = ""; 
            } else {
              alert("Please enter a Dravya name!");
            }
          }

          function saveDravya(event) {
            event.preventDefault();
            let dravya = document.getElementById("dravyaSelect").value;
            let upadravya = document.getElementById("upadravya").value;
            let price = document.getElementById("dravyaPrice").value;

            alert("Dravya: " + dravya + "\nUpadravya: " + upadravya + "\nPrice: " + price);
            closeDravyaModal();
            return false;
          }
        </script>

        <div class="flex flex-col md:flex-row items-center gap-4 mb-4">
          <div class="flex items-center gap-2">
            <label class="text-gray-700 font-medium">Dravya</label>
            <select id="dravyaselect" 
              class="border border-gray-300 rounded-md px-3 py-2 w-77 focus:outline-none focus:ring-2 focus:ring-orange-400"
              onchange="loadUpadravya(this.value)">
              <option value="">Choose Dravya</option>
              <option value="Stone1">Stone 1</option>
              <option value="Stone2">Stone 2</option>
              <option value="Stone3">Stone 3</option>
            </select>
          </div>

          <div class="flex items-center gap-2">
            <label class="text-gray-700 font-medium">Upadravya</label>
            <select id="upadravyaSelect" 
              class="border border-gray-300 rounded-md px-3 py-2 w-77 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <option value="">Choose Upadravya</option>
            </select>
          </div>

          <button type="button" onclick="addDravyaRow()" 
            class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6 py-2">
            Add
          </button>
        </div>
      </form>
      <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table id="dravyaTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
      
        <thead>
          <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
            <th class="px-3 py-2 w-10">#</th>
            <th class="px-3 py-2">Dravya</th>
            <th class="px-3 py-2">Upadravya</th>
            <th class="px-3 py-2">Quantity</th>
            <th class="px-3 py-2">Price</th>
            <th class="px-3 py-2">Total</th>
            <th class="px-3 py-2"></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table></div>

      <script>
        let dravyaCount = 0;

        const dravyaUpadravyaMap = {
          "Stone1": [
            { name: "Crystal", price: 300 },
            { name: "Pearl", price: 450 }
          ],
          "Stone2": [
            { name: "Ruby", price: 900 },
            { name: "Emerald", price: 1200 }
          ],
          "Stone3": [
            { name: "Diamond", price: 5000 },
            { name: "Sapphire", price: 2500 }
          ]
        };

        document.addEventListener("DOMContentLoaded", function () {
          const dravyaselect = document.getElementById("dravyaselect");
          const upadravyaSelect = document.getElementById("upadravyaSelect");

          dravyaselect.addEventListener("change", function () {
            const dravya = this.value;

            upadravyaSelect.innerHTML = '<option value="">Choose Upadravya</option>';

            if (dravya && dravyaUpadravyaMap[dravya]) {
              dravyaUpadravyaMap[dravya].forEach(upadravya => {
                const option = document.createElement("option");
                option.value = upadravya.name;
                option.text = `${upadravya.name} (₹${upadravya.price})`;
                option.dataset.price = upadravya.price;
                upadravyaSelect.appendChild(option);
              });
            }
          });
        });

        function addDravyaRow() {
          const dravyaselect = document.getElementById("dravyaselect");
          const upadravyaSelect = document.getElementById("upadravyaSelect");

          const dravyaOption = dravyaselect.options[dravyaselect.selectedIndex];
          const upadravyaOption = upadravyaSelect.options[upadravyaSelect.selectedIndex];

          if (!dravyaOption.value || !upadravyaOption.value) {
            alert("Please select both Dravya and Upadravya");
            return;
          }

          const dravyaName = dravyaOption.text;
          const upadravyaName = upadravyaOption.value;
          const upadravyaPrice = parseFloat(upadravyaOption.dataset.price || 0);

          const quantity = 1;
          const price = upadravyaPrice;
          const total = price * quantity;

          dravyaCount++;

          const tableBody = document.querySelector("#dravyaTable tbody");

          const row = document.createElement("tr");
          row.className = "border-b border-[#FFDCC5] hover:bg-[#FFF2EB]";
          row.innerHTML = `
            <td class="px-3 py-2">${dravyaCount}</td>
            <td class="px-3 py-2">${dravyaName}</td>
            <td class="px-3 py-2">${upadravyaName}</td>
            <td class="px-3 py-2">
              <input type="number" value="${quantity}" min="1" 
                class="w-16 border rounded px-1 text-center"
                onchange="updateDravyaTotal(this)">
            </td>
            <td class="px-3 py-2">${price}</td>
            <td class="px-3 py-2 total">${total}</td>
            <td class="px-3 py-2 text-center">
              <button type="button" onclick="removeDravyaRow(this)" 
                class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 
                        01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 
                        00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </button>
            </td>
          `;

          tableBody.appendChild(row);
        }

        function updateDravyaTotal(input) {
          const row = input.closest("tr");
          const price = parseFloat(row.children[4].textContent);
          const qty = parseInt(input.value);
          row.querySelector(".total").textContent = price * qty;
        }

        function removeDravyaRow(button) {
          const row = button.closest("tr");
          row.remove();
        }
      </script>



      <div class="flex gap-3">
        <input type="text" placeholder="Enter Note"
              class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
      </div>
    </div>

    <!-- puja Connect -->
    <div x-show="tab === 'puja'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return savepuja(event);">
        <div class="flex items-center justify-between mb-4">
          <h2 class="font-semibold text-[#7A3E00]">puja</h2>
          <a href="#" onclick="openPujaModal()" class="text-sm text-blue-600 hover:underline">+ Add New</a>
        </div>
        <!-- Puja Modal -->
        <div id="pujaModal" class="fixed inset-0 hidden bg-black/30 bg-opacity-50 flex items-center justify-center z-50">
          <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Add Puja</h3>

            <form onsubmit="return savePujaModal(event)">
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Puja Name</label>
                <input type="text" id="pujaName" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-[#7A3E00] focus:border-[#7A3E00]" placeholder="Enter Puja Name" required>
              </div>

              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                <input type="number" id="pujaPrice" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-[#7A3E00] focus:border-[#7A3E00]" placeholder="Enter Price" required>
              </div>

              <div class="flex justify-end gap-2">
                <button type="button" onclick="closePujaModal()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg">Cancel</button>
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">Save</button>
              </div>
            </form>
          </div>
        </div>

        <script>
        function openPujaModal() {
          document.getElementById('pujaModal').classList.remove('hidden');
        }

        function closePujaModal() {
          document.getElementById('pujaModal').classList.add('hidden');
        }

        function savePujaModal(event) {
          event.preventDefault();
          const name = document.getElementById('pujaName').value;
          const price = document.getElementById('pujaPrice').value;

          alert("Puja Added: " + name + " (₹" + price + ")");
          closePujaModal();
          return false;
        }
        </script>

        <!-- Selection -->
        <div class="flex flex-col md:flex-row gap-3 mb-4">
          <select id="pujaSelect" 
            class="border border-gray-300 rounded-md px-3 py-2 flex-1 focus:outline-none focus:ring-2 focus:ring-orange-400">
            <option value="">Choose puja</option>
            <option value="puja1" data-price="1500">Puja 1</option>
            <option value="puja2" data-price="2500">Puja 2</option>
            <option value="puja3" data-price="3500">Puja 3</option>
          </select>
          <button type="button" id="addPujaBtn"
            class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">
            Add
          </button>
        </div>
      </form>

      <!-- Table -->
       <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table id="pujaTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
      
        <thead>
          <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
            <th class="px-3 py-2 w-10">#</th>
            <th class="px-3 py-2">Puja</th>
            <th class="px-3 py-2">No. of Time</th>
            <th class="px-3 py-2">Price</th>
            <th class="px-3 py-2">Total</th>
            <th class="px-3 py-2"></th>
          </tr>
        </thead>
        <tbody id="pujaTableBody">
          <!-- Dynamic rows go here -->
        </tbody>
      </table></div>

      <script>
        const addBtn = document.getElementById("addPujaBtn");
        const select = document.getElementById("pujaSelect");
        const tableBody = document.getElementById("pujaTableBody");

        let rowCount = 0;

        addBtn.addEventListener("click", () => {
          const selected = select.options[select.selectedIndex];
          if (!selected.value) return;

          const pujaName = selected.textContent;
          const pujaPrice = parseInt(selected.dataset.price);

          rowCount++;

          const row = document.createElement("tr");
          row.innerHTML = `
            <td class="px-3 py-2">${rowCount}</td>
            <td class="px-3 py-2">${pujaName}</td>
            <td class="px-3 py-2">
              <input type="number" value="1" min="1" 
                    class="w-16 border rounded px-2 py-1 text-center quantity-input">
            </td>
            <td class="px-3 py-2">₹${pujaPrice}</td>
            <td class="px-3 py-2 total-cell">₹${pujaPrice}</td>
            <td class="px-3 py-2">
              <button class="text-red-500 hover:text-red-700 remove-btn">
              <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 
                  01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 
                  00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              </button>
            </td>
          `;

          tableBody.appendChild(row);

          // Quantity change handler
          row.querySelector(".quantity-input").addEventListener("input", function () {
            const qty = parseInt(this.value) || 1;
            const totalCell = row.querySelector(".total-cell");
            totalCell.textContent = "₹" + (pujaPrice * qty);
          });

          // Remove button handler
          row.querySelector(".remove-btn").addEventListener("click", () => {
            row.remove();
          });
        });
      </script>

      <!-- Note -->
      <div class="flex gap-3">
        <input type="text" placeholder="Enter note for Puja"
              class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
      </div>
    </div>

    <!-- planet Entry -->
    <div x-show="tab === 'planet'">
      <!-- You can paste your existing planet Form here -->
      <div class="bg-white rounded-xl shadow p-6">
        
          <?php include("planet.php"); ?>
        

        <!-- Note -->
        <div class="flex gap-3">
          <input type="text" placeholder="Enter note"
                class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
          <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
      </div>
    </div>

    <!-- note Import -->
    <div x-show="tab === 'note'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return savenote(event);">
        <h2 class="font-semibold text-[#7A3E00] mb-4">Note for Clients</h2>
        <div class="flex gap-3">
          <input type="text" placeholder="Enter note for client"
                class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
          <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6">Add</button>
        </div>
        <h2 class="font-semibold text-[#7A3E00] mb-4">Note for Astrologer</h2>
        <div class="flex gap-3 items-start">
        <div class="flex-1 flex flex-col gap-1">
          <!-- Note input -->
          <input type="text" placeholder="Enter note for Astrologer"
            class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">

          <!-- Checkbox  -->
          <label class="flex items-center gap-1 text-sm text-gray-700">
            <input type="checkbox" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-400">
            Show note to Client
          </label>
        </div>

        <!-- Add Button -->
        <button class="bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-md px-6 py-2">
          Add
        </button>
      </div>

      </form>
    </div>

  </div>
  <div class="flex gap-3 mt-4">
    <button onclick="saveSuggestion()" class="px-6 py-2 bg-orange-400 text-white rounded hover:bg-orange-500">Update Suggestion</button>
  </div>
</div>
<script>
     function saveprofile(event) {
        event.preventDefault();
        alert("profile lead saved successfully!");
        window.location.href = "add_lead#profile";
        location.reload();
        return false;
    }
    function saveproblem(event) {
        event.preventDefault();
        alert("problem lead saved successfully!");
        window.location.href = "add_lead#problem";
        location.reload(); 
        return false;
    }

    function saveinvestivation(event) {
        event.preventDefault();
        alert("investivation import saved successfully!");
        window.location.href = "add_lead#investivation";
        location.reload();
        return false;
    }

    function saveremedy(event) {
        event.preventDefault();
        alert("Integration saved successfully!");
        window.location.href = "add_lead#remedy";
        location.reload();
        return false;
    }

    function savekavach(event) {
        event.preventDefault();
        alert("kavach lead saved successfully!");
        window.location.href = "add_lead#kavach";
        location.reload(); 
        return false;
    }

    function savedravya(event) {
        event.preventDefault();
        alert("dravya import saved successfully!");
        window.location.href = "add_lead#dravya";
        location.reload();
        return false;
    }

    function savepuja(event) {
        event.preventDefault();
        alert("Integration saved successfully!");
        window.location.href = "add_lead#puja";
        location.reload();
        return false;
    }
    function saveplanet(event) {
        event.preventDefault();
        alert("planet lead saved successfully!");
        window.location.href = "add_lead#planet";
        location.reload(); 
        return false;
    }

    function savenote(event) {
        event.preventDefault();
        alert("note import saved successfully!");
        window.location.href = "add_lead#note";
        location.reload();
        return false;
    }

function saveSuggestion() {
    window.location.href = "suggestion_full_client?success=1";
}
</script>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("leadTabs", () => ({
            tab: window.location.hash ? window.location.hash.replace("#", "") : "profile"
        }))
    });
</script>


<?php include('layouts/footer.php'); ?>
