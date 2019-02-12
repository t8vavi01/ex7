function showLanguage() {
  var select = document.getElementById('language');
  var input = document.getElementById('selected_language');
  select.onchange = function() {
    input.value = select.value;
  }
}

 function showPhone(arvo) {
   document.getElementById('selected_phone').value = arvo;
   }
