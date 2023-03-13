<template>
   <div>
    <properties-top></properties-top>
    <footer-page></footer-page>
    <navigation-page></navigation-page> 

    <div class="ps-drawer" id="drawer-menu">
        <div class="ps-drawer__top">
            <div class="ps-drawer__heading">Menu</div><a class="ps-drawer__close" href="#"><i class="icon-cross"></i></a>
        </div>
        <div class="ps-drawer__bottom">
            <ul class="menu--mobile">
                <li class="menu-item-has-children has-mega-menu"><a href="properties.html">Properties</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__wrapper" data-columns="4">
                            <div class="mega-menu__column">
                                <h4>Grid View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-2-columns.html">Properties with 2 columns</a>
                                    </li>
                                    <li><a href="properties-3-columns.html">Properties with 3 columns</a>
                                    </li>
                                    <li><a href="properties-4-columns.html">Properties with 4 columns</a>
                                    </li>
                                    <li><a href="properties-5-columns.html">Properties with 5 columns</a>
                                    </li>
                                    <li><a href="properties-with-sidebar-2-columns.html">With Sidebar 2 columns</a>
                                    </li>
                                    <li><a href="properties.html">With Sidebar 3 columns</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>List View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-list.html">Properties List</a>
                                    </li>
                                    <li><a href="properties-list-without-sidebar.html">Properties List Without Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Map View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-list-with-map.html">Properties List With Map</a>
                                    </li>
                                    <li><a href="properties-grid-with-map.html">Properties Grid With Map</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Single Property<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="single-property.html">Single Property Default</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid</a>
                        </li>
                        <li><a href="blog-list.html">Blog List</a>
                        </li>
                        <li><a href="post-detail.html">Blog Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__wrapper" data-columns="5">
                            <div class="mega-menu__column">
                                <h4>Homepages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="index.html">Homepage One</a>
                                    </li>
                                    <li><a href="homepage-two.html">Homepage Two</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Blog Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="blog-grid.html">Blog Grid</a>
                                    </li>
                                    <li><a href="blog-list.html">Blog List</a>
                                    </li>
                                    <li><a href="post-detail.html">Blog detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Careers<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="career-listing.html">Career Listing</a>
                                    </li>
                                    <li><a href="career-detail.html">Carrer Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Other pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="about-us.html">About Us</a>
                                    </li>
                                    <li><a href="contact-us.html">Contact Us</a>
                                    </li>
                                    <li><a href="our-team.html">Our Team</a>
                                    </li>
                                    <li><a href="404-page.html">Page 404</a>
                                    </li>
                                    <li><a href="signin.html">Sign In</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>My Account<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="profile.html">Profile</a>
                                    </li>
                                    <li><a href="profile.html">My Properties</a>
                                    </li>
                                    <li><a href="profile.html">Submision</a>
                                    </li>
                                    <li><a href="profile.html">My Favorite</a>
                                    </li>
                                    <li><a href="profile.html">Save Search</a>
                                    </li>
                                    <li><a href="profile.html">Change password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="agents.html">Agents</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="back2top"><i class="lnil lnil-arrow-up"></i></div>
    <div class="ps-dialog ps-dialog--search" id="search-extra-dialog">
        <div class="ps-dialog__wrapper">
            <form class="ps-form--projects-search ps-form--projects-search-extra" action="https://nouthemes.net/html/finderland/index.html" method="get">
                <div class="ps-form__top">
                    <button class="ps-btn ps-form__type-toggle active">Sell</button>
                    <button class="ps-btn ps-form__type-toggle">Rent</button>
                </div>
                <div class="ps-form__extra">
                    <div class="ps-form__fields">
                        <div class="ps-form__block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon"><i class="lnil lnil-map-marker ps-form__icon"></i>
                                            <input class="form-control" type="text" placeholder="Search for city, neighborhood..." />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-map ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Location</option>
                                                <option value="Chicago">Chicago</option>
                                                <option value="new_york">New York</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-apartment ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Property Type</option>
                                                <option value="the_grounds">The Grounds</option>
                                                <option value="private-house">Private House</option>
                                                <option value="aparments">Aparments</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-bolt ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Status</option>
                                                <option value="sale">Sell</option>
                                                <option value="rent">Rent</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-hospital-bed ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Bathroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="icon icon-bathtub ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Bedroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline">
                                            <input class="form-control" type="text" placeholder=" " />
                                            <label>Property ID</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-form__block row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-group--with-slider">
                                    <label><i class="lnil lnil-coin"></i>Price Range (US Dollar)</label>
                                    <div class="ps-form--slider">
                                        <div class="ps-form__range">
                                            <div class="ps-nouislider" id="dialog_price_range"></div>
                                        </div>
                                        <p class="ps-form__attributes"><span>From :</span><strong class="ps-form__attribute ps-form__min"><span class="ps-form__unit">$</span><span class="value">0</span></strong>-<strong class="ps-form__attribute ps-form__max"><span class="ps-form__unit">$</span><span class="value">0</span></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group form-group--with-slider">
                                    <label><i class="lnil lnil-size"></i>Land Area (SQFT)</label>
                                    <div class="ps-form--slider">
                                        <div class="ps-form__range">
                                            <div id="dialog_land_area_range"></div>
                                        </div>
                                        <p class="ps-form__attributes"><span>From :</span><strong class="ps-form__attribute ps-form__min"><span class="value">0</span><span class="ps-form__unit">sqft</span></strong>-<strong class="ps-form__attribute ps-form__max"><span class="value">0</span><span class="ps-form__unit">sqft</span></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-form__block">
                            <div class="ps-form__features">
                                <p>Other Feature</p>
                                <div class="ps-form__feature-items">
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-0" name="feature" checked="checked" />
                                            <label for="dialog-feature-0">Air Condition</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-1" name="feature" checked="checked" />
                                            <label for="dialog-feature-1">Gym</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-2" name="feature" checked="checked" />
                                            <label for="dialog-feature-2">Refrigerator</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-3" name="feature" checked="checked" />
                                            <label for="dialog-feature-3">Doorman</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-4" name="feature" checked="checked" />
                                            <label for="dialog-feature-4">Barbeque</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-5" name="feature" checked="checked" />
                                            <label for="dialog-feature-5">Microwave</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-6" name="feature" checked="checked" />
                                            <label for="dialog-feature-6">Stunning Views</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-7" name="feature" checked="checked" />
                                            <label for="dialog-feature-7">Central Heating</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-8" name="feature" checked="checked" />
                                            <label for="dialog-feature-8">Dryer</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-9" name="feature" checked="checked" />
                                            <label for="dialog-feature-9">Laudry</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-10" name="feature" checked="checked" />
                                            <label for="dialog-feature-10">Lawn</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-11" name="feature" checked="checked" />
                                            <label for="dialog-feature-11">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-12" name="feature" checked="checked" />
                                            <label for="dialog-feature-12">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-13" name="feature" checked="checked" />
                                            <label for="dialog-feature-13">Waterfront</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-14" name="feature" checked="checked" />
                                            <label for="dialog-feature-14">Parking</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-15" name="feature" checked="checked" />
                                            <label for="dialog-feature-15">TV Cable</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__actions">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <button class="ps-btn ps-btn--fullwidth ps-btn--gray" id="close-search-extra">Cancel</button>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button class="ps-btn ps-btn--fullwidth ps-btn--gray" type="reset">Reset</button>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button class="ps-btn ps-btn--fullwidth" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="ps-site-overlay"></div>

   </div>

  
</template>

<script>

    import PropertiesTop from './properties-top.vue';
    import NavigationPage from '../NavigationPage.vue';
    import FooterPage from '../FooterPage.vue';

    export default{


        components: {
            NavigationPage,
            FooterPage,
            PropertiesTop

        }
     }
</script>

<style>


</style>