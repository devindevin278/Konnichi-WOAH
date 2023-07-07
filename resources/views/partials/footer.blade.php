@if (Request::is('learnStudent/*'))

<footer class="m-0 p-0">
@else
<footer class="m-0">
    @endif
    <div class="row p-0">
      <div class="footerbox col-md-3 mb-3">
        <h5 class="mb-3">Konnichi-Woah</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Learning</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Teaching</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Membership</a></li>
        </ul>
      </div>

      <div class="footerbox col-md-3 mb-3">
        <h5 class="mb-3">Community</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Learners</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Partners</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Developers</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Blog</a></li>
        </ul>
      </div>

      <div class="footerbox col-md-3 mb-3">
        <h5 class="mb-3">Resources</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Help</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Frequently Asked Questions</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Articles</a></li>
        </ul>
      </div>

      <div class="newsletter col-md-3 mb-3">
        <form>
          <h5 class="mb-3">Join Our Newsletter</h5>
          <div class="newsletter_input d-flex flex-column flex-sm-row w-100 mb-3">
              <label for="newsletter1" class="visually-hidden">Your email address</label>
              @if (Request::is('learnStudent/*'))
              <input id="newsletter1" type="text" class="form-control w-50" placeholder="Your email address">
              <button class="btn subscribe w-50" type="button">Subscribe</button>
                @else
                <input id="newsletter1" type="text" class="form-control" placeholder="Your email address">
                <button class="btn subscribe" type="button">Subscribe</button>
              @endif
          </div>
          <p class="will" style="color: #33272A;">* Will send you weekly updates for your better finance management.</p>
        </form>

        <p>Find Us:</p>
        <div class="footer_logo d-flex">
          <a href=""><img src="img/footer/footer_facebook.png" alt=""></a>
          <a href=""><img src="img/footer/footer_linkedin.png" alt=""></a>
          <a href=""><img src="img/footer/footer_instagram.png" alt=""></a>
          <a href=""><img src="img/footer/footer_twitter.png" alt=""></a>
        </div>
      </div>
    </div>

    <div class="line"></div>

    <div class="copyright text-center mt-3 border-top">
      <p>&copy; Copyright @Konichi-WOAH! 2023. All rights reserved.</p>
    </div>
  </footer>
