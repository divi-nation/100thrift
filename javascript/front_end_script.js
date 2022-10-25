function toggle_items(item_name){
    element = document.querySelector(item_name);
    element.classList.toggle("active");
}
function add_items(item_name){
    element = document.querySelector(item_name);
    element.classList.add("active");
}

function remove_items(item_name){
    element = document.querySelector(item_name);
    element.classList.remove("active");
}