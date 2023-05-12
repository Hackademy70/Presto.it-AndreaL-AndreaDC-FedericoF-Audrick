let myTeam = [{
    'id': 1,
    'name': 'Federico',
    'titolo':'senior web developper',
    'description':`Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.
        
        
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.`
},
{
    'id': 2,
    'name': 'Andrea',
    'titolo':'senior web developper',
    'description':`
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            
            .`
},
{
    'id': 3,
    'name': 'Andrea',
    'titolo':'senior web developper',
    'description':`Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            Nesciunt eum omnis sit, magnam iure numquam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum in voluptas quod incidunt quasi fuga maxime
            repellendus illo. Reprehenderit eos ea dignissimos corporis.
            `
},


];



let teamItems = document.querySelector(".team-items")

myTeam.forEach(element => {
let teamItem = document.createElement("div");
teamItem.classList.add("team-item")
teamItem.innerHTML = `

<div class="team-img-box">
<img src="./img1.jpg" >
</div>
<div class="team-info">
<button type="button" class="team-btn js-team-btn"><i
        class="fa-sharp fa-light fa-plus"></i></button>
<div class="team-inner">
    <h3 class="team-name">${element.id} - Nome: ${element.name}</h3>
    <div class="team-position">${element.titolo}</div>
    <div class="team-text">
        <p>
            ${element.description}
        </p>
    </div>
</div>
</div>

`;
teamItems.appendChild(teamItem);
})
const teamBtns = document.querySelectorAll(".js-team-btn");
teamBtns.forEach((btn) =>{
btn.addEventListener("click", function() {
    this.parentElement.classList.toggle("show");
})
})