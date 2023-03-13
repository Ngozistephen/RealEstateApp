<template>
   <div>
    <div class="ps-page--inner ps-page--projects">
        <div class="ps-page__header">
            <div class="container">
                <form class="ps-form--projects-search" action="https://nouthemes.net/html/finderland/index.html" method="get">
                    <div class="ps-form__top">
                        <div class="ps-form__top-left">
                            <button class="ps-btn">Sell</button>
                            <button class="ps-btn ps-btn--gray">Rent</button>
                        </div>
                        <div class="ps-form__top-right">
                            <div class="ps-form__items">
                                <div class="ps-form underline with-icon"><i class="lnil lnil-map-marker ps-form__icon"></i>
                                    <input class="form-control" type="text" placeholder="Search for city, neighborhood..." />
                                </div>
                                <div class="ps-form underline with-icon select"><i class="lnil lnil-map ps-form__icon"></i>
                                    <select class="form-control">
                                        <option value="placeholder">Location</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="new_york">New York</option>
                                    </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                </div>
                                <div class="ps-form underline with-icon select"><i class="lnil lnil-apartment ps-form__icon"></i>
                                    <select class="form-control">
                                        <option value="placeholder">Property Type</option>
                                        <option value="the_grounds">The Grounds</option>
                                        <option value="private-house">Private House</option>
                                        <option value="aparments">Aparments</option>
                                    </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                </div>
                            </div>
                            <div class="ps-form__actions"><a class="ps-form__toggle ps-btn ps-btn--gray ps-form__toggle-btn" href="#">Advance Search<i class="lnil lnil-chevron-down"></i></a>
                                <button class="ps-btn">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__bottom">
                        <div class="ps-form__block">
                            <div class="row">
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
                                            <div class="ps-nouislider" id="price_range"></div>
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
                                            <div id="land_area_range"></div>
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
                                            <input class="form-control" type="checkbox" id="feature-0" name="feature" checked="checked" />
                                            <label for="feature-0">Air Condition</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-1" name="feature" checked="checked" />
                                            <label for="feature-1">Gym</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-2" name="feature" checked="checked" />
                                            <label for="feature-2">Refrigerator</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-3" name="feature" checked="checked" />
                                            <label for="feature-3">Doorman</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-4" name="feature" checked="checked" />
                                            <label for="feature-4">Barbeque</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-5" name="feature" checked="checked" />
                                            <label for="feature-5">Microwave</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-6" name="feature" checked="checked" />
                                            <label for="feature-6">Stunning Views</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-7" name="feature" checked="checked" />
                                            <label for="feature-7">Central Heating</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-8" name="feature" checked="checked" />
                                            <label for="feature-8">Dryer</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-9" name="feature" checked="checked" />
                                            <label for="feature-9">Laudry</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-10" name="feature" checked="checked" />
                                            <label for="feature-10">Lawn</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-11" name="feature" checked="checked" />
                                            <label for="feature-11">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-12" name="feature" checked="checked" />
                                            <label for="feature-12">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-13" name="feature" checked="checked" />
                                            <label for="feature-13">Waterfront</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-14" name="feature" checked="checked" />
                                            <label for="feature-14">Parking</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="feature-15" name="feature" checked="checked" />
                                            <label for="feature-15">TV Cable</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-form__submit">
                            <button class="ps-btn ps-btn--gray" type="reset">Reset All</button>
                            <button class="ps-btn ps-btn--gray" type="submit">Save Search</button>
                        </div>
                    </div>
                </form>
                <h1 class="ps-page__heading">Properties In California</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="properties.html">Properties</a></li>
                    <li>Properties With Sidebar</li>
                </ul>
            </div>
        </div>
        <div class="ps-page__content">
            <div class="container">
                <div class="ps-projects ps-projects--with-sidebar">
                    <div class="ps-projects__left">
                        <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Property Types</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-0" name="type" />
                                        <label for="type-0">The Grounds<span>628</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-1" name="type" />
                                        <label for="type-1">Private Houses<span>1250</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-2" name="type" />
                                        <label for="type-2">Apartments<span>950</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-3" name="type" />
                                        <label for="type-3">Detached Villas<span>95</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-4" name="type" />
                                        <label for="type-4">Duplex Villas<span>175</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-5" name="type" />
                                        <label for="type-5">Townhouses<span>2539</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-6" name="type" />
                                        <label for="type-6">Warehouses<span>205</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-7" name="type" />
                                        <label for="type-7">Shophouses<span>129</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-8" name="type" />
                                        <label for="type-8">Farms<span>92</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-9" name="type" />
                                        <label for="type-9">Motels<span>119</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-10" name="type" />
                                        <label for="type-10">Hotels &amp; Resorts<span>998</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="type-11" name="type" />
                                        <label for="type-11">Office<span>184</span></label>
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
                        <aside class="ps-widget ps-widget--project">
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
                        </aside>
                        <aside class="ps-widget ps-widget--project">
                            <h4 class="ps-widget__heading">Location</h4>
                            <div class="ps-widget__content">
                                <div class="ps-widget__attributes">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-0" name="location" />
                                        <label for="location-0">Los Angeles<span>151</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-1" name="location" />
                                        <label for="location-1">California<span>262</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-2" name="location" />
                                        <label for="location-2">Miami<span>99</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-3" name="location" />
                                        <label for="location-3">San Jose<span>315</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-4" name="location" />
                                        <label for="location-4">Wasington<span>923</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-5" name="location" />
                                        <label for="location-5">New York<span>105</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-6" name="location" />
                                        <label for="location-6">Mahattan<span>21</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-7" name="location" />
                                        <label for="location-7">Capri<span>11</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-8" name="location" />
                                        <label for="location-8">Metropolis<span>9</span></label>
                                    </div>
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" id="location-9" name="location" />
                                        <label for="location-9">Oakland<span>2</span></label>
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
    </div>
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

    import NavigationPage from '../NavigationPage.vue';
    import FooterPage from '../FooterPage.vue';

    export default{


        components: {
            NavigationPage,
            FooterPage

        }
     }
</script>