<?php

/* default/index.html.twig */
class __TwigTemplate_9815b11365c4a64c5b55cfab01e0798ae5a45b90ea33e0fb5f23ed87d0343b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <body>
    <div id='fb-root'></div>
    <div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='nav-modal' role='dialog' tabindex='-1'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-body'>
            <button class='close' data-dismiss='modal' type='button'>X</button>
            <div class='container'>
              <div class='row'>
                <div class='col-md-2 col-md-offset-1 col-xs-6'>
                  <ul class='modal__navlist'>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' data-dismiss='modal' href='/features'>Features</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='http://support.fluc.com' target='_blank'>Support</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='/business'>Business</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='/drivers'>Drivers</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='https://itunes.apple.com/us/app/fluc-food-delivery/id670660760'>iOS App</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='https://medium.com/@fluc'>Blog</a>
                    </li>
                  </ul>
                </div>
                <div class='col-md-3 col-xs-6'>
                  <ul class='modal__navlist modal__navlist--last'>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='/terms'>Terms</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='/privacy'>Privacy</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='https://www.instagram.com/letsfluc' target='_blank'>Instagram</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='https://www.facebook.com/fluc' target='_blank'>Facebook</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='https://www.twitter.com/letsfluc' target='_blank'>Twitter</a>
                    </li>
                    <li class='modal__navitem'>
                      <a class='modal__navlink js--hide-menu' href='tel:18553582669'>Call Us</a>
                    </li>
                  </ul>
                </div>
                <div class='col-md-6 col-xs-12'>
                  <div class='modal__deets'>
                    <h1 class='ir' id='modal__logo'>
                      <a class='js--hide-menu' href='/'>Food Lover United Co.</a>
                    </h1>
                    <p>
                      With scheduling, realtime ETA's, live tracking, group ordering and split the bill - Fluc is the world leader in food ordering & delivery.
                    </p>
                    <p>
                      Try us. 1st delivery is free.
                    </p>
                    <p>
                      <a class='button button__modalnav button__green' href='/signup'>Sign Up</a>
                    </p>
                    <p>
                      <a class='button button__modalnav button__blue' href='/signin'>Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class='nav__mobile'>
      <div class='container'>
        <div class='row'>
          <div class='col-xs-6'>
            <h1 class='ir' id='nav__logo--mobile'>
              <a class='js__link' href='/'>Food Lover United Co.</a>
            </h1>
          </div>
          <div class='col-xs-6'>
            <div class='hamburger'>
              <button class='hamburger__meal' data-target='#nav-modal' data-toggle='modal'>
                <span class='hamburger__content hamburger__top'></span>
                <span class='hamburger__content hamburger__meat'></span>
                <span class='hamburger__content hamburger__top'></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <nav class='nav nav__top nav__gradient-60' id='nav'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-3'>
            <h1 class='ir' id='nav__logo'>
              <a class='js__link active' href='/'>Food Lover United Co.</a>
            </h1>
          </div>
          <div class='col-md-9'>
            <ul class='nav__links nav__links--account'>
              <li class='nav__list-item no-ajax'>
                <div class='hamburger'>
                  <button class='hamburger__meal' data-target='#nav-modal' data-toggle='modal'>
                    <span class='hamburger__content hamburger__top'></span>
                    <span class='hamburger__content hamburger__meat'></span>
                    <span class='hamburger__content hamburger__top'></span>
                  </button>
                </div>
              </li>
            </ul>
            <ul class='nav__links nav__links--account'>
              <li class='nav__list-item no-ajaxy'>
                <a class='nav__list-link nav__list-link--login' href='/signin'>Sign In</a>
              </li>
              <li class='nav__list-item no-ajaxy'>
                <a class='nav__list-link nav__list-link--register' href='/signup'>Sign Up</a>
              </li>
            </ul>
            <ul class='nav__links'>
              <li class='nav__list-item js__link'>
                <a class='nav__list-link' href='/features'>
                  <span>Features</span>
                </a>
              </li>
              <li class='nav__list-item js__link'>
                <a class='nav__list-link' href='/business'>
                  <span>Business</span>
                </a>
              </li>
              <li class='nav__list-item js__link'>
                <a class='nav__list-link' href='/drivers'>
                  <span>Drivers</span>
                </a>
              </li>
              <li class='nav__list-item js__link'>
                <a class='nav__list-link' href='/about'>
                  <span>About</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <div id='loader'>
            <div id='spinwheel'></div>
          </div>
        </div>
      </div>
    </div>
    <div id='content__holder'>
      <header class='header header__home js-homemast' style='height:490px;max-height:1170px'>
       <div style=\"display: block; background-image: url(&quot;https://assets-fluc-com.s3.amazonaws.com/assets/c305f24190f031387a5e861b260c3a578eb3e5af/img/external/content/home/masthead--pancakes.jpg&quot;); background-position: 50% 0px; opacity: 0.7;\" class=\"hero-container__img hero-container__img--home scroll__fade lazy\" data-original=\"https://assets-fluc-com.s3.amazonaws.com/assets/c305f24190f031387a5e861b260c3a578eb3e5af/img/external/content/home/masthead--pancakes.jpg\" data-speed=\"-1\" data-type=\"background\"></div>
        <div class='container hero-container__text'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='headline headline__large js-ajaxed'>
                <div class='headline__cell'>
                  <h2>
                    Your favorite local
                    <br>
                    restaurants now deliver.
                  </h2>
                  <p>
                    1st Delivery Free. No Minimums. Awesome experience.
                  </p>
                  <span class='input__form col-md-8 col-md-offset-2'>
                    <div class='form__row form-group index-map'>
                      <div class='hide' id='mini-map'></div>
                      <input class='form__input input__white form-control' id='autocomplete' placeholder='Enter your delivery address or zipcode ...' type='text'>
                    </div>
                    <a class='button button__hero button__green discover-btn' href='/discover'>Discover</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='chevron chevron__home'></div>
      </header>
      <section class='tiles'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
              <div class='subtitle subtitle__dark'>
                <h3>Discover great food nearby.</h3>
                <p>
                  We take all your favorite, popular and local restaurants and enable them to deliver directly to you. With realtime tracking, live delivery times, group ordering and split the bill - we are the world leaders in restaurant food delivery.
                </p>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-6'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Breakfast</span>
                        <span class='tiles__text--desc'>Whether it's fresh pancakes or a nicely brewed coffee - we got you.</span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$12</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--1'></div>
              </div>
            </div>
            <div class='col-md-3'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Burgers</span>
                        <span class='tiles__text--desc'>
                          Get fresh, tasty burgers.
                        </span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$8</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--2'></div>
              </div>
            </div>
            <div class='col-md-3'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Ice-Cream</span>
                        <span class='tiles__text--desc'>Ice-cold ice-cream now.</span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$4</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--3'></div>
              </div>
            </div>
          </div>
          <!-- /row -->
          <div class='row'>
            <div class='col-md-3'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Italian</span>
                        <span class='tiles__text--desc'>Wholesome pasta to you.</span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$14</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--4'></div>
              </div>
            </div>
            <div class='col-md-3'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Healthy</span>
                        <span class='tiles__text--desc'>Vegetable infusions.</span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$11</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--5'></div>
              </div>
            </div>
            <div class='col-md-6'>
              <div class='tiles__tile'>
                <div class='tiles__blurred-wrap'>
                  <div class='tiles__text'>
                    <a href='/discover'>
                      <span class='tiles__text-wrap'>
                        <span class='tiles__text--title'>Regular Deals & Specials</span>
                        <span class='tiles__text--desc'>Get daily deals, specials and promotions by ordering now.</span>
                        <span class='circle__white'>
                          <span class='circle__text'>\$7</span>
                        </span>
                        <span class='circle__green'></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class='tiles__img tiles__img--6'></div>
              </div>
            </div>
          </div>
          <!-- /row -->
          <div class='row'>
            <div class='col-md-12'>
              <div class='alone__btn'>
                <a class='button button__reg button__blue' href='/discover'>View More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
 </div>
</body>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
