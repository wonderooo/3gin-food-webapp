<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <p class="nav-link text-warning">3GIN food</p>
        </li>
        <li class="nav-item">
          <p class="nav-link text-black" ><strong>Deliver to:</strong> Current Location <strong>Mińsk Mazowiecki, PL</strong></p>
        </li>
        <div class="nav-item row row-cols-3 g-0 align-items-center">
          <li class="col nav-item">
            <input type="text" placeholder="Search food" style="width: 125px; border: none;">
          </li>
          <li class="col nav-item">
            <button type="button" class="btn btn-warning">Login</button>
          </li>
        </div>
      </ul>

    <div class="container-fluid bg-warning mt-1 pb-5" style="background-image: url('assets/ramen.png'); background-repeat: no-repeat; background-position: 75% bottom; background-size: 500px;">
        <h1 class="text-white mar-l pt-5 fw-bolder">Are you starving!</h1>
        <p class="text-black mar-l my-3 opacity-50">Within a few clicks, find meals that are accressible near you</p>
        <!-- Content here -->
        <div class="card p-8 mar-l rounded-3" style="width: 40rem;">
            <div class="card-body">
                <div class="row mx-2">
                    <div class="col">
                        <p class="card-text text-warning">Delivery</p>
                    </div>
                    <div class="col">
                        <p class="card-text text-warning">Pickup</p>
                    </div>
                </div>
                        <form class="d-flex my-4 mx-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning text-white" type="submit">Search</button>
                        </form>
            </div>
        </div>
    </div>
    <div class="container my-5">
      <div class="row justify-content-center">
		<?php
		$a = [
			['img' => 'r1-1.png', 'name' => 'nazwa-1', 'date' => strtotime("2022-03-20")],
			['img' => 'r1-2.png', 'name' => 'nazwa-2', 'date' => strtotime("2022-03-21")],
			['img' => 'r1-3.png', 'name' => 'nazwa-2', 'date' => strtotime("2022-03-22")],
			['img' => 'r1-1.png', 'name' => 'nazwa-3', 'date' => strtotime("2022-03-23")]];
		foreach ($a as $i){
			$datediff = $i['date'] - time();
			$datediff = round($datediff / (60 * 60 * 24));
			echo '<div class="col">
			<img src=assets/'.$i['img'].' class="rounded" style="width: 18rem"/>
			<p class="opacity-75 mb-1 mt-3">'.$i['name'].'</p>
			<button type="button" style="height:3rem" class="fw-bold btn btn-warning opacity-75">'.$datediff.' days remaining</p>
			</div>';
		}
		?>
		<!--
        <div class="col">
          <img src="assets/r1-1.png" class="rounded" style="width: 18rem;">
          <p class="opacity-75 mb-1 mt-3">Greys Vage</p>
          <button type="button" class="btn btn-warning opacity-75">6 days remaining</button>
        </div>
        <div class="col">
          <img src="assets/r1-2.png" class="rounded" style="width: 18rem;">
          <p class="opacity-75 mb-1 mt-3">Greys Vage</p>
          <button type="button" class="btn btn-warning opacity-75">6 days remaining</button>
        </div>
        <div class="col">
          <img src="assets/r1-3.png" class="rounded" style="width: 18rem;">
          <p class="opacity-75 mb-1 mt-3">Greys Vage</p>
          <button type="button" class="btn btn-warning opacity-75">6 days remaining</button>
        </div>
        <div class="col">
          <img src="assets/r1-1.png" class="rounded" style="width: 18rem;">
          <p class="opacity-75 mb-1 mt-3">Greys Vage</p>
          <button type="button" class="btn btn-warning opacity-75">6 days remaining</button>
        </div>
		-->
      </div>
    </div>

    <div class="container pt-5" style="text-align: center;">
      <h2 class="mb-5 text-warning fw-bolder">How does it work</h2>
      <div class="row justify-content-center">
        <div class="col">
          <div style="height: 120px;">
            <img src="assets/r2-1.png" class="rounded" style="width: 5rem;">
          </div>
          <p class="fw-bold mb-1 mt-3">Select location</p>
          <p class="opacity-50">Choose the location where your food will be delivered.</p>
        </div>
        <div class="col">
          <div style="height: 120px;">
            <img src="assets/r2-2.png" class="rounded" style="width: 8rem;">
          </div>
          <p class="fw-bold mb-1 mt-3">Choose order</p>
          <p class="opacity-50">Check over hundreds of menus to pick your favorite food.</p>
        </div>
        <div class="col">
          <div style="height: 120px;">
            <img src="assets/r2-3.png" class="rounded" style="width: 8rem;">
          </div>
          <p class="fw-bold mb-1 mt-3">Pay advanced</p>
          <p class="opacity-50">It's quick, safe and simple. Select several methods of payment.</p>
        </div>
        <div class="col">
          <div style="height: 120px;">
            <img src="assets/r2-4.png" class="rounded" style="width: 8rem;">
          </div>
          <p class="fw-bold mb-1 mt-3">Enjoy meals</p>
          <p class="opacity-50">Food is made and delivered directly to your home.</p>
        </div>
      </div>
    </div>

    <div class="container my-5" style="text-align: center;">
      <h2>Popular items</h2>
      <div class="row justify-content-center mt-5">
		<?php
		$a = [
			['img' => 'r3-1.png', 'name' => 'nazwa-1', 'date' => strtotime("2022-03-20")],
			['img' => 'r3-2.png', 'name' => 'nazwa-2', 'date' => strtotime("2022-03-21")],
			['img' => 'r3-3.png', 'name' => 'nazwa-2', 'date' => strtotime("2022-03-22")],
			['img' => 'r3-4.png', 'name' => 'nazwa-2', 'date' => strtotime("2022-03-22")],
			['img' => 'r3-5.png', 'name' => 'nazwa-3', 'date' => strtotime("2022-03-23")]];
        echo '<div class="col">
          <div style="height: 200px;">
            <img src="assets/r3-1.png" class="rounded" style="width: 12rem;">
          </div>
          <p class="opacity-75 mb-0 mt-3">Cheese Burger</p>
          <p class="opacity-50 mb-0 mt-0 text-warning">📍 Burger Arena</p>
          <p class="opacity-100 mb-1 mt-0 fw-bold">$3.88</p>
          <button type="button" class="btn btn-warning opacity-100 text-white px-5">Order now</button>
        </div>';
		?>
		<!--
        <div class="col">
          <div style="height: 200px;">
            <img src="assets/r3-2.png" class="rounded" style="width: 12rem;">
          </div>
          <p class="opacity-75 mb-0 mt-3">Thai Soup</p>
          <p class="opacity-50 mb-0 mt-0 text-warning">📍 Foody man</p>
          <p class="opacity-100 mb-1 mt-0 fw-bold">$2.79</p>
          <button type="button" class="btn btn-warning opacity-100 text-white px-5">Order now</button>
        </div>
        <div class="col">
          <div style="height: 200px;">
            <img src="assets/r3-3.png" class="rounded" style="width: 12rem;">
          </div>
          <p class="opacity-75 mb-0 mt-3">Toffe's Cake</p>
          <p class="opacity-50 mb-0 mt-0 text-warning">📍 Top Sticks</p>
          <p class="opacity-100 mb-1 mt-0 fw-bold">$4.00</p>
          <button type="button" class="btn btn-warning opacity-100 text-white px-5">Order now</button>
        </div>
        <div class="col">
          <div style="height: 200px">
            <img src="assets/r3-4.png" class="rounded" style="width: 12rem;">
          </div>
          <p class="opacity-75 mb-0 mt-3">Dancake</p>
          <p class="opacity-50 mb-0 mt-0 text-warning">📍 Cake World</p>
          <p class="opacity-100 mb-1 mt-0 fw-bold">$1.99</p>
          <button type="button" class="btn btn-warning opacity-100 text-white px-5">Order now</button>
        </div>
        <div class="col">
          <div style="height: 200px;">
            <img src="assets/r3-5.png" class="rounded" style="width: 12rem;">
          </div>
          <p class="opacity-75 mb-0 mt-3">Crispy Sandwitch</p>
          <p class="opacity-50 mb-0 mt-0 text-warning">📍 Fastfood Dine</p>
          <p class="opacity-100 mb-1 mt-0 fw-bold">$3.00</p>
          <button type="button" class="btn btn-warning opacity-100 text-white px-5">Order now</button>
        </div>
		-->
      </div>
    </div>

    <div class="container my-5" style="text-align: center;">
      <h2 >Featured Restaurants</h2>
      <div class="row mt-5">
        <div class="col-3 mb-5">
          <div style="height: 225px;">
            <img src="assets/r4-1.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Foodworld</p>
              <p class="fs-6" style="color: orange">⭐️ 46</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div style="height: 225px;">
            <img src="assets/r4-2.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Pizzahub</p>
              <p class="fs-6" style="color: orange">⭐️ 40</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div style="height: 225px;">
            <img src="assets/r4-3.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Tacobell</p>
              <p class="fs-6" style="color: orange">⭐️ 35</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-success opacity-100 px-5 outline" style="color: green;">Open now</button>
          </div>
        </div> 

        <div class="col-3 mb-5">
          <div style="height: 225px;">
            <img src="assets/r4-4.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Donuts hut</p>
              <p class="fs-6" style="color: orange">⭐️ 20</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3">
          <div style="height: 225px;">
            <img src="assets/r4-5.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Donuts hut</p>
              <p class="fs-6" style="color: orange">⭐️ 50</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3">
          <div style="height: 225px;">
            <img src="assets/r4-6.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Ruby Tuesday</p>
              <p class="fs-6" style="color: orange">⭐️ 26</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3">
          <div style="height: 225px;">
            <img src="assets/r4-7.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bold fs-5 mb-1">Kuakata</p>
              <p class="fs-6" style="color: orange">⭐️ 52</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>

        <div class="col-3">
          <div style="height: 225px;">
            <img src="assets/r4-8.png" class="rounded" style="width: 16rem;">
          </div>
          <div class="row mt-3">
            <div class="col-4" style="text-align: center;">
              <img src="assets/r4-logo.png" class="rounded ms-4"> 
            </div>
            <div class="col-8" style="text-align: left;">
              <p class="fw-bolder fs-5 mb-1">Red square</p>
              <p class="fs-6" style="color: orange">⭐️ 45</p>
            </div>
          </div>
          <div style="text-align: left;" class="ms-4 opacity-75">
            <button type="button" class="btn btn-warning opacity-100 px-5 outline" style="color: orange;">Opens tomorrow</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5" style="width: 75%;">
      <div class="row border rounded shadow">
        <div class="col-4">
          <div class="row ms-3 mt-5">
            <div class="col-12">
              <p class="fw-bolder fs-2">Wanna eat hot <br>& spicy <span style="color: orange;">pizza?</span></p>
              <p style="color: gray;">Pair up with a friend and enjoy the 
                hot and crispy pizza pops. Try it 
                with the best deals.</p>
            </div>
            <div class="col-12" style="text-align: center;">
              <button type="button" style="color: white;" class="btn btn-warning px-5 mt-3">Place order ></button>
            </div>
          </div>
        </div>
        <div class="col-8" style="background-image: url('assets/c1.png'); height: 20rem; background-size: cover; background-repeat: no-repeat; overflow: hidden;">
        </div>
      </div>
    </div>

    <div class="container mb-5" style="width: 75%;">
      <div class="row border rounded shadow">
        <div class="col-8" style="background-image: url('assets/c2.png'); height: 20rem; background-size: cover; background-repeat: no-repeat; overflow: hidden;">
        </div>
        <div class="col-4">
          <div class="row ms-3 mt-5">
            <div class="col-12">
              <p class="fw-bolder fs-2">Celebrate parties <br>with <span style="color: orange;">Fried Chicken</span></p>
              <p style="color: gray;">Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out 
                best deals for fried chicken.</p>
            </div>
            <div class="col-12" style="text-align: center;">
              <button type="button" style="color: white;" class="btn btn-warning px-5 mt-3">Place order ></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5" style="width: 75%;">
      <div class="row border rounded shadow">
        <div class="col-4">
          <div class="row ms-3 mt-5">
            <div class="col-12">
              <p class="fw-bolder fs-2">Best deals <span style="color: orange;">Crispy Sandwiches</span></p>
              <p style="color: gray;">Enjoy the large size of sandwiches. Complete 
                perfect slice of sandwiches.</p>
            </div>
            <div class="col-12" style="text-align: center;">
              <button type="button" style="color: white;" class="btn btn-warning px-5 mt-3">Place order ></button>
            </div>
          </div>
        </div>
        <div class="col-8" style="background-image: url('assets/c3.png'); height: 20rem; background-size: cover; background-repeat: no-repeat; overflow: hidden;">
        </div>
      </div>
    </div>
    
    <div class="footer">
      <div class="container-fluid m-0">
      <div class="row" >
        <div class="col" style="margin-top: 70px;">
          <h1 class="whiteh1">Our top cities</h1>
          <div class="row">
          <div class="col">
          <ul>
            <li>San Francisco</li>
            <li>Miami</li>
            <li>San Diego</li>
            <li>East Bay</li>
            <li>Long Beach</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>Los Angeles</li>
            <li>Washington DC</li>
            <li>Seattle</li>
            <li>Portland</li>
            <li>Nashville</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>New York City</li>
            <li>Orange County</li>
            <li>Atlanta</li>
            <li>Charlotte</li>
            <li>Denver</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>Chicago</li>
            <li>Phoenix</li>
            <li>Las Vegas</li>
            <li>Sacramento</li>
            <li>Oklahoma City</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>Columbus</li>
            <li>New Mexico</li>
            <li>Albuquerque</li>
            <li>Sacramento</li>
            <li>New Orleans</li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
      <div class="row">
      <div class="col col-1">
        <h1 class="whiteh1">Company</h1>
        <ul>
          <li>About us</li>
          <li>Team</li>
          <li>Careers</li>
          <li>Blog</li>
        </ul>
      </div>
      <div class="col col-1">
        <h1 class="whiteh1">Contact</h1>
        <ul>
          <li>Help & Support</li>
          <li>Partner with us</li>
          <li>Ride with us</li>
        </ul>
      </div>
      <div class="col col-1">
        <h1 class="whiteh1">Legal</h1>
        <ul>
          <li>Terms & Conditions</li>
          <li>Refund & Cancellation</li>
          <li>Privacy Policy</li>
          <li>Cookie Policy</li>
        </ul>
      </div>
      <div class="col social">
        <h1 class="whiteh1">FOLLOW US</h1>
        <br>
        <ul>
          <li><img src="assets/r4-logo.png" width="24" style="width: 24px;"></li>
          <li><img src="assets/r4-logo.png" width="24" style="width: 24px;"></li>
          <li><img src="assets/r4-logo.png" width="24" style="width: 24x;"></li>
          <br>
          <br>
          <li>Receive exclusive offers in your mailbox</li>
          <br>
          <br>
          <li><input class="text" type="text" placeholder="Enter Your Email"><button type="button" style="color: white;" class="btn btn-warning">Subscribe</button></li>
        </ul>
      </div>
      <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
      <div class="row">
        <div class="col-3">
          <p>All rights Reserved Your Company, 2021</p>
        </div>
        <div class="col-8" style="text-align:right;">
          <p>All rights Reserved Your Company, 2021</p>
        </div>
      </div>
    <div class="clearfix"></div>
    </div>
    </div>
  </div>

  </body>
</html>
