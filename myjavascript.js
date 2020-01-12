var movie = "Fight Club";
var description = "Терзаемый хронической бессонницей и отчаянно пытающийся вырваться из мучительно скучной жизни, клерк встречает некоего Тайлера Дардена, харизматического торговца мылом с извращенной философией.";

document.getElementById("movie").innerHTML = movie;
//document.getElementById("description").innerHTML = description;

/* 
    Ниже этого комментария напишите аналогичный код на jQuery, который выведет описание фильма. 
    Код "document.getElementById("description").innerHTML = description;"" закомментируйте двумя слешами, т.е. так:
    //document.getElementById("description").innerHTML = description;
*/
$('#description').text(description);