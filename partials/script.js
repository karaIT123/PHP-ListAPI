//let dropdown = document.getElementById('author-dropdown');
 // Filling the character dropdownlist 
var dropdown = document.getElementById('subject');
dropdown.length = 0;

var defaultOption = document.createElement('option');
defaultOption.text = 'Choose Your Character';

dropdown.add(defaultOption);
dropdown.selectedIndex = 0;

const url = 'https://www.breakingbadapi.com/api/characters';

fetch(url)  
  .then(  
    function(response) {  
      return response.json();
            
    })
    .then (function(data){
      console.log(data)
      document.querySelector("#content h1").innerHTML= data[0].name;
      document.querySelector("#content h5").innerHTML= data[0].birthday;
      document.querySelector("#content img").src= data[0].img;
        var option;
    
    	for (var i = 0; i < data.length; i++) {
          option = document.createElement('option');
      	  option.text = data[i].name;
      	  option.value = i;
      	  dropdown.add(option);
		
		  
     
        }
	
        const selectElement = document.querySelector('#subject');
        selectElement.addEventListener('change', (event) => {
        //const result = document.querySelector('#author-dropdown');
        const selected = event.target.value;
        //result.textContent = `You like ${event.target.value}`;
        document.querySelector("#content h1").innerHTML= data[selected].name;
          document.querySelector("#content h5").innerHTML= data[selected].birthday;
          document.querySelector("#content img").src= data[selected].img;
        });
       })







/*fetch("https://www.breakingbadapi.com/api/characters")
.then(function(response){
    return response.json();
})

.then (function(data){
    console.log(data)
	
      document.querySelector("#content h1").innerHTML= data[0].name;
    document.querySelector("#content h5").innerHTML= data[0].birthday;
    document.querySelector("#content img").src= data[0].img;})
*/
