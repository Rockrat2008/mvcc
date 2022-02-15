<?php
if($_POST["message"]) {
    mail("missionviejochessclub@gmail.com", "Contact Form Message",
    $_POST["message here"]. "From: user@email.com");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Welcome to the Mission Viejo Chess Club.  We are based out of Southern California and play OTB and online at chess.com"
    />
    <title>Mission Viejo Chess Club - PRINCIPLES</title>
    <!-- BOOTSTRAP CSS -->
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/static//css//styles.css" />
  </head>
  <body>
    <header class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 align-self-center">
            <img src="static/images/mvcc.PNG" class="img-fluid" />
          </div>
          <div class="col">
            <h1>Mission Viejo Chess Club</h1>
            <h2>Established: 2020</h2>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
      <div class="container">
        <button
          class="navbar-toggler ml-auto"
          type="button"
          data-toggle="collapse"
          data-target="#mvccNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mvccNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="calendar.html">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ranks.html">Club Ranks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="principles.html">Principles</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="links.html">Links</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h2>Mission Viejo Chess Club</h2>
<div class="row row-content">
    <div class="col-12">
      <h2>Contact Us</h2>
      <hr />
    </div>
    <div class="col-md-10">
      <form>
        <div class="form-group row">
          <label for="firstName">First Name:</label>
          <div class="col-md-10">
            <input
              type="text"
              id="firstName"
              name="firstName"
              placeholder="First Name"
            />
          </div>
        </div>
        <div class="form-group row">
          <label for="lastName">Last Name:</label>
          <div class="col-md-10">
            <input
              type="text"
              id="lastName"
              name="lastName"
              placeholder="Last Name"
            />
          </div>
        </div>
        <div class="form-group row">
          <label for="phoneNum">Contact Tel:</label>
          <div class="col-md-10">
            <input
              type="tel"
              id="phoneNum"
              name="phoneNum"
              placeholder="Telephone Number"
            />
          </div>
          <!-- <div class="col-7">
            <input type="tel" name="telNum" placeholder="Tel. number" />
          </div> -->
        </div>
        <div class="form-group row">
          <label for="email">Email Addr:</label>
          <div class="col-md-10">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email"
            />
          </div>
        </div>
        <div class="form-group row">
          <div class="col offset-md-2">
            May we contact you?
            <div class="form-check form-check-inline">
              <input
                type="radio"
                id="contactYes"
                name="contactRadio"
                value="yes"
              />
              <label for="contactYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                type="radio"
                id="contactNo"
                name="contactRadio"
                value="no"
              />
              <label for="contactNo">No</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="feedback" name="feedback">Feedback:</label>
          <div class="col-md-10">
            <textarea id="feedback" name="feedback" rows="8"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-md-2 col-md-10">
            <button type="submit" class="btn btn-primary">
              Send Feedback
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>