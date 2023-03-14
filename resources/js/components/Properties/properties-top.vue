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
  margin-top: 100px;
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