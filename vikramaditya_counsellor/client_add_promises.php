<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen">
  <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-6 border border-[#FFD699]">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6 flex items-center gap-2">
      <svg class="w-6 h-6 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
          d="M12 6V4m0 2v2m0 10v2m0-2v-2m-6 0H4m2 0h2m10 0h2m-2 0h-2M6 12H4m2 0h2m10 0h2m-2 0h-2" />
      </svg>
      Add New Promise
    </h1>
    <form action="" method="post" class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Promise Title</label>
        <input type="text" name="title" placeholder="Enter promise title"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Promise Title</label>
        <input type="text" name="title" placeholder="Enter promise title"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" rows="4" placeholder="Describe the promise..."
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"></textarea>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Commitment Date</label>
        <input type="date" name="date"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>
      
      <div class="flex justify-end gap-3 pt-4">
        <a href="client_promises" 
          class="px-5 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg font-medium text-gray-700">Cancel</a>
        <button type="submit" 
          class="px-6 py-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow">
          Save Promise
        </button>
      </div>
    </form>
  </div>
</div>

<?php include("layouts/footer.php"); ?>
