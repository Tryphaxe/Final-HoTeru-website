// CODE POUR LES ONGLETS DANS LINKS
const links = [...document.querySelectorAll(".link")];

links.forEach(link=>link.addEventListener('click', linkAnimation));

function linkAnimation(e){

    const indextoremove = links.findIndex(link => link.classList.contains("page-active"));

    links[indextoremove].classList.remove("page-active");

    const indextoshow = links.indexOf(e.target);

    links[indextoshow].classList.add("page-active");

}