@extends('layouts.homepage-user')

@section('main')
<div id="container" class="bg">
    <aside>
      <header>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/style/css/consult.css') }}">
        <input type="text" placeholder="search">
      </header>
      <ul>
        <li>
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_10.jpg" alt="">
          <div>
            <h2>Prénom Nom</h2>
            <h3>
              <span class="status orange"></span>
              offline
            </h3>
          </div>

        </li>
        <li>
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_10.jpg" alt="">
          <div>
            <h2>Prénom Nom</h2>
            <h3>
              <span class="status green"></span>
              online
            </h3>
          </div>

        </li>


      </ul>
    </aside>
    <main>
      <header>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
        <div>
          <h2>Konsultasi bersama dr. Vincent Porter</h2>
          <h3>already 1902 messages</h3>
        </div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
      </header>
      <ul id="chat">
        <li class="you">
          <div class="entete">
            <span class="status green"></span>
            <h2>Vincent</h2>
            <h3>10:12AM, Today</h3>
          </div>
          <div class="triangle"></div>
          <div class="message">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
          </div>
        </li>
        <li class="me">
          <div class="entete">
            <h3>10:12AM, Today</h3>
            <h2>Vincent</h2>
            <span class="status blue"></span>
          </div>
          <div class="triangle"></div>
          <div class="message">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
          </div>
        </li>
        <li class="me">
          <div class="entete">
            <h3>10:12AM, Today</h3>
            <h2>Vincent</h2>
            <span class="status blue"></span>
          </div>
          <div class="triangle"></div>
          <div class="message">
            OK
          </div>
        </li>
        <li class="you">
          <div class="entete">
            <span class="status green"></span>
            <h2>Vincent</h2>
            <h3>10:12AM, Today</h3>
          </div>
          <div class="triangle"></div>
          <div class="message">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
          </div>
        </li>
        <li class="me">
          <div class="entete">
            <h3>10:12AM, Today</h3>
            <h2>Vincent</h2>
            <span class="status blue"></span>
          </div>
          <div class="triangle"></div>
          <div class="message">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
          </div>
        </li>
        <li class="me">
          <div class="entete">
            <h3>10:12AM, Today</h3>
            <h2>Vincent</h2>
            <span class="status blue"></span>
          </div>
          <div class="triangle"></div>
          <div class="message">
            OK
          </div>
        </li>
      </ul>
      <footer>
        <textarea placeholder="Type your message"></textarea>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
        <a href="#">Send</a>
      </footer>
    </main>
</div>
@endsection
