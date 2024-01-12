<section class="section">
    <div class="contact-us-container">
        <div class="hide-on-phone">
            <h2>Contact Us</h2>
            <p>When we aren’t changing landscapes, we’re making headlines.</p>
            <h3>Send us an Enquiry</h3>
        </div>


        <div id="myForm" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeForm()"><img src="assets/icons/close.png" alt="" id="close"></a>
            <form id="contact-form">
                <!-- <label for="name">Name:</label> -->
                <input type="text" id="name" name="name" placeholder="Name" required>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>
                <div class="custom-select">
                    <select id="project" name="project" required>
                        <option value="0">Select Project:</option>
                        <option value="project 1">Project 1</option>
                        <option value="project 2">Project 2</option>
                        <option value="project 3">Project 3</option>
                        <option value="project 4">Project 4</option>
                        <option value="project 5">Project 5</option>
                        <option value="project 6">Project 6</option>
                    </select>
                </div>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="vl"></div>
    <div class="map-container">
        <div class="absolute-container-placeholder">
            <p>Lorem ipsum dolor sit amet - consetetur sadipscing elitr</p>
        </div>

        <div class="absolute-container">
            <img src="assets/images/map.png" alt="" class="map">
            <img src="assets/icons/pointer.svg" alt="" class="pointer">

            <div class="text-container">
                <div class="mobile-absolute">
                    <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</h4>
                    <p class="links">
                        <a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a> |
                        <a href="mailto:test1@gmail.com" target="_blank">test1@gmail.com</a> |
                        <a href="mailto:test2@gmail.com" target="_blank">test2@gmail.com</a>
                    </p>
                </div>


                <button type="button" class="send-enquiry-btn" onclick="openForm()">Send us an Enquiry</button>

                <h3>Sales Enquiry</h3>
                <div class="links">
                    <div class="contacts">
                        <p>Phone</p><a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a>
                    </div>


                    <div class="contacts">
                        <p>Email</p>
                        <a href="mailto:test1@gmail.com" target="_blank">test1@gmail.com</a>
                    </div>
                </div>


                <h3>Redevelopment Centre</h3>
                <div class="links">
                    <div class="contacts">
                        <p>Phone</p>
                        <a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a>
                    </div>

                    <div class="contacts">
                        <p>Email</p>
                        <a href="mailto:test2@gmail.com" target="_blank">test2@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>


</section>