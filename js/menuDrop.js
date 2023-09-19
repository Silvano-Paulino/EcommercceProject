  /* When the user clicks on the button,
  toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function usuar() {
  document.getElementById("proDown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

var tabs = document.querySelectorAll(".tabbutton button");
var tabs_wrap = document.querySelectorAll(".tabcontent");

tabs.forEach(function(tab, tab_index){
	tab.addEventListener("click", function(){
	
		tab.classList.remove("active");

		tabs_wrap.forEach(function(content, content_index){
      if(content_index == tab_index){
        content.style.display = "block";
      }
      else{
        content.style.display = "none";
      }
		})
	})
})