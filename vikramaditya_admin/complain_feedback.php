<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-10 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z" />
        </svg>
        Complaint Feedback & Closure Log
    </h1>

    <div class="overflow-hidden rounded-xl shadow-lg">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead class="bg-[#FFF4E6] text-[#7A3E00] uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Complaint ID</th>
                    <th class="px-6 py-4">Client</th>
                    <th class="px-6 py-4">Rating</th>
                    <th class="px-6 py-4">Feedback</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-orange-50">
                    <td class="px-6 py-4 font-medium">ASTRO-CMP-2025-0101</td>
                    <td class="px-6 py-4">Rajesh Kumar</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-1 text-yellow-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-700">Astrologer helped explain the issue. Satisfied.</td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Closed</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#feedback-detail" onclick="scrollToFeedbackDetail();" class="text-blue-600 hover:underline text-sm">View Details</a>
                    </td>
                </tr>
            </tbody>
        </table></div>
    </div>

    <div id="feedback-detail" class="mt-10 hidden bg-white border rounded-xl p-6 shadow-md">
        <h2 class="text-2xl font-bold text-[#7A3E00] mb-4">Detailed Feedback</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div><p class="text-sm text-gray-500">Complaint ID</p><p class="font-semibold text-lg">ASTRO-CMP-2025-0101</p></div>
            <div><p class="text-sm text-gray-500">Client</p><p class="font-medium">Rajesh Kumar</p></div>
            <div><p class="text-sm text-gray-500">Rating</p>
                <div class="flex gap-1 text-yellow-500 mt-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/></svg>
                </div>
            </div>
            <div><p class="text-sm text-gray-500">Status</p><p class="font-medium text-green-600">Closed</p></div>
        </div>
        <div class="mt-6">
            <p class="text-sm text-gray-500 mb-1">Feedback</p>
            <div class="bg-gray-50 border p-4 rounded text-sm text-gray-700">Astrologer helped explain the issue. Satisfied.</div>
            <div class="mt-6 text-right">
                <button onclick="closeFeedbackDetail();" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Okay</button>
            </div>
        </div>
    </div>
</div>

<script>
function scrollToFeedbackDetail() {
    const panel = document.getElementById('feedback-detail');
    panel.classList.remove('hidden');
    panel.scrollIntoView({ behavior: 'smooth' });
}

function closeFeedbackDetail() {
    const panel = document.getElementById('feedback-detail');
    panel.classList.add('hidden');
}
</script>

<?php include('layouts/footer.php'); ?>
