let team = document.querySelectorAll("#about-team ul li");




team.forEach((li) =>{
    let img = li.querySelector('img');

    img.addEventListener("click", ()=>{
        let card = li.querySelector('div');
        card.classList.add("show");       
    })

    img.addEventListener("mouseout", ()=>{
        let card = li.querySelector('div');
        card.classList.remove("show");
    })
})