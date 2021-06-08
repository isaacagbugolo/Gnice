    <div class="page-wrapper">
      <header class="header">
        <div class="header-top bg-primary text-uppercase">
          <div class="container">
            <div class="header-left">
              <div class="header-dropdown">
                <a href="#" class="pl-0"
                  ><img
                    src="<?php echo APP_URL;?>/assets/images/flags/en.png"
                    alt="England flag"
                  />ENG</a
                >
                <div class="header-menu">
                  <ul>
                    <li>
                      <a href="#"
                        ><img
                          src="<?php echo APP_URL;?>/assets/images/flags/en.png"
                          alt="England flag"
                        />ENG</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><img
                          src="<?php echo APP_URL;?>/assets/images/flags/fr.png"
                          alt="France flag"
                        />FRA</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- End .header-menu -->
              </div>
              <!-- End .header-dropown -->

              <div class="header-dropdown ml-4">
                <a href="#">USD</a>
                <div class="header-menu">
                  <ul>
                    <li><a href="#">EUR</a></li>
                    <li><a href="#">USD</a></li>
                  </ul>
                </div>
                <!-- End .header-menu -->
              </div>
              <!-- End .header-dropown -->
            </div>
            <!-- End .header-left -->

            <div class="header-right header-dropdowns ml-0 ml-sm-auto">
              <p class="top-message mb-0 mr-lg-5 pr-3 d-none d-sm-block">
                Welcome To Porto!
              </p>
              <div class="header-dropdown dropdown-expanded mr-3">
                <a href="#">Links</a>
                <div class="header-menu">
                  <ul>
                    <li><a href="my-account.html">Track Order </a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="category.html">Our Stores</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">Help &amp; FAQs</a></li>
                  </ul>
                </div>
                <!-- End .header-menu -->
              </div>
              <!-- End .header-dropown -->

              <span class="separator"></span>

              <div class="social-icons">
                <a
                  href="#"
                  class="social-icon social-instagram icon-instagram"
                  target="_blank"
                ></a>
                <a
                  href="#"
                  class="social-icon social-twitter icon-twitter"
                  target="_blank"
                ></a>
                <a
                  href="#"
                  class="social-icon social-facebook icon-facebook"
                  target="_blank"
                ></a>
              </div>
              <!-- End .social-icons -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle text-dark">
          <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0">
              <button class="mobile-menu-toggler mr-2" type="button">
                <i class="icon-menu"></i>
              </button>
              <a href="index.html" class="logo">
                <img
                  src="<?php echo APP_URL;?>/assets/images/logo.png"
                  alt="Porto Logo"
                />
              </a>
            </div>
            <!-- End .header-left -->

            <div class="header-right w-lg-max pl-2">
              <div
                class="
                  header-search
                  header-icon
                  header-search-inline
                  header-search-category
                  w-lg-max
                  mr-lg-4
                "
              >
                <a href="#" class="search-toggle" role="button"
                  ><i class="icon-search-3"></i
                ></a>
                <form action="#" method="get">
                  <div class="header-search-wrapper">
                    <input
                      type="search"
                      class="form-control"
                      name="q"
                      id="q"
                      placeholder="Search..."
                      required
                    />
                    <div class="select-custom">
                      <select id="cat" name="cat">
                        <option value="">All Categories</option>
                        <option value="4">Fashion</option>
                        <option value="12">- Women</option>
                        <option value="13">- Men</option>
                        <option value="66">- Jewellery</option>
                        <option value="67">- Kids Fashion</option>
                        <option value="5">Electronics</option>
                        <option value="21">- Smart TVs</option>
                        <option value="22">- Cameras</option>
                        <option value="63">- Games</option>
                        <option value="7">Home &amp; Garden</option>
                        <option value="11">Motors</option>
                        <option value="31">- Cars and Trucks</option>
                        <option value="32">
                          - Motorcycles &amp; Powersports
                        </option>
                        <option value="33">- Parts &amp; Accessories</option>
                        <option value="34">- Boats</option>
                        <option value="57">- Auto Tools &amp; Supplies</option>
                      </select>
                    </div>
                    <!-- End .select-custom -->
                    <button
                      class="btn p-0 icon-search-3"
                      type="submit"
                    ></button>
                  </div>
                  <!-- End .header-search-wrapper -->
                </form>
              </div>
              <!-- End .header-search -->

              <div
                class="
                  header-contact
                  d-none d-lg-flex
                  align-items-center
                  pr-xl-5
                  mr-3
                  ml-xl-5
                "
              >
                <i class="icon-phone-2"></i>
                <h6 class="pt-1 line-height-1">
                  Call us now<a
                    href="tel:#"
                    class="d-block text-dark ls-10 pt-1"
                    >+123 5678 890</a
                  >
                </h6>
              </div>
              <!-- End .header-contact -->

              <a href="login.html" class="header-icon login-link"
                ><i class="icon-user-2"></i
              ></a>

              <a href="#" class="header-icon"
                ><i class="icon-wishlist-2"></i
              ></a>

              <div class="dropdown cart-dropdown">
                <a
                  href="#"
                  class="dropdown-toggle dropdown-arrow"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-display="static"
                >
                  <i class="icon-shopping-cart"></i>
                  <span class="cart-count badge-circle">2</span>
                </a>

                <div class="dropdown-menu">
                  <div class="dropdownmenu-wrapper">
                    <div class="dropdown-cart-header">
                      <span>2 Items</span>

                      <a href="cart.html" class="float-right">View Cart</a>
                    </div>
                    <!-- End .dropdown-cart-header -->

                    <div class="dropdown-cart-products">
                      <div class="product">
                        <div class="product-details">
                          <h4 class="product-title">
                            <a href="product.html">Woman Ring</a>
                          </h4>

                          <span class="cart-product-info">
                            <span class="cart-product-qty">1</span>
                            x $99.00
                          </span>
                        </div>
                        <!-- End .product-details -->

                        <figure class="product-image-container">
                          <a href="product.html" class="product-image">
                            <img
                              src="<?php echo APP_URL;?>/assets/images/products/cart/product-1.jpg"
                              alt="product"
                              width="80"
                              height="80"
                            />
                          </a>
                          <a
                            href="#"
                            class="btn-remove icon-cancel"
                            title="Remove Product"
                          ></a>
                        </figure>
                      </div>
                      <!-- End .product -->

                      <div class="product">
                        <div class="product-details">
                          <h4 class="product-title">
                            <a href="product.html">Woman Necklace</a>
                          </h4>

                          <span class="cart-product-info">
                            <span class="cart-product-qty">1</span>
                            x $35.00
                          </span>
                        </div>
                        <!-- End .product-details -->

                        <figure class="product-image-container">
                          <a href="product.html" class="product-image">
                            <img
                              src="<?php echo APP_URL;?>/assets/images/products/cart/product-2.jpg"
                              alt="product"
                              width="80"
                              height="80"
                            />
                          </a>
                          <a
                            href="#"
                            class="btn-remove icon-cancel"
                            title="Remove Product"
                          ></a>
                        </figure>
                      </div>
                      <!-- End .product -->
                    </div>
                    <!-- End .cart-product -->

                    <div class="dropdown-cart-total">
                      <span>Total</span>

                      <span class="cart-total-price float-right">$134.00</span>
                    </div>
                    <!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                      <a
                        href="checkout-shipping.html"
                        class="btn btn-dark btn-block"
                        >Checkout</a
                      >
                    </div>
                    <!-- End .dropdown-cart-total -->
                  </div>
                  <!-- End .dropdownmenu-wrapper -->
                </div>
                <!-- End .dropdown-menu -->
              </div>
              <!-- End .dropdown -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        <div class="header-bottom sticky-header d-none d-lg-block">
          <div class="container">
            <nav class="main-nav w-100">
              <ul class="menu">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="category.html">Categories</a>
                  <div class="megamenu megamenu-fixed-width megamenu-3cols">
                    <div class="row">
                      <div class="col-lg-4">
                        <a href="#" class="nolink">VARIATION 1</a>
                        <ul class="submenu">
                          <li><a href="category.html">Fullwidth Banner</a></li>
                          <li>
                            <a href="category-banner-boxed-slider.html"
                              >Boxed Slider Banner</a
                            >
                          </li>
                          <li>
                            <a href="category-banner-boxed-image.html"
                              >Boxed Image Banner</a
                            >
                          </li>
                          <li><a href="category.html">Left Sidebar</a></li>
                          <li>
                            <a href="category-sidebar-right.html"
                              >Right Sidebar</a
                            >
                          </li>
                          <li>
                            <a href="category-flex-grid.html"
                              >Product Flex Grid</a
                            >
                          </li>
                          <li>
                            <a href="category-horizontal-filter1.html"
                              >Horizontal Filter1</a
                            >
                          </li>
                          <li>
                            <a href="category-horizontal-filter2.html"
                              >Horizontal Filter2</a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4">
                        <a href="#" class="nolink">VARIATION 2</a>
                        <ul class="submenu">
                          <li>
                            <a href="category-list.html"
                              >Product List Item Types</a
                            >
                          </li>
                          <li>
                            <a href="category-infinite-scroll.html"
                              >Ajax Infinite Scroll</a
                            >
                          </li>
                          <li>
                            <a href="category.html">3 Columns Products</a>
                          </li>
                          <li>
                            <a href="category-4col.html">4 Columns Products</a>
                          </li>
                          <li>
                            <a href="category-5col.html">5 Columns Products</a>
                          </li>
                          <li>
                            <a href="category-6col.html">6 Columns Products</a>
                          </li>
                          <li>
                            <a href="category-7col.html">7 Columns Products</a>
                          </li>
                          <li>
                            <a href="category-8col.html">8 Columns Products</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-4 p-0">
                        <img
                          src="<?php echo APP_URL;?>/assets/images/menu-banner.jpg"
                          alt="Menu banner"
                        />
                      </div>
                    </div>
                  </div>
                  <!-- End .megamenu -->
                </li>
                <li>
                  <a href="product.html">Products</a>
                  <div class="megamenu megamenu-fixed-width">
                    <div class="row">
                      <div class="col-lg-3">
                        <a href="#" class="nolink">Variations 1</a>
                        <ul class="submenu">
                          <li>
                            <a href="product.html">Horizontal Thumbnails</a>
                          </li>
                          <li>
                            <a href="product-full-width.html"
                              >Vertical Thumbnails</a
                            >
                          </li>
                          <li><a href="product.html">Inner Zoom</a></li>
                          <li>
                            <a href="product-addcart-sticky.html"
                              >Addtocart Sticky</a
                            >
                          </li>
                          <li>
                            <a href="product-sidebar-left.html"
                              >Accordion Tabs</a
                            >
                          </li>
                        </ul>
                      </div>
                      <!-- End .col-lg-4 -->
                      <div class="col-lg-3">
                        <a href="#" class="nolink">Variations 2</a>
                        <ul class="submenu">
                          <li>
                            <a href="product-sticky-tab.html">Sticky Tabs</a>
                          </li>
                          <li>
                            <a href="product-simple.html">Simple Product</a>
                          </li>
                          <li>
                            <a href="product-sidebar-left.html"
                              >With Left Sidebar</a
                            >
                          </li>
                        </ul>
                      </div>
                      <!-- End .col-lg-4 -->
                      <div class="col-lg-3">
                        <a href="#" class="nolink">Product Layout Types</a>
                        <ul class="submenu">
                          <li><a href="product.html">Default Layout</a></li>
                          <li>
                            <a href="product-extended-layout.html"
                              >Extended Layout</a
                            >
                          </li>
                          <li>
                            <a href="product-full-width.html"
                              >Full Width Layout</a
                            >
                          </li>
                          <li>
                            <a href="product-grid-layout.html"
                              >Grid Images Layout</a
                            >
                          </li>
                          <li>
                            <a href="product-sticky-both.html"
                              >Sticky Both Side Info</a
                            >
                          </li>
                          <li>
                            <a href="product-sticky-info.html"
                              >Sticky Right Side Info</a
                            >
                          </li>
                        </ul>
                      </div>
                      <!-- End .col-lg-4 -->

                      <div class="col-lg-3 p-0">
                        <img
                          src="<?php echo APP_URL;?>/assets/images/menu-bg.png"
                          alt="Menu banner"
                          class="product-promo"
                        />
                      </div>
                      <!-- End .col-lg-4 -->
                    </div>
                    <!-- End .row -->
                  </div>
                  <!-- End .megamenu -->
                </li>
                <li>
                  <a href="#">Pages</a>
                  <ul>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li>
                      <a href="#">Checkout</a>
                      <ul>
                        <li>
                          <a href="checkout-shipping.html">Checkout Shipping</a>
                        </li>
                        <li>
                          <a href="checkout-shipping-2.html"
                            >Checkout Shipping 2</a
                          >
                        </li>
                        <li>
                          <a href="checkout-review.html">Checkout Review</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Dashboard</a>
                      <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li>
                      <a href="#">Blog</a>
                      <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="single.html">Blog Post</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#" class="login-link">Login</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li class="float-right">
                  <a href="https://1.envato.market/DdLk5" target="_blank"
                    >Buy Porto!<span class="tip tip-new tip-top">New</span></a
                  >
                </li>
                <li class="float-right"><a href="#">Special Offer!</a></li>
              </ul>
            </nav>
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
      </header>
      <!-- End .header -->