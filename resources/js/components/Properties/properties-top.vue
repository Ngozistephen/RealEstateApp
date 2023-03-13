<template>
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
</template>





<style>
.ps-page--inner {
  padding-top: 32px;
}

.ps-page--inner .ps-page__heading {
  font-size: 30px;
  margin-bottom: 20px;
  line-height: 1em;
  font-weight: 500;
}

.ps-page--inner .breadcrumb {
  margin-bottom: 25px;
}

.ps-page--inner .ps-page__hero {
  padding-bottom: 50px;
}

.ps-page--inner .ps-page__hero img {
  width: 100%;
}

@media screen and (min-width: 768px) {
  .ps-page--inner .ps-page__heading {
    font-size: 36px;
    margin-bottom: 20px;
  }
}

@media screen and (min-width: 1024px) {
  .ps-page--inner {
    padding-top: 64px;
  }
  .ps-page--inner .ps-page__heading {
    font-size: 48px;
    margin-bottom: 20px;
  }
  .ps-page--inner .ps-page__hero {
    padding-bottom: 100px;
  }
  .ps-page--inner .breadcrumb {
    margin-bottom: 50px;
  }
}

.ps-page--projects .ps-form--projects-search {
  margin-bottom: 50px;
}

.ps-page--projects .ps-page__content {
  padding-bottom: var(--section-padding-bottom);
}

@media screen and (min-width: 1200px) {
  .ps-page--projects .container-fluid {
    padding: 0 40px;
  }
}

.ps-page--projects.ps-page--fullwidth .ps-page__header {
  padding-top: 40px;
}

.ps-form--projects-search .form-group--with-slider > label {
  display: flex;
  justify-content: flex-start;
  grid-column-gap: 10px;
  margin-bottom: 25px;
}

.ps-form--projects-search .form-group--with-slider > label i {
  display: block;
}

.ps-form--projects-search .ps-form__top-left {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border: 1px solid var(--color-border);
  border-radius: var(--border-radius-medium);
  overflow: hidden;
}

.ps-form--projects-search .ps-form__top-left .ps-btn {
  border-radius: 0;
  height: 100%;
}

.ps-form--projects-search .ps-form__top-right {
  grid-column-gap: 6px;
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.ps-form--projects-search .ps-form__items {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-column-gap: 40px;
}

.ps-form--projects-search .ps-form__top {
  display: grid;
  /* grid-template-columns: 200px 1fr 340px;
         grid-column-gap: 40px;*/
}

.ps-form--projects-search .ps-form__top .ps-btn {
  height: 52px;
}

.ps-form--projects-search .ps-form__top .ps-form__top-left .ps-btn {
  height: 50px;
}

.ps-form--projects-search .ps-form__top .ps-form__actions {
  grid-column-gap: 6px;
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.ps-form--projects-search .ps-form__top .ps-form__actions .ps-btn--gray {
  padding: 0 10px;
  color: var(--color-heading);
  background-color: transparent;
}

.ps-form--projects-search .ps-form__top .ps-form__actions .ps-btn--gray i {
  margin-left: 0.5em;
}

.ps-form--projects-search .ps-form__top .ps-form__actions .ps-btn--gray:hover {
  background-color: var(--color-bg-gray);
}

.ps-form--projects-search .ps-form__feature-items {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.ps-form--projects-search .ps-form__features > p {
  font-size: 14px;
  text-transform: uppercase;
  color: var(--color-heading);
  margin-bottom: 25px;
}

.ps-form--projects-search .ps-form__block {
  margin-bottom: 15px;
}

.ps-form--projects-search .ps-form__submit {
  display: flex;
  justify-content: center;
  align-items: center;
  grid-column-gap: 20px;
  padding-top: 25px;
}

.ps-form--projects-search .ps-form__submit .ps-btn {
  max-width: 200px;
}

.ps-form--projects-search .ps-form__bottom {
  display: none;
  padding-top: 30px;
}

@media screen and (min-width: 768px) {
  .ps-form--projects-search .ps-form__feature-items {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
  .ps-form--projects-search .ps-form__features > p {
    margin-bottom: 50px;
  }
  .ps-form--projects-search .ps-form__submit {
    padding-top: 50px;
    grid-column-gap: 40px;
  }
  .ps-form--projects-search .ps-form__submit .ps-btn {
    min-width: 230px;
    height: 50px;
  }
  .ps-form--projects-search .ps-form__block {
    margin-bottom: 35px;
  }
  .ps-form--projects-search .ps-form__bottom {
    padding-top: 60px;
  }
}

@media screen and (min-width: 1280px) {
  .ps-form--projects-search .ps-form__top-right {
    grid-template-columns: 1fr 340px;
    grid-column-gap: 40px;
  }
  .ps-form--projects-search .ps-form__top {
    grid-template-columns: 200px 1fr;
    grid-column-gap: 20px;
  }
}

@media screen and (min-width: 1440px) {
  .ps-form--projects-search .ps-form__top-right {
    grid-template-columns: 1fr 340px;
    grid-column-gap: 40px;
  }
  .ps-form--projects-search .ps-form__top {
    grid-template-columns: 200px 1fr;
    grid-column-gap: 40px;
  }
}

@media screen and (max-width: 1200px) {
  .ps-form--projects-search .ps-form__top-left {
    max-width: 200px;
  }
  .ps-form--projects-search .ps-form__items {
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    margin-bottom: 20px;
  }
  .ps-form--projects-search .ps-form__items .ps-form:first-child {
    grid-column: 1 / -1;
  }
  .ps-form--projects-search .ps-form__top-right {
    grid-template-columns: 3fr 1fr;
    grid-column-gap: 30px;
  }
  .ps-form--projects-search .ps-form__top-right .ps-form__actions {
    display: flex;
    flex-flow: column-reverse wrap;
    justify-content: flex-end;
    align-items: flex-end;
    grid-column-gap: 0px;
  }
  .ps-form--projects-search .ps-form__top-right .ps-form__actions > * {
    width: 100%;
  }
  .ps-form--projects-search .ps-form__top-right .ps-form__actions .ps-btn--gray {
    margin-top: 10px;
    background-color: hsla(var(--color-1st-h), var(--color-1st-s), var(--color-1st-l), 0.1);
  }
}

@media screen and (max-width: 480px) {
  .ps-form--projects-search .ps-form__top-right {
    grid-template-columns: 1fr;
  }
}


.breadcrumb {
  background-color: transparent;
}


</style>