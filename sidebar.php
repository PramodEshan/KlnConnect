<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <span>Menu</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item">
                <a href="./index.php" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Home</span>
                </a>
            </li>
            <li class="nav-item nav-category">Categories</li>
            <li class="nav-item">
                <select id="category-select" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="0" selected>All Events</option>
                    <option value="1">Academic</option>
                    <option value="2">Art and Culture</option>
                    <option value="3">Sport</option>
                    <option value="4">e-Sport</option>
                    <option value="5">Career Development</option>
                    <option value="6">Leadership and Personal Development</option>
                    <option value="7">Community Service</option>
                    <option value="8">Health and Wellness</option>
                    <option value="9">Other</option>

                </select>
                <script>
                    document.getElementById("category-select").addEventListener("change", function() {
                        var selectedOption = this.options[this.selectedIndex].value;
                        if (selectedOption === "0") {
                            window.location.href = "index.php";
                        } else if (selectedOption === "1") {
                            window.location.href = "acadamic.php";
                        } else if (selectedOption === "2") {
                            window.location.href = "artandculture.php";
                        } else if (selectedOption === "3") {
                            window.location.href = "sport.php";
                        } else if (selectedOption === "4") {
                            window.location.href = "e-sport.php";
                        } else if (selectedOption === "5") {
                            window.location.href = "career.php";
                        } else if (selectedOption === "6") {
                            window.location.href = "leadership.php";
                        } else if (selectedOption === "7") {
                            window.location.href = "community.php";
                        } else if (selectedOption === "8") {
                            window.location.href = "health.php";
                        } else if (selectedOption === "9") {
                            window.location.href = "other.php";
                        } else {
                            window.location.href = "index.php";
                        }
                    });

                </script>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">View Leads</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Add Lead</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Admin Control</li>
            <li class="nav-item">
                <a href="./createevent.php" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Create An Event</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./publishedevents.php" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Active Events</span>
                </a>
            </li>
            <li class="nav-item nav-category">General</li>
            <li class="nav-item">
                <a href="./myaccount.php" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">My Account</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./registeredevents.php" class="nav-link">
                    <i class="link-icon" data-feather="square"></i>
                    <span class="link-title">Registered Events</span>
                </a>
            </li>
            <li class="nav-item nav-category"></li>
            <!--<li class="nav-item">
                <a href="./aboutus.php" class="nav-link">
                    <i class="link-icon" data-feather="sliders"></i>
                    <span class="link-title">About Us</span>
                </a>
            </li>-->
            <li class="nav-item">
                <a href="./contactus.php" class="nav-link">
                    <i class="link-icon" data-feather="phone"></i>
                    <span class="link-title">Contact Us</span>
                </a>
            </li>

        </ul>
    </div>
</nav>