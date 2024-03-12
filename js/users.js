document.addEventListener('DOMContentLoaded', function() {
  const userCards = document.querySelectorAll('.user-card');
  
  userCards.forEach(card => {
    card.addEventListener('click', function() {
      const userId = this.getAttribute('data-user-id');
      window.location.href = `chat.php?user_id=${userId}`;
    });
  });
  

  
});

const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = () => {
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if (!searchBar.classList.contains("show")) {
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.oninput = () => {
  let searchTerm = searchBar.value.trim(); // Eliminar espacios en blanco al principio y al final
  if (searchTerm) {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
      }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}