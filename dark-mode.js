var checkbox = document.querySelector('input[name=theme]');
var decookie = {};

dc = decodeURIComponent(document.cookie);
dc = dc.split(';');

for (let val of dc) {
    val = val.split('=');
    decookie[val[0].trim()] = val[1];
}

console.log(window.location.pathname);

if(decookie['themeColor'] == 'dark' ){
    document.documentElement.setAttribute('data-theme', 'dark');
    document.querySelector("#switch").setAttribute('checked', 'true');
    document.querySelector("#logoNavBar").setAttribute('src', 'assets/images/logomajs-vectoriel-blanc.svg');
    if(window.location.pathname	== '/' ){
        document.querySelector("#iconCompetence1").setAttribute('src', 'assets/images/dev-2-black.svg');
        document.querySelector("#iconCompetence2").setAttribute('src', 'assets/images/design-2-black.svg');
        document.querySelector("#iconCompetence3").setAttribute('src', 'assets/images/seo-2-black.svg');
    }
}else{
    document.documentElement.setAttribute('data-theme', 'light');
}

checkbox.addEventListener('change', function() {
    if(this.checked) {
        trans()
        document.cookie = "themeColor=dark"
        document.documentElement.setAttribute('data-theme', 'dark');
        document.querySelector("#logoNavBar").setAttribute('src', 'assets/images/logomajs-vectoriel-blanc.svg');
        if(window.location.pathname	== '/' ){
            document.querySelector("#iconCompetence1").setAttribute('src', 'assets/images/dev-2-black.svg');
            document.querySelector("#iconCompetence2").setAttribute('src', 'assets/images/design-2-black.svg');
            document.querySelector("#iconCompetence3").setAttribute('src', 'assets/images/seo-2-black.svg');
        }
    } else {
        trans()
        document.cookie = "themeColor=light";
        document.documentElement.setAttribute('data-theme', 'light');
        document.querySelector("#logoNavBar").setAttribute('src', 'assets/images/logomajs-vectoriel.svg');
        if(window.location.pathname	== '/' ){
            document.querySelector("#iconCompetence1").setAttribute('src', 'assets/images/dev-2.svg');
            document.querySelector("#iconCompetence2").setAttribute('src', 'assets/images/design-2.svg');
            document.querySelector("#iconCompetence3").setAttribute('src', 'assets/images/seo-2.svg');
        }
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}