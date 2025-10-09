<?php include("layouts/header.php"); ?>
<style>
  
  .chakra {
    width: 380px;
    height: 380px;
  }

  .house {
    position: relative;
    overflow: hidden;
    background: transparent;
  }
  .square-house {
  position: relative;
}

.square-house .planet-row {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 0.25rem;
  z-index: 1;
}

.square-house.drop-over {
  outline: 2px dashed #fb923c;
  outline-offset: -6px;
  background: rgba(251, 146, 60, 0.08);
}


  .triangle {
    position: absolute;
    inset: 0;
    clip-path: polygon(0 0, 100% 0, 0 100%);
    background: rgba(251, 146, 60, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 6px;
    box-sizing: border-box;
    transform-origin: center;
    transition: background .12s, outline .12s;
    z-index: 0;
    cursor: default;
  }
  .triangle .inner {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: .25rem;
    flex-wrap: wrap;
    padding: 6px;
    box-sizing: border-box;
    transform-origin: center;
    flex-direction: column;      
  }

  .triangle.tl {
    transform: rotate(0deg);
    clip-path: polygon(0 0, 100% 0, 0 100%);
    
  }

  .triangle.tr {
    transform: rotate(90deg);
    clip-path: polygon(0 0, 100% 0, 0 100%);
  }

  .triangle.br {
    transform: rotate(180deg);
    clip-path: polygon(0 0, 100% 0, 0 100%);
  }

  .triangle.bl {
    transform: rotate(270deg);
    clip-path: polygon(0 0, 100% 0, 0 100%);
  }

  .triangle.tl .inner {
    transform: rotate(0deg);
  }

  .triangle.tr .inner {
    transform: rotate(-90deg);
  }

  .triangle.br .inner {
    transform: rotate(-180deg);
  }

  .triangle.bl .inner {
    transform: rotate(-270deg);
  }

  .triangle .label {
    position: absolute;
    font-size: 0.75rem;
    color: #fb923c;
    font-weight: 600;
    z-index: 2;
    pointer-events: none;
  }

  .triangle.tl .label {
    left: 6px;
    top: 4px;
    
  }

  .triangle.tr .label {
    right: 6px;
    top: 4px;
  }

  .triangle.br .label {
    right: 6px;
    bottom: 4px;
  }

  .triangle.bl .label {
    left: 6px;
    bottom: 4px;
  }

  .triangle.tl .planet-row {
    display: flex;
    gap: .25rem;
    top: 40%;      
    left: 40%;    
    transform: translate(-40%, -40%);
    justify-content: center;
    align-items: center;
    z-index: 1;
  }
  .triangle.tr .planet-row {
    display: flex;
    gap: .25rem;
    top: 33%;
    right: 33%;
    transform: translate(33%, -33%);
    justify-content: center;
    align-items: center;
    z-index: 1;
  }
  .triangle.br .planet-row {
  position: absolute;
  bottom: 33%;
  right: 33%;
  transform: translate(33%, 33%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.triangle.bl .planet-row {
  position: absolute;
  bottom: 33%;
  left: 33%;
  transform: translate(-33%, 33%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}


  .triangle.drop-over {
    outline: 2px dashed #fb923c;
    outline-offset: -6px;
    background: rgba(251, 146, 60, 0.08);
  }
  .triangle .planet {
  font-size: 0.6rem; 
  padding: 0.2rem 0.4rem;
}

  .planet {
    user-select: none;
    cursor: grab;
    padding: .25rem .5rem;
    border-radius: .5rem;
    font-size: .7rem;
    background: linear-gradient(180deg, #fb923c, #f97316);
    color: #fff;
    margin: .10rem;
    white-space: nowrap;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  }

  .planet:active {
    cursor: grabbing;
  }
.clip-triangle-tl {
  clip-path: polygon(0 0, 100% 0, 0 100%);
}
.clip-triangle-br {
  clip-path: polygon(100% 100%, 100% 0, 0 100%);
}
</style>
<style>
  @media print {
    body * {
      visibility: hidden; 
    }

    #reportContainer, #reportContainer * {
      visibility: visible; 
    }

    #reportContainer {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
    }

    body, #reportContainer {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
    }

    .no-print, button, .download-btn {
      display: none !important;
      visibility: hidden !important;
    }
  }
</style>
<div id="reportContainer" class="bg-white font-sans">

<header class="text-center border-b-2 border-orange-400 py-4">
  <h1 class="text-orange-600 text-2xl font-bold">Astrologer Application Report</h1>
</header>

<div class="mx-6 my-4 text-left text-gray-700">
  <p><span class="font-semibold">Client Name:</span> Mukesh Das</p>
  <p><span class="font-semibold">Client ID:</span> 12345</p>
  <p><span class="font-semibold">Phone:</span> 9876543210</p>
  <p><span class="font-semibold">Address:</span> Guwahati</p>
</div>

<div class="flex justify-center items-center gap-6 mb-6 pb-6">
    <div class="chakra border-4 border-orange-400 bg-white rounded relative shadow">
      <div class="grid grid-cols-3 grid-rows-3 w-full h-full">

        <div id="house-1" class="house border-b border-r border-orange-400" data-house="2">
          <div class="triangle tr" data-subhouse="2">
            <div class="inner">
              <div class="label">2</div>
              <div class="planet-row"></div>
            </div>
          </div>
          <svg class="diag" viewBox="0 0 100 100" preserveAspectRatio="none">
            <line x1="0" y1="0" x2="100" y2="100" stroke="#fb923c" stroke-width="2"/>
          </svg>
          <div class="triangle bl" data-subhouse="3">
            <div class="inner">
              <div class="label">3</div>
              <div class="planet-row"></div>
            </div>
          </div>
        </div>

        <div id="house-2" class="house square-house border-b border-r border-orange-400" data-house="1">
          <div class="label" style="left:4px;bottom:2px;position:absolute;color:#fb923c;font-weight:600">1</div>
          <div class="planet-row"></div>
        </div>

        <div id="house-3" class="house border-b border-orange-400" data-house="3">
          <div class="triangle tl" data-subhouse="12">
            <div class="inner">
              <div class="label">12</div>
              <div class="planet-row"></div>
            </div>
          </div>
          <svg class="diag" viewBox="0 0 100 100" preserveAspectRatio="none">
            <line x1="100" y1="0" x2="0" y2="100" stroke="#fb923c" stroke-width="2"/>
          </svg>
          <div class="triangle br" data-subhouse="11">
            <div class="inner">
              <div class="label">11</div>
              <div class="planet-row"></div>
            </div>
          </div>
        </div>
        <div id="house-4" class="house square-house border-b border-r border-orange-400" data-house="4">
          <div class="label" style="left:4px;bottom:2px;position:absolute;color:#fb923c;font-weight:600">4</div>
          <div class="planet-row"></div>
        </div>

        <div class="bg-white border-b border-r border-orange-400 flex items-center justify-center">
          <span class="text-orange-500 font-bold text-lg"></span>
        </div>

        <div id="house-5" class="house square-house border-b border-orange-400" data-house="10">
          <div class="label" style="right:4px;bottom:2px;position:absolute;color:#fb923c;font-weight:600">10</div>
          <div class="planet-row"></div>
        </div>

        <div id="house-6" class="house border-b border-r border-orange-400" data-house="5">
          <div class="triangle tl" data-subhouse="5">
            <div class="inner">
              <div class="label">5</div>
              <div class="planet-row"></div>
            </div>
          </div>
          <svg class="diag" viewBox="0 0 100 100" preserveAspectRatio="none">
            <line x1="0" y1="100" x2="100" y2="0" stroke="#fb923c" stroke-width="2"/>
          </svg>
          <div class="triangle br" data-subhouse="6">
            <div class="inner">
              <div class="label">6</div>
              <div class="planet-row"></div>
            </div>
          </div>
        </div>

        <div id="house-7" class="house square-house border-r border-orange-400" data-house="7">
          <div class="label" style="left:4px;bottom:2px;position:absolute;color:#fb923c;font-weight:600">7</div>
          <div class="planet-row"></div>
        </div>

        <div id="house-8" class="house border-b border-orange-400" data-house="6">
          <div class="triangle tr" data-subhouse="9">
            <div class="inner">
              <div class="label">9</div>
              <div class="planet-row"></div>
            </div>
          </div>
          <svg class="diag" viewBox="0 0 100 100" preserveAspectRatio="none">
            <line x1="100" y1="100" x2="0" y2="0" stroke="#fb923c" stroke-width="2"/>
          </svg>
          <div class="triangle bl" data-subhouse="8">
            <div class="inner">
              <div class="label">8</div>
              <div class="planet-row"></div>
            </div>
          </div>
        </div>
    </div>
</div>
</div></div>

<div class="text-center mb-8">
  <button id="downloadBtn" class="px-6 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded font-semibold">
    Download PDF
  </button>
</div>
</div>
<script>
document.getElementById('downloadBtn').addEventListener('click', () => {
  html2pdf().set({
    margin: 0.5,
    filename: 'chakra_report.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2 },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
  }).from(document.body).save();
});
</script>
<?php include("layouts/footer.php"); ?>
