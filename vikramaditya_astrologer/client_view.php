<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen" x-data="{ tab: 'overview' }">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-6 text-center">Client Story</h1>

    <div class="flex justify-center mb-6 space-x-4 border-b border-orange-200">
        <button @click="tab = 'overview'" 
            :class="tab === 'overview' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600'" 
            class="px-4 py-2 font-semibold">Overview</button>
        <button @click="tab = 'documents'" 
            :class="tab === 'documents' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600'" 
            class="px-4 py-2 font-semibold">Documents</button>
        <button @click="tab = 'billing'" 
            :class="tab === 'billing' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600'" 
            class="px-4 py-2 font-semibold">Billing</button>
        <button @click="tab = 'purchases'" 
            :class="tab === 'purchases' ? 'border-b-2 border-orange-500 text-orange-600' : 'text-gray-600'" 
            class="px-4 py-2 font-semibold">Purchase History</button>
    </div>

    <div x-show="tab === 'overview'" class="space-y-6">
        <div class="bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <img src="https://ui-avatars.com/api/?name=Neha+Sharma&background=FFEDD5&color=7A3E00&bold=true" 
                    class="w-24 h-24 rounded-full shadow-md border-2 border-orange-300" alt="Profile">

                <div class="flex-1">
                    <h2 class="text-2xl font-bold text-[#7A3E00]">Neha Sharma</h2>
                    <p class="text-sm text-gray-600">Client ID: <span class="font-semibold">CLT-1025</span></p>
                    <p class="text-sm text-gray-600">Registered on: <span class="font-semibold">15 Aug 2025</span></p>
                    <p class="text-sm text-gray-600">Registered by: <span class="font-semibold">Astrologer</span></p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex gap-3">
                        <button class="p-3 rounded-full bg-indigo-100 hover:bg-indigo-200" title="Call">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2 5.5A2.5 2.5 0 014.5 3h2A2.5 2.5 0 019 5.5V7a2 2 0 01-.59 1.41l-1.2 1.2a16 16 0 006.18 6.18l1.2-1.2A2 2 0 0116 13h1.5A2.5 2.5 0 0120 15.5v2A2.5 2.5 0 0117.5 20h-1A14.5 14.5 0 012 6.5v-1z" />
                            </svg>
                        </button>
                        <button class="p-3 rounded-full bg-blue-100 hover:bg-blue-200" title="Message">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8M8 14h5m-7 6l-4-4V6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H9l-4 4z" />
                            </svg>
                        </button>
                        <button class="p-3 rounded-full bg-green-100 hover:bg-green-200" title="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 00-8.47 15.42L2 22l4.7-1.53A10 10 0 1012 2zm0 18a7.93 7.93 0 01-4.23-1.21l-.3-.19-2.79.91.92-2.72-.2-.28A7.94 7.94 0 1112 20zm4.27-5.53c-.23-.11-1.36-.67-1.57-.75s-.36-.11-.52.11-.6.75-.74.91-.27.17-.5.06a6.49 6.49 0 01-1.92-1.18 7.39 7.39 0 01-1.37-1.7c-.14-.24 0-.37.1-.48s.23-.28.34-.42.15-.24.23-.39.04-.29-.02-.4-.52-1.26-.71-1.73c-.18-.43-.37-.37-.52-.38h-.44c-.15 0-.39.06-.6.29s-.78.76-.78 1.86.8 2.15.91 2.3a8.52 8.52 0 002.03 2.19c.78.53 1.55.84 2.09 1 .44.14.85.12 1.17.07.36-.05 1.11-.45 1.27-.89s.16-.81.11-.89-.21-.14-.44-.25z"/>
                            </svg>
                        </button>
                        <button onclick="window.location.href='proposal_sent'" class="p-3 rounded-full bg-purple-200 hover:bg-purple-300 text-orange-800" title="proposal">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                class="w-5 h-5 text-orange-800" 
                                fill="currentColor" 
                                viewBox="0 0 24 24">
                                <path d="M19 11H13V5h-2v6H5v2h6v6h2v-6h6z"/>
                            </svg>
                        </button>
                        <button onclick="window.location.href='client_edit'" class="p-3 rounded-full bg-red-100 hover:bg-red-200" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600 fill-current" viewBox="0 0 24 24">
                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zm18.71-10.04a1.003 1.003 0 0 0 0-1.42l-2.5-2.5a1.003 1.003 0 0 0-1.42 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex gap-3">
                        <button onclick="window.location.href='appointment_book#step2'" 
                            class="px-5 py-2 rounded-full bg-orange-500 hover:bg-orange-600 text-white text-sm font-medium shadow-md hover:shadow-lg transition">
                            Get Appointment
                        </button>
                        <button onclick="window.location.href='add_family'" 
                            class="px-5 py-2 rounded-full bg-orange-700 hover:bg-orange-800 text-white text-sm font-medium shadow-md hover:shadow-lg transition">
                            Add Family
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
                <h3 class="text-lg font-semibold text-[#7A3E00] mb-3">Family Members (3)</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Ramesh Sharma (Father)</li>
                    <li>Anita Sharma (Mother)</li>
                    <li>Rahul Sharma (Brother)</li>
                </ul>
            </div>

            <div class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
                <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Appointments & Stages</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-3 h-3 rounded-full bg-orange-500 mt-2"></div>
                        <p class="text-gray-700"><span class="font-semibold">15 Aug 2025:</span> Appointment booked for Career Guidance</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-3 h-3 rounded-full bg-green-500 mt-2"></div>
                        <p class="text-gray-700"><span class="font-semibold">20 Aug 2025:</span> Follow-up completed</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-3 h-3 rounded-full bg-blue-500 mt-2"></div>
                        <p class="text-gray-700"><span class="font-semibold">25 Aug 2025:</span> Suggested remedies shared</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
            <h3 class="text-lg font-semibold text-[#7A3E00] mb-3">Suggestions</h3>
            <p class="text-gray-700">Perform regular meditation and wear an Emerald gemstone to strengthen planetary alignment. Schedule a follow-up session in 30 days.</p>
            <h6>date</h6>
            <p class="text-gray-700">Detailed Description of the appointment on that particular date</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
            <h3 class="text-lg font-semibold text-[#7A3E00] mb-3">Promises</h3>
            <p class="text-gray-700">Perform regular meditation and wear an Emerald gemstone to strengthen planetary alignment. Schedule a follow-up session in 30 days.</p>
            <h6>date</h6>
            <p class="text-gray-700">Detailed Description of the promise on that particular date by the staff</p>
        </div>
    </div>

    <!-- ===================== Documents ===================== -->
    <div x-show="tab === 'documents'">
        <div class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
            <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Documents</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="flex flex-col items-center text-center">
                    <svg class="w-12 h-12 text-orange-500 mb-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2a2 2 0 0 0-2 2v16a2 
                                2 0 0 0 2 2h12a2 2 0 0 0 
                                2-2V8l-6-6H6zm7 7V3.5L18.5 
                                9H13z"/>
                        <text x="7" y="18" font-size="6" ont-family="Arial" font-weight="bold" 
                                fill="white">PDF</text>
                    </svg>
                    <p class="text-sm font-medium text-gray-700">Suggested Remedies.pdf</p>
                    <span class="text-xs text-gray-500">15 Aug 2025</span>
                    <a href="docs/suggestion_full_client.pdf" target="_blank" 
                    class="text-xs text-blue-600 hover:underline mt-1">View</a>
                </div>

                <div class="flex flex-col items-center text-center">
                    <svg class="w-12 h-12 text-orange-500 mb-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2a2 2 0 0 0-2 2v16a2 
                                2 0 0 0 2 2h12a2 2 0 0 0 
                                2-2V8l-6-6H6zm7 7V3.5L18.5 
                                9H13z"/>
                        <text x="7" y="18" font-size="6" 
                                font-family="Arial" 
                                font-weight="bold" 
                                fill="white">PDF</text>
                    </svg>
                    <p class="text-sm font-medium text-gray-700">Horoscope Report.pdf</p>
                    <span class="text-xs text-gray-500">20 Aug 2025</span>
                    <a href="docs/suggestion_full_client.pdf" target="_blank" 
                    class="text-xs text-blue-600 hover:underline mt-1">View</a>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-xl mt-6 p-5 border border-orange-200">
            <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Proposal Sent</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="flex flex-col items-center text-center">
                    <svg class="w-12 h-12 text-orange-500 mb-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 2a2 2 0 0 0-2 2v16a2 
                                2 0 0 0 2 2h12a2 2 0 0 0 
                                2-2V8l-6-6H6zm7 7V3.5L18.5 
                                9H13z"/>
                        <text x="7" y="18" font-size="6" ont-family="Arial" font-weight="bold" 
                                fill="white">PDF</text>
                    </svg>
                    <p class="text-sm font-medium text-gray-700">Suggested Remedies.pdf</p>
                    <span class="text-xs text-gray-500">15 Aug 2025</span>
                    <a href="docs/proposal_pdf.html" target="_blank" 
                    class="text-xs text-blue-600 hover:underline mt-1">View</a>
                </div>

            </div>
        </div>
    </div>
    
    <!-- ===================== Billing ===================== -->
    <div x-show="tab === 'billing'" class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
        <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Billing & Invoices</h3>

        <div class="space-y-4">
            <div class="flex justify-between items-center border border-gray-300 p-4 rounded-lg hover:bg-orange-50">
                <div>
                    <p class="font-semibold text-gray-800">Career Guidance</p>
                    <span class="text-sm text-gray-600">Invoice #INV-1001 • 15 Aug 2025</span>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right">
                        <p class="font-bold text-green-600">₹1500</p>
                        <span class="text-xs font-medium text-green-700">Paid</span>
                    </div>
                    <button class="p-2 rounded-full bg-orange-100 hover:bg-orange-200" title="View Invoice">
                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 2a2 2 0 0 0-2 2v16a2 
                                    2 0 0 0 2 2h12a2 2 0 0 0 
                                    2-2V8l-6-6H6zm7 7V3.5L18.5 
                                    9H13z"/>
                            <text x="7" y="18" font-size="6" 
                                font-family="Arial" 
                                font-weight="bold" 
                                fill="white">PDF</text>
                        </svg>
                    </button>
                </div>
            </div>

            <div x-data="{ openDetails: false, openPay: false, openReminder: false }"
                class="flex justify-between items-center border border-gray-300 p-4 rounded-lg hover:bg-orange-50">
                <div>
                    <p class="font-semibold text-gray-800">Follow-up Session</p>
                    <span class="text-sm text-gray-600">Invoice #INV-1002 • 20 Aug 2025</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p class="font-bold text-red-600">₹800</p>
                        <span class="text-xs font-medium text-red-700">Pending</span>
                    </div>
                    <button @click="openDetails = true"
                            class="px-3 py-1 text-sm rounded-lg bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium">
                        View Details
                    </button>
                    <button @click="openPay = true"
                            class="px-3 py-1 text-sm rounded-lg bg-green-100 hover:bg-green-200 text-green-700 font-medium">
                        Pay Now
                    </button>
                    <button @click="openReminder = true"
                            class="px-3 py-1 text-sm rounded-lg bg-orange-100 hover:bg-orange-200 text-orange-700 font-medium">
                        Send Reminder
                    </button>
                </div>

                <!-- ========== View Details Modal ========== -->
                <div x-show="openDetails" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-xl p-6 w-96 shadow-lg">
                        <h2 class="text-lg font-semibold mb-2">Invoice Details</h2>
                        <p class="text-sm text-gray-600 mb-4">Invoice #INV-1002 • Follow-up Session</p>
                        <ul class="text-sm text-gray-700 space-y-2">
                            <li><strong>Service:</strong> Follow-up Session</li>
                            <li><strong>Amount:</strong> ₹800</li>
                            <li><strong>Status:</strong> Pending</li>
                            <li><strong>Due Date:</strong> 20 Aug 2025</li>
                        </ul>
                        <div class="flex justify-end mt-4">
                            <button @click="openDetails = false"
                                    class="px-4 py-2 bg-orange-100 hover:bg-orange-200 rounded-lg text-orange-700">
                                Close
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ========== Pay Now Modal ========== -->
                <div x-show="openPay" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-xl p-6 w-96 shadow-lg">
                        <h2 class="text-lg font-semibold mb-2">Make Payment</h2>
                        <p class="text-sm text-gray-600 mb-4">Invoice #INV-1002</p>
                        <input type="text" placeholder="Enter UPI / Transaction ID"
                            class="border rounded-md px-3 py-2 w-full mb-3 focus:ring-2 focus:ring-orange-400" />
                        <div class="flex justify-end gap-3">
                            <button @click="openPay = false"
                                    class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-gray-700">
                                Cancel
                            </button>
                            <button class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-lg text-white">
                                Confirm Payment
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ========== Send Reminder Modal ========== -->
                <div x-show="openReminder" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-xl p-6 w-96 shadow-lg">
                        <h2 class="text-lg font-semibold mb-2">Send Reminder</h2>
                        <p class="text-sm text-gray-600 mb-4">Send a payment reminder for Invoice #INV-1002</p>
                        <textarea placeholder="Optional message..."
                                class="border rounded-md px-3 py-2 w-full mb-3 focus:ring-2 focus:ring-orange-400"></textarea>
                        <div class="flex justify-end gap-3">
                            <button @click="openReminder = false"
                                    class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-gray-700">
                                Cancel
                            </button>
                            <button class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded-lg text-white">
                                Send Reminder
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===================== Purchase History ===================== -->
    <div x-show="tab === 'purchases'" class="bg-white shadow-md rounded-xl p-5 border border-orange-200">
        <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Purchase History</h3>

        <div class="space-y-4">
            <div class="border border-gray-300 rounded-lg p-4 hover:bg-orange-50 transition">
                <div class="flex justify-between items-center mb-3">
                    <p class="font-semibold text-gray-800">Emerald Gemstone</p>
                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700 font-medium">
                        Delivered
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-2 text-sm text-gray-600">
                    <p><span class="font-medium">Order Date:</span> 12 Aug 2025</p>
                    <p><span class="font-medium">Delivered Date:</span> 18 Aug 2025</p>
                    <p><span class="font-medium">Quantity:</span> 1</p>
                    <p><span class="font-medium">Service/Product:</span> Gemstone</p>
                    <p><span class="font-medium">Price:</span> ₹5000</p>
                    <p><span class="font-medium">Order ID:</span> #ORD-2001</p>
                </div>
            </div>

            <div class="border border-gray-300 rounded-lg p-4 hover:bg-orange-50 transition">
                <div class="flex justify-between items-center mb-3">
                    <p class="font-semibold text-gray-800">Astrology Book</p>
                    <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700 font-medium">
                        In Transit
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-2 text-sm text-gray-600">
                    <p><span class="font-medium">Order Date:</span> 19 Aug 2025</p>
                    <p><span class="font-medium">Estimated Delivery:</span> 25 Aug 2025</p>
                    <p><span class="font-medium">Quantity:</span> 2</p>
                    <p><span class="font-medium">Service/Product:</span> Book</p>
                    <p><span class="font-medium">Price:</span> ₹800</p>
                    <p><span class="font-medium">Order ID:</span> #ORD-2002</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include("layouts/footer.php"); ?>