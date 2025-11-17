<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content {
        flex: 1;
        padding: 60px 20px;
        text-align: center;
        color: #666;
    }

    footer {
        background-color: #1a1a1a;
        color: #e0e0e0;
        padding: 40px 0 20px;
        margin-top: auto;
        border-top: 3px solid #0d6efd;
    }

    footer h5 {
        color: #fff;
        font-weight: 600;
        margin-bottom: 20px;
    }

    footer a {
        color: #b8b8b8;
        text-decoration: none;
        transition: color 0.3s;
    }

    footer a:hover {
        color: #0d6efd;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .social-links a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: #2a2a2a;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: background-color 0.3s;
    }

    .social-links a:hover {
        background-color: #0d6efd;
    }

    .footer-bottom {
        border-top: 1px solid #333;
        margin-top: 30px;
        padding-top: 20px;
        text-align: center;
        color: #888;
    }

    .footer-bottom p {
        margin: 0;
    }
</style>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="d-flex align-items-start gap-3 mb-3">
                    <img src="images/favicon.png" alt="LJD Laravel Logo" style="width: 30px; height: 30px; flex-shrink: 0;">
                    <h5 class="m-0">About Blog Management System</h5>
                </div>
                <p>This is a surprise quiz by sir AJ San Luis.</p>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="dashboard">Home</a></li>
                    <li><a href="user">Users</a></li>
                    <li><a href="responsive">Catalogs</a></li>
                    <li><a href="student">Register</a></li>
                    <li><a href="pricing">Pricing</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <h5>Follow Us</h5>
                <div class="social-links">
                    <a href="#facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#linkedin" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#github" title="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Blog Management System. All rights reserved.</p>
        </div>
    </div>
</footer>