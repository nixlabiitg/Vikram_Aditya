<?php include("layouts/header.php") ?>
  
  <div class="gap-1 px-6 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
      <div class="flex flex-wrap justify-between gap-3 p-4">
        <div class="flex min-w-72 flex-col gap-3">
          <p class="text-gray-800 text-sm font-normal leading-normal">Analyze the effectiveness of different resolution methods</p>
        </div>
      </div>
      <h3 class="text-[#111518] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Resolution Methods</h3>
      <div class="overflow-hidden rounded-xl shadow-lg">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
          <table class="min-w-[700px] md:min-w-full sm:min-w-full text-center">
            <thead class="bg-[#FFF4E6] text-[#7A3E00] uppercase font-semibold text-center">
              <tr class="bg-white text-[#7A3E00]">
                <th class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-120 px-4 py-3 w-[400px] text-sm font-medium leading-normal">
                  Resolution Method
                </th>
                <th class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-240 px-4 py-3 w-[400px] text-sm font-medium leading-normal">
                  Cases Used
                </th>
                <th class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-360 px-4 py-3 w-[400px] text-sm font-medium leading-normal">
                  Success Rate
                </th>
                <th class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-480 px-4 py-3 w-[400px] text-sm font-medium leading-normal">
                  Average Time Saved
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr class="border-t border-t-[#FFD699]">
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                  Rebooking with Apology
                </td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-240 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">120</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-360 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">85%</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-480 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">2 hours</td>
              </tr>
              <tr class="border-t border-t-[#FFD699]">
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                  Refund/Voucher Issued
                </td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-240 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">80</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-360 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">70%</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-480 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">
                  1.5 hours
                </td>
              </tr>
              <tr class="border-t border-t-[#FFD699]">
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                  Counselor Intervention
                </td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-240 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">50</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-360 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">90%</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-480 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">3 hours</td>
              </tr>
              <tr class="border-t border-t-[#FFD699]">
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                  Escalation to Management
                </td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-240 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">30</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-360 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">60%</td>
                <td class="table-79079401-42fe-4cb8-901d-f1b710050af6-column-480 h-[72px] px-4 py-2 w-[400px] text-gray-800 text-sm font-normal leading-normal">4 hours</td>
              </tr>
            </tbody>
          </table></div>
        </div>
        <style>
          @container(max-width:120px){.table-79079401-42fe-4cb8-901d-f1b710050af6-column-120{display: none;}}
          @container(max-width:240px){.table-79079401-42fe-4cb8-901d-f1b710050af6-column-240{display: none;}}
          @container(max-width:360px){.table-79079401-42fe-4cb8-901d-f1b710050af6-column-360{display: none;}}
          @container(max-width:480px){.table-79079401-42fe-4cb8-901d-f1b710050af6-column-480{display: none;}}
        </style>
      </div>
    </div>
  </div>
<?php include("layouts/footer.php") ?>
