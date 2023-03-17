<template>
   
    <properties-top></properties-top> 
    <navigation-page></navigation-page> 

    <div class="ps-drawer" id="drawer-menu">
        <div class="ps-drawer__top">
            <div class="ps-drawer__heading">Menu</div><a class="ps-drawer__close" href="#"><i class="icon-cross"></i></a>
        </div>

    </div>
    <div id="back2top"><i class="lnil lnil-arrow-up"></i></div>
    <div class="ps-dialog ps-dialog--search" id="search-extra-dialog">
        
    </div>
    <div class="ps-page__content">
            <div class="container">
                <div class="ps-projects ps-projects--with-sidebar">
                    <div class="ps-projects__left">
                        <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Property Types</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div  v-for="property_type in property_types" class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="{{ property_type.id }}" name="type" />
                                        <label for="{{ property_type.id }}">{{ property_type.name }}<span>628</span></label>
                                    </div>
                                 
                                </div>
                            </div>
                        </aside>
                        <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Price</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-0" name="price" />
                                        <label for="price-0">Under $500<span>1245</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-1" name="price" />
                                        <label for="price-1">$500 - $1K<span>923</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-2" name="price" />
                                        <label for="price-2">$1K - $2K<span>334</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-3" name="price" />
                                        <label for="price-3">$2K - $5K<span>612</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-4" name="price" />
                                        <label for="price-4">$5K - $10K<span>501</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-5" name="price" />
                                        <label for="price-5">$10K - $100K<span>184</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-6" name="price" />
                                        <label for="price-6">$100K - $1M<span>184</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-7" name="price" />
                                        <label for="price-7">$1M - $5M<span>92</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="price-8" name="price" />
                                        <label for="price-8">Over $5M<span>11</span></label>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Land Area</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-0" name="area" />
                                        <label for="area-0">Under 100 sqft<span>2450</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-1" name="area" />
                                        <label for="area-1">100 sqft - 500 sqft<span>2450</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-2" name="area" />
                                        <label for="area-2">500 sqft - 1000 sqft<span>992</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-3" name="area" />
                                        <label for="area-3">1000 sqft - 5000 sqft<span>123</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-4" name="area" />
                                        <label for="area-4">5000 sqft - 10,000 sqft<span>92</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="area-5" name="area" />
                                        <label for="area-5">Over 10,000 sqft<span>92</span></label>
                                    </div>
                                </div>
                            </div>
                        </aside> -->
                        <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Location</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div v-for="location in locations"  class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="{{ location.id }}" name="location" />
                                        <label for="{{ location.id }}">{{ location.name }}<span>151</span></label>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="ps-projects__right">
                        <div class="ps-projects__top">
                            <div class="ps-projects__top-left">
                                <p><strong>7,120</strong> Properties found</p>
                            </div>
                            <div class="ps-projects__top-right">
                                <div class="ps-projects__sorting">
                                    <div class="ps-form select"><i class="lnil lnil-chevron-down"></i>
                                        <select class="form-control">
                                            <option>Sort by Newest</option>
                                            <option>Sort by Oldest</option>
                                            <option>Sort by Name A-Z</option>
                                            <option>Sort by Name Z-A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ps-projects__layout-switchers"><a class="active" href="properties.html"><i class="lnil lnil-thumbnail"></i></a><a href="properties-list.html"><i class="lnil lnil-list"></i></a><a href="properties-grid-with-map.html"><i class="lnil lnil-map"></i></a></div>
                            </div>
                        </div>
                        <div class="ps-projects__items ps-grid" data-columns="3">
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/1.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">David Villa</a></h4>
                                        <p class="ps-project__address">3 Industrial Road, Boston, MA 5502, USA</p>
                                        <p class="ps-project__price"><strong>$7,250</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>Robertson</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>7/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>250 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/2.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Lisa Urban House</a></h4>
                                        <p class="ps-project__address">5300 Lakeside, London, 2240, UK</p>
                                        <p class="ps-project__price"><strong>$24,500</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>Ben Jr</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>2/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>1250 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>4 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>3 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/3.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">75A Cera Residence</a></h4>
                                        <p class="ps-project__address">75A Cera Residence, Brooklyn, NY 53207, USA</p>
                                        <p class="ps-project__price"><strong>$54,500</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>1/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>4250 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>6 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>4 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/4.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">123 Brooklyn Str, Motel</a></h4>
                                        <p class="ps-project__address">123 Brooklyn Str, NY 19204, USA</p>
                                        <p class="ps-project__price"><strong>$1,250</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>US Property</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>26/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>515 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>2 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>3 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/5.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Dmitry Private House</a></h4>
                                        <p class="ps-project__address">5300 Lakeside, London, 2240, UK</p>
                                        <p class="ps-project__price"><strong>$1,75,000</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>11/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>560 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>4 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>3 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/6.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Block Office 365</a></h4>
                                        <p class="ps-project__address">75A Cera Residence, Brooklyn, NY 53207, USA</p>
                                        <p class="ps-project__price"><strong>$2,000</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>11/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>160 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>2 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>1 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/7.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Harry Super Villa</a></h4>
                                        <p class="ps-project__address">Elizaberth Royal Residence, CA 19204, USA</p>
                                        <p class="ps-project__price"><strong>$1,02,00,000</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>24000 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>8 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>5 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/8.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">GoBird Small Office 25m2</a></h4>
                                        <p class="ps-project__address">243 Lakeside, London, 2240, UK</p>
                                        <p class="ps-project__price"><strong>$5,700</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>US Property</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>24000 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>2 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>3 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/9.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Indochina Private House</a></h4>
                                        <p class="ps-project__address">577C Beach Side, Miami, USA</p>
                                        <p class="ps-project__price"><strong>$5,90,000</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>860 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/10.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Santorina Blue Homestay</a></h4>
                                        <p class="ps-project__address">192 King Avenue, Mahattan, FL 5603, USA</p>
                                        <p class="ps-project__price"><strong>$1,350</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>ACA Group</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>160 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/11.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Boutique 292 King Ave</a></h4>
                                        <p class="ps-project__address">292 King Avenue, Mahattan, FL 5603, USA</p>
                                        <p class="ps-project__price"><strong>$2,500</strong> / <span>month</span>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>Robertson</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Rent</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>64 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-grid__item">
                                <div class="ps-project ps-project--grid">
                                    <div class="ps-project__thumbnail">
                                        <div class="ps-project__image"><img src="img/projects/12.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                        <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                        <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                                    </div>
                                    <div class="ps-project__content">
                                        <h4 class="ps-project__name"><a href="single-property.html">Townhouse 56 Beverly Hill</a></h4>
                                        <p class="ps-project__address">56 Beverly Hill, Mahattan, FL 5603, USA</p>
                                        <p class="ps-project__price"><strong>$2,45,000</strong>
                                        </p>
                                        <div class="ps-project__meta">
                                            <figure>
                                                <figcaption>Realtors</figcaption>
                                                <p>US Property</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Status</figcaption>
                                                <p>For Sell</p>
                                            </figure>
                                            <figure>
                                                <figcaption>Time</figcaption>
                                                <p>20/4/2021</p>
                                            </figure>
                                        </div>
                                        <div class="ps-project__services">
                                            <p><span><i class="lnil lnil-size"></i>64 Sqft</span></p>
                                            <p><span><i class="lnil lnil-hospital-bed"></i>4 Rooms</span></p>
                                            <p><span><i class="icon icon-bathtub"></i>4 Rooms</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-projects__pagination">
                            <ul class="ps-pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="lnil lnil-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

   
   <footer-page></footer-page>
  
</template>

<script>

    import PropertiesTop from './properties-top.vue';
    import NavigationPage from '../NavigationPage.vue';
    import FooterPage from '../FooterPage.vue';

    import useLocations from '../../composables/locations.js';
    import useProperty_types from '../../composables/property_types.js';
    import { onMounted } from 'vue';

    export default{ 
        setup () {

            const { locations, getLocations } = useLocations()
            const { property_types , getProperty_types } = useProperty_types()

            onMounted( () => {
                getLocations()
                getProperty_types() 
            })

            return { locations, property_types }
        },

        components: {
            NavigationPage,
            FooterPage,
            PropertiesTop

        }
     }
</script>

<style>


</style>