class HeaderUl{
    constructor(iconMenu, headerUl, headerLi) {
        this.iconMenu = document.querySelector(iconMenu);
        this.headerUl = document.querySelector(headerUl);
        this.headerLi = document.querySelectorAll(headerLi);
        this.activeClass = "active";
        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.headerLi.forEach((link, index) => {
            console.log(index);
            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `headerLiFade 0.5s ease forwards 0.3s`);
        });
    }

    handleClick() {
        console.log(this);
        this.headerUl.classList.toggle(this.activeClass);
        this.iconMenu.classList.toggle(this.activeClass);
        this.animateLinks()
    }

    addClickEvent() {
        this.iconMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if(this.iconMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const headerUl = new HeaderUl(
    ".icon-menu",
    ".list-header",
    ".list-header li",
);

headerUl.init();