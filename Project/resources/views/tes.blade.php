<input type="text" id="searchInput" class="text-[2vh] border-[0.1vh] border-[#000000] bg-[#D9D9D9] mt-[0.5vh] h-[6vh] w-[75%] rounded-[1.2vh] px-[1.3vh] outline-[1vh]">
<ul  id="searchResults" class="text-[1.7vh] -mt-5 bg-white pt-6 pb-2 shadow-zinc-700 shadow-md rounded-b-md px-3 w-[75%] ">
    <!-- result items -->
</ul>

<script>

    // DOM Elements 
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchResults.classList.remove('hidden'); 

    // hide 
    searchResults.classList.add('hidden');
    
    // Cart
    let cart = [];
    
    function debounce(func, delay) {
        let timeoutId;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                func.apply(context, args);
            }, delay);
        };
    }
    
    // Search Barang
    const search = debounce(async keyword => {
        
        // Hide results
        searchResults.style.display = 'none';
        
        // Abort if empty
        if(!keyword) return;
        
        // Call API
        const response = await fetch(`/search-barang?keyword=${keyword}`);
        const data = await response.json();
        
        // Show & render results
        searchResults.style.display = 'block';
        renderResults(data);
        
    }, 500);

    
    function ucwords(str) {
        return str.replace(/\b\w/g, function (match) {
            return match.toUpperCase();
        });
    }
    
    // Render results 
    function renderResults(barangs) {
        
        searchResults.innerHTML = '';
        
        barangs.forEach((barang, index) => {
            
            const li = document.createElement('li');
            if(barang.stok > 0){
                li.innerText = ucwords(barang.nama_barang);
                li.style.paddingTop = '10px';
                li.style.paddingBottom = '10px';

                if(index < barangs.length - 1){
                    li.style.borderBottom = '1px solid black';
                }
            }
            // li.classList.add('border border-black');
            // li.style.border = 'black';
            
            li.addEventListener('click', () => {
                selectBarang(barang);
            });
    
        searchResults.appendChild(li);
    
      });
  
    }

    // Select barang 
    function selectBarang(barang) {
    
      // Add to cart  
      addToCart(barang);
    
      // Reset input
      searchInput.value = '';
    
      // Hide results
      searchResults.style.display = 'none';
    
    }

    // Add to cart
    function addToCart(barang) {
    
      // Find in cart
      const item = cart.find(item => item.id == barang.id);
    
      if(item) {
        item.qty++;
      } else {
        cart.push({
          id: barang.id,
          name: barang.nama_barang,
          qty: 1
        }); 
      }
  
      // TODO: Render cart
  
    }

    // Event listener
    searchInput.addEventListener('input', e => {
      search(e.target.value); 
    });

</script>