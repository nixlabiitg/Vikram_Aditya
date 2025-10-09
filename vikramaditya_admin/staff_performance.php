<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-10 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        Staff Performance Overview
    </h1>

    <div class="overflow-hidden rounded-xl shadow-lg">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead class="bg-[#FFF4E6] text-[#7A3E00] uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Staff Name</th>
                    <th class="px-6 py-4">Complaints Handled</th>
                    <th class="px-6 py-4">Avg. Rating</th>
                    <th class="px-6 py-4">Response Time</th>
                    <th class="px-6 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-orange-50">
                    <td class="px-6 py-4 font-medium">Pt. Ramesh</td>
                    <td class="px-6 py-4">15</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-1 text-yellow-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l.518 1.592a1 1 0 00.95.69h1.674c.969 0 1.371 1.24.588 1.81l-1.354.98a1 1 0 00-.364 1.118l.518 1.592c.3.921-.755 1.688-1.538 1.118l-1.354-.98a1 1 0 00-1.175 0l-1.354.98c-.783.57-1.838-.197-1.538-1.118l.518-1.592a1 1 0 00-.364-1.118l-1.354-.98c-.783-.57-.38-1.81.588-1.81h1.674a1 1 0 00.95-.69l.518-1.592z"/>
                            </svg>
                        </div>
                    </td>
                    <td class="px-6 py-4">2.3 hrs</td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Excellent</span>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>
