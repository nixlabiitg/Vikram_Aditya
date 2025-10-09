<?php include('layouts/header.php'); ?>

<div class="p-6 min-h-screen space-y-8">
    <h1 class="text-3xl font-bold text-[#7A3E00] mb-6">Messenger Center</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white shadow rounded-2xl p-6 border-l-4 border-green-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M16.24 14.03c-.27-.14-1.59-.78-1.83-.87-.24-.09-.41-.14-.58.14-.17.27-.66.87-.81 1.05-.15.18-.31.2-.58.07-.27-.13-1.14-.42-2.17-1.34-.8-.7-1.34-1.56-1.5-1.83-.15-.27-.02-.42.12-.56.13-.13.27-.31.41-.46.14-.15.18-.25.27-.42.09-.17.05-.32-.02-.45-.07-.13-.58-1.4-.79-1.92-.21-.5-.43-.43-.58-.44-.15-.01-.32-.01-.49-.01-.17 0-.45.06-.68.32-.23.26-.87.84-.87 2.05 0 1.21.89 2.38 1.02 2.55.14.18 1.78 2.72 4.32 3.82 3.15 1.39 3.15.93 3.7.87.55-.07 1.79-.73 2.04-1.44.25-.71.25-1.32.18-1.44-.07-.12-.26-.19-.53-.33z"/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                </svg>
                <h2 class="text-xl font-semibold text-gray-700">WhatsApp Message</h2>
            </div>
            <form id="whatsappForm" class="space-y-3">
                <div>
                    <label class="text-sm font-medium text-gray-600">Select Client</label>
                    <input type="text" placeholder="Search client." class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-400 focus:border-green-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" list="whatsappClients">
                    <datalist id="whatsappClients" class="focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                        <option value="Monisha Devi">
                        <option value="Rohan Sharma">
                        <option value="Anjali Gupta">
                        <option value="Vikram Singh">
                    </datalist>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Select Template</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-400 focus:border-green-400 px-3 py-2">
                        <option>Appointment Reminder</option>
                        <option>Payment Reminder</option>
                        <option>Custom Message</option>
                    </select>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Message Preview</label>
                    <div class="mt-1 p-3 border border-gray-200 rounded-lg bg-gray-50 text-gray-700 min-h-[60px]">Your message will appear here...</div>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Send
                </button>
            </form>
        </div>

        <div class="bg-white shadow rounded-2xl p-6 border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
            <div class="flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 16V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2h14l4 4-4-4z" />
                </svg>
                <h2 class="text-xl font-semibold text-gray-700">SMS Message</h2>
            </div>
            <form id="smsForm" class="space-y-3">
                <div>
                    <label class="text-sm font-medium text-gray-600">Select Client</label>
                    <input type="text" placeholder="Search client." class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" list="smsClients">
                    <datalist id="smsClients" class="focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                        <option value="Monisha Devi">
                        <option value="Rohan Sharma">
                        <option value="Anjali Gupta">
                        <option value="Vikram Singh">
                    </datalist>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Select Template</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-400 focus:border-blue-400 px-3 py-2">
                        <option>Appointment Reminder</option>
                        <option>Payment Reminder</option>
                        <option>Custom Message</option>
                    </select>
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-600">Message Preview</label>
                    <div class="mt-1 p-3 border border-gray-200 rounded-lg bg-gray-50 text-gray-700 min-h-[60px]">Your message will appear here...</div>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Send
                </button>
            </form>
        </div>
    </div>
    <div class="bg-white shadow rounded-2xl p-6 hover:shadow-xl transition duration-300">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Message History</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-gray-700">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">21 Aug 2025, 10:30 AM</td>
                        <td class="px-4 py-2">Monisha Devi</td>
                        <td class="px-4 py-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16.24 14.03c-.27-.14-1.59-.78-1.83-.87-.24-.09-.41-.14-.58.14-.17.27-.66.87-.81 1.05-.15.18-.31.2-.58.07-.27-.13-1.14-.42-2.17-1.34-.8-.7-1.34-1.56-1.5-1.83-.15-.27-.02-.42.12-.56.13-.13.27-.31.41-.46.14-.15.18-.25.27-.42.09-.17.05-.32-.02-.45-.07-.13-.58-1.4-.79-1.92-.21-.5-.43-.43-.58-.44-.15-.01-.32-.01-.49-.01-.17 0-.45.06-.68.32-.23.26-.87.84-.87 2.05 0 1.21.89 2.38 1.02 2.55.14.18 1.78 2.72 4.32 3.82 3.15 1.39 3.15.93 3.7.87.55-.07 1.79-.73 2.04-1.44.25-.71.25-1.32.18-1.44-.07-.12-.26-.19-.53-.33z"/>
                                <path fill="none" d="M0 0h24v24H0z"/>
                            </svg>
                            WhatsApp
                        </td>
                        <td class="px-4 py-2">Reminder: Your appointment is tomorrow at 11 AM.</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Delivered
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <button class="text-blue-500 hover:text-blue-700 font-semibold flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v6h6M20 20v-6h-6" />
                                </svg>
                                Resend
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include('layouts/footer.php'); ?>
