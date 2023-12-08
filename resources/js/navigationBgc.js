const nav = document.querySelector(".desktop-nav-container");
const bookBtn = document.querySelector('#tourmaster-room-navigation-checkout-button')
const menuItems = document.querySelectorAll('.menu-ite a')
const dropdown = document.querySelector('.menu-item.menu-item-has-children.hotale-normal-menu a')


const firstMenuItemDrop = document.querySelector('.test');
const submenu = document.querySelector('.sub-menu')


const height = 250;

console.log(firstMenuItemDrop);

window.addEventListener("scroll", () => {
    const actualPos = window.scrollY;

    if (actualPos >= height) {
        nav.classList.add("change-bgc");
        bookBtn.classList.remove('btn--secondary')
        bookBtn.classList.add('btn--third')
        menuItems.forEach(item=>item.style.color='white')
        // firstMenuItemDrop.forEach(item=>item.style.color='white')
        firstMenuItemDrop.classList.add('remove')
        // submenu.style.backgroundColor = 'black'

    }else{
        nav.classList.remove("change-bgc");
        bookBtn.classList.add('btn--secondary')
        bookBtn.classList.remove('btn--third')
        menuItems.forEach(item=>item.style.color='black')
        firstMenuItemDrop.classList.remove('white')
        dropdown.style.color='black'
    }
});