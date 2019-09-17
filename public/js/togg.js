const navSlide = () => {

    const nav = document.getElementById('markerCategory');
    const nav2 = document.getElementById('studentCategory');
    const nav3 =  document.getElementById('submitButton');
    const nav4 =  document.getElementById('userRole');

    nav.addEventListener('click', ()=> {
        //togle nav
        nav.classList.add('active');
        nav2.classList.remove('active');
        nav3.childNodes[0].nodeValue="Become a Marker";
        nav4.value="Marker";

    })
    nav2.addEventListener('click', ()=> {
        //togle nav
        nav2.classList.add('active');
        nav.classList.remove('active');
        nav3.innerHTML="Become a Student";
        nav4.value="Student";
    })

}




navSlide();