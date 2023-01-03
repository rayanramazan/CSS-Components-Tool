let darkMode = localStorage.getItem("dark-theme");
const darkModeToggle = document.querySelector("#icon");
const logo = document.querySelector("#logo");

const enableDarkMide = () => {
    document.body.classList.add("dark-theme");

    localStorage.setItem("dark-theme", "enabled");
    darkModeToggle.src = "img/sun.png";
    logo.src = "img/logo-light.png";
};

const disableDarkMode = () => {
    document.body.classList.remove("dark-theme");
    localStorage.setItem("dark-theme" , null);
    darkModeToggle.src = "img/moon.png";
}

if (darkMode === "enabled") {
    enableDarkMide();
}

darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("dark-theme");
    if (darkMode !== "enabled"){
        enableDarkMide();
        
    }
    else {
        disableDarkMode();
        logo.src = "img/1.png";
    }
});