<!-- Top Bar Start-->
    <div class="contain-to-grid sticky">
      <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        <ul class="title-area">
            <li class="name">
              <h1><a href="{{url('about')}}">Little Library</a></h1>
            </li>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('book/buy/list')}}">Check Books</a></li>
              <li><a href="{{url('book/new')}}">New Books</a></li>
              <li><a href="{{url('book/add')}}">Add Books</a></li>
              <li><a href="{{url('cart')}}">Shopping Cart</a></li>
              <li><a href="{{url('about')}}">About us</a></li>
              <li><a href="{{url('contact')}}">Contact us</a></li>
            </ul>
          </section>
        </nav>
    </div>
<!-- Top Bar End-->