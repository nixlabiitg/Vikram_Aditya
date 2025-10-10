<?php include("layouts/header.php") ?>
    
<div class="main-content p-4 md:p-6">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Clients</h1>
        <a href="add_clients">
            <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] w-full md:w-auto">+ Add Client</button>
        </a>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699]">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">clients</h2>
        
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <table class="min-w-[800px] w-full border border-[#FFD699] rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-[#FFEBD6] text-left text-sm font-semibold text-[#5a2d00]">
                <th class="p-3 text-center border-b border-[#FFD699] w-12"></th>
                <th class="p-3 text-center border-b border-[#FFD699]">ID</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Client Type</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Name</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Phone</th>
                <th class="p-3 text-center border-b border-[#FFD699]">Gender</th>
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
                <td class="px-3 py-3 text-center border-b border-b border-[#FFD699]" id="clientType_1">VIP</td>
                <td class="px-3 py-3 text-center border-b border-b border-[#FFD699] font-medium"><a href="client_view" class="hover:underline">Rajesh Kumar</a><br><span id="openFamily" class="text-blue-500 cursor-pointer">Family Member(2)</span><br><a class="text-blue-500" href="add_family">Add Family</a></td>
                <td class="px-3 py-3 text-center border-b border-b border-[#FFD699]">+91 9876543210</td>
                <td class="px-3 py-3 text-center border-b border-b border-[#FFD699]">Male</td>
                </tr>

                <tr class="detail-row hidden">
                <td colspan="6" class="px-6 py-5 border-b border-[#FFD699] bg-[#FFF9F2]">
                    <div class="space-y-4">
                    <!-- Personal Info -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <p><span class="font-semibold">Email:</span> rajesh@example.com</p>
                        <p><span class="font-semibold">Date of Birth:</span> 16/05/1998</p>
                        <p><span class="font-semibold">Time of Birth:</span> 03:29 PM</p>
                        <p><span class="font-semibold">Place of Birth:</span> Jorhat</p>
                        <p><span class="font-semibold">Address:</span> Jorhat</p>
                        <p>
                        <span class="font-semibold">Status:</span>
                        <span class="px-2 py-1 rounded text-xs bg-green-100 text-green-700">Active</span>
                        </p>
                        
                    </div>
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
                        </button>

                    <div class="border-t border-[#FFD699] pt-4">
                        <p class="font-semibold mb-2">Update Type:</p>
                        <div class="flex space-x-6">
                        <label><input type="radio" name="type_1" value="VIP" checked onchange="updateType(1,this.value)"> VIP</label>
                        <label><input type="radio" name="type_1" value="Premium" onchange="updateType(1,this.value)"> Premium</label>
                        <label><input type="radio" name="type_1" value="General" onchange="updateType(1,this.value)"> General</label>
                        </div>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4">
                        <div class="flex justify-between items-center">
                        <p class="font-semibold">Family Members:</p>
                        <button onclick="window.location.href='add_family'" class="px-3 py-1 text-xs rounded bg-[#7A3E00] text-white hover:bg-[#5a2d00]">+ Add Family</button>
                        </div>
                        <ul id="familyList_1" class="list-disc pl-6 mt-2 text-gray-600 space-y-1">
                        <li>Rina Kumari (Spouse)</li>
                        <li>Aarav Kumar (Son)</li>
                        </ul>
                    </div>

                    <div class="border-t border-[#FFD699] pt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                        <p><span class="font-semibold">Referred By:</span> Anju</p>
                        <p><span class="font-semibold">Registered On:</span> 12 August 2025</p>
                    </div>
                    </div>
                    <div>
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

            function addFamily(id) {
                let name = prompt("Enter Family Member Name:");
                if (name) {
                let list = document.getElementById("familyList_" + id);
                let li = document.createElement("li");
                li.textContent = name;
                list.appendChild(li);
                }
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
  const openBtn = document.getElementById("openFamily");
  const modal = document.getElementById("familyModal");
  const closeBtn = document.getElementById("closeFamily");
  const closeFooterBtn = document.getElementById("closeFamilyBtn");

  openBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
  });

  closeFooterBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
  });

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");
    }
  });
</script>
<script>
function showClientDetail(name, phone, email, status) {
    document.getElementById('client-name').textContent = name;
    document.getElementById('client-phone').textContent = phone;
    document.getElementById('client-email').textContent = email;
    document.getElementById('client-status').textContent = status;
    document.getElementById('client-detail').classList.remove('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function hideClientDetail() {
    document.getElementById('client-detail').classList.add('hidden');
}
</script>

<?php include("layouts/footer.php") ?>