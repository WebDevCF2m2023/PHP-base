const nb_photos = 9;
var photos_index = 0;
var all_photos = [[],[]]
var directory = 0

function next_photos()
{
    photos_index-=-2;
    photos_index%=nb_photos
    photos_actualise()
}

function previous_photos()
{
    photos_index+=-2;
    if (photos_index<0)
    {
        photos_index+=nb_photos;
    }
    photos_index%=nb_photos
    photos_actualise()
}

async function photos_actualise(first=false)
{
    //counter
    const galerie = document.getElementById("Galerie")
    galerie.innerText = `Galerie (${photos_index+1}/${nb_photos})`
    //photos
    const photos = document.getElementById("photos");
    photos.innerHTML=""
    if (first)
    {
        for (var i=0;i<2;i-=-1)
        {
            var photo = document.createElement("img");
            photo.src= `img/photos_vertical/${(photos_index+i)%nb_photos}.webp`
            photo.className="photo_expo"
            photos.appendChild(photo)
            all_photos[(photos_index+i)%nb_photos]=photo
        }
    }
    else{
        photos.appendChild(all_photos[directory][photos_index])
        photos.appendChild(all_photos[directory][(photos_index+1)%nb_photos])
    }
}

async function preload()
{
    var photo
    for (var i=0;i<nb_photos;i++)
    {
        //vertical
        photo = document.createElement("img");
        photo.src=`img/photos_vertical/${i}.webp`
        photo.className="photo_expo"
        all_photos[0][(photos_index+i)%nb_photos]=photo
        //horizontal
        photo = document.createElement("img");
        photo.src=`img/photos_horizontal/${i}.webp`
        photo.className="photo_expo"
        all_photos[1][(photos_index+i)%nb_photos]=photo
    }
}

function vertical_click()
{
    directory = 0
    photos_actualise()
    document.getElementById("vertical").classList.remove("clicked")
    document.getElementById("horizontal").classList.remove("clicked")
    document.getElementById("vertical").classList.add("clicked")
}

function horizontal_click()
{
    directory = 1
    photos_actualise()
    document.getElementById("vertical").classList.remove("clicked")
    document.getElementById("horizontal").classList.remove("clicked")
    document.getElementById("horizontal").classList.add("clicked")
}

window.onload = function() {
    photos_actualise(first=true)
    preload()
}