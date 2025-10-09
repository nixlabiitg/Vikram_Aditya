<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
  <h1 class="text-3xl font-bold text-[#7A3E00] mb-6 flex items-center gap-2">
    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4h9M4 9h16M4 15h16" />
    </svg>
    Library & Knowledge Bank
  </h1>

  <div class="mb-6">
    <input type="text" placeholder="Search documents." class="w-full border bg-white rounded px-4 py-2" />
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-10">

    <div class="bg-white p-4 rounded-xl shadow-md border border-gray-200 hover:shadow-lg">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2">Call Scripts</h2>
      <p class="text-sm text-gray-600 mb-3">Suggested tele-caller scripts for different lead types and scenarios.</p>
      <a href="#" class="text-blue-600 text-sm font-medium hover:underline">View Scripts</a>
    </div>
  
  
    <div class="bg-white p-4 rounded-xl shadow-md border border-gray-200 hover:shadow-lg">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2 flex items-center gap-2">
        <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2z" />
        </svg>
        Cold Calling Script
      </h2>
      <p class="text-sm text-gray-600 mb-4">Effective pitch & intro call script for telecallers.</p>
      <div class="flex justify-between text-sm">
        <a href="#" class="text-blue-600 hover:underline">View</a>
        <span class="text-gray-500">PDF • 1.2MB</span>
      </div>
    </div>

    <div class="bg-white p-4 rounded-xl shadow-md border border-gray-200 hover:shadow-lg">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2 flex items-center gap-2">
        <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2z" />
        </svg>
        Common Objection Handlers
      </h2>
      <p class="text-sm text-gray-600 mb-4">Responses to frequent objections & doubts.</p>
      <div class="flex justify-between text-sm">
        <a href="#" class="text-blue-600 hover:underline">View</a>
        <span class="text-gray-500">PDF • 900KB</span>
      </div>
    </div>
  </div>
</div>
<script>
    function saveLibrary(event) {
        event.preventDefault();

        alert("Upload successfully!");

        window.location.href = "library";

        return false;
    }
</script>
<?php include('layouts/footer.php'); ?>
