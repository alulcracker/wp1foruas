function myFunction() {
    var copyText = document.getElementById("copybtn");
  
    copyText.select();
    copyText.setSelectionRange(0, 99999);
  
    navigator.clipboard.writeText(copyText.value);
  
    alert("Tersalin: " + copyText.value);
  }
