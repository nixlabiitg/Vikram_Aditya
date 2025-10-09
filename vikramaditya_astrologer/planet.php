
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
<form class="space-y-6" onsubmit="return saveplanet(event);">
  <div class="flex items-center justify-between mb-4">
    <h2 class="font-semibold text-[#7A3E00]">Planet</h2>
  </div>
  <div class="flex gap-6">
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
    <!-- planet palette (same as your original) -->
    <div class="bg-white border border-gray-300 rounded shadow p-4 flex-1" style="width:280px;margin-top:12px;">
      <div id="palette" class="flex flex-wrap gap-2 p-2 border border-gray-300 rounded mb-3 min-h-[64px]">
        <span id="p-sun" class="planet" draggable="true">Sun</span>
        <span id="p-moon" class="planet" draggable="true">Moon</span>
        <span id="p-mer" class="planet" draggable="true">Mercury</span>
        <span id="p-ven" class="planet" draggable="true">Venus</span>
        <span id="p-mar" class="planet" draggable="true">Mars</span>
        <span id="p-jup" class="planet" draggable="true">Jupiter</span>
        <span id="p-sat" class="planet" draggable="true">Saturn</span>
        <span id="p-rah" class="planet" draggable="true">Rahu</span>
        <span id="p-ket" class="planet" draggable="true">Ketu</span>
      </div>
    </div>
  </div>
</form>

<!-- Table -->
 <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
  <table id="planetTable" class="min-w-[700px] md:min-w-full sm:min-w-full text-sm border-collapse mb-4">
    
  <thead>
    <tr class="bg-[#FFDCC5] text-left text-[#7A3E00]">
      <th class="px-3 py-2 w-10">#</th>
      <th class="px-3 py-2">Planet Name</th>
      <th class="px-3 py-2">Planet Position</th>
      <th class="px-3 py-2"></th>
    </tr>
  </thead>
  <tbody id="planetTableBody"></tbody>
</table>
</div>

<script>
  const planets = document.querySelectorAll('.planet');
  planets.forEach(p => {
    p.addEventListener('dragstart', e => {
      e.dataTransfer.setData('text/plain', p.id);
      e.dataTransfer.effectAllowed = 'move';
    });
  });

  function updateTable() {
    const tbody = document.getElementById("planetTableBody");
    tbody.innerHTML = "";

    let index = 1;
    document.querySelectorAll('.planet').forEach(p => {
        const subhouse = p.closest('.triangle');
        const house = p.closest('.square-house, .house');

        if (!subhouse && !house) return;

        let position = "Palette";
        if (subhouse) {
            position = (subhouse.dataset.subhouse || "");
        } else if (house) {
            position =  (house.dataset.house || "?");
        }

        const tr = document.createElement("tr");
        tr.innerHTML = `
            <td class="px-3 py-2">${index++}</td>
            <td class="px-3 py-2">${p.textContent}</td>
            <td class="px-3 py-2">${position}</td>
            <td class="px-3 py-2">
              <button class="text-red-500 hover:text-red-700 remove-btn">
              <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 
                  01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 
                  00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
              </button>
            </td>
        `;
        
        tbody.appendChild(tr);
        
    });
}

  function handleDrop(target, e) {
    e.preventDefault();
    target.classList.remove('drop-over');
    const id = e.dataTransfer.getData('text/plain');
    const el = document.getElementById(id);
    if (!el) return;
    const row = target.querySelector('.planet-row');
    if (!row) return;
    row.appendChild(el);
    updateTable();
  }

  const triangles = document.querySelectorAll('.triangle');
  triangles.forEach(tri => {
    tri.addEventListener('dragover', e => {
      e.preventDefault();
      tri.classList.add('drop-over');
    });
    tri.addEventListener('dragleave', () => tri.classList.remove('drop-over'));
    tri.addEventListener('drop', e => handleDrop(tri, e));
  });

  const squareHouses = document.querySelectorAll('.square-house');
  squareHouses.forEach(house => {
    house.addEventListener('dragover', e => {
      e.preventDefault();
      house.classList.add('drop-over');
    });
    house.addEventListener('dragleave', () => house.classList.remove('drop-over'));
    house.addEventListener('drop', e => handleDrop(house, e));
  });

  const palette = document.getElementById('palette');
  palette.addEventListener('dragover', e => {
    e.preventDefault();
    palette.classList.add('drop-over');
  });
  palette.addEventListener('dragleave', () => palette.classList.remove('drop-over'));
  palette.addEventListener('drop', e => {
    e.preventDefault();
    palette.classList.remove('drop-over');
    const id = e.dataTransfer.getData('text/plain');
    const el = document.getElementById(id);
    if (!el) return;
    palette.appendChild(el);
    updateTable(); 
  });
  updateTable();

  document.getElementById('planetTableBody').addEventListener('click', function(e) {
  const btn = e.target.closest('.remove-btn');
  if (btn) {
    const row = btn.closest('tr');
    const planetName = row.children[1].textContent;

    const planetEl = [...document.querySelectorAll('.planet')].find(p => p.textContent === planetName);
    if (planetEl) palette.appendChild(planetEl);

    row.remove();

    updateTable();
  }
});
</script>
