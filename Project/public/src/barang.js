document.getElementById('tampilkanTambahBarang').addEventListener("click", function(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "tambahbarang", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("overlayBarangContent").innerHTML = xhr.responseText;
            document.getElementById("overlayBarang").style.display = "block";

            document.getElementById('tutupOverlayBarang').addEventListener("click", function() {
                document.getElementById("overlayBarang").style.display = "none";
            });
        }
    };
    xhr.send();
});