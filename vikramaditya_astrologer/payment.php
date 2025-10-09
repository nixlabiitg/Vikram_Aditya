<?php include('layouts/header.php'); ?>

<div class="p-6 min-h-screen space-y-8">

    <h1 class="text-3xl font-bold text-[#7A3E00] mb-6">Payments & Billing</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <div class="bg-white shadow rounded-2xl p-5 flex items-center gap-4 border-l-4 border-green-500 hover:shadow-xl transition duration-300">
        <div class="p-3 bg-green-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-2m4-2h-6m6 0a2 2 0 110-4 2 2 0 010 4z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Total Collection</p>
            <p class="text-2xl font-bold text-gray-700">₹1,25,000</p>
        </div>
    </div>
    <div class="bg-white shadow rounded-2xl p-5 flex items-center gap-4 border-l-4 border-yellow-500 hover:shadow-xl transition duration-300">
        <div class="p-3 bg-yellow-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Pending Payments</p>
            <p class="text-2xl font-bold text-gray-700">₹25,000</p>
        </div>
    </div>
    <div class="bg-white shadow rounded-2xl p-5 flex items-center gap-4 border-l-4 border-red-500 hover:shadow-xl transition duration-300">
        <div class="p-3 bg-red-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M4.93 19.07a10 10 0 1114.14 0A10 10 0 014.93 19.07z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Overdue</p>
            <p class="text-2xl font-bold text-gray-700">₹5,000</p>
        </div>
    </div>

    <div class="bg-white shadow rounded-2xl p-5 flex items-center gap-4 border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
        <div class="p-3 bg-blue-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v6h6M20 20v-6h-6M5 19a9 9 0 0014-7V9a9 9 0 00-14-7" />
            </svg>
        </div>
        <div>
            <p class="text-gray-500 text-sm">Refunds</p>
            <p class="text-2xl font-bold text-gray-700">₹2,000</p>
        </div>
    </div>
</div>

    <div class="bg-white shadow rounded-2xl p-5 mb-6 flex flex-wrap gap-4 items-end">
        <div>
            <label class="text-gray-600 text-sm">Payment Mode</label>
            <select class="mt-1 block border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-indigo-400 focus:border-indigo-400">
                <option>All</option>
                <option>Cash</option>
                <option>Card</option>
                <option>UPI</option>
                <option>Online</option>
            </select>
        </div>
        <div>
            <label class="text-gray-600 text-sm">From</label>
            <input type="date" class="mt-1 border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-indigo-400 focus:border-indigo-400">
        </div>
        <div>
            <label class="text-gray-600 text-sm">To</label>
            <input type="date" class="mt-1 border-gray-300 rounded-lg shadow-sm px-3 py-2 focus:ring-indigo-400 focus:border-indigo-400">
        </div>
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2l-7 7v5l-4 4v-9L3 6V4z" />
            </svg>
            Apply
        </button>
    </div>

    <div class="bg-white shadow rounded-2xl p-6 hover:shadow-xl transition duration-300">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Payment Records</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-gray-700">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mode</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">21 Aug 2025</td>
                        <td class="px-4 py-2">Rakesh Sharma</td>
                        <td class="px-4 py-2">₹5,000</td>
                        <td class="px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4m0-8v8m0 0c2.21 0 4-1.79 4-4s-1.79-4-4-4z" />
                            </svg>
                            Cash
                        </td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="invoice" class="text-decoration-none"><button class="text-blue-500 hover:text-blue-700 font-semibold flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </button></a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">15 Aug 2025</td>
                        <td class="px-4 py-2">Rohit Sharma</td>
                        <td class="px-4 py-2">₹3,000</td>
                        <td class="px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4m0-8v8m0 0c2.21 0 4-1.79 4-4s-1.79-4-4-4z" />
                            </svg>
                            Cash
                        </td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 flex items-center gap-1">
                                Overdue
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="messanger" class="tetx-decoration-none"><button class="text-red-500 hover:text-red-700 font-semibold flex items-center gap-1">
                                Send Reminder
                            </button></a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">18 Aug 2025</td>
                        <td class="px-4 py-2">Anjali Mehra</td>
                        <td class="px-4 py-2">₹4,500</td>
                        <td class="px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18" />
                            </svg>
                            UPI
                        </td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700 flex items-center gap-1">
                                Pending
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="messanger" class="tetx-decoration-none"><button class="text-red-500 hover:text-red-700 font-semibold flex items-center gap-1">
                                Send Reminder
                            </button></a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">12 Aug 2025</td>
                        <td class="px-4 py-2">Karan Jain</td>
                        <td class="px-4 py-2">₹6,000</td>
                        <td class="px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                            Online
                        </td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="invoice" class="text-decoration-none"><button class="text-blue-500 hover:text-blue-700 font-semibold flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>
