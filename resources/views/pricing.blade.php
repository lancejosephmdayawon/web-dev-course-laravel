@extends('layout/main')
@section('content')
<div class='container mt-5'>
    <div class='row mt-4'>

        <!-- Column 1 -->
        <div class='col-lg-5 col-sm-12'>
            <!-- Form -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <!-- Password -->
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long,
                contain letters and numbers, and must not contain spaces,
                special characters, or emoji.
            </div>
            <!-- Forgot Password -->
            <p class="text-end">
                <a href="#" class="link-info">Forgot password?</a>
            </p>
            <!-- Login Button -->
            <button type="button" class="btn btn-primary">Login</button>
        </div>
        <!-- Column 2 -->
        <div class='col-lg-7 col-sm-12'>
            <!-- Title -->
            <h1 style="text-align: center;"><strong>PRICING</strong></h1>
            <!-- Paragraph -->
            <p class='mx-5 mt-3' style='text-align: center;'>
                Explore our Pricing Plans, designed to fit every need and budget.
                Whether you're just getting started or managing a growing team,
                we offer flexible options that scale with you.
                Choose the plan that best matches your goals and enjoy powerful features,
                reliable performance, and dedicated support. <br>
                <br>Compare our plans below and find the perfect match for your business.
            </p>
            <!-- Pricing Cards -->
            <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/basic.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><strong>Basic Plan</strong></h4>
                            <p class="card-text mb-4">Perfect for individuals or small projects.
                                Get access to essential tools and core features to help you get
                                started efficiently.</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-primary"><strong>₱499</strong>/mo.</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/pro.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><strong>Pro Plan</strong></h4>
                            <p class="card-text mb-4">Ideal for professionals and small teams.
                                Unlock advanced tools, greater customization, and faster performance.</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-primary"><strong>₱1,299</strong>/mo.</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/business.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><strong>Business Plan</strong></h4>
                            <p class="card-text mb-4">Built for growing organizations.
                                Experience the full power of the platform with complete access and team
                                collaboration features.</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-primary"><strong>₱2,999</strong>/mo.</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Comparison Table -->
            <h3 class='text-center my-4'>Compare Plans</h3>
            <div class='table-responsive'>
                <table class="table mb-5">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Basic</th>
                            <th scope="col">Pro</th>
                            <th scope="col">Business</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Core features</th>
                            <td>✅</td>
                            <td>✅</td>
                            <td>✅</td>
                        </tr>
                        <tr>
                            <th scope="row">Customer Support</th>
                            <td>Standard</td>
                            <td>Priority</td>
                            <td>Analytics</td>
                        </tr>
                        <tr>
                            <th scope="row">User count</th>
                            <td>3</td>
                            <td>10</td>
                            <td>Unlimited</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endSection