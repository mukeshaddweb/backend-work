var button = document.querySelector('.submit');
var inputCity = document.querySelector('.inputCity');

var desc = document.querySelector('.desc');
var temp = document.querySelector('.temp');


button.addEventListener('click', function(){
    console.log(inputCity.value);
    fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputCity.value+'&appid=017beb019c8baffae3c49a6e3a77e102')
.then((Response) => Response.json()).then((data) => {
    var descvalue = data['weather'][0]['description'];
    var tempvalue = data['main']['temp'];
    const citylon = data['coord']['lon'];
    const citylat = data['coord']['lat'];
    console.log(citylon);

    var tempcel = Math.round((tempvalue - 273.15));
    var tempfar=Math.round(((tempcel * (9/5)) + 32));

    // name.innerHtml = namevalue;
    desc.innerHTML = descvalue;
    temp.innerHTML = tempcel + ' degree Celsius<br>'+tempfar+' degree F';

    

})
.catch((err) => alert("wrong city name!"))
})


