<?php include("layouts/header.php"); ?>

<?php
$clientId = $_GET['client'] ?? null;
$clientName = "Test Client";
$cart = [
    ["name" => "Kavach 1", "type" => "Kavach", "qty" => 2, "price" => 500],
    ["name" => "Dravya A", "type" => "Dravya", "qty" => 1, "price" => 300],
];
$total = 0;
foreach ($cart as $item) {
    $total += $item["qty"] * $item["price"];
}
?>

<div class="p-6">
  <div class="bg-white shadow-lg rounded-2xl p-6">
    <h2 class="text-2xl font-bold text-orange-700 mb-6">Card Payment</h2>

    <?php if ($clientId): ?>
      <div class="mb-6 bg-orange-50 p-4 rounded-lg">
        <p class="text-gray-700"><strong>Client ID:</strong> <?= htmlspecialchars($clientId) ?></p>
        <p class="text-gray-700"><strong>Client Name:</strong> <?= htmlspecialchars($clientName) ?></p>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-sm rounded-lg overflow-hidden">
          <thead class="bg-orange-200 text-orange-900">
            <tr>
              <th class="p-3 text-left">Item</th>
              <th class="p-3 text-left">Type</th>
              <th class="p-3 text-center">Qty</th>
              <th class="p-3 text-right">Price</th>
              <th class="p-3 text-right">Total</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-orange-100">
            <?php foreach ($cart as $item): ?>
            <tr class="hover:bg-orange-50">
              <td class="p-3"><?= htmlspecialchars($item["name"]) ?></td>
              <td class="p-3"><?= htmlspecialchars($item["type"]) ?></td>
              <td class="p-3 text-center"><?= $item["qty"] ?></td>
              <td class="p-3 text-right">₹<?= $item["price"] ?></td>
              <td class="p-3 text-right font-medium">₹<?= $item["qty"] * $item["price"] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr class="bg-orange-100 font-bold">
              <td colspan="4" class="p-3 text-right">Grand Total</td>
              <td class="p-3 text-right">₹<?= $total ?></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <form method="POST" class="mt-6">
        <button type="submit" name="pay_now" 
          class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-xl shadow-md transition">
          Pay Now
        </button>
      </form>

      <?php if (isset($_POST['pay_now'])): ?>
        <div id="invoice" class="mt-8 bg-white shadow-lg rounded-2xl p-6">
          <h3 class="text-xl font-bold text-orange-700 mb-4">Invoice</h3>
          <div class="grid grid-cols-2 gap-4 mb-4 text-gray-700">
            <p><strong>Invoice No:</strong> INV<?= rand(1000,9999) ?></p>
            <p><strong>Date:</strong> <?= date("d-m-Y H:i") ?></p>
            <p><strong>Client:</strong> <?= htmlspecialchars($clientName) ?></p>
            <p><strong>Client ID:</strong> <?= $clientId ?></p>
            <p><strong>Payment Method:</strong> Card</p> 
          </div>

          <div class="overflow-x-auto">
            <table class="w-full text-sm rounded-lg overflow-hidden">
              <thead class="bg-gray-100 text-gray-800">
                <tr>
                  <th class="p-3 text-left">Item</th>
                  <th class="p-3 text-center">Qty</th>
                  <th class="p-3 text-right">Price</th>
                  <th class="p-3 text-right">Total</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <?php foreach ($cart as $item): ?>
                <tr>
                  <td class="p-3"><?= htmlspecialchars($item["name"]) ?></td>
                  <td class="p-3 text-center"><?= $item["qty"] ?></td>
                  <td class="p-3 text-right">₹<?= $item["price"] ?></td>
                  <td class="p-3 text-right">₹<?= $item["qty"] * $item["price"] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr class="bg-gray-100 font-bold">
                  <td colspan="3" class="p-3 text-right">Grand Total</td>
                  <td class="p-3 text-right">₹<?= $total ?></td>
                </tr>
              </tfoot>
            </table>
          </div>

          <button onclick="printInvoice()" 
            class="mt-6 bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-xl shadow-md transition">
            Print Invoice
          </button>
        </div>
      <?php endif; ?>

    <?php else: ?>
      <p class="text-red-500">No client selected!</p>
    <?php endif; ?>
  </div>
</div>
<script>
function printInvoice() {
  const invoiceContent = document.getElementById("invoice").innerHTML;
  const win = window.open('', '', 'width=850,height=700');

  win.document.write(`
  <html>
    <head>
      <title>Invoice</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <style>
        @page { margin: 20mm; }
        body { 
          font-family: 'Inter', sans-serif; 
          background-color: #fff; 
          color: #111827;
        }
        .invoice-box {
          max-width: 800px;
          margin: auto;
          background: #ffffff;
          padding: 30px 50px;
          border: 1px solid #e5e7eb;
          border-radius: 10px;
        }
        .logo {
          width: 140px;
        }
        th, td {
          padding: 6px 8px;
          border-bottom: 1px solid #e5e7eb;
        }
        th {
          background-color: #f9fafb;
        }
        .footer-note {
          margin-top: 40px;
          font-size: 0.85rem;
          color: #6b7280;
          text-align: center;
        }
      </style>
    </head>
    <body>
      <div class="invoice-box">
        <!-- ===== HEADER WITH LOGO & COMPANY INFO ===== -->
        <div class="text-center border-b pb-4 mb-6">
          <img src="assets/img/VK_logo.png" alt="Company Logo" class="logo mx-auto mb-2">
          <h2 class="text-xl font-semibold text-gray-800">VK Astrology</h2>
          <p class="text-sm text-gray-500 leading-tight">
            Guwahati, Assam - 781021<br>
            Phone: +91 98765 43210 | Email: info@vkastrology.com
          </p>
        </div>

        <!-- ===== INVOICE TITLE AND DATE ===== -->
        <div class="flex justify-between items-center mb-4">
          <h1 class="text-2xl font-bold text-gray-800">INVOICE</h1>
          <p class="text-sm text-gray-500">${new Date().toLocaleDateString()} ${new Date().toLocaleTimeString()}</p>
        </div>

        <!-- ===== MAIN INVOICE CONTENT ===== -->
        ${invoiceContent}

        <!-- ===== FOOTER NOTE ===== -->
        <div class="footer-note">
          <p>Thank you for your business!</p>
          <p>This is a computer-generated invoice. No signature required.</p>
        </div>
      </div>
    </body>
  </html>
  `);

  win.document.close();
  win.focus();
  win.print();
}
</script>


<?php include("layouts/footer.php"); ?>
