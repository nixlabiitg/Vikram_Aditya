<?php
include('layouts/header.php');

$payment_id = $_GET['payment_id'] ?? 1;

$invoice = [
    'id' => $payment_id,
    'date' => '21 Aug 2025',
    'client' => 'Monisha Devi',
    'services' => [
        ['name' => 'Personal Horoscope Reading', 'amount' => 3000],
        ['name' => 'Compatibility Analysis', 'amount' => 2000],
    ],
    'total' => 5000,
    'payment_mode' => 'Cash',
    'status' => 'Paid'
];
?>

<div class="p-6 min-h-screen">
    <div class="max-w-3xl mx-auto bg-white shadow rounded-2xl p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-[#7A3E00]">Invoice</h1>
            <span class="text-gray-500 font-semibold">#INV-<?php echo $invoice['id']; ?></span>
        </div>

        <div class="flex justify-between mb-6">
            <div>
                <p class="text-gray-600 font-semibold">Billed To:</p>
                <p class="text-gray-800"><?php echo $invoice['client']; ?></p>
            </div>
            <div>
                <p class="text-gray-600 font-semibold">Date:</p>
                <p class="text-gray-800"><?php echo $invoice['date']; ?></p>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-gray-700 mb-6">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Service</th>
                        <th class="px-4 py-2 text-right text-sm font-medium text-gray-500 uppercase tracking-wider">Amount (₹)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach($invoice['services'] as $service): ?>
                    <tr>
                        <td class="px-4 py-2"><?php echo $service['name']; ?></td>
                        <td class="px-4 py-2 text-right"><?php echo number_format($service['amount']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="flex justify-end mb-6">
            <div class="w-1/2 text-right">
                <p class="text-gray-600 font-semibold">Payment Mode: <?php echo $invoice['payment_mode']; ?></p>
                <p class="text-gray-600 font-semibold">Status: <?php echo $invoice['status']; ?></p>
                <p class="text-2xl font-bold text-gray-800 mt-2">Total: ₹<?php echo number_format($invoice['total']); ?></p>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <button onclick="window.print()" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2">
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9v6h12V9H6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18h12v3H6v-3z" />
                </svg>
                Print
            </button>
            <button class="bg-green-500 hover:bg-green-600 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2">
               
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v4h16v-4M12 12v8m0-8l-4 4m4-4l4 4" />
                </svg>
                Download PDF
            </button>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>
