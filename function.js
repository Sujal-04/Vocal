function show()
{
x=document.getElementById("userpwd");
y=document.getElementById("hide1");
z=document.getElementById("hide2");
if (x.type=="password")
{
x.type="text";
y.classList.add("fa-eye");
y.classList.remove("fa-eye-slash");
}
else
{
x.type="password";
y.classList.add("fa-eye-slash");
y.classList.remove("fa-eye");
}
}
function onlyPlayOneIn(container) {
    container.addEventListener("play", function(event) {
    audio_elements = container.getElementsByTagName("audio")
      for(i=0; i < audio_elements.length; i++) {
        audio_element = audio_elements[i];
        if (audio_element !== event.target) {
          audio_element.pause();
        }
      }
    }, true);
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    onlyPlayOneIn(document.body);
  });
  function copyDiv(){
    var firstDivContent = document.getElementById('359');
    var secondDivContent = document.getElementById('1');
    secondDivContent.cloneNode(firstDivContent);
    
  }