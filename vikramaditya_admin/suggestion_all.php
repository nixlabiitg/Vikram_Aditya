<?php
include("layouts/header.php"); ?>
<div class="p-6 relative">
    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold text-gray-800">Suggestions for Client</h1>
        <a href="suggestion_full_client" 
           class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 flex items-center gap-2">
            <!-- Document Icon -->
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2a2 2 0 00-2 2v16c0 
                         1.1.9 2 2 2h12a2 2 0 
                         002-2V8l-6-6H6z"/>
            </svg>
            View Full Suggestion
        </a>
    </div>

    <!-- PDF Block -->
    <div class="p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-2">Attached Suggestion PDF</h2>
    
       <div class="flex flex-wrap gap-6">
        <a href="files/sample-suggestion.pdf" target="_blank" 
            class="block text-center p-6 bg-red-50 rounded-lg shadow hover:shadow-md transition w-40">
            <!-- Date -->
            <p class="text-sm text-gray-600 mb-3">12 June, 2025</p>
            <!-- Paper/PDF Icon -->
            <svg class="w-16 h-16 text-red-500 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2a2 2 0 00-2 2v16c0 1.1.9 2 2 2h12a2 2 0 002-2V8l-6-6H6z"/>
            </svg>
            <!-- Label -->
            <p class="text-red-600 font-bold">Suggestion</p>
        </a>

        <a href="files/sample-suggestion.pdf" target="_blank" 
            class="block text-center p-6 bg-red-50 rounded-lg shadow hover:shadow-md transition w-40">
            <!-- Date -->
            <p class="text-sm text-gray-600 mb-3">12 June, 2025</p>
            <!-- Paper/PDF Icon -->
            <svg class="w-16 h-16 text-red-500 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6 2a2 2 0 00-2 2v16c0 1.1.9 2 2 2h12a2 2 0 002-2V8l-6-6H6z"/>
            </svg>
            <!-- Label -->
            <p class="text-red-600 font-bold">Kushti</p>
        </a>
        </div>


        <!-- Action Buttons -->
        <div class="flex gap-2">
            <button class="px-4 py-2 bg-green-500 text-white rounded flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L3.5 20.29h17L12 2z"/>
                </svg>
                English
            </button>
            <button class="px-4 py-2 bg-yellow-500 text-white rounded flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L3.5 20.29h17L12 2z"/>
                </svg>
                Assamese
            </button>
            <button onclick="window.location.href='planet_pdf'" class="px-4 py-2 bg-purple-500 text-white rounded flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21l-1.64-7.03
                            L22 9.24l-7.19-.61L12 2 9.19 
                            8.63 2 9.24l5.46 4.73L5.82 
                            21z"/>
                </svg>
                Chakra
            </button>
            <button onclick="window.location.href='suggestion_edit'" class="px-4 py-2 bg-gray-600 text-white rounded flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 21v-2a4 4 0 
                            014-4h8a4 4 0 
                            014 4v2M12 3a4 4 0 
                            110 8 4 4 0 010-8z"/>
                </svg>
                Edit
            </button>
            <button onclick="window.location.href='suggestion_edit'" class="px-4 py-2 bg-gray-600 text-white rounded flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 21v-2a4 4 0 
                            014-4h8a4 4 0 
                            014 4v2M12 3a4 4 0 
                            110 8 4 4 0 010-8z"/>
                </svg>
                Add Kushti
            </button>
        </div>
    </div>
    
</div>



<?php include("layouts/footer.php"); ?>
