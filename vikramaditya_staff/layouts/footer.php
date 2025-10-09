        </main>
      </div>
    </div>

    <footer class="bg-[#181410] text-white p-4 text-center border-t border-[#FFAA80]">
        <p class="text-sm">© 2025 Vikramaditya | All rights reserved</p>
        <p class="text-xs">Powered by <a href="https://otechnonix.com/" class="text-[#FF7F50] hover:underline">Otechnonix India Pvt. Ltd.</a></p>
    </footer>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  if (!sidebar) return;

  const scrollTop = localStorage.getItem('sidebar-scroll');
  if (scrollTop !== null) {
    sidebar.scrollTop = parseInt(scrollTop, 10);
  }

  sidebar.addEventListener('scroll', () => {
    localStorage.setItem('sidebar-scroll', sidebar.scrollTop);
  });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const btn = document.getElementById('hamburgerBtn');
      const sidebar = document.getElementById('sidebar');

      if (!btn || !sidebar) {
        console.warn('Missing #hamburgerBtn or #sidebar');
        return;
      }

      btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
      });

      document.addEventListener('click', (e) => {
        if (window.innerWidth >= 768) return; 
        if (!sidebar.contains(e.target) && !btn.contains(e.target)) {
          sidebar.classList.add('-translate-x-full');
        }
      });
    });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
  const searchInput = document.querySelector('input[placeholder="Search"]');

  if (!searchInput) return;

  let previousHighlights = [];

  searchInput.addEventListener("input", function() {
    const query = this.value.trim();
    
    // Remove previous highlights
    previousHighlights.forEach(span => {
      const parent = span.parentNode;
      parent.replaceChild(document.createTextNode(span.textContent), span);
      parent.normalize(); // merge text nodes
    });
    previousHighlights = [];

    if (!query) return; // if empty, do nothing

    // Create regex for matching, case-insensitive
    const regex = new RegExp(query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'), 'gi');

    // Recursive function to highlight text nodes
    function highlight(node) {
      if (node.nodeType === 3) { // text node
        const match = node.data.match(regex);
        if (match) {
          const span = document.createElement('span');
          span.className = 'highlight';
          span.textContent = node.data;
          const temp = node.data.replace(regex, (m) => `@@@${m}@@@`);
          const frag = document.createDocumentFragment();

          temp.split('@@@').forEach((part) => {
            if (part.match(regex)) {
              const hspan = document.createElement('span');
              hspan.className = 'highlight';
              hspan.textContent = part;
              frag.appendChild(hspan);
              previousHighlights.push(hspan);
            } else if (part) {
              frag.appendChild(document.createTextNode(part));
            }
          });
          node.parentNode.replaceChild(frag, node);
        }
      } else if (node.nodeType === 1 && node.childNodes && node.tagName !== "SCRIPT" && node.tagName !== "STYLE") {
        node.childNodes.forEach(child => highlight(child));
      }
    }

    highlight(document.body);
  });
});
</script>

  </body>
</html>
