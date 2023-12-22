function toggleLike() {
    var img = document.getElementById("favoriteImg");
    if (img.src.match("favorite_white.png")) {
        img.src = "/storage/favorite_red.png";
    } else {
        img.src = "/storage/favorite_white.png";
    }
}
