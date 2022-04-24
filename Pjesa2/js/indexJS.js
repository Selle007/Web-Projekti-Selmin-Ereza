var MenuItems = document.getElementById("menuItems");

MenuItems.style.maxHeight = "0px";

function menuToggle(){
    if (MenuItems.style.maxHeight== "0px")
    {
        MenuItems.style.maxHeight= "200px";
    }
    else
    {
        MenuItems.style.maxHeight= "0px";
    }
}

var UserItems = document.getElementById("userItems");

UserItems.style.maxHeight = "0px";

function userToggle(){
    if (UserItems.style.maxHeight== "0px")
    {
        UserItems.style.maxHeight= "200px";
    }
    else
    {
        UserItems.style.maxHeight= "0px";
    }
}

var SearchItems = document.getElementById("searchItems");

SearchItems.style.maxHeight = "0px";

function searchToggle(){
    if (SearchItems.style.maxHeight== "0px")
    {
        SearchItems.style.maxHeight= "200px";
    }
    else
    {
        SearchItems.style.maxHeight= "0px";
    }
}