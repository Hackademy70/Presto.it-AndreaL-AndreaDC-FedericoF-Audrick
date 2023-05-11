<x-layout>
    
    <div class="xbody">
        <section class="team">
            <div class="x-container">
                <div class="team-items">
                    <div class="team-item">
                        <div class="team-img-box">
                            <img src="./img1.jpg" >
                        </div>
                        <div class="team-info">
                            <button type="button" class="team-btn js-team-btn"><i
                                    class="fa-sharp fa-light fa-plus"></i></button>
                            <div class="team-inner">
                                <h3 class="team-name">john doe</h3>
                                <div class="team-position">web-developer</div>
                                <div class="team-text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum in voluptas quod incidunt quasi fuga maxime
                                        repellendus illo. Reprehenderit eos ea dignissimos corporis.
                                        Nesciunt eum omnis sit, magnam iure numquam.
                                    </p>
                                    <p>
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
                                        Nesciunt eum omnis sit, magnam iure numquam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img-box">
                            <img src="img1.jpg" >
                        </div>
                        <div class="team-info">
                            <button type="button" class="team-btn js-team-btn"><i
                                    class="fa-sharp fa-light fa-plus"></i></button>
                            <div class="team-inner">
                                <h3 class="team-name">john doe</h3>
                                <div class="team-position">web-developer</div>
                                <div class="team-text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum in voluptas quod incidunt quasi fuga maxime
                                        repellendus illo. Reprehenderit eos ea dignissimos corporis.
                                        Nesciunt eum omnis sit, magnam iure numquam.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img-box">
                            <img src="img1.jpg" >
                        </div>
                        <div class="team-info">
                            <button type="button" class="team-btn js-team-btn"><i
                                    class="fa-sharp fa-light fa-plus"></i></button>
                            <div class="team-inner">
                                <h3 class="team-name">john doe</h3>
                                <div class="team-position">web-developer</div>
                                <div class="team-text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum in voluptas quod incidunt quasi fuga maxime
                                        repellendus illo. Reprehenderit eos ea dignissimos corporis.
                                        Nesciunt eum omnis sit, magnam iure numquam.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Harum in voluptas quod incidunt quasi fuga maxime
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
   
    <script>
        const teamBtns = document.querySelectorAll(".js-team-btn");

teamBtns.forEach((btn)=>{
    btn.addEventListener("click",function(){
        this.parentElement.classList.toggle("show");
    })
})
    </script>
   
</x-layout>