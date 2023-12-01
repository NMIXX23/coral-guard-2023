<div class="sidebar-forum col-md-3 p-5">
    <div class="card card-style mb-5">
        <div class="card-body">
            <h5>STATS</h5>
            <hr/>

            <ul class="stats">
                <li><a href="#"  class="bg-question"><span>Question (3)</span> <i class="fa fa-circle-question icon-twitter"></i></a></li>
                <li><a href="#"  class="bg-answer"><span>Answer (5) </span> <i class="fa fa-comment icon-facebook"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="card card-style mb-5">
        <div class="card-body">
            <h5>CATEGORY</h5>
            <hr/>
            <ul class="category">
                <li><a href="#">All</a></li>
                <?php
                foreach ($category as $categoryName) {
                    echo '<li><a href="#">' . $categoryName . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="card card-style mb-5">
        <div class="card-body">
            <h5>FIND US</h5>
            <hr/>

            <ul class="socials">
                <li><a href="#"  class="bg-twitter"><span>Twitter</span> <i class="fa-brands fa-twitter icon-twitter"></i></a></li>
                <li><a href="#"  class="bg-facebook"><span>Facebook</span> <i class="fa-brands fa-facebook icon-facebook"></i></a></li>
                <li><a href="#"  class="bg-youtube"><span>Youtube</span> <i class="fa-brands fa-youtube icon-youtube"></i></a></li>
                <li><a href="#"  class="bg-instagram"><span>Instagram</span> <i class="fa-brands fa-instagram icon-instagram"></i></a></li>
                <li><a href="#"  class="bg-tiktok"><span>Tiktok</span> <i class="fa-brands fa-tiktok icon-tiktok"></i></a></li>
            </ul>

        </div>
    </div>

    <div class="card card-style mb-5">
        <div class="card-body">
            <h5>CORAL AI</h5>
            <hr/>
            <div class="coral-ai">
                <div class="coral-ai-icon text-center">
                    <img src="./assets/img/chatbot.png" alt="Chatbot">
                </div>
                <p>Taking a long time to get an answer? or Not satisfied with the answers from forum communities? Just ask our chatbot, come on!</p>
            </div>
        </div>
    </div>
</div>