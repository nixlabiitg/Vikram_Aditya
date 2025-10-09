<?php include("layouts/header.php"); ?>

<div class="main-content p-6">
     <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Referred Items</h1>
        
    </div>

     <!-- Clients Table View -->
    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699] ">
        
        
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead>
                <tr class="bg-[#FFEBD6]">
                    <th class="px-4 py-2">Client</th>
                    <th class="px-4 py-2">Client ID</th>
                    <th class="px-4 py-2">Branch</th>
                    <th class="px-4 py-2">Client Phone</th>
                    <th class="px-4 py-2">Qty</th>
                    <th class="px-4 py-2">Actions</th>
                    <th class="px-4 py-2">Note/Remarks</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="border-b border-[#FFD699]">
                    <td class="px-4 py-2">Ramesh</td>
                    <td class="px-4 py-2">VGJUN250015</td>
                    <td class="px-4 py-2">Guwahati</td>
                    <td class="px-4 py-2">9864102986</td>
                    <td class="px-4 py-2">27</td>
                    <td class="px-4 py-2">
                    <button onclick="window.location.href='puja_referred_id'" class="bg-[#8B4513] text-white px-3 py-1 rounded hover:bg-[#6B3410]">Referred Items</button>
                    </td>
                    <td class="px-4 py-2">
                    <textarea id="noteInput" 
                        class="border border-gray-400 rounded w-full p-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" 
                        placeholder="Note"></textarea>

                    <button onclick="updateNote()" 
                        class="mt-2 bg-[#8B4513] text-white px-3 py-1 rounded text-sm hover:bg-[#e89a2f]">
                        Update
                    </button>
                    <div id="noteDisplay" class="mt-4 p-2 border rounded bg-gray-50 text-sm text-gray-700 hidden"></div>
                    </td>
                </tr>
                <!-- More Rows -->
            </tbody>

            </tbody>
        </table>
  </div>
</div>

<script>
function updateNote() {
  const note = document.getElementById("noteInput").value.trim();
  const display = document.getElementById("noteDisplay");

  if (note === "") {
    alert("Please enter a note before updating.");
    return;
  }

  display.textContent = "Updated Note: " + note;
  display.classList.remove("hidden");

  document.getElementById("noteInput").value = "";
}
</script>
<?php include("layouts/footer.php"); ?>